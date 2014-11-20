<?php

namespace Telenok\Core\Controller\Backend;

class Controller extends \Telenok\Core\Interfaces\Controller\Backend\Controller {

	protected $key = 'backend';

	public function __construct()
	{
		if (!\App::runningInConsole())
		{
			$this->beforeFilter('auth', ['except' => ['errorAccessDenied', 'login']]);
		}
	}

	public function login()
	{
		$username = trim(\Input::get('username'));
		$password = trim(\Input::get('password'));
		$remember = intval(\Input::get('remember'));

		if ($username && $password && (\Auth::attempt(['username' => $username, 'password' => $password], $remember) || \Auth::attempt(['email' => $username, 'password' => $password], $remember)))
		{
			if (\Auth::can('read', 'control_panel'))
			{
				return \Redirect::route('cmf.content');
			}
			else
			{
				return \Redirect::route('error.access-denied');
			}
		}

		return \View::make('core::controller.backend-login', ['controller' => $this]);
	}

	public function logout()
	{
		\Auth::logout();

		return ['success' => true];
	}

	public function errorAccessDenied()
	{
		return \View::make('core::controller.backend-denied', ['controller' => $this]);
	}

	public function frontendAreaWidgetList()
	{
		return \View::make('core::controller.backend-frontend-iframe-widget-list', ['controller' => $this]);
	}

	public function frontendArea()
	{
		return \View::make('core::controller.backend-frontend-iframe-content', ['controller' => $this]);
	}

	public function getContent()
	{
		$listModuleMenuLeft = \Illuminate\Support\Collection::make([]);
		\Event::fire('telenok.module.menu.left', $listModuleMenuLeft);

		$config = \App::make('telenok.config');

		$setArray = [];

		$listModule = $config->getModule()
				->filter(function($item) use ($listModuleMenuLeft)
				{
					if (!$item->getParent() && $listModuleMenuLeft->has($item->getKey()))
					{
						return true;
					}

					if ($item->getParent() && \Auth::can('read', 'module.' . $item->getKey()) && $listModuleMenuLeft->has($item->getKey()))
					{
						return true;
					}
				})
				->sortBy(function($item) use ($listModuleMenuLeft)
                {
                    return $item->getModuleModel()->module_order;
                });


		$listModule = $listModule->filter(function($item) use ($listModule)
		{
			foreach ($listModule as $module)
			{
				if ($item->getParent() || (!$item->getParent() && $module->getParent() == $item->getKey()))
				{
					return true;
				}
			}

			return false;
		});

		$listModuleGroup = $config->getModuleGroup()->filter(function($item) use ($listModule)
		{
			foreach ($listModule as $module)
			{
				if ($module->getGroup() && $module->getGroup() == $item->getKey())
				{
					return true;
				}
			}

			return false;
		});

		$setArray['listModule'] = $listModule;
		$setArray['listModuleGroup'] = $listModuleGroup;


		$listModuleMenuTop = \Illuminate\Support\Collection::make([]);

		$listModuleMenuTopCollection = \Illuminate\Support\Collection::make([]);
		
		\Event::fire('telenok.module.menu.top', $listModuleMenuTopCollection);

		$listModuleMenuTopCollection->each(function($item) use ($listModuleMenuTop, $config)
		{
			$moduleMethod = explode('@', $item);

			$method = $moduleMethod[1];

			$listModuleMenuTop->push($config->getModule()->get($moduleMethod[0])->$method());
		});

		$listModuleMenuTop->sortBy(function($item)
		{
			return $item->get('order');
		});


		$setArray['listModuleMenuTop'] = $listModuleMenuTop;
		$setArray['controller'] = $this;

		return \View::make('core::controller.backend', $setArray);
	}

}

?>