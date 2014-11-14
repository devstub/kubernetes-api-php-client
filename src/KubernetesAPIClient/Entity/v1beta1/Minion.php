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


class Minion extends TypeMeta implements \JsonSerializable {

    protected $hostIP;

    protected $resources;

    protected $labels;

    /**
     * @return string
     */
    public function getHostIP() {
        return $this->hostIP;
    }

    /**
     * @param string $hostIP
     *
     * @return $this
     */
    public function setHostIP($hostIP) {
        $this->hostIP = $hostIP;
        return $this;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\StringArray[string] $labels
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\StringArray
     */
    public function setLabels($labels = self::UNIQUE_DEFAULT) {
        if ($labels === self::UNIQUE_DEFAULT) {
            $labels = new StringArray();
            $labels->_setEntityCallback([$this,__METHOD__]);
        }
        $this->labels = $labels;
        return $this->labels;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\NodeResources
     */
    public function getResources() {
        return $this->resources;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\NodeResources $resources
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\NodeResources
     */
    public function setResources($resources = self::UNIQUE_DEFAULT) {
        if ($resources === self::UNIQUE_DEFAULT) {
            $resources = new NodeResources();
            $resources->_setEntityCallback([$this,__METHOD__]);
        }
        $this->resources = $resources;
        return $this->resources;
    }


} 