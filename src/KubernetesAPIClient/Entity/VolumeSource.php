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


class VolumeSource  extends BaseEntity implements \JsonSerializable {

    private $_hostDir;

    private $_emptyDir;

    private $_persistentDisk;

    private $_gitRepo;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\EmptyDir
     */
    public function getEmptyDir() {
        return $this->_emptyDir;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\EmptyDir $emptyDir
     */
    public function setEmptyDir($emptyDir) {
        $this->_emptyDir = $emptyDir;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\GitRepo
     */
    public function getGitRepo() {
        return $this->_gitRepo;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\GitRepo $gitRepo
     */
    public function setGitRepo($gitRepo) {
        $this->_gitRepo = $gitRepo;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\HostDir
     */
    public function getHostDir() {
        return $this->_hostDir;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\HostDir $hostDir
     */
    public function setHostDir($hostDir) {
        $this->_hostDir = $hostDir;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\GCEPersistentDisk
     */
    public function getPersistentDisk() {
        return $this->_persistentDisk;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\GCEPersistentDisk $persistentDisk
     */
    public function setPersistentDisk($persistentDisk) {
        $this->_persistentDisk = $persistentDisk;
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
            'hostDir' => $this->getHostDir() ,
            'emptyDir' => $this->getEmptyDir(),
            'persistentDisk' => $this->getPersistentDisk() ,
            'gitRepo' => $this->getGitRepo(),
        ];
    }

}