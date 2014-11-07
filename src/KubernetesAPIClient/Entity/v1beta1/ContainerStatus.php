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


class ContainerStatus extends BaseEntity {

    private $state;

    private $restartCount;

    private $podIP;

    private $image;

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
    public function getPodIP() {
        return $this->podIP;
    }

    /**
     * @param string $podIP
     */
    public function setPodIP($podIP) {
        $this->podIP = $podIP;
    }

    /**
     * @return int
     */
    public function getRestartCount() {
        return $this->restartCount;
    }

    /**
     * @param int $restartCount
     */
    public function setRestartCount($restartCount) {
        $this->restartCount = $restartCount;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerState
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ContainerState $state
     */
    public function setState($state) {
        $this->state = $state;
    }



} 