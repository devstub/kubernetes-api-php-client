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

class ContainerState extends BaseEntity implements \JsonSerializable {

    protected $waiting;

    protected $running;

    protected $termination;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStateRunning
     */
    public function getRunning() {
        return $this->running;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStateRunning $running
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStateRunning|null
     */
    public function setRunning($running = self::UNIQUE_DEFAULT) {
        if ($running === self::UNIQUE_DEFAULT) {
            $running = new ContainerStateRunning();
            $running->_setEntityCallback([$this,__METHOD__]);
        }

        $this->running = $running;
        return $this->running;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStateTerminated
     */
    public function getTermination() {
        return $this->termination;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStateTerminated $termination
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStateTerminated
     */
    public function setTermination($termination = self::UNIQUE_DEFAULT) {
        if ($termination === self::UNIQUE_DEFAULT) {
            $termination = new ContainerStateTerminated();
            $termination->_setEntityCallback([$this,__METHOD__]);
        }
        $this->termination = $termination;
        return $this->termination;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStateWaiting
     */
    public function getWaiting() {
        return $this->waiting;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStateWaiting $waiting
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ContainerStateWaiting
     */
    public function setWaiting($waiting = self::UNIQUE_DEFAULT) {
        if ($waiting === self::UNIQUE_DEFAULT) {
            $waiting = new ContainerStateWaiting();
            $waiting->_setEntityCallback([$this,__METHOD__]);
        }
        $this->waiting = $waiting;
        return $this->waiting;
    }



} 