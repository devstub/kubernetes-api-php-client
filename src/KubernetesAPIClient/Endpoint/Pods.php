<?php
/**
 * PHP CLient for Kubernetes API 
 *
 * Copyright 2014 binarygoo Inc. All rights reserved.
 *
 * @author Faruk brbovic <fbrbovic@binarygoo.com>
 * @link http://www.binarygoo.com/
 * @copyright 2014 binarygoo
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace Binarygoo\KubernetesAPIClient\Endpoint;


use Binarygoo\KubernetesAPIClient\Entity\Pod;

class Pods extends BaseEndpoint {

    public function create($pod = null) {

        // we make sure that only objects that are accepted are passed
        if ($pod !== null && !($pod instanceof pod)) {
            throw new ConfigException("Invalid type for \$pod parameter, it must be an instance of Binarygoo\\KubernetesAPIClient\\Entity\\Pod ");
        }

        // are we using method chaining or are we processing already prebuilt entity
        if ($pod === null) {
            return new Pod(array($this, "create"));
        }
        else {

        }
    }

} 