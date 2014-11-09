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

class TypeMeta extends BaseEntity {

    private $kind;

    private $id;

    private $uid;

    private $creationTimestamp;

    private $selfLink;

    private $resourceVersion;

    private $apiVersion;

    private $namespace;

    private $annotations;

    /**
     * @return StringArray
     */
    public function getAnnotations() {
        return $this->annotations;
    }

    /**
     * @param StringArray $annotations
     *
     * @return StringArray
     */
    public function setAnnotations($annotations = null) {
        if ($annotations === null) {
            $annotations = new StringArray();
            $annotations->_setEntityCallback([$this,__METHOD__]);
        }
        $this->annotations = $annotations;
        return $this->annotations;
    }

    /**
     * @return string
     */
    public function getApiVersion() {
        return $this->apiVersion;
    }

    /**
     * @param string $apiVersion
     *
     * @return $this
     */
    public function setApiVersion($apiVersion) {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreationTimestamp() {
        return $this->creationTimestamp;
    }

    /**
     * @param string $creationTimestamp
     *
     * @return $this
     */
    public function setCreationTimestamp($creationTimestamp) {
        $this->creationTimestamp = $creationTimestamp;
        return $this;
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
     * @return string
     */
    public function getKind() {
        return $this->kind;
    }

    /**
     * @param string $kind
     *
     * @return $this
     */
    public function setKind($kind) {
        $this->kind = $kind;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamespace() {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     *
     * @return $this
     */
    public function setNamespace($namespace) {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * @return string
     */
    public function getResourceVersion() {
        return $this->resourceVersion;
    }

    /**
     * @param string $resourceVersion
     *
     * @return $this
     */
    public function setResourceVersion($resourceVersion) {
        $this->resourceVersion = $resourceVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getSelfLink() {
        return $this->selfLink;
    }

    /**
     * @param string $selfLink
     *
     * @return $this
     */
    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getUid() {
        return $this->uid;
    }

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid) {
        $this->uid = $uid;
        return $this;
    }

}