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


class PodSpec extends BaseEntity {

    private $volumes;

    private $containers;

    private $restartPolicy;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Container[]
     */
    public function getContainers() {
        return $this->containers;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Container[] $containers
     */
    public function setContainers($containers) {
        $this->containers = $containers;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicy
     */
    public function getRestartPolicy() {
        return $this->restartPolicy;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicy $restartPolicy
     */
    public function setRestartPolicy($restartPolicy) {
        $this->restartPolicy = $restartPolicy;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Volume[]
     */
    public function getVolumes() {
        return $this->volumes;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Volume[] $volumes
     */
    public function setVolumes($volumes) {
        $this->volumes = $volumes;
    }



} 