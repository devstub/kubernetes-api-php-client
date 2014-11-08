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

namespace Binarygoo\KubernetesAPIClient\Adapter;

use Binarygoo\KubernetesAPIClient\Config;
use Binarygoo\KubernetesAPIClient\Exception\AdapterException;
use Binarygoo\KubernetesAPIClient\IConfig;
use GuzzleHttp\Client;

class GuzzleAdapter implements IAdapter {

    /**
     * @var \GuzzleHttp\Client
     */
    protected $_client;

    /**
     * @var \Binarygoo\KubernetesAPIClient\Config;
     */
    protected $_config;

    public function __construct(IConfig $config = null) {

        if ($config !== null ) $this->setConfig($config);

    }

    /**
     *
     * Prepares and returns a Guzzle Client
     *
     * @param bool $cache
     *
     * @return Client
     */
    protected function _getClient($cache = true) {

        if ($this->_client === null || $cache === false) {

            if ($this->_config === null ) throw new AdapterException("Could not find the config object", AdapterException::MISSING_CONFIG);

            $defaults = [];
            // prepare any auth settings
            $authType = $this->_config->getAuthType();
            switch(strtolower($authType)) {

                case Config::AUTH_TYPE_HTTP_BASIC:
                    $authOptions = $this->_config->getAuthOptions();
                    if (!isset($authOptions['username']) || !isset($authOptions['password'])) {
                        throw new AdapterException("Auth type :".Config::AUTH_TYPE_HTTP_BASIC." requires 'username' and 'password' options to be set as authOptions", AdapterException::INVALID_AUTH_OPTIONS);
                    }
                    $defaults['auth'] = [$authOptions['username'],$authOptions['password']];
            }

            // prepare the client
            $this->_client = new Client([
                           'base_url' => [$this->_config->getAPINodeUrl().'/'.$this->_config->getAPIVersion().'/'],
                           'defaults' => $defaults
                       ]);
        }

        return $this->_client;

    }

    /**
     * @param IConfig $config
     */
    public function setConfig(IConfig $config) {
            $this->_config = $config;
    }

    /**
     * @param string $path
     * @param null   $options
     *
     * @return mixed|void
     */
    public function sendGETRequest($path, $options = null) {
        // TODO: Implement sendGETRequest() method.
    }

    /**
     * @param string $path
     * @param string $content
     * @param null   $options
     *
     * @return mixed|void
     */
    public function sendPUTRequest($path, $content, $options = null) {
        // TODO: Implement sendPUTRequest() method.
    }

    /**
     * @param string $path
     * @param string $content
     * @param null   $options
     *
     * @return mixed|void
     */
    public function sendPOSTRequest($path, $content, $options = null) {
        // TODO: Implement sendPOSTRequest() method.
    }

    /**
     * @param string $path
     * @param null   $options
     *
     * @return mixed|void
     */
    public function sendDELETERequest($path, $options = null) {
        // TODO: Implement sendDELETERequest() method.
    }

}