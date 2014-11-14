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

class HTTPGetAction extends BaseEntity implements \JsonSerializable {

    protected $path;

    protected $port;

    protected $host;


    /**
     * @return string
     */
    public function getHost() {
        return $this->host;
    }

    /**
     * @param string $host
     *
     * @return $this
     */
    public function setHost($host) {
        $this->host = $host;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path) {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getPort() {
        return $this->port;
    }

    /**
     * @param string $port
     *
     * @return $this
     */
    public function setPort($port) {
        $this->port = $port;
        return $this;
    }

} 