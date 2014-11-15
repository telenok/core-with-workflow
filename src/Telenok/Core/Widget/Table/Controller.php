<?php

namespace Telenok\Core\Widget\Table;

class Controller extends \Telenok\Core\Interfaces\Widget\Controller {

	protected $key = 'table';
	protected $parent = 'standart';
	protected $backendView = "core::widget.table.widget-backend";
	protected $frontendView = "core::widget.table.widget-frontend";
	protected $row = 2;
	protected $col = 2;

	public function getContent(\Illuminate\Support\Collection $structure = null)
	{ 
		$content = [];

		$listWidget = \App::make('telenok.config')->getWidget();

        if ($structure === null)
        {
            if ($m = $this->getWidgetModel())
            {
                $structure = $m->structure;
            }
            else 
            {
                return;
            }
        }

        if ($structure->has('cache_time'))
        {
            $this->setCacheTime($structure->get('cache_time'));
        }

        $containerIds = $structure->get('containerIds', []);

        if (!$structure->has('row'))
        {
            $structure->put('row', $this->row);
        }

        if (!$structure->has('col'))
        {
            $structure->put('col', $this->col);
        }

        $rows = [];

        for ($r = 0; $r < $structure->get('row'); $r++)
        {
            for ($c = 0; $c < $structure->get('col'); $c++)
            {
                $container_id = $containerIds["$r:$c"];

                $rows[$r][$c] = ['container_id' => $containerIds["$r:$c"], 'content' => $this->getContainerContent($container_id)];
            }
        }
        
		return \View::make($this->getFronendView(), [
                            'widget' => $this->getWidgetModel(),
                            'id' => $this->getWidgetModel()->getKey(),
                            'key' => $this->getKey(),
                            'rows' => $rows,
                            'controller' => $this,
                            'frontEndController' => $this->getFrontEndController(),
                        ])->render();
	}

	public function getContainerContent($container_id = "")
	{
		$content = [];

		$wop = \Telenok\Web\WidgetOnPage::where('container', $container_id)->orderBy('order')->get();

		$widgetConfig = \App::make('telenok.config')->getWidget();

		$wop->each(function($w) use (&$content, $widgetConfig)
		{
            $content[] = $widgetConfig->get($w->key)->setWidgetModel($w)->setFrontEndController($this->getFrontEndController())->getContent();
		});

		return $content;
	}

	public function getInsertContent($id = 0)
	{
		$widgetOnPage = \Telenok\Web\WidgetOnPage::findOrFail($id);

		if ($widgetOnPage->isWidgetLink())
		{
			$this->backendView = "core::module.web-page-constructor.widget-backend";

			return parent::getInsertContent($id);
		}

		$structure = $widgetOnPage->structure; 

		if (!$structure->has('row'))
		{
			$structure->put('row', $this->row);
		}

		if (!$structure->has('col'))
		{
			$structure->put('col', $this->col);
		}

		if (!$structure->has('containerIds') || (count($structure->get('containerIds', [])) < $structure->get('col') * $structure->get('row') ))
		{
			$ids = [];

			for ($row = 0; $row < $structure->get('row'); $row++)
			{
				for ($col = 0; $col < $structure->get('col'); $col++)
				{
					$ids["$row:$col"] = isset($ids["$row:$col"]) ? $ids["$row:$col"] : 'container-' . $widgetOnPage->id . '-' . $row . '-' . $col;
				}
			}

			$structure->put('containerIds', $ids);
			$widgetOnPage->structure = $structure->all();
			$widgetOnPage->save();
		}

		$rows = [];
		$containerIds = $structure->get('containerIds');

		for ($r = 0; $r < $structure->get('row'); $r++)
		{
			for ($c = 0; $c < $structure->get('col'); $c++)
			{
				$container_id = $containerIds["$r:$c"];

				$rows[$r][$c] = ['container_id' => $containerIds["$r:$c"], 'content' => $this->getContainerInsertContent($container_id)];
			}
		}

		return \View::make($this->getBackendView(), [
                            'header' => $this->LL('header'),
                            'title' => $widgetOnPage->title,
                            'id' => $widgetOnPage->getKey(),
                            'key' => $this->getKey(),
                            'rows' => $rows,
                            'widgetOnPage' => $widgetOnPage,
                        ])->render();
	}

