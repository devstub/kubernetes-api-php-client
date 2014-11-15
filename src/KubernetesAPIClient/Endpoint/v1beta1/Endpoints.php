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

class Endpoints  extends BaseEndpoint {

    /**
     * creates new endpoints
     *
     * If $endpoints is left as null then a new Endpoints object will be returned allowing you to set the properties via method chaining.
     *
     * @param null $responseAdapter
     * @param Endpoints|null|string $endpoints
     *
     * @return Endpoints|bool|null
     */
    public function create( $endpoints = null, &$responseAdapter = null) {


        return $this->_prepareCreate("endpoints",
                                     $endpoints,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Endpoints",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

    /**
     * Retrieve a list of endpoints objects or a specific endpoints object
     *
     * @param null|string $endpointsId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function get( $endpointsId = null, &$responseAdapter = null) {

        $path = "endpoints";

        if ($endpointsId !== null) {
            $path .= "/".$endpointsId;
        }

        $responseAdapter = $this->_adapter->sendGETRequest($path);

        return $responseAdapter;
    }

    /**
     * @param string $endpointsId
     *
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function delete($endpointsId, &$responseAdapter = null) {

        $path = "endpoints/".$endpointsId;

        $responseAdapter = $this->_adapter->sendDELETERequest($path);

        return $responseAdapter;
    }

    /**
     * Update endpoints object.
     *
     * If $endpoints is left null then you will be able to setup a new fresh Endpoints object via method chaining.
     *
     *
     * @param                                                      $endpointsId
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\Endpoints      $endpoints
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return Endpoints|bool|null
     */
    public function update($endpointsId, $endpoints = null, &$responseAdapter = null) {


        return $this->_prepareUpdate("endpoints",
                                     $endpointsId,
                                     $endpoints,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Endpoints",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

} 