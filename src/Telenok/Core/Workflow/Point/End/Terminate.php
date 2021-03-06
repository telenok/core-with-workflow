<?php

namespace Telenok\Core\Workflow\Point\End;

class Terminate extends \Telenok\Core\Interfaces\Workflow\Point {
 
    protected $key = 'point-terminate';

    protected $stencilCardinalityRules = [
            [
                'role' => 'sequence_end',
                'minimumOccurrence' => 1,
                'maximumOccurrence' => 10000,
                'outgoingEdges' => [
                    [
                        'role' => 'controlflow',
                        'minimum' => 0
                    ],
                ]
            ]
    ];

    public function setNext()
    {
        $currentToken = $this->getToken();

		$this->getThread()->setProcessingStageFinished();
 
        return $this;
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
										   xmlns:oryx="http://www.b3mn.org/oryx"
										   width="40"
										   height="40"
										   version="1.0">
										  <defs></defs>
										  <oryx:magnets>
											<oryx:magnet oryx:cx="16" oryx:cy="16" oryx:default="yes" />
										  </oryx:magnets>
										  <g pointer-events="fill">

											<defs>
												<radialGradient id="background" cx="10%" cy="10%" r="100%" fx="10%" fy="10%">
													<stop offset="0%" stop-color="#ffffff" stop-opacity="1"/>
													<stop id="fill_el" offset="100%" stop-color="#ffffff" stop-opacity="1"/>
												</radialGradient>
											</defs>

											<circle id="bg_frame" cx="16" cy="16" r="14" stroke="black" fill="url(#background) white" stroke-width="3"/>

											<circle id="circle1" cx="16" cy="16" r="9" stroke="black" fill="black" stroke-width="1"/>
											<text font-size="11" 
												id="text_name" 
												x="16" y="32" 
												oryx:align="top center" 
												stroke="black"
											></text>
										  </g>
										</svg>',
						'icon' => \Config::get('app.url') . "/packages/telenok/core/js/oryx/stencilset/telenok/icons/pointend/" . $this->getKey() . ".png",
						'defaultAlign' => "east",
						'roles' => ["sequence_end", "point"],
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