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


class MinionList extends TypeMeta {

    private $minions;

    private $items;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Minion
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Minion $items
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Minion
     */
    public function setItems($items) {
        if ($items === null) {
            $items = new Minion();
            $items->_setEntityCallback([$this,__METHOD__]);
        }
        $this->items = $items;
        return $this->items;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Minion
     */
    public function getMinions() {
        return $this->minions;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Minion $minions
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\Minion
     */
    public function setMinions($minions) {
        if ($minions === null) {
            $minions = new Minion();
            $minions->_setEntityCallback([$this,__METHOD__]);
        }
        $this->minions = $minions;
        return $this->minions;
    }



} 