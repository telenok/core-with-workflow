<?php

namespace Telenok\Core\Module\Files\Browser;

class Controller extends \Telenok\Core\Interfaces\Presentation\TreeTab\Controller { 
    
    protected $key = 'files-browser';
    protected $parent = 'files';
    protected $icon = 'fa fa-file';

	protected $presentation = 'tree-tab-object';
    protected $presentationContentView = 'core::module.files-browser.content';

	protected $tableColumn = ['name', 'size', 'perm', 'writeable', 'readable', 'updated_at'];
	protected $maxFileSizeToView = 100000;

	public function getMaxSizeToView()
	{
		return $this->maxFileSizeToView;
	}

	public function setMaxSizeToView($param = 100000)
	{
		$this->maxFileSizeToView = $param;
		
		return $this;
	}
	
	public function getTreeContent()
    {
        return;
    }

    public function getContent()
    { 
        return [
            'tabKey' => "{$this->getTabKey()}-{$this->getParent()}",
            'tabLabel' => 'File manager',
            'tabContent' => view($this->getPresentationContentView(), array(
                'controller' => $this,
				'currentDirectory' => addslashes(base_path()),
                'fields' => $this->tableColumn,
                //'fieldsFilter' => $this->getModelFieldFilter(),
                'gridId' => $this->getGridId(),
                'uniqueId' => str_random(),
            ))->render()
        ];
    }

    public function getList()
    {
        $content = []; 
		
		$currentDirectory = \Input::get('currentDirectory');
		
		if (strstr($currentDirectory, base_path()) === FALSE)
		{
			$currentDirectory = base_path();
		}
		
		$directory = new \SplFileInfo($currentDirectory);
        
		$sEcho = \Input::get('sEcho');
        $uniqueId = \Input::get('uniqueId');
        $iDisplayStart = \Input::get('iDisplayStart', 0);
		
        $collection = \Symfony\Component\Finder\Finder::create()->in($directory->getPathname())->depth(0)->sortByType();

        if ($title = trim(\Input::get('sSearch')))
        {
			$collection->name("*{$title}*");
        }  

		if ($directory->getPathname() != base_path())
		{
			$link = '<i class="fa fa-level-up"></i> <i class="fa fa-folder"></i> '
					. '<a href="#" onclick="currentDirectory' . $uniqueId . ' = \'' . addslashes($directory->getPath()). '\'; telenok.getPresentation(\'' . $this->getPresentationModuleKey() . '\')'
					. '.reloadDataTableOnClick({url: \'' . $this->getRouterList() . '\', gridId: \'' . $this->getGridId() . '\', data : {uniqueId: \'' . $uniqueId . '\', currentDirectory: \'' . addslashes($directory->getPath()) . '\'}}); return false;">' . $directory->getFilename() . '</a>';
			
			$content[] = [
							'tableCheckAll' => '', 
							'name' => $link,
							'size' => '',
							'updated_at' => '',
							'perm' => '',
							'writeable' => '',
							'readable' => '',
							'tableManageItem' => '',
					];
		}

        foreach ($collection as $item)
        {
            $put = ['tableCheckAll' => '<label><input type="checkbox" class="ace ace-switch ace-switch-6" name="tableCheckAll[]" value="' . $item->getRealpath() . '" /><span class="lbl"></span></label>'];

			if ($item->isDir())
			{
				$put['name'] = '<i class="fa fa-folder"></i> '
					. '<a href="#" onclick="currentDirectory' . $uniqueId . ' = \'' . addslashes($item->getPathname()). '\'; telenok.getPresentation(\'' . $this->getPresentationModuleKey() . '\')'
					. '.reloadDataTableOnClick({url: \'' . $this->getRouterList() . '\', gridId: \'' . $this->getGridId() . '\', data : {uniqueId: \'' . $uniqueId . '\', currentDirectory: \'' . addslashes($item->getPathname()) . '\'}}); return false;">' . $item->getFilename() . '</a>';
			}
			else if ($item->isFile())
			{
				$put['name'] = '<i class="fa ' . ($item->isDir() ? 'fa-folder' : 'fa-file-o') . '"></i> ' . $item->getFilename();
			}
			
			$put['size'] = $item->isDir() ? "" : $item->getSize();
			$put['updated_at'] = date('Y-m-d H:i:s', $item->getATime());
			$put['perm'] = substr(sprintf('%o', $item->getPerms()), -4);
			$put['writeable'] = $item->isWritable();
			$put['readable'] = $item->isReadable();

            $put['tableManageItem'] = $this->getListButton($item);

            $content[] = $put;
        }

        return [
            'gridId' => $this->getGridId(),
            'sEcho' => $sEcho,
            'iTotalRecords' => ($iDisplayStart + $collection->count()),
            'iTotalDisplayRecords' => ($iDisplayStart + $collection->count()),
            'aaData' => $content
        ];
    } 

