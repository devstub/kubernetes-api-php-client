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
use DevStub\KubernetesAPIClient\Entity\v1beta1\Minion;

class Minions  extends BaseEndpoint {

    /**
     * creates a new Minion
     *
     * If $minion is left as null then a new Minion object will be returned allowing you to set the properties via method chaining.
     *
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     * @param Minion|null|string $minion
     *
     * @return Minion|bool|null
     */
    public function create( $minion = null, &$responseAdapter = null) {


        return $this->_prepareCreate("minions",
                                     $minion,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Minion",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

    /**
     * Retrieve a list of minions or a specific minion
     *
     * @param null|string $minionId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function get( $minionId = null, &$responseAdapter = null) {

        $path = "minions";

        if ($minionId !== null) {
            $path .= "/".$minionId;
        }

        $responseAdapter = $this->_adapter->sendGETRequest($path);

        return $responseAdapter;
    }

    /**
     * @param string $minionId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function delete($minionId, &$responseAdapter = null) {

        $path = "minions/".$minionId;

        $responseAdapter = $this->_adapter->sendDELETERequest($path);

        return $responseAdapter;
    }

    /**
     * Update a minion.
     *
     * If $minion is left null then you will be able to setup a new fresh Minion object via method chaining.
     *
     *
     * @param                                                      $minionId
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\Minion      $minion
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\Minion|bool|null
     */
    public function update($minionId, $minion = null, &$responseAdapter = null) {


        return $this->_prepareUpdate("minions",
                                     $minionId,
                                     $minion,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Minion",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

} 