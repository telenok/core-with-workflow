<?php

\Validator::resolver(function($translator, $data, $rules, $messages, $customAttributes)
{
    return new \Telenok\Core\Interfaces\Validator\Validator($translator, $data, $rules, $messages, $customAttributes);
});

Validator::extend('valid_regex', function($attribute, $value, $parameters)
{
    return (@preg_match($value, NULL) !== FALSE);
}); 

\Event::listen('telenok.setting.add', function($list) 
{
    $list->push('Telenok\Core\Setting\AppLocaleDefault\Controller');
    $list->push('Telenok\Core\Setting\AppLocales\Controller');
});

\Event::listen('telenok.workflow.event.add', function($list) 
{
    $list->push('auth.attempt');
    $list->push('auth.login');
    $list->push('auth.logout');
    
    $list->push('workflow.update.before');
    $list->push('workflow.update.after');
    $list->push('workflow.store.before');
    $list->push('workflow.store.after');
    
    $list->push('workflow.form.create');
    $list->push('workflow.form.edit');
});

\Event::listen('telenok.acl.filter.resource.add', function($list)
{
    $list->push('Telenok\Core\Filter\Acl\Resource\ObjectType\Controller');
	$list->push('Telenok\Core\Filter\Acl\Resource\ObjectTypeOwn\Controller');
	$list->push('Telenok\Core\Filter\Acl\Resource\DirectRight\Controller');
});

\Event::listen('telenok.module.menu.left', function($list)
{
    $list->put('web', 1);
    $list->put('objects', 2);
    $list->put('system', 3);
    $list->put('workflow', 3);

	$list->put('dashboard', 0);
    $list->put('objects-field', 0);
    $list->put('objects-lists', 0);
    $list->put('objects-type', 0);
    $list->put('objects-version', 0);
    $list->put('system-setting', 0);
    $list->put('web-page-constructor', 10);
    $list->put('web-page', 11);
    $list->put('web-page-controller', 12);
    $list->put('web-domain', 13);
	
    $list->put('files', 4);
    $list->put('files-browser', 5);
	
    $list->put('users', 1);
    $list->put('users-profile-edit', 2);

    $list->put('workflow-process', 2);
    $list->put('workflow-thread', 3);
});

\Event::listen('telenok.module.menu.top', function($list)
{
    $list->push('users-profile-edit@topMenuMain');
    $list->push('users-profile-edit@topMenuLogout');
});

\Event::listen('telenok.workflow.action.add', function($list) 
{
    $list->push('Telenok\Core\Workflow\Point\Start\Model');
    $list->push('Telenok\Core\Workflow\Point\Start\Form');
	$list->push('Telenok\Core\Workflow\Point\End\End');
    $list->push('Telenok\Core\Workflow\Flow\Standart');
	$list->push('Telenok\Core\Workflow\Activity\FormFieldHide');
    //$list->push('Telenok\Core\Workflow\Activity\ValidateField');
	//$list->push('Telenok\Core\Workflow\Activity\SendMessage');
    //$list->push('Telenok\Core\Workflow\Activity\Log');
});

\Event::listen('telenok.objects-field.add', function($list) 
{
    $list->push('Telenok\Core\Field\Integer\Controller');
    $list->push('Telenok\Core\Field\IntegerUnsigned\Controller');
    $list->push('Telenok\Core\Field\Text\Controller');
    $list->push('Telenok\Core\Field\String\Controller');
    $list->push('Telenok\Core\Field\Checkbox\Controller');
	$list->push('Telenok\Core\Field\ComplexArray\Controller');
    $list->push('Telenok\Core\Field\RelationOneToOne\Controller');
    $list->push('Telenok\Core\Field\RelationOneToMany\Controller');
    $list->push('Telenok\Core\Field\RelationManyToMany\Controller');
    $list->push('Telenok\Core\Field\System\Tree\Controller');
    $list->push('Telenok\Core\Field\MorphOneToOne\Controller');
    $list->push('Telenok\Core\Field\MorphOneToMany\Controller');
    $list->push('Telenok\Core\Field\MorphManyToMany\Controller');
    $list->push('Telenok\Core\Field\System\CreatedBy\Controller');
    $list->push('Telenok\Core\Field\System\UpdatedBy\Controller');
    $list->push('Telenok\Core\Field\System\DeletedBy\Controller');
    $list->push('Telenok\Core\Field\System\LockedBy\Controller');
    $list->push('Telenok\Core\Field\System\Active\Controller');
    $list->push('Telenok\Core\Field\System\Permission\Controller');
    $list->push('Telenok\Core\Field\FileManyToMany\Controller');
    $list->push('Telenok\Core\Field\System\WorkflowStatus\Controller');
    $list->push('Telenok\Core\Field\Upload\Controller');
    $list->push('Telenok\Core\Field\SelectOne\Controller');
});

\Event::listen('telenok.objects-field.view.model.add', function($list) 
{ 
    $list->push('select-one###core::field.select-one.model-radio-button');
    $list->push('select-one###core::field.select-one.model-toggle-button');
    $list->push('select-one###core::field.select-one.model-select-box');
});

/*
\Event::listen('telenok.controller.frontend', function($list)
{
    $list->push(\Illuminate\Support\Collection::make([
        '\Telenok\Core\Controller\Frontend\Controller'
    ]));
});
*/

/*
\Event::listen('telenok.module.profile.add', function($param){
    \App::make('telenok.config')->addModule($param);
});
*/

//\Event::fire('telenok.module.add', 'Telenok\Core\Module\Dashboard\Controller');
//\Event::fire('telenok.module.add', 'Telenok\Core\Module\Web\Controller');
//\Event::fire('telenok.module.add', 'Telenok\Core\Module\Page\Controller');
//\Event::fire('telenok.module.add', 'Telenok\Core\Module\Users\ProfileEdit\Controller');



 



\Event::listen('telenok.compile.route', function()
{
    \App::make('telenok.config')->compileRouter();
});



\Event::listen('telenok.compile.setting', function()
{
    \App::make('telenok.config')->compileSetting();
});



\App::make('telenok.config')->runWorkflowListener();


Event::listen('illuminate.query', function($sql, $bindings, $time) {
    
	if (\Config::get('querylog'))
	{
		$sql = vsprintf(str_replace(array('%', '?'), array('%%', '"%s"'), $sql), $bindings);

		var_dump($sql);
	}
});



?>