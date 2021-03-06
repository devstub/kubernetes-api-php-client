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

class ReplicationControllerState extends BaseEntity implements \JsonSerializable {

    protected $replicas;

    protected $replicaSelector;

    protected $podTemplate;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\PodTemplate
     */
    public function getPodTemplate() {
        return $this->podTemplate;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\PodTemplate $podTemplate
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\PodTemplate
     */
    public function setPodTemplate($podTemplate = self::UNIQUE_DEFAULT) {
        if ($podTemplate === self::UNIQUE_DEFAULT) {
            $podTemplate = new PodTemplate();
            $podTemplate->_setEntityCallback([$this,__METHOD__]);
        }
        $this->podTemplate = $podTemplate;
        return $this->podTemplate;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function getReplicaSelector() {
        return $this->replicaSelector;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\StringArray[string] $replicaSelector
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function setReplicaSelector($replicaSelector = self::UNIQUE_DEFAULT) {
        if ($replicaSelector === self::UNIQUE_DEFAULT) {
            $replicaSelector = new StringArray();
            $replicaSelector->_setEntityCallback([$this,__METHOD__]);
        }
        $this->replicaSelector = $replicaSelector;
        return $this->replicaSelector;
    }

    /**
     * @return int
     */
    public function getReplicas() {
        return $this->replicas;
    }

    /**
     * @param int $replicas
     *
     * @return $this
     */
    public function setReplicas($replicas) {
        $this->replicas = $replicas;
        return $this;
    }



} 