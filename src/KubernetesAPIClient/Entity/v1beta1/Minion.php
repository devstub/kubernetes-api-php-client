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
     */
    public function setHostIP($hostIP) {
        $this->hostIP = $hostIP;
    }

    /**
     * @return array
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * @param array $labels
     */
    public function setLabels($labels) {
        $this->labels = $labels;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\NodeResources
     */
    public function getResources() {
        return $this->resources;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\NodeResources $resources
     */
    public function setResources($resources) {
        $this->resources = $resources;
    }


} 