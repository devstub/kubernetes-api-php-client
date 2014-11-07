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
     * @return array
     */
    public function getAnnotations() {
        return $this->annotations;
    }

    /**
     * @param array $annotations
     */
    public function setAnnotations($annotations) {
        $this->annotations = $annotations;
    }

    /**
     * @return string
     */
    public function getApiVersion() {
        return $this->apiVersion;
    }

    /**
     * @param string $apiVersion
     */
    public function setApiVersion($apiVersion) {
        $this->apiVersion = $apiVersion;
    }

    /**
     * @return string
     */
    public function getCreationTimestamp() {
        return $this->creationTimestamp;
    }

    /**
     * @param string $creationTimestamp
     */
    public function setCreationTimestamp($creationTimestamp) {
        $this->creationTimestamp = $creationTimestamp;
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getKind() {
        return $this->kind;
    }

    /**
     * @param string $kind
     */
    public function setKind($kind) {
        $this->kind = $kind;
    }

    /**
     * @return string
     */
    public function getNamespace() {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     */
    public function setNamespace($namespace) {
        $this->namespace = $namespace;
    }

    /**
     * @return string
     */
    public function getResourceVersion() {
        return $this->resourceVersion;
    }

    /**
     * @param string $resourceVersion
     */
    public function setResourceVersion($resourceVersion) {
        $this->resourceVersion = $resourceVersion;
    }

    /**
     * @return string
     */
    public function getSelfLink() {
        return $this->selfLink;
    }

    /**
     * @param string $selfLink
     */
    public function setSelfLink($selfLink) {
        $this->selfLink = $selfLink;
    }

    /**
     * @return string
     */
    public function getUid() {
        return $this->uid;
    }

    /**
     * @param string $uid
     */
    public function setUid($uid) {
        $this->uid = $uid;
    }

}