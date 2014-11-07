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


class GCEPersistentDisk  extends BaseEntity  {


    private $pdName;

    private $fsType;

    private $partition;

    private $readOnly;

    /**
     * @return string
     */
    public function getFsType() {
        return $this->fsType;
    }

    /**
     * @param string $fsType
     */
    public function setFsType($fsType) {
        $this->fsType = $fsType;
    }

    /**
     * @return int
     */
    public function getPartition() {
        return $this->partition;
    }

    /**
     * @param int $partition
     */
    public function setPartition($partition) {
        $this->partition = $partition;
    }

    /**
     * @return string
     */
    public function getPdName() {
        return $this->pdName;
    }

    /**
     * @param string $pdName
     */
    public function setPdName($pdName) {
        $this->pdName = $pdName;
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
    public function setReadOnly($readOnly) {
        $this->readOnly = $readOnly;
    }


}