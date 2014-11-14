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

class LivenessProbe extends BaseEntity implements \JsonSerializable {

    protected $httpGet;

    protected $tcpSocket;

    protected $exec;

    protected $initialDelaySeconds;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ExecAction
     */
    public function getExec() {
        return $this->exec;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\ExecAction $exec
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\ExecAction
     */
    public function setExec($exec = self::UNIQUE_DEFAULT) {
        if ($exec === self::UNIQUE_DEFAULT) {
            $exec = new ExecAction();
            $exec->_setEntityCallback([$this,__METHOD__]);
        }
        $this->exec = $exec;
        return $this->exec;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\HTTPGetAction
     */
    public function getHttpGet() {
        return $this->httpGet;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\HTTPGetAction $httpGet
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\HTTPGetAction
     */
    public function setHttpGet($httpGet = self::UNIQUE_DEFAULT) {
        if ($httpGet === self::UNIQUE_DEFAULT) {
            $httpGet = new HTTPGetAction();
            $httpGet->_setEntityCallback([$this,__METHOD__]);
        }
        $this->httpGet = $httpGet;
        return $this->httpGet;
    }

    /**
     * @return int
     */
    public function getInitialDelaySeconds() {
        return $this->initialDelaySeconds;
    }

    /**
     * @param int $initialDelaySeconds
     *
     * @return $this
     */
    public function setInitialDelaySeconds($initialDelaySeconds) {
        $this->initialDelaySeconds = $initialDelaySeconds;
        return $this;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\TCPSocketAction
     */
    public function getTcpSocket() {
        return $this->tcpSocket;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\TCPSocketAction $tcpSocket
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\TCPSocketAction
     */
    public function setTcpSocket($tcpSocket = self::UNIQUE_DEFAULT) {
        if ($tcpSocket === self::UNIQUE_DEFAULT) {
            $tcpSocket = new TCPSocketAction();
            $tcpSocket->_setEntityCallback([$this,__METHOD__]);
        }
        $this->tcpSocket = $tcpSocket;
        return $this->tcpSocket;
    }


} 