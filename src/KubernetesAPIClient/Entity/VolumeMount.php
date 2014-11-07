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


class VolumeMount  extends BaseEntity  {

    private $name;

    private $readOnly;

    private $mountPath;

    private $path;

    private $mountType;

    /**
     * @return string
     */
    public function getMountPath() {
        return $this->mountPath;
    }

    /**
     * @param string $mountPath
     */
    public function setMountPath($mountPath) {
        $this->mountPath = $mountPath;
    }

    /**
     * @return string
     */
    public function getMountType() {
        return $this->mountType;
    }

    /**
     * @param string $mountType
     */
    public function setMountType($mountType) {
        $this->mountType = $mountType;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path) {
        $this->path = $path;
    }

    /**
     * @return boolean
     */
    public function getReadOnly() {
        return $this->readOnly;
    }

    /**
     * @param boolean $readOnly
     */
    public function setReadOnly( $readOnly) {
        $this->readOnly = $readOnly;
    }



} 