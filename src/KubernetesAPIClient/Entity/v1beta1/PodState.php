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


use Binarygoo\KubernetesAPIClient\Entity\BaseEntity;

class PodState extends BaseEntity implements \JsonSerializable {

    protected $manifest;

    protected $status;

    protected $host;

    protected $hostIP;

    protected $podIP;

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
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerManifest
     */
    public function getManifest() {
        return $this->manifest;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerManifest $manifest
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerManifest
     */
    public function setManifest($manifest = null) {
        if ($manifest === null) {
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