    public function getListButton($item)
    {
        return '
                <div class="hidden-phone visible-lg btn-group">
				' . (
				$item->isReadable() && ($item->isFile() || $item->isDir()) ? '
                    <button class="btn btn-minier btn-info disable" title="'.$this->LL('list.btn.edit').'" 
                        onclick="telenok.getPresentation(\''.$this->getPresentationModuleKey().'\').addTabByURL({url : \'' 
                        . $this->getRouterEdit(['id' => $item->getRealPath()]) . '\'});">
                        <i class="fa fa-pencil"></i>
                    </button> ' : ''
				) . '
                    <button class="btn btn-minier btn-danger" title="'.$this->LL('list.btn.delete').'" 
                        onclick="if (confirm(\'' . $this->LL(preg_match('/^_delme/', $item->getFilename()) ? 'notice.delete.force' : 'notice.sure') . '\')) telenok.getPresentation(\''.$this->getPresentationModuleKey().'\').deleteByURL(this, \'' 
                        . $this->getRouterDelete(['id' => $item->getRealPath()]) . '\');">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </div>';
    }

    public function create($id = null)
	{
		try
		{ 
			$modelType = \Input::get('modelType');
			$currentDirectory = realpath(\Input::get('currentDirectory'));

			if (strstr($currentDirectory, base_path()) === FALSE)
			{
				throw new \Exception($this->LL('error.access-denied-over-base-directory'));
			}

			$tabKey = str_random();
			
			return [
				'tabKey' => $this->getTabKey() . '-new-' . $tabKey,
				'tabLabel' => $this->LL('list.create.' . (in_array($modelType, ['file', 'directory']) ? $modelType : "")),
				'tabContent' => view("{$this->getPackage()}::module.{$this->getKey()}.model", array_merge(array( 
					'controller' => $this,
					'currentDirectory' => addslashes($currentDirectory),
					'modelType' => $modelType,
					'model' => null,
					'tabKey' => $tabKey,
					'modelCurrentDirectory' => new \SplFileInfo($currentDirectory),
					'routerParam' => $this->getRouterParam('create'),
					'uniqueId' => str_random(),  
				), $this->getAdditionalViewParam()))->render()
			];
		} 
		catch (\Exception $ex) 
		{
			return [
				'exception' => $ex->getMessage(),
			];
		}
	}

    public function edit($id = null)
	{
		$id = $id ?: \Input::get('id');

		try
		{
			$model = new \SplFileInfo($id);

			if (strstr($model->getPath(), base_path()) === FALSE)
			{
				throw new \Exception($this->LL('error.access-denied-over-base-directory'));
			}

			if ($model->isFile())
			{
				$modelType = 'file';
			}
			else if ($model->isDir())
			{
				$modelType = 'directory';
			}
			
            $tabKey = md5($id);
            
			return [
				'tabKey' => $this->getTabKey() . '-edit-' . $tabKey,
				'tabLabel' => $this->LL('list.edit.' . $modelType),
				'tabContent' => view("{$this->getPackage()}::module.{$this->getKey()}.model", array_merge(array( 
					'controller' => $this,
					'currentDirectory' => addslashes($model->getPath()),
					'modelType' => $modelType,
					'model' => $model,
					'tabKey' => $tabKey,
					'modelCurrentDirectory' => new \SplFileInfo($model->getPath()),
					'routerParam' => $this->getRouterParam('edit'),
					'uniqueId' => str_random(),  

					
				), $this->getAdditionalViewParam()))->render()
			];

		} 
		catch (\Exception $ex) 
		{
			return [
				'exception' => $ex->getMessage(),
			];
		}
	}
	
    public function store($id = null)
	{
		try
		{
            $input = \Illuminate\Support\Collection::make($this->getRequest()->input()); 

			$modelType = $input->get('modelType');
			$name = trim($input->get('name'));

			$currentDirectory = new \SplFileInfo(\Input::get('directory'));

			if (strstr($currentDirectory->getRealPath(), base_path()) === FALSE)
			{
				throw new \Exception($this->LL('error.access-denied-over-base-directory'));
			}

			$validator = \Validator::make(
				[
					'name' => $name,
				],
				[
					'name' => ['required', 'regex:/^[\w .-]+$/u'],
				]
			);

			if ($validator->fails())
			{
				throw (new \Telenok\Core\Interfaces\Exception\Validate())->setMessageError($validator->messages());
			}
			
			$modelPath = $currentDirectory->getRealPath() . DIRECTORY_SEPARATOR . $name;

			if ($modelType == 'directory')
			{
				\File::makeDirectory($modelPath, 0775, true, true);
			}
			else if ($modelType == 'file')
			{
				\File::put($modelPath, \Input::get('content', ''));
			}
			else
			{
				throw new \Exception($this->LL('error.create.unknown-file-type'));
			}
			
			return [
				'tabContent' => view("{$this->getPackage()}::module.{$this->getKey()}.model", array_merge(array( 
					'controller' => $this,
					'currentDirectory' => addslashes($currentDirectory->getRealPath()),
                    'success' => true,
					'modelType' => $modelType,
					'model' => new \SplFileInfo($modelPath),
					'modelCurrentDirectory' => $currentDirectory,
					'routerParam' => $this->getRouterParam('update'),
					'uniqueId' => str_random(),  
				), $this->getAdditionalViewParam()))->render()
			];
		}
		catch (\Telenok\Core\Interfaces\Exception\Validate $e)
		{
			throw $e;
		}
		catch (\Exception $e)
		{
			throw $e;
		}
	}
	
    public function update()
	{
		try
		{
            $input = \Illuminate\Support\Collection::make($this->getRequest()->input()); 
            
			$modelType = $input->get('modelType');
			$modelPath = $input->get('modelPath');
			$directory = trim($input->get('directory'));
			$name = trim($input->get('name'));

			$currentDirectory = new \SplFileInfo($directory);
			$model = new \SplFileInfo($modelPath);
			
			if (strstr($currentDirectory->getRealPath(), base_path()) === FALSE || strstr($model->getPath(), base_path()) === FALSE)
			{
				throw new \Exception($this->LL('error.access-denied-over-base-directory'));
			}

			$validator = \Validator::make(
				[
					'name' => $name,
				],
				[
					'name' => ['required', 'regex:/^[\w .-]+$/u'],
				]
			);

			if ($validator->fails())
			{
				throw (new \Telenok\Core\Interfaces\Exception\Validate())->setMessageError($validator->messages());
			}

			if ($modelType == 'directory')
			{
				$pathNew = $currentDirectory->getPathname() . DIRECTORY_SEPARATOR . $name;

				\File::move($model->getRealPath(), $pathNew); 
			}
			else if ($modelType == 'file')
			{
				$pathNew = $currentDirectory->getPathname() . DIRECTORY_SEPARATOR . $name; 

				if (strlen(\Input::get('content', '')) && \File::size($modelPath) < $this->getMaxSizeToView())
				{
					\File::put($model->getRealPath(), \Input::get('content'));
				}

				if ($model->getRealPath() != $pathNew)
				{
					\File::move($model->getRealPath(), $pathNew);
				}
			}
			else
			{
				throw new \Exception($this->LL('error.create.unknown-file-type'));
			}
			
			return [
				'tabContent' => view("{$this->getPackage()}::module.{$this->getKey()}.model", array_merge(array( 
					'controller' => $this,
					'currentDirectory' => addslashes($currentDirectory->getRealPath()),
                    'success' => true,
					'modelType' => $modelType,
					'model' => new \SplFileInfo($pathNew),
					'modelCurrentDirectory' => $currentDirectory,
					'routerParam' => $this->getRouterParam('update'),
					'uniqueId' => str_random(),  
				), $this->getAdditionalViewParam()))->render()
			];
		}
		catch (\Telenok\Core\Interfaces\Exception\Validate $e)
		{
			throw $e;
		}
		catch (\Exception $e)
		{
			throw $e;
		}
	}

    public function delete($id = 0, $force = false)
    { 
		try
		{
			$model = new \SplFileInfo(\Input::get('id'));
			
			if (strstr($model->getPath(), base_path()) === FALSE)
			{
				throw new \Exception($this->LL('error.access-denied-over-base-directory'));
			}

			$name = $model->getFilename();
			
			if (preg_match('/^_delme/', $name))
			{
				if ($model->isDir())
				{
					\File::deleteDirectory($model->getRealPath());
				}
				else
				{
					\File::delete($model->getRealPath());
				}
			}
			else
			{
				\File::move($model->getRealPath(), $model->getPath() . DIRECTORY_SEPARATOR . '_delme' . date('YmdHis') . '_' . $name);
			}

            return ['success' => 1];
		}
		catch (\Telenok\Core\Interfaces\Exception\Validate $e)
		{
			throw $e;
		}
		catch (\Exception $e)
		{
			throw $e;
		}
    }
	
	public function getRouterParam($action = '', $filePath = null, $tabKey = null)
	{
		switch ($action)
		{
			case 'create':
				return [ $this->getRouterStore(['saveBtn' => \Input::get('saveBtn', true), 'chooseBtn' => \Input::get('chooseBtn', false), 'tabKey' => $tabKey]) ];
				break;

			case 'edit':
				return [ $this->getRouterUpdate(['id' => $filePath, 'saveBtn' => \Input::get('saveBtn', true), 'chooseBtn' => \Input::get('chooseBtn', true), 'tabKey' => $tabKey]) ];
				break;

			case 'store':
				return [ $this->getRouterUpdate(['saveBtn' => \Input::get('saveBtn', true), 'chooseBtn' => \Input::get('chooseBtn', true), 'tabKey' => $tabKey]) ];
				break;

			case 'update':
				return [ $this->getRouterUpdate(['id' => $filePath, 'saveBtn' => \Input::get('saveBtn', true), 'chooseBtn' => \Input::get('chooseBtn', true), 'tabKey' => $tabKey]) ];
				break;

			default:
				return [];
				break;
		}
	} 

	
	
	
	
	
	
    public function getWizardListContent111()
    {
        return array(
            'content' => view("core::module/files-browser.wizard", array(
                    'controller' => $this,
                    'route' => $this->getRouterEdit(),
                    'uniqueId' => str_random(),
                ))->render() 
        );
    }

    public function getTreeList111()
    {
        $basePath = base_path();
        $basePathLength = \Str::length($basePath);
        
        $id = $basePath.\Input::get('id');
        
        $listTree = [];
                
        foreach (\Symfony\Component\Finder\Finder::create()->ignoreDotFiles(true)->ignoreVCS(true)->directories()->in( $id )->depth(0) as $dir)
        { 
            $path = $dir->getPathname();

            $listTree[] = array(
                "data" => $dir->getFilename(),
                "metadata" => array('path' => substr($dir->getPathname(), $basePathLength, \Str::length($path) - $basePathLength)),
                "state" => "closed",
                "children" => [],
            );
        }
        
        if (!\Input::get('id'))
        {
            $listTree = array(
                'data' => array(
                    "title" => "Root node", 
                    "attr" => array('id' => 'root-not-delete'), 
                ),
                "state" => "open",
                'children' => $listTree
            );
        }
        
        return $listTree;
    }
    
}

?>