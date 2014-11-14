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


class MinionList extends TypeMeta implements \JsonSerializable {

    protected $minions;

    protected $items;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\Minion
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\MinionArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\Minion] $items
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\MinionArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\Minion]
     */
    public function setItems($items = self::UNIQUE_DEFAULT) {
        if ($items === self::UNIQUE_DEFAULT) {
            $items = new MinionArray();
            $items->_setEntityCallback([$this,__METHOD__]);
        }
        $this->items = $items;
        return $this->items;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\Minion
     */
    public function getMinions() {
        return $this->minions;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\MinionArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\Minion] $minions
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\MinionArray[\DevStub\KubernetesAPIClient\Entity\v1beta1\Minion]
     */
    public function setMinions($minions = self::UNIQUE_DEFAULT) {
        if ($minions === self::UNIQUE_DEFAULT) {
            $minions = new MinionArray();
            $minions->_setEntityCallback([$this,__METHOD__]);
        }
        $this->minions = $minions;
        return $this->minions;
    }



} 