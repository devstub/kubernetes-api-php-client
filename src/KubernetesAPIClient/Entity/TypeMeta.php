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


class TypeMeta extends BaseEntity implements \JsonSerializable {

    private $_kind;

    private $_id;

    private $_uid;

    private $_creationTimestamp;

    private $_selfLink;

    private $_resourceVersion;

    private $_apiVersion;

    private $_namespace;

    private $_annotations;

    /**
     * @return array
     */
    public function getAnnotations() {
        return $this->_annotations;
    }

    /**
     * @param array $annotations
     */
    public function setAnnotations($annotations) {
        $this->_annotations = $annotations;
    }

    /**
     * @return string
     */
    public function getApiVersion() {
        return $this->_apiVersion;
    }

    /**
     * @param string $apiVersion
     */
    public function setApiVersion($apiVersion) {
        $this->_apiVersion = $apiVersion;
    }

    /**
     * @return string
     */
    public function getCreationTimestamp() {
        return $this->_creationTimestamp;
    }

    /**
     * @param string $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp) {
        $this->_creationTimestamp = $creationTimestamp;
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
     * @return string
     */
    public function getKind() {
        return $this->_kind;
    }

    /**
     * @param string $kind
     */
    public function setKind($kind) {
        $this->_kind = $kind;
    }

    /**
     * @return string
     */
    public function getNamespace() {
        return $this->_namespace;
    }

    /**
     * @param string $namespace
     */
    public function setNamespace($namespace) {
        $this->_namespace = $namespace;
    }

    /**
     * @return string
     */
    public function getResourceVersion() {
        return $this->_resourceVersion;
    }

    /**
     * @param string $resourceVersion
     */
    public function setResourceVersion($resourceVersion) {
        $this->_resourceVersion = $resourceVersion;
    }

    /**
     * @return string
     */
    public function getSelfLink() {
        return $this->_selfLink;
    }

    /**
     * @param string $selfLink
     */
    public function setSelfLink($selfLink) {
        $this->_selfLink = $selfLink;
    }

    /**
     * @return string
     */
    public function getUid() {
        return $this->_uid;
    }

    /**
     * @param string $uid
     */
    public function setUid($uid) {
        $this->_uid = $uid;
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
            'kind' => $this->getKind() ,
            'id' => $this->getId(),
            'uid' => $this->getUid(),
            'creationTimestamp' => $this->getCreationTimestamp(),
            'selfLink' => $this->getSelfLink(),
            'resourceVersion' => $this->getResourceVersion(),
            'apiVersion' => $this->getApiVersion(),
            'namespace' => $this->getNamespace(),
        ];
    }
}