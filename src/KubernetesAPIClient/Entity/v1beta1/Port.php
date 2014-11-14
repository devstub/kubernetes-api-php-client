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

namespace DevStub\KubernetesAPIClient\Entity\v1beta1;


use DevStub\KubernetesAPIClient\Entity\BaseEntity;

class Port extends BaseEntity implements \JsonSerializable {

    protected $name;

    protected $hostPort;

    protected $containerPort;

    protected $protocol;

    protected $hostIP;

    /**
     * @return int
     */
    public function getContainerPort() {
        return $this->containerPort;
    }

    /**
     * @param int $containerPort
     *
     * @return $this
     */
    public function setContainerPort($containerPort) {
        $this->containerPort = $containerPort;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostIP() {
        return $this->hostIP;
    }

    /**
     * @param string $hostIP
     *
     * @return $this
     */
    public function setHostIP($hostIP) {
        $this->hostIP = $hostIP;
        return $this;
    }

    /**
     * @return int
     */
    public function getHostPort() {
        return $this->hostPort;
    }

    /**
     * @param int $hostPort
     *
     * @return $this
     */
    public function setHostPort($hostPort) {
        $this->hostPort = $hostPort;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
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


}