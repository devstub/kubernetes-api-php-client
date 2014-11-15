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
use DevStub\KubernetesAPIClient\Entity\v1beta1\Binding;

class Bindings extends BaseEndpoint {

    /**
     * creates a new Binding
     *
     * If $binding is left as null then a new Binding object will be returned allowing you to set the properties via method chaining.
     *
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     * @param Binding|null|string $binding
     *
     * @return Binding|bool|null
     */
    public function create( $binding = null, &$responseAdapter = null) {


        return $this->_prepareCreate("bindings",
                                     $binding,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Binding",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

    /**
     * Retrieve a list of bindings or a specific binding
     *
     * @param null|string $bindingId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function get( $bindingId = null, &$responseAdapter = null) {

        $path = "bindings";

        if ($bindingId !== null) {
            $path .= "/".$bindingId;
        }

        $responseAdapter = $this->_adapter->sendGETRequest($path);

        return $responseAdapter;
    }

    /**
     * Delete a binding
     *
     * @param string $bindingId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function delete($bindingId, &$responseAdapter = null) {

        $path = "bindings/".$bindingId;

        $responseAdapter = $this->_adapter->sendDELETERequest($path);

        return $responseAdapter;
    }

    /**
     * Update a binding.
     *
     * If $binding is left null then you will be able to setup a new fresh Binding object via method chaining.
     *
     *
     * @param                                                      $bindingId
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\Binding      $binding
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return Binding|bool|null
     */
    public function update($bindingId, $binding = null, &$responseAdapter = null) {


        return $this->_prepareUpdate("bindings",
                                     $bindingId,
                                     $binding,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Binding",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

} 