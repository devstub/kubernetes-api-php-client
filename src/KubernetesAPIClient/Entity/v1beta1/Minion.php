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


class Minion extends TypeMeta {

    private $hostIP;

    private $resources;

    private $labels;

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
     * @return StringArray
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * @param StringArray $labels
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray
     */
    public function setLabels($labels = null) {
        if ($labels === null) {
            $labels = new StringArray();
            $labels->_setEntityCallback([$this,__METHOD__]);
        }
        $this->labels = $labels;
        return $this->labels;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\NodeResources
     */
    public function getResources() {
        return $this->resources;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\NodeResources $resources
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\NodeResources
     */
    public function setResources($resources = null) {
        if ($resources === null) {
            $resources = new NodeResources();
            $resources->_setEntityCallback([$this,__METHOD__]);
        }
        $this->resources = $resources;
        return $this->resources;
    }


} 