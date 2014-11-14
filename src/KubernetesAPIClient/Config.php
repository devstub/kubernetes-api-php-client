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

namespace DevStub\KubernetesAPIClient;

/**
 * This class contains common configuration properties that are used by the client
 *
 * @package DevStub\KubernetesAPIClient
 */
class Config implements IConfig {

    const AUTH_TYPE_NONE = 'none';

    const AUTH_TYPE_HTTP_BASIC = "http_basic";

    const CONNECTION_ADAPTER_GUZZLE = "guzzle";

    protected $_apiNodeUrl;

    protected $_apiVersion = 'v1beta1';

    protected $_authType = self::AUTH_TYPE_NONE;

    protected $_authOptions;

    protected $_connectionAdapter = self::CONNECTION_ADAPTER_GUZZLE;

    protected $_sslVerify = true;

    /**
     * Returns the set ssl verification setting
     * @return boolean|string
     */
    public function getSslVerify() {
        return $this->_sslVerify;
    }

    /**
     * Enables or disables the SSL verification.
     * You can also set a path to custom SSL certificate on the disk
     * TRUE - enables the verification
     * FALSE - disabled the verification
     * STRING - path to the custom ssl certificate
     *
     * @param boolean|string $sslVerify
     */
    public function setSslVerify($sslVerify) {
        $this->_sslVerify = $sslVerify;
        return $this;
    }



    /**
     * Sets the kubernetes API node path
     *
     * Example:
     * <code>
     * $config->setAPINodeUrl("https://api.kubernetestesturl.com/api/v1beta1");
     * </code>
     *
     * @param $path
     *
     * @return \DevStub\KubernetesAPIClient\Config
     */
    public function setAPINodeUrl($path) {
        $this->_apiNodeUrl = $path;
        return $this;
    }

    /**
     * returns the kubernetes API node path
     *
     * @return string
     */
    public function getAPINodeUrl() {
        return $this->_apiNodeUrl;
    }

    /**
     * Sets the kubernetes api version
     * @param $version
     *
     * @return \DevStub\KubernetesAPIClient\Config
     */
    public function setAPIVersion($version) {
        $this->_apiVersion = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getAPIVersion() {
        return $this->_apiVersion;
    }

    /**
     * @return string
     */
    public function getAuthType() {
        return $this->_authType;
    }

    /**
     * @return string
     */
    public function getAuthOptions() {
        return $this->_authOptions;
    }

    /**
     * If Kubernetes requires authorization you can set the type of authorization here
     *
     * Current options are:
     * ["none", "http_basic"]
     *
     * @param      $authType
     *
     * @return \DevStub\KubernetesAPIClient\Config
     */
    public function setAuthType($authType) {
        $this->_authType = $authType;
        return $this;
    }

    /**
     * Depending on the Auth type you can use this method to pass additional authorization data like username, password , keys ..etc
     *
     * @param array $options
     *
     * @return \DevStub\KubernetesAPIClient\Config
     */
    public function setAuthOptions($options = null) {
        $this->_authOptions = $options;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConnectionAdapter() {
        return $this->_connectionAdapter;
    }

    /**
     * @param mixed $connectionAdapter
     */
    public function setConnectionAdapter($connectionAdapter) {
        $this->_connectionAdapter = $connectionAdapter;
    }





}