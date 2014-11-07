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


class Service extends TypeMeta {

    private $port;

    private $protocol;

    private $labels;

    private $selector;

    private $createExternalLoadBalancer;

    private $containerPort;

    private $portalIP;

    private $proxyPort;

    /**
     * @return string
     */
    public function getContainerPort() {
        return $this->containerPort;
    }

    /**
     * @param string $containerPort
     */
    public function setContainerPort($containerPort) {
        $this->containerPort = $containerPort;
    }

    /**
     * @return boolean
     */
    public function getCreateExternalLoadBalancer() {
        return $this->createExternalLoadBalancer;
    }

    /**
     * @param boolean $createExternalLoadBalancer
     */
    public function setCreateExternalLoadBalancer($createExternalLoadBalancer) {
        $this->createExternalLoadBalancer = $createExternalLoadBalancer;
    }

    /**
     * @return array
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * @param array $labels
     */
    public function setLabels($labels) {
        $this->labels = $labels;
    }

    /**
     * @return int
     */
    public function getPort() {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort($port) {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getPortalIP() {
        return $this->portalIP;
    }

    /**
     * @param string $portalIP
     */
    public function setPortalIP($portalIP) {
        $this->portalIP = $portalIP;
    }

    /**
     * @return string
     */
    public function getProtocol() {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     */
    public function setProtocol($protocol) {
        $this->protocol = $protocol;
    }

    /**
     * @return int
     */
    public function getProxyPort() {
        return $this->proxyPort;
    }

    /**
     * @param int $proxyPort
     */
    public function setProxyPort($proxyPort) {
        $this->proxyPort = $proxyPort;
    }

    /**
     * @return array
     */
    public function getSelector() {
        return $this->selector;
    }

    /**
     * @param array $selector
     */
    public function setSelector($selector) {
        $this->selector = $selector;
    }



} 