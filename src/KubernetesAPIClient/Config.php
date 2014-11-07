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

/**
 * This class contains common configuration properties that are used by the client
 *
 * @package Binarygoo\KubernetesAPIClient
 */
class Config implements IConfig {


    protected $_apiNodeUrl;

    protected $_authUsername;

    protected $_authPassword;

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
     * @return $this
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
     * Sets the auth username to be used when authentication is sent to the APIserver
     * @param $name
     *
     * @return $this
     */
    public function setAuthUsername($name) {
        $this->_authUsername = $name;
        return $this;
    }

    /**
     * Returns the auth username that has been set for the configuration object
     * @return mixed
     */
    public function getAuthUsername() {
        return $this->_authUsername;
    }

    /**
     * Sets the auth password to be used when authentication is sent to the APIserver
     * @param $pass
     *
     * @return $this
     */
    public function setAuthPassword($pass) {
        $this->_authPassword = $pass;
        return $this;
    }

    /**
     * Returns the auth password that has been set for the configuration object
     * @return mixed
     */
    public function getAuthPassword() {
        return $this->_authPassword;
    }
}