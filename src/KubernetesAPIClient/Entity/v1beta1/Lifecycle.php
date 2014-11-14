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

class Lifecycle extends BaseEntity implements \JsonSerializable {

    protected $postStart;

    protected $preStop;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\Handler
     */
    public function getPostStart() {
        return $this->postStart;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\Handler $postStart
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\Handler
     */
    public function setPostStart($postStart = self::UNIQUE_DEFAULT) {
        if ($postStart === self::UNIQUE_DEFAULT) {
            $postStart = new Handler();
            $postStart->_setEntityCallback([$this,__METHOD__]);
        }
        $this->postStart = $postStart;
        return $this->postStart;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\Handler
     */
    public function getPreStop() {
        return $this->preStop;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\Handler $preStop
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\Handler
     */
    public function setPreStop($preStop = self::UNIQUE_DEFAULT) {
        if ($preStop === self::UNIQUE_DEFAULT) {
            $preStop = new Handler();
            $preStop->_setEntityCallback([$this,__METHOD__]);
        }
        $this->preStop = $preStop;
        return $this->preStop;
    }


} 