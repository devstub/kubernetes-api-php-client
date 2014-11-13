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

class Container extends BaseEntity implements \JsonSerializable {

    protected $name;

    protected $image;

    protected $command;

    protected $workingDir;

    protected $ports;

    protected $env;

    protected $memory;

    protected $cpu;

    protected $volumeMounts;

    protected $livenessProbe;

    protected $lifecycle;

    protected $privileged;

    protected $imagePullPolicy;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function getCommand() {
        return $this->command;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray[string] $command
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function setCommand($command = self::UNIQUE_DEFAULT) {
        if ($command === self::UNIQUE_DEFAULT) {
            $command = new StringArray();
            $command->_setEntityCallback([$this,__METHOD__]);
        }
        $this->command = $command;
        return $this->command;
    }

    /**
     * @return int
     */
    public function getCpu() {
        return $this->cpu;
    }

    /**
     * @param int $cpu
     *
     * @return $this
     */
    public function setCpu($cpu) {
        $this->cpu = $cpu;
        return $this;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\EnvVarArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\EnvVar]
     */
    public function getEnv() {
        return $this->env;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\EnvVarArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\EnvVar] $env
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\EnvVarArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\EnvVar] $env
     */
    public function setEnv($env = self::UNIQUE_DEFAULT) {
        if ($env === self::UNIQUE_DEFAULT) {
            $env = new EnvVarArray();
            $env->_setEntityCallback([$this,__METHOD__]);
        }

        $this->env = $env;
        return $this->env;
    }

    /**
     * @return string
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * @param string $image
     *
     * @return $this
     */
    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getImagePullPolicy() {
        return $this->imagePullPolicy;
    }

    /**
     * @param string $imagePullPolicy
     *
     * @return $this
     */
    public function setImagePullPolicy($imagePullPolicy) {
        $this->imagePullPolicy = $imagePullPolicy;
        return $this;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Lifecycle
     */
    public function getLifecycle() {
        return $this->lifecycle;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Lifecycle $lifecycle
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Lifecycle
     */
    public function setLifecycle($lifecycle = self::UNIQUE_DEFAULT) {
        if ($lifecycle === self::UNIQUE_DEFAULT) {
            $lifecycle = new Lifecycle();
            $lifecycle->_setEntityCallback([$this,__METHOD__]);
        }

        $this->lifecycle = $lifecycle;
        return $this->lifecycle;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\LivenessProbe
     */
    public function getLivenessProbe() {
        return $this->livenessProbe;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\LivenessProbe $livenessProbe
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\LivenessProbe|null
     */
    public function setLivenessProbe($livenessProbe = self::UNIQUE_DEFAULT) {

        if ($livenessProbe === self::UNIQUE_DEFAULT) {
            $livenessProbe = new LivenessProbe();
            $livenessProbe->_setEntityCallback([$this,__METHOD__]);
        }

        $this->livenessProbe = $livenessProbe;
        return $this->livenessProbe;
    }

    /**
     * @return int
     */
    public function getMemory() {
        return $this->memory;
    }

    /**
     * @param int $memory
     *
     * @return $this
     */
    public function setMemory($memory) {
        $this->memory = $memory;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\PortArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\Port]
     */
    public function getPorts() {
        return $this->ports;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\PortArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\Port] $ports
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\PortArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\Port] $ports
     */
    public function setPorts($ports = self::UNIQUE_DEFAULT) {

        if ($ports === self::UNIQUE_DEFAULT) {
            $ports = new PortArray();
            $ports->_setEntityCallback([$this,__METHOD__]);
        }
        $this->ports = $ports;
        return $this->ports;
    }

    /**
     * @return boolean
     */
    public function getPrivileged() {
        return $this->privileged;
    }

    /**
     * @param boolean $privileged
     *
     * @return $this
     */
    public function setPrivileged($privileged) {
        $this->privileged = $privileged;
        return $this;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\VolumeMountArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\VolumeMount]
     */
    public function getVolumeMounts() {
        return $this->volumeMounts;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\VolumeMountArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\VolumeMount] $volumeMounts
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\VolumeMountArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\VolumeMount]
     */
    public function setVolumeMounts($volumeMounts = self::UNIQUE_DEFAULT) {
        if ($volumeMounts === self::UNIQUE_DEFAULT) {
            $volumeMounts = new VolumeMountArray();
            $volumeMounts->_setEntityCallback([$this,__METHOD__]);
        }
        $this->volumeMounts = $volumeMounts;
        return $this->volumeMounts;
    }

    /**
     * @return string
     */
    public function getWorkingDir() {
        return $this->workingDir;
    }

    /**
     * @param string $workingDir
     *
     * @return $this
     */
    public function setWorkingDir($workingDir) {
        $this->workingDir = $workingDir;
        return $this;
    }


} 