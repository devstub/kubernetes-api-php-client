<?php
/**
 * PHP CLient for Kubernetes API 
 *
 * Copyright 2014 binarygoo Inc. All rights reserved.
 *
 * @author Faruk brbovic <fbrbovic@devstub.com>
 * @link http://www.devstub.com/
 * @copyright 2014 binarygoo / devstub.com
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

namespace DevStub\KubernetesAPIClient\Endpoint\v1beta1;

use DevStub\KubernetesAPIClient\Endpoint\BaseEndpoint;
use DevStub\KubernetesAPIClient\Entity\v1beta1\Pod;
use DevStub\KubernetesAPIClient\Exception\ClientException;
use DevStub\KubernetesAPIClient\Exception\ConfigException;

class Pods extends BaseEndpoint {

    /**
     * creates a new pod
     *
     * If $pod is left as null then a new Pod object will be returned allowing you to set the properties via method chaining.
     *
     * @param null $responseAdapter
     * @param Pod|null|string $pod
     *
     * @return Pod|bool|null
     */
    public function create( $pod = null, &$responseAdapter = null) {


        return $this->_prepareCreate("pods",
                                     $pod,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Pod",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

    /**
     * Retrieve a list of pods or a specific pod
     *
     * @param null|string $podId
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function get( $podId = null) {

        $path = "pods";

        if ($podId !== null) {
            $path .= "/".$podId;
        }

        $responseAdapter = $this->_adapter->sendGETRequest($path);

        return $responseAdapter;
    }

    /**
     * @param string $podId
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function delete($podId) {

        $path = "pods/".$podId;

        $responseAdapter = $this->_adapter->sendDELETERequest($path);

        return $responseAdapter;
    }

    /**
     * Update a pod.
     *
     * If $pod is left null then you will be able to setup a new fresh pod object via method chaining.
     *
     *
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\Pod      $pod
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return Pod|bool|null
     */
    public function update( $pod = null, &$responseAdapter = null) {

        // we make sure that only objects that are accepted are passed
        if ($pod !== null && !($pod instanceof pod)) {
            throw new ConfigException("Invalid type for \$pod parameter, it must be an instance of DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Pod ");
        }

        // are we using method chaining or are we processing already prebuilt entity
        if ($pod === null) {
            $pod = new Pod();
            $pod->_setEntityCallback(array($this, __METHOD__));
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

            $responseAdapter = $this->_adapter->sendPUTRequest($path,$pod);
            return false;
        }

        return $pod;
    }

} 