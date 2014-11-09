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

class StatusDetails extends BaseEntity {

    private $id;

    private $kind;

    private $causes;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StatusCauseArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\StatusCause]
     */
    public function getCauses() {
        return $this->causes;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StatusCauseArray $causes
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\StatusCauseArray[\Binarygoo\KubernetesAPIClient\Entity\v1beta1\StatusCause]
     */
    public function setCauses($causes = null) {
        if ($causes === null) {
            $causes = new StatusCauseArray();
            $causes->_setEntityCallback([$this,__METHOD__]);
        }
        $this->causes = $causes;
        return $this->causes;
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getKind() {
        return $this->kind;
    }

    /**
     * @param string $kind
     *
     * @return $this
     */
    public function setKind($kind) {
        $this->kind = $kind;
        return $this;
    }



} 