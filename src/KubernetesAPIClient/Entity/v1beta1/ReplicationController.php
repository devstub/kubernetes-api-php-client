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


class ReplicationController extends TypeMeta {

    private $desiredState;

    private $currentState;

    private $labels;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ReplicationControllerState
     */
    public function getCurrentState() {
        return $this->currentState;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ReplicationControllerState $currentState
     */
    public function setCurrentState($currentState) {
        $this->currentState = $currentState;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ReplicationControllerState
     */
    public function getDesiredState() {
        return $this->desiredState;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ReplicationControllerState $desiredState
     */
    public function setDesiredState($desiredState) {
        $this->desiredState = $desiredState;
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


} 