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


use DevStub\KubernetesAPIClient\Entity\EntityArray;

class MinionArray   extends EntityArray  implements \JsonSerializable {

    /**
     * Appends the value at the end of the array
     *
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\Minion|NULL $value
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\Minion
     */
    public function append($value = self::UNIQUE_DEFAULT) {
        if ($value === self::UNIQUE_DEFAULT) {
            $value = new Minion();
            $value->_setEntityCallback([$this,__METHOD__]);
        }
        else {
            $this->_data[] = $value;
        }

        return $value;
    }

    /**
     * Inserts the value at $index
     * @param mixed $index
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\Minion $value
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\Minion
     */
    public function insert($value = self::UNIQUE_DEFAULT, $index = null) {

        if ($value === self::UNIQUE_DEFAULT) {
            $value = new Minion();
            $value->_setEntityCallback([$this,__METHOD__]);
        }
        else {
            $this->_data[$index] = $value;
        }

        return $value;
    }

} 