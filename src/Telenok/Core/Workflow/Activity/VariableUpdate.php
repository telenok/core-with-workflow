<?php

namespace Telenok\Core\Workflow\Activity;

class VariableUpdate extends \Telenok\Core\Interfaces\Workflow\Activity {
 
    protected $key = 'activity-variable-update';

    protected $stencilCardinalityRules = [
            [
                'role' => 'activity',
                'minimumOccurrence' => 0,
                'maximumOccurrence' => 10000,
                'outgoingEdges' => [
                    [
                        'role' => 'controlflow',
                        'maximum' => 10000
                    ]
                ],
                'incomingEdges' => [
                    [
                        'role' => 'controlflow',
                        'maximum' => 10000
                    ]
                ]
            ]
    ];

    public function getVariableTemplateContent($model = null)
    {
        if (!$model)
        {
            $processId = $this->getRequest()->get('processId', 0);
            $model = \App\Model\Telenok\Workflow\Process::find($processId);
        }

		return ['tabContent' => view($this->getConditionalTemplateView(), [
				'controller' => $this,
				'uniqueId' => str_random(),
				'processId' => $processId,
                'model' => $model,
				'p' => \Illuminate\Support\Collection::make(),
			])->render()];
    }

    public function getConditionalTemplateView()
    {
        return 'core::workflow.' . $this->getKey() . '.variable-template';
    }

    public function getPropertyValue($data = [])
    {
        $stencilData = $this->getStencilData($data);
        
		$commonProperty = parent::getPropertyValue($data); 
        
        $commonProperty->put('variable', $stencilData->get('variable', []));
        
        return $commonProperty;
	}
    
    public function process($log = [])
    {
        $paramElement = $this->getInput();

        $variable = (array)$paramElement->get('variable', []);

        $collectionVariable = app('telenok.config')->getWorkflowVariable();

		$originalVariable = $this->getThread()->getModelThread()->original_variable;
		
		foreach($variable as $v)
		{
			$code = array_get($v, 'code');
			$value = array_get($v, 'value');
			
			$model = app('\App\Model\Telenok\Workflow\Variable')->fill($originalVariable->get($code));
			
			$value = \Telenok\Core\Workflow\TemplateMarker\TemplateMarkerModal::make()->processMarkersString($value);

			$value = $collectionVariable->get($model->key)->getValue($model, $value);

			$this->getThread()->setVariableByCode($code, $value);
		}
		
        return parent::process($log);
    }

    public function getStencilConfig()
    {
        if (empty($this->stencilConfig))
        {
            $this->stencilConfig = [
						'type' => 'node',
						'id' => $this->getKey(),
                        'title' => $this->LL('title'),
                        'groups' => [$this->LL('title.groups')],
                        'description' => $this->LL('description'),
                        'urlPropertyContent' => $this->getRouterPropertyContent(),
                        'urlStoreProperty' => $this->getRouterStoreProperty(),
						"view" => '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
										<svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns:oryx="http://www.b3mn.org/oryx"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="152" height="82" version="1.0">
                                            <defs></defs>
                                            <oryx:magnets>
                                                <oryx:magnet oryx:cx="1" oryx:cy="20" oryx:anchors="left" />
                                                <oryx:magnet oryx:cx="1" oryx:cy="40" oryx:anchors="left" />
                                                <oryx:magnet oryx:cx="1" oryx:cy="60" oryx:anchors="left" />

                                                <oryx:magnet oryx:cx="37" oryx:cy="79" oryx:anchors="bottom" />
                                                <oryx:magnet oryx:cx="75" oryx:cy="79" oryx:anchors="bottom" />
                                                <oryx:magnet oryx:cx="112" oryx:cy="79" oryx:anchors="bottom" />

                                                <oryx:magnet oryx:cx="149" oryx:cy="20" oryx:anchors="right" />
                                                <oryx:magnet oryx:cx="149" oryx:cy="40" oryx:anchors="right" />
                                                <oryx:magnet oryx:cx="149" oryx:cy="60" oryx:anchors="right" />

                                                <oryx:magnet oryx:cx="37" oryx:cy="1" oryx:anchors="top" />
                                                <oryx:magnet oryx:cx="75" oryx:cy="1" oryx:anchors="top" />
                                                <oryx:magnet oryx:cx="112" oryx:cy="1" oryx:anchors="top" />

                                                <oryx:magnet oryx:cx="75" oryx:cy="40" oryx:default="yes" />
                                            </oryx:magnets>
                                            <g pointer-events="fill" oryx:minimumSize="50 40">
                                                <defs>
                                                    <radialGradient id="background" cx="10%" cy="10%" r="100%" fx="10%" fy="10%">
                                                        <stop offset="0%" stop-color="#ffffff" stop-opacity="1"/>
                                                        <stop id="fill_el_1" offset="100%" stop-color="#ffffcc" stop-opacity="1"/>
                                                    </radialGradient>
                                                </defs>

                                                <rect id="border_el_1" oryx:anchors="bottom top right left" x="1" y="1" width="144" height="79" rx="10" ry="10" stroke="none" stroke-width="0" fill="none" />
                                                <rect id="border_el_2" oryx:resize="vertical horizontal" oryx:anchors="bottom top right left" x="0" y="0" width="150" height="80" rx="10" ry="10" stroke="black" stroke-width="4" fill="none" />
                                                <rect id="border_el_3" oryx:resize="vertical horizontal" x="0" y="0" width="150" height="80" rx="10" ry="10" stroke="black" stroke-width="1" fill="url(#background) #ffffcc" />
												<text 
													font-size="12" 
													id="title" 
													x="75" 
													y="40" 
													oryx:align="middle center"
													oryx:fittoelem="text_frame"
													stroke="black">
												</text>

                                                <g id="none"></g>
                                            </g>
										</svg>',
						'icon' => \Config::get('app.url') . "/packages/telenok/core/js/oryx/stencilset/telenok/icons/activity/" . $this->getKey() . ".png",
						'defaultAlign' => "east",
						'roles' => ["activity"],
						'propertyPackages' => ["bgcolor", "bordercolor"],
                        'properties' => [
                            [
                                "id" => "title",
                                "type" => "string",
                                "value" => $this->LL('title'),
                                "refToView" => "title",
                            ],
                        ],

                    ];
        }

        return $this->stencilConfig;
    }
}