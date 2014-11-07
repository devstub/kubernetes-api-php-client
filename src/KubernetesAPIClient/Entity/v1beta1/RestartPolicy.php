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


class RestartPolicy extends BaseEntity {

    private $always;

    private $onFailure;

    private $never;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyAlways
     */
    public function getAlways() {
        return $this->always;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyAlways $always
     */
    public function setAlways($always) {
        $this->always = $always;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyNever
     */
    public function getNever() {
        return $this->never;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyNever $never
     */
    public function setNever($never) {
        $this->never = $never;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyOnFailure
     */
    public function getOnFailure() {
        return $this->onFailure;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyOnFailure $onFailure
     */
    public function setOnFailure($onFailure) {
        $this->onFailure = $onFailure;
    }



} 