	public function getContainerInsertContent($container_id = "")
	{
		$content = [];

		$wop = \Telenok\Web\WidgetOnPage::where('container', $container_id)->orderBy('order')->get();

		$widgetConfig = \App::make('telenok.config')->getWidget();

		$wop->each(function($w) use (&$content, $widgetConfig)
		{
            $content[$w->container] = $widgetConfig->get($w->key)->getInsertContent($w->getKey());
		});

		return $content;
	}

	public function insertFromBufferOnPage($languageId = 0, $pageId = 0, $key = '', $id = 0, $container = '', $order = 0, $bufferId = 0)
	{
		$widgetOnPage = null;
		
		
		\DB::transaction(function() use ($languageId, $pageId, $key, $id, $container, $order, &$widgetOnPage, $bufferId)
		{
			$widgetOnPage = \Telenok\Web\WidgetOnPage::findOrFail($id);
			$buffer = \Telenok\System\Buffer::findOrFail($bufferId);

			if ($buffer->key == 'cut')
			{
				$widgetOnPage->storeOrUpdate([
					"container" => $container,
					"order" => $order,
					"key" => $key,
				]);

				$bufferWidget = \Telenok\System\Buffer::find($bufferId);

				if ($bufferWidget)
				{
					$bufferWidget->forceDelete();
				}
			}
			else if ($buffer->key == 'copy')
			{
				$widgetOnPage = \Telenok\Web\WidgetOnPage::findOrFail($id)->replicate();
				$widgetOnPage->push();
				$widgetOnPage->storeOrUpdate([
						"container" => $container,
						"order" => $order,
					]); 
			}
			else if ($buffer->key == 'copy-link')
			{
				try
				{
					$originalWidget = $this->findOriginalWidget($id);

					if ($originalWidget->isWidgetLink())
					{
						throw new \Exception();
					}
				}
				catch (\Exception $e)
				{
					throw new \Exception($this->LL('rror.widget.link.nonexistent'));
				}

				$widgetOnPage = $originalWidget->replicate();
				$widgetOnPage->push();
				$widgetOnPage->storeOrUpdate([
						"container" => $container,
						"order" => $order,
					]);

				$originalWidget->widgetLink()->save($widgetOnPage);
			}

			\Telenok\Web\WidgetOnPage::where("order", ">=", $order)
					->where("container", $container)->get()->each(function($item)
			{
				$item->storeOrUpdate(["order" => $item->order + 1]);
			});

			$widgetOnPage->widgetPage()->associate(\Telenok\Web\Page::findOrFail($pageId))->save(); 
			$widgetOnPage->widgetLanguageLanguage()->associate(\Telenok\System\Language::findOrFail($languageId))->save(); 
			$widgetOnPage->save();

			if ($buffer->key == 'cut' || $buffer->key == 'copy')
			{
				$this->copyAndInsertChild($widgetOnPage, $buffer);
			}
		});

		return $widgetOnPage;
	}

