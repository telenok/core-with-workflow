<?php

namespace Telenok\Core\Interfaces\Workflow;

class Variable {

    use \Telenok\Core\Support\PackageLoad;

    protected $key = '';
    protected $languageDirectory = 'workflow-parameter';
    protected $package = '';
    protected $formFieldView = '';
    protected $formModelView = '';

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($param = '')
    {
        $this->key = $param;
        
        return $this;
    }

    public function getName()
    {
        return $this->LL('name');
    }

    public function getFormFieldView()
    {
        return $this->formFieldView ?: "core::workflow-parameter.{$this->getKey()}.field";
    }

    public function getFormModelView()
    {
        return $this->formModelView ?: "core::workflow-parameter.{$this->getKey()}.model";
    }

    public function setFormFieldView($param = '')
    {
        $this->formFieldView = $param;
        
        return $this;
    }

    public function getFormFieldContent($controller = null, $model = null, $uniqueId = null)
    { 
        return view($this->getFormFieldView(), array(
                'parentController' => $controller,
                'controller' => $this,
                'model' => $model,
                'uniqueId' => $uniqueId,
            ))->render();
    }

    public function getFormModelContent($controller = null, $process = null, $parameter = null, $uniqueId = null)
    { 
        return view($this->getFormModelView(), array(
                'parentController' => $controller,
                'controller' => $this,
                'process' => $process,
                'parameter' => $parameter,
                'uniqueId' => $uniqueId,
            ))->render();
    }

	/*
	 * @param \App\Http\Controllers\Module\Workflow\Process\Controller
	 * @param \App\Model\Telenok\Workflow\Parameter
	 */
    public function processInitDefault($process = null, $model = null)
    {
    }
    
	/*
	 * @param \App\Http\Controllers\Module\Workflow\Process\Controller
	 * @param \App\Model\Telenok\Workflow\Parameter
	 * @param mixed
	 */
    public function processInitValue($process = null, $model = null, $value = null)
    {
        return $value;
    }
    
	/*
	 * Return initial value of parameter from already started process's thread
	 * 
	 * @param \App\Http\Controllers\Module\Workflow\Thread\Controller
	 * @param \App\Model\Telenok\Workflow\Parameter
	 * @param mixed Some data of parameter which launched with the process
	 */
    public function getValue($thread = null, $model = null, $value = null)
    {
        return $value;
    }
}