<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

return [
    'interfaces' => [
        'google.dataflow.v1beta3.TemplatesService' => [
            'CreateJobFromTemplate' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\Dataflow\V1beta3\Job',
                'headerParams' => [
                    [
                        'keyName' => 'project_id',
                        'fieldAccessors' => [
                            'getProjectId',
                        ],
                    ],
                    [
                        'keyName' => 'location',
                        'fieldAccessors' => [
                            'getLocation',
                        ],
                    ],
                ],
            ],
            'GetTemplate' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\Dataflow\V1beta3\GetTemplateResponse',
                'headerParams' => [
                    [
                        'keyName' => 'project_id',
                        'fieldAccessors' => [
                            'getProjectId',
                        ],
                    ],
                    [
                        'keyName' => 'location',
                        'fieldAccessors' => [
                            'getLocation',
                        ],
                    ],
                ],
            ],
            'LaunchTemplate' => [
                'callType' => \Google\ApiCore\Call::UNARY_CALL,
                'responseType' => 'Google\Cloud\Dataflow\V1beta3\LaunchTemplateResponse',
                'headerParams' => [
                    [
                        'keyName' => 'project_id',
                        'fieldAccessors' => [
                            'getProjectId',
                        ],
                    ],
                    [
                        'keyName' => 'location',
                        'fieldAccessors' => [
                            'getLocation',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
