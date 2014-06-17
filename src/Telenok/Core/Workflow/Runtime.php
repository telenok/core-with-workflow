<?php

namespace Telenok\Core\Workflow;

class Runtime extends \Telenok\Core\Interfaces\Workflow\Runtime {

    public function runProcess(\Telenok\Core\Model\Workflow\Process $process, \Telenok\Core\Interfaces\Workflow\Event $event = null)
    {
        if (\Config::get('app.workflow.enabled'))
        {
            return parent::runProcess($process, $event);
        }
        
        return $this;
    }

    
}

?>