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

namespace DevStub\KubernetesAPIClient\Endpoint;


use DevStub\KubernetesAPIClient\Adapter\GuzzleAdapter;
use DevStub\KubernetesAPIClient\Adapter\IAdapter;
use DevStub\KubernetesAPIClient\Config;
use DevStub\KubernetesAPIClient\Entity\BaseEntity;
use DevStub\KubernetesAPIClient\Exception\ClientException;
use DevStub\KubernetesAPIClient\Exception\ConfigException;
use DevStub\KubernetesAPIClient\IConfig;

class BaseEndpoint {

    /**
     * @var IConfig
     */
    protected $_config;

    /**
     * @var IAdapter
     */
    protected $_adapter;

    public function __construct($config) {

        // only objects that implement IConfig interface are allowed to be passed for $config
        if (!($config instanceof IConfig)) {
            throw new ConfigException("Invalid type for \$config parameter, it must implement IConfig interface ");
        }

        $this->_config = $config;

        $connectionAdapter = $this->_config->getConnectionAdapter();

        switch(strtolower($connectionAdapter)) {
            case Config::CONNECTION_ADAPTER_GUZZLE:
                $this->_adapter = new GuzzleAdapter($config);
                break;

            default:
                throw new ConfigException("Invalid Connection Adapter set", ConfigException::INVALID_ADAPTER);
                break;
        }

    }

    /**
     * @param $path
     * @param $inputParam
     * @param $classUsed
     * @param $callBackArray
     * @param $responseAdapter
     *
     * @return object|null
     */
    protected function _prepareCreate($path, $inputParam, $classUsed, $callBackArray, &$responseAdapter) {

        if (is_string($inputParam)) {

            $responseAdapter = $this->_adapter->sendPOSTRequest($path,$inputParam);
            return null;

        }
        else if (is_object($inputParam)) {
            if (!($inputParam instanceof $classUsed)) {
                throw new ClientException("Invalid type, provided object  must be an instance of $classUsed");
            }

            $responseAdapter = $this->_adapter->sendPOSTRequest($path,$inputParam);
            return null;

        }
        else if ($inputParam === null ) {

            /** @var $inputParam BaseEntity */
            $inputParam = new $classUsed();
            $inputParam->_setEntityCallback( $callBackArray);
            $inputParam->_setEntityResponseObjectRef($responseAdapter);

            return $inputParam;
        }
        else {
            throw new ClientException("Invalid input type provided");
        }

    }

    /**
     * @param $path
     * @param $id
     * @param $inputParam
     * @param $classUsed
     * @param $callBackArray
     * @param $responseAdapter
     *
     * @return object|null
     */
    protected function _prepareUpdate($path, $id, $inputParam, $classUsed, $callBackArray, &$responseAdapter) {

        if ($id !== null) {
            $path .= "/".$id;
        }
        else {
            throw new ClientException("Id needs to be set ");
        }

        if (is_string($inputParam)) {

            $responseAdapter = $this->_adapter->sendPUTRequest($path,$inputParam);
            return null;

        }
        else if (is_object($inputParam)) {
            if (!($inputParam instanceof $classUsed)) {
                throw new ClientException("Invalid type, provided object  must be an instance of $classUsed");
            }

            $responseAdapter = $this->_adapter->sendPUTRequest($path,$inputParam);
            return null;

        }
        else if ($inputParam === null ) {

            /** @var $inputParam BaseEntity */
            $inputParam = new $classUsed();
            $inputParam->_setEntityCallback( $callBackArray);
            $inputParam->_setEntityResponseObjectRef($responseAdapter);
            $inputParam->_setEntityCallbackId($id);

            return $inputParam;
        }
        else {
            throw new ClientException("Invalid input type provided");
        }

    }

} 