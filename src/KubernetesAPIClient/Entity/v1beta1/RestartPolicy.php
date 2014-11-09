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
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyAlways
     */
    public function setAlways($always = null) {
        if ($always === null) {
            $always = new RestartPolicyAlways();
            $always->_setEntityCallback([$this,__METHOD__]);
        }
        $this->always = $always;
        return $this->always;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyNever
     */
    public function getNever() {
        return $this->never;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyNever $never
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyNever
     */
    public function setNever($never = null) {
        if ($never === null) {
            $never = new RestartPolicyNever();
            $never->_setEntityCallback([$this,__METHOD__]);
        }
        $this->never = $never;
        return $this->never;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyOnFailure
     */
    public function getOnFailure() {
        return $this->onFailure;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyOnFailure $onFailure
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\RestartPolicyOnFailure
     */
    public function setOnFailure($onFailure = null) {
        if ($onFailure === null) {
            $onFailure = new RestartPolicyOnFailure();
            $onFailure->_setEntityCallback([$this,__METHOD__]);
        }
        $this->onFailure = $onFailure;
        return  $this->onFailure;
    }



} 