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


use Binarygoo\KubernetesAPIClient\Entity\BaseEntity;

class ReplicationControllerState extends BaseEntity implements \JsonSerializable {

    protected $replicas;

    protected $replicaSelector;

    protected $podTemplate;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\PodTemplate
     */
    public function getPodTemplate() {
        return $this->podTemplate;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\PodTemplate $podTemplate
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\PodTemplate
     */
    public function setPodTemplate($podTemplate = null) {
        if ($podTemplate === null) {
            $podTemplate = new PodTemplate();
            $podTemplate->_setEntityCallback([$this,__METHOD__]);
        }
        $this->podTemplate = $podTemplate;
        return $this->podTemplate;
    }

    /**
     * @return StringArray
     */
    public function getReplicaSelector() {
        return $this->replicaSelector;
    }

    /**
     * @param StringArray $replicaSelector
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StringArray
     */
    public function setReplicaSelector($replicaSelector = null) {
        if ($replicaSelector === null) {
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