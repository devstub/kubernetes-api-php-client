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

class PodState extends BaseEntity implements \JsonSerializable {

    protected $manifest;

    protected $status;

    protected $host;

    protected $hostIP;

    protected $podIP;

    protected $info;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStatusArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStatus]
     */
    public function getInfo() {
        return $this->info;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStatusArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStatus] $info
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStatusArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStatus]
     */
    public function setInfo($info = self::UNIQUE_DEFAULT) {
        if ($info === self::UNIQUE_DEFAULT) {
            $info = new ContainerStatusArray();
            $info->_setEntityCallback([$this,__METHOD__]);
        }
        $this->info = $info;
        return $this->info;

    }



    /**
     * @return string
     */
    public function getHost() {
        return $this->host;
    }

    /**
     * @param string $host
     *
     * @return $this
     */
    public function setHost($host) {
        $this->host = $host;
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
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerManifest
     */
    public function getManifest() {
        return $this->manifest;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerManifest $manifest
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerManifest
     */
    public function setManifest($manifest = self::UNIQUE_DEFAULT) {
        if ($manifest === self::UNIQUE_DEFAULT) {
            $manifest = new ContainerManifest();
            $manifest->_setEntityCallback([$this,__METHOD__]);
        }
        $this->manifest = $manifest;
        return $this->manifest;
    }

    /**
     * @return string
     */
    public function getPodIP() {
        return $this->podIP;
    }

    /**
     * @param string $podIP
     *
     * @return $this
     */
    public function setPodIP($podIP) {
        $this->podIP = $podIP;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }



} 