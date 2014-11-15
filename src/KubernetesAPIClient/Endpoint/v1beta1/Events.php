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
use DevStub\KubernetesAPIClient\Entity\v1beta1\Event;

class Events  extends BaseEndpoint {

    /**
     * creates a new Event
     *
     * If $event is left as null then a new Event object will be returned allowing you to set the properties via method chaining.
     *
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     * @param Event|null|string $event
     *
     * @return Event|bool|null
     */
    public function create( $event = null, &$responseAdapter = null) {


        return $this->_prepareCreate("events",
                                     $event,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Event",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

    /**
     * Retrieve a list of events or a specific event
     *
     * @param null|string $eventId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function get( $eventId = null, &$responseAdapter = null) {

        $path = "events";

        if ($eventId !== null) {
            $path .= "/".$eventId;
        }

        $responseAdapter = $this->_adapter->sendGETRequest($path);

        return $responseAdapter;
    }

    /**
     * Delete an event
     *
     * @param string $eventId
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return \DevStub\KubernetesAPIClient\Adapter\AdapterResponse
     */
    public function delete($eventId, &$responseAdapter = null) {

        $path = "events/".$eventId;

        $responseAdapter = $this->_adapter->sendDELETERequest($path);

        return $responseAdapter;
    }

    /**
     * Update an Event.
     *
     * If $event is left null then you will be able to setup a new fresh Event object via method chaining.
     *
     *
     * @param                                                      $eventId
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\Event      $event
     * @param \DevStub\KubernetesAPIClient\Adapter\AdapterResponse $responseAdapter
     *
     * @return Event|bool|null
     */
    public function update($eventId, $event = null, &$responseAdapter = null) {


        return $this->_prepareUpdate("events",
                                     $eventId,
                                     $event,
                                     "\\DevStub\\KubernetesAPIClient\\Entity\\v1beta1\\Event",
                                     array($this, __METHOD__),
                                     $responseAdapter);
    }

} 