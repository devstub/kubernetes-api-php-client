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

namespace Binarygoo\KubernetesAPIClient\Entity\v1beta1;


class Service extends TypeMeta implements \JsonSerializable {

    protected $port;

    protected $protocol;

    protected $labels;

    protected $selector;

    protected $createExternalLoadBalancer;

    protected $containerPort;

    protected $portalIP;

    protected $proxyPort;

    /**
     * @return string
     */
    public function getContainerPort() {
        return $this->containerPort;
    }

    /**
     * @param string $containerPort
     *
     * @return $this
     */
    public function setContainerPort($containerPort) {
        $this->containerPort = $containerPort;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCreateExternalLoadBalancer() {
        return $this->createExternalLoadBalancer;
    }

    /**
     * @param boolean $createExternalLoadBalancer
     *
     * @return $this
     */
    public function setCreateExternalLoadBalancer($createExternalLoadBalancer) {
        $this->createExternalLoadBalancer = $createExternalLoadBalancer;
        return $this;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray[string] $labels
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function setLabels($labels = self::UNIQUE_DEFAULT) {
        if ($labels === self::UNIQUE_DEFAULT) {
            $labels = new StringArray();
            $labels->_setEntityCallback([$this,__METHOD__]);
        }
        $this->labels = $labels;
        return $this->labels;
    }

    /**
     * @return int
     */
    public function getPort() {
        return $this->port;
    }

    /**
     * @param int $port
     *
     * @return $this
     */
    public function setPort($port) {
        $this->port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getPortalIP() {
        return $this->portalIP;
    }

    /**
     * @param string $portalIP
     *
     * @return $this
     */
    public function setPortalIP($portalIP) {
        $this->portalIP = $portalIP;
        return $this;
    }

    /**
     * @return string
     */
    public function getProtocol() {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     *
     * @return $this
     */
    public function setProtocol($protocol) {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * @return int
     */
    public function getProxyPort() {
        return $this->proxyPort;
    }

    /**
     * @param int $proxyPort
     *
     * @return $this
     */
    public function setProxyPort($proxyPort) {
        $this->proxyPort = $proxyPort;
        return $this;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function getSelector() {
        return $this->selector;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray[string] $selector
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function setSelector($selector = self::UNIQUE_DEFAULT) {
        if ($selector === self::UNIQUE_DEFAULT) {
            $selector = new StringArray();
            $selector->_setEntityCallback([$this,__METHOD__]);
        }
        $this->selector = $selector;
        return $this->selector;
    }



} 