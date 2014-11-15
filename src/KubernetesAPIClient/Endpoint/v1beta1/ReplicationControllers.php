<?php
/**
 * PHP CLient for Kubernetes API 
 *
 * Copyright 2014 binarygoo Inc. / Devstub.com All rights reserved.
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
use DevStub\KubernetesAPIClient\Entity\v1beta1\ReplicationController;

class ReplicationControllers extends BaseEndpoint {

    /**
     * creates a new ReplicationController
     *
     * If $replicationController is left as null then a new ReplicationController object will be returned allowing you to set the properties via method chaining.
     *
     * @param null $responseAdapter
     * @param ReplicationController|null|string $replicationController
     *
     * @return ReplicationController|bool|null
     */
    public function create( $replicationController = null, &$responseAdapter = null) {


        return $this->_prepareCreate("replicationControllers",
                                     $replicationController,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\ReplicationController",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

    /**
     * Retrieve a list of ReplicationControllers or a specific ReplicationController
     *
     * @param null|string $replicationControllerId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function get( $replicationControllerId = null, &$responseAdapter = null) {

        $path = "replicationControllers";

        if ($replicationControllerId !== null) {
            $path .= "/".$replicationControllerId;
        }

        $responseAdapter = $this->_adapter->sendGETRequest($path);

        return $responseAdapter;
    }

    /**
     * @param string $replicationControllerId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function delete($replicationControllerId, &$responseAdapter = null) {

        $path = "replicationControllers/".$replicationControllerId;

        $responseAdapter = $this->_adapter->sendDELETERequest($path);

        return $responseAdapter;
    }

    /**
     * Update a replication controller.
     *
     * If $replicationController is left null then you will be able to setup a new fresh ReplicationController object via method chaining.
     *
     *
     * @param                                                      $replicationControllerId
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\ReplicationController      $replicationController
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ReplicationController|bool|null
     */
    public function update($replicationControllerId, $replicationController = null, &$responseAdapter = null) {


        return $this->_prepareUpdate("replicationControllers",
                                     $replicationControllerId,
                                     $replicationController,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\ReplicationController",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

} 