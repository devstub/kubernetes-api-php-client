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

namespace Binarygoo\KubernetesAPIClient;
use Binarygoo\KubernetesAPIClient\Exception\ClientException;
use Binarygoo\KubernetesAPIClient\Exception\ConfigException;


/**
 * This is the main client class that performs calls to the kubernetes API server
 *
 * @package Binarygoo\KubernetesAPIClient
 */
class Client {

    /**
     * @var \Binarygoo\KubernetesAPIClient\Config
     */
    protected $_config;

    protected $_podsEndpointObject;

    public function __construct($config = null) {

        if ($config !== null ) $this->config($config);

    }

    /**
     * Sets and/or returns the Config object to be used during the client session
     *
     * If $config parameter is left out or set to null, then system will create an empty Config object and return it so config settings can be set.
     * If $config object provided then that Config object will be used. This object is also returned back so it can be further manipulated.
     *
     * Note: Config object supports method chaining for easier setting of it's properties.
     *
     * @param \Binarygoo\KubernetesAPIClient\IConfig $config
     *
     * @return \Binarygoo\KubernetesAPIClient\Config
     */
    public function config($config = null) {

        if ($config === null) {
            $this->_config = new Config();
        }
        else {
            $this->_config = $config;
        }

        return $this->_config;
    }

    /**
     * Returns the Pods api endpoint object.
     *
     * @return \Binarygoo\KubernetesAPIClient\Endpoint\v1
     */
    public function pods() {
        if ($this->_podsEndpointObject === null) {
            $podsClass = "\\Binarygoo\\KubernetesAPIClient\\Endpoint\\".$this->_config->getAPIVersion()."\\Pods";
            if (class_exists($podsClass)) {
                $this->_podsEndpointObject = new $podsClass($this->_config);
            }
            else {
                throw new ClientException("API Version :".$this->_config->getAPIVersion()." is not currently supported with this client");
            }

        }

        return $this->_podsEndpointObject;
    }

    public function replicationControllers() {
        // TODO
    }

    public function endpoints() {
        // TODO
    }

    public function services() {
        // TODO
    }

    public function minions() {
        // TODO
    }

    public function events() {
        // TODO
    }

    public function bindings() {
        // TODO
    }

} 