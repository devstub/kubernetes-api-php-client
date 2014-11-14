<?php
/**
 * PHP CLient for Kubernetes API 
 *
 * Copyright 2014 binarygoo Inc. All rights reserved.
 *
 * @author Faruk brbovic <fbrbovic@devstub.com>
 * @link http://www.devstub.com/
 * @copyright 2014 binarygoo / devstub.com
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

namespace DevStub\KubernetesAPIClient\Entity\v1beta1;


use DevStub\KubernetesAPIClient\Entity\BaseEntity;

class ContainerStatus extends BaseEntity implements \JsonSerializable {

    protected $state;

    protected $restartCount;

    protected $podIP;

    protected $image;

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
    public function getPodIP() {
        return $this->podIP;
    }

    /**
     * @param string $podIP
     *
     * @return $this
     */
    public function setPodIP($podIP) {
        $this->podIP = $podIP;
        return $this;
    }

    /**
     * @return int
     */
    public function getRestartCount() {
        return $this->restartCount;
    }

    /**
     * @param int $restartCount
     *
     * @return $this
     */
    public function setRestartCount($restartCount) {
        $this->restartCount = $restartCount;
        return $this;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerState
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerState $state
     *
     * @return $this
     */
    public function setState($state) {
        $this->state = $state;
        return $this;
    }



} 