	public function copyAndInsertChild($widgetOnPage, $buffer)
	{  
		$structure = $widgetOnPage->structure; 

		$newContainres = [];

		foreach($structure->get('containerIds') as $key => $container)
		{ 
			$newContainres[$key] = preg_replace('/(container-)(\d+)(-\d+-\d+)/', "\${1}" . $widgetOnPage->id . "\${3}", $container);

			\Telenok\Web\WidgetOnPage::where("container", $container)->get()->each(function($item) use ($widgetOnPage, $buffer, $newContainres, $key)
			{
				$buffer = \Telenok\System\Buffer::addBuffer(\Auth::user()->getKey(), $item->getKey(), 'web-page', $buffer->key);
				
				$widget = \App::make('telenok.config')->getWidget()->get($item->key);
				
				$widget->insertFromBufferOnPage(
						$widgetOnPage->widgetLanguageLanguage()->first()->pluck('id'), 
						$widgetOnPage->widgetPage()->first()->pluck('id'), 
						$item->key, 
						$item->getKey(), 
						$newContainres[$key], 
						$item->order, 
						$buffer->getKey());
			});
		}

		$structure->put('containerIds', $newContainres);
		$widgetOnPage->structure = $structure->all();
		$widgetOnPage->save();
	}

	public function insertOnPage($languageId = 0, $pageId = 0, $key = '', $id = 0, $container = '', $order = 0)
	{
		$w = parent::insertOnPage($languageId, $pageId, $key, $id, $container, $order);

		$structure = $w->structure;

		if (!$structure->has('row'))
		{
			$structure->put('row', $this->row);
		}

		if (!$structure->has('col'))
		{
			$structure->put('col', $this->col);
		}

		if (!$structure->has('containerIds')/* || (count($structure->get('containerIds')) < $structure->get('row') * $structure->get('row') )*/)
		{
			$ids = [];

			for ($row = 0; $row < $structure->get('row'); $row++)
			{
				for ($col = 0; $col < $structure->get('col'); $col++)
				{
					$ids["$row:$col"] = isset($ids["$row:$col"]) ? $ids["$row:$col"] : 'container-' . $w->id . '-' . $row . '-' . $col;
				}
			}

			$structure->put('containerIds', $ids);
			$w->structure = $structure->all();
			$w->save();
		}

		return $w;
	}

	public function removeFromPage($id = 0)
	{
		$w = \Telenok\Web\WidgetOnPage::findOrFail($id);
        
		if (\Telenok\Web\WidgetOnPage::whereIn('container', $w->structure->get('containerIds', []))->count())
		{
            throw new \Exception($this->LL('widget.has.child'));
		}
		else
		{
			return parent::removeFromPage($id);
		}
	}

	public function validate($model = null, $input = null)
	{
        if (!$model->exists)
        {
            return;
        }

        $row = $model->structure->get('row');
        $col = $model->structure->get('col');

        $structure = $input->get('structure');
        
        $inputRow = array_get($structure, 'row', 0);
        $inputCol = array_get($structure, 'col', 0);
        
        if ($row > $inputRow || $col > $inputCol)
        {
            for($x = $inputCol; $x < $col; $x++)
            {
                for($y = 0; $y < $row; $y++)
                {
                    if (\Telenok\Web\WidgetOnPage::where('container', 'container-' . $model->id . '-' . $x . '-' . $y)->count())
                    {
                        throw new \Exception($this->LL('widget.has.child'));
                    }
                }               
            }
            
            for($x = 0; $x < $inputCol; $x++)
            {
                for($y = $inputRow; $y < $row; $y++)
                {
                    if (\Telenok\Web\WidgetOnPage::where('container', 'container-' . $model->id . '-' . $x . '-' . $y)->count())
                    {
                        throw new \Exception($this->LL('widget.has.child'));
                    }
                }               
            }
        }
	}
    
    public function postProcess($model, $type, $input)
    { 
        $ids = [];

        $structure = $model->structure;
        
        for ($row = 0; $row < $structure->get('row'); $row++)
        {
            for ($col = 0; $col < $structure->get('col'); $col++)
            {
                $ids["$row:$col"] = isset($ids["$row:$col"]) ? $ids["$row:$col"] : 'container-' . $model->id . '-' . $row . '-' . $col;
            }
        }

        $structure->put('containerIds', $ids);
        $model->structure = $structure->all();
        $model->save();

        return parent::postProcess($model, $type, $input);
    }

}

?>