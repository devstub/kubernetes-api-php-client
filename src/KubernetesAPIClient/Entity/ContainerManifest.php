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

namespace Binarygoo\KubernetesAPIClient\Entity;


class ContainerManifest extends BaseEntity implements \JsonSerializable {

    private $_version;

    private $_id;

    private $_uuid;

    private $_volumes;

    private $_containers;

    private $_restartPolicy;

    /**
     * @return array
     */
    public function getContainers() {
        return $this->_containers;
    }

    /**
     * @param array $containers
     */
    public function setContainers($containers) {
        $this->_containers = $containers;
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * @param string $id
     */
    public function setId($id) {
        $this->_id = $id;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\RestartPolicy
     */
    public function getRestartPolicy() {
        return $this->_restartPolicy;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\RestartPolicy $restartPolicy
     */
    public function setRestartPolicy($restartPolicy) {
        $this->_restartPolicy = $restartPolicy;
    }

    /**
     * @return string
     */
    public function getUuid() {
        return $this->_uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid($uuid) {
        $this->_uuid = $uuid;
    }

    /**
     * @return string
     */
    public function getVersion() {
        return $this->_version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version) {
        $this->_version = $version;
    }

    /**
     * @return array
     */
    public function getVolumes() {
        return $this->_volumes;
    }

    /**
     * @param array $volumes
     */
    public function setVolumes($volumes) {
        $this->_volumes = $volumes;
    }



    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    function jsonSerialize() {
        return [
            'version' => $this->getVersion() ,
            'id' => $this->getId(),
            'uuid' => $this->getUuid(),
            'volumes' => $this->getVolumes(),
            'containers' => $this->getContainers(),
            'restartPolicy' => $this->getRestartPolicy(),
        ];
    }
}
