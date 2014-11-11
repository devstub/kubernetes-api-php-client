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

namespace Binarygoo\KubernetesAPIClient\Endpoint\v1beta1;

use Binarygoo\KubernetesAPIClient\Endpoint\BaseEndpoint;
use Binarygoo\KubernetesAPIClient\Entity\v1beta1\Pod;
use Binarygoo\KubernetesAPIClient\Exception\ClientException;
use Binarygoo\KubernetesAPIClient\Exception\ConfigException;

class Pods extends BaseEndpoint {

    /**
     * creates a new pod
     *
     * @param null $responseAdapter
     * @param Pod $pod
     *
     * @return Pod|bool|null
     */
    public function create( $pod = null, &$responseAdapter = null) {

        // we make sure that only objects that are accepted are passed
        if ($pod !== null && !($pod instanceof pod)) {
            throw new ConfigException("Invalid type for \$pod parameter, it must be an instance of Binarygoo\\KubernetesAPIClient\\Entity\\v1beta1\\Pod ");
        }

        // are we using method chaining or are we processing already prebuilt entity
        if ($pod === null) {
            $pod = new Pod();
            $pod->_setEntityCallback(array($this, "create"));
            $pod->_setEntityResponseObjectRef($responseAdapter);
        }
        else {
            $responseAdapter = $this->_adapter->sendPOSTRequest("pods",$pod);
            return false;
        }

        return $pod;
    }

    /**
     * Retrieve a list of pods or specifig pod
     *
     * @param null $podId
     *
     * @return \Binarygoo\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function get( $podId = null) {

        $path = "pods";

        if ($podId !== null) {
            $path .= "/".$podId;
        }

        $responseAdapter = $this->_adapter->sendGETRequest("pods/".$podId);

        return $responseAdapter;
    }

    /**
     * Update a pod
     *
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Pod      $pod
     * @param \Binarygoo\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return Pod|bool|null
     */
    public function update( $pod = null, &$responseAdapter = null) {

        // we make sure that only objects that are accepted are passed
        if ($pod !== null && !($pod instanceof pod)) {
            throw new ConfigException("Invalid type for \$pod parameter, it must be an instance of Binarygoo\\KubernetesAPIClient\\Entity\\v1beta1\\Pod ");
        }

        // are we using method chaining or are we processing already prebuilt entity
        if ($pod === null) {
            $pod = new Pod();
            $pod->_setEntityCallback(array($this, "create"));
            $pod->_setEntityResponseObjectRef($responseAdapter);

        }
        else {
            $path = "pods";
            $podId = $pod->getId();

            if ($podId !== null) {
                $path .= "/".$podId;
            }
            else {
                throw new ClientException("Pod Id needs to be set ");
            }

            $responseAdapter = $this->_adapter->sendPUTRequest("pods/".$podId,$pod);
            return false;
        }

        return $pod;
    }

} 