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


class VolumeSource  extends BaseEntity {

    private $hostDir;

    private $emptyDir;

    private $persistentDisk;

    private $gitRepo;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\EmptyDir
     */
    public function getEmptyDir() {
        return $this->emptyDir;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\EmptyDir $emptyDir
     */
    public function setEmptyDir($emptyDir) {
        $this->emptyDir = $emptyDir;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\GitRepo
     */
    public function getGitRepo() {
        return $this->gitRepo;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\GitRepo $gitRepo
     */
    public function setGitRepo($gitRepo) {
        $this->gitRepo = $gitRepo;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\HostDir
     */
    public function getHostDir() {
        return $this->hostDir;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\HostDir $hostDir
     */
    public function setHostDir($hostDir) {
        $this->hostDir = $hostDir;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\GCEPersistentDisk
     */
    public function getPersistentDisk() {
        return $this->persistentDisk;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\GCEPersistentDisk $persistentDisk
     */
    public function setPersistentDisk($persistentDisk) {
        $this->persistentDisk = $persistentDisk;
    }


}