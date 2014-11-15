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
use DevStub\KubernetesAPIClient\Entity\v1beta1\Service;

class Services  extends BaseEndpoint {

    /**
     * creates a new Service
     *
     * If $service is left as null then a new Service object will be returned allowing you to set the properties via method chaining.
     *
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     * @param Service|null|string $service
     *
     * @return Service|bool|null
     */
    public function create( $service = null, &$responseAdapter = null) {


        return $this->_prepareCreate("services",
                                     $service,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Service",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

    /**
     * Retrieve a list of services or a specific service
     *
     * @param null|string $serviceId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function get( $serviceId = null, &$responseAdapter = null) {

        $path = "services";

        if ($serviceId !== null) {
            $path .= "/".$serviceId;
        }

        $responseAdapter = $this->_adapter->sendGETRequest($path);

        return $responseAdapter;
    }

    /**
     * delete a specified service
     *
     * @param string $serviceId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function delete($serviceId, &$responseAdapter = null) {

        $path = "services/".$serviceId;

        $responseAdapter = $this->_adapter->sendDELETERequest($path);

        return $responseAdapter;
    }

    /**
     * Update a Service.
     *
     * If $service is left null then you will be able to setup a new fresh Service object via method chaining.
     *
     *
     * @param                                                      $serviceId
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\Service      $service
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return Service|bool|null
     */
    public function update($serviceId, $service = null, &$responseAdapter = null) {


        return $this->_prepareUpdate("services",
                                     $serviceId,
                                     $service,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Service",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

} 