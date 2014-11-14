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
use DevStub\KubernetesAPIClient\Entity\EntityArray;

class ContainerManifest extends BaseEntity implements \JsonSerializable {

    protected $version;

    protected $id;

    protected $uuid;

    protected $volumes;

    protected $containers;

    protected $restartPolicy;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\Container]
     */
    public function getContainers() {
        return $this->containers;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\Container] $containers
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\Container]
     */
    public function setContainers($containers = self::UNIQUE_DEFAULT) {
        if ($containers === self::UNIQUE_DEFAULT) {
            $containers = new ContainerArray();
            $containers->_setEntityCallback([$this,__METHOD__]);
        }
        $this->containers = $containers;
        return $this->containers;
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicy
     */
    public function getRestartPolicy() {
        return $this->restartPolicy;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\RestartPolicy $restartPolicy
     */
    public function setRestartPolicy($restartPolicy = self::UNIQUE_DEFAULT) {
        if ($restartPolicy === self::UNIQUE_DEFAULT) {
            $restartPolicy = new RestartPolicy();
            $restartPolicy->_setEntityCallback([$this,__METHOD__]);
        }

        $this->restartPolicy = $restartPolicy;
    }

    /**
     * @return string
     */
    public function getUuid() {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function setUuid($uuid) {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return $this
     */
    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\VolumeArray []
     */
    public function getVolumes() {
        return $this->volumes;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\VolumeArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\Volume] $volumes
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\VolumeArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\Volume]
     */
    public function setVolumes($volumes = self::UNIQUE_DEFAULT) {
        if ($volumes === self::UNIQUE_DEFAULT) {
            $volumes = new VolumeArray();
            $volumes->_setEntityCallback([$this,__METHOD__]);
        }
        $this->volumes = $volumes;
        return $this->volumes;
    }
    
}
