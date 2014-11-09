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

namespace Binarygoo\KubernetesAPIClient\Endpoint;


use Binarygoo\KubernetesAPIClient\Adapter\GuzzleAdapter;
use Binarygoo\KubernetesAPIClient\Adapter\IAdapter;
use Binarygoo\KubernetesAPIClient\Config;
use Binarygoo\KubernetesAPIClient\Exception\ConfigException;
use Binarygoo\KubernetesAPIClient\IConfig;

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

} 