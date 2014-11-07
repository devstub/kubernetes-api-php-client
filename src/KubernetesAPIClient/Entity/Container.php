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


class Container extends BaseEntity {

    private $name;

    private $image;

    private $command;

    private $workingDir;

    private $ports;

    private $env;

    private $memory;

    private $cpu;

    private $volumeMounts;

    private $livenessProbe;

    private $lifecycle;

    private $privileged;

    private $imagePullPolicy;

    /**
     * @return string[]
     */
    public function getCommand() {
        return $this->command;
    }

    /**
     * @param string[] $command
     */
    public function setCommand($command) {
        $this->command = $command;
    }

    /**
     * @return int
     */
    public function getCpu() {
        return $this->cpu;
    }

    /**
     * @param int $cpu
     */
    public function setCpu($cpu) {
        $this->cpu = $cpu;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\EnvVar[]
     */
    public function getEnv() {
        return $this->env;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\EnvVar[] $env
     */
    public function setEnv($env) {
        $this->env = $env;
    }

    /**
     * @return string
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image) {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImagePullPolicy() {
        return $this->imagePullPolicy;
    }

    /**
     * @param string $imagePullPolicy
     */
    public function setImagePullPolicy($imagePullPolicy) {
        $this->imagePullPolicy = $imagePullPolicy;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\Lifecycle
     */
    public function getLifecycle() {
        return $this->lifecycle;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\Lifecycle $lifecycle
     */
    public function setLifecycle($lifecycle) {
        $this->lifecycle = $lifecycle;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\LivenessProbe
     */
    public function getLivenessProbe() {
        return $this->livenessProbe;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\LivenessProbe $livenessProbe
     */
    public function setLivenessProbe($livenessProbe) {
        $this->livenessProbe = $livenessProbe;
    }

    /**
     * @return int
     */
    public function getMemory() {
        return $this->memory;
    }

    /**
     * @param int $memory
     */
    public function setMemory($memory) {
        $this->memory = $memory;
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
     * @return \Binarygoo\KubernetesAPIClient\Entity\Port[]
     */
    public function getPorts() {
        return $this->ports;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\Port[] $ports
     */
    public function setPorts($ports) {
        $this->ports = $ports;
    }

    /**
     * @return boolean
     */
    public function getPrivileged() {
        return $this->privileged;
    }

    /**
     * @param boolean $privileged
     */
    public function setPrivileged($privileged) {
        $this->privileged = $privileged;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\VolumeMount[]
     */
    public function getVolumeMounts() {
        return $this->volumeMounts;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\VolumeMount[] $volumeMounts
     */
    public function setVolumeMounts($volumeMounts) {
        $this->volumeMounts = $volumeMounts;
    }

    /**
     * @return string
     */
    public function getWorkingDir() {
        return $this->workingDir;
    }

    /**
     * @param string $workingDir
     */
    public function setWorkingDir($workingDir) {
        $this->workingDir = $workingDir;
    }


} 