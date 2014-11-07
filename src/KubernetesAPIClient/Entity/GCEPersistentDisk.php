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


class GCEPersistentDisk  extends BaseEntity implements \JsonSerializable {


    private $_pdName;

    private $_fsType;

    private $_partition;

    private $_readOnly;

    /**
     * @return string
     */
    public function getFsType() {
        return $this->_fsType;
    }

    /**
     * @param string $fsType
     */
    public function setFsType($fsType) {
        $this->_fsType = $fsType;
    }

    /**
     * @return int
     */
    public function getPartition() {
        return $this->_partition;
    }

    /**
     * @param int $partition
     */
    public function setPartition($partition) {
        $this->_partition = $partition;
    }

    /**
     * @return string
     */
    public function getPdName() {
        return $this->_pdName;
    }

    /**
     * @param string $pdName
     */
    public function setPdName($pdName) {
        $this->_pdName = $pdName;
    }

    /**
     * @return boolean
     */
    public function getReadOnly() {
        return $this->_readOnly;
    }

    /**
     * @param boolean $readOnly
     */
    public function setReadOnly($readOnly) {
        $this->_readOnly = $readOnly;
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
            'pdName' => $this->getPdName() ,
            'fsType' => $this->getFsType() ,
            'partition' => $this->getPartition() ,
            'readOnly' => $this->getReadOnly() ,
        ];
    }

}