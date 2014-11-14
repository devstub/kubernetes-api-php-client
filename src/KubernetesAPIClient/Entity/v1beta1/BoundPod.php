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


class BoundPod extends TypeMeta implements \JsonSerializable
{

    protected $spec;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\PodSpec
     */
    public function getSpec() {
        return $this->spec;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\PodSpec $spec
     *
     * @return $this
     */
    public function setSpec($spec = self::UNIQUE_DEFAULT) {

        if ($spec === self::UNIQUE_DEFAULT) {
            $spec = new PodSpec();
            $spec->_setEntityCallback([$this,__METHOD__]);
        }

        $this->spec = $spec;
        return $this->spec;
    }



} 