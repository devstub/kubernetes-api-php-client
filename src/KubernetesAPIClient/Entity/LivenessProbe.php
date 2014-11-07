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

namespace Binarygoo\KubernetesAPIClient\Entity;


class LivenessProbe extends BaseEntity {

    private $httpGet;

    private $tcpSocket;

    private $exec;

    private $initialDelaySeconds;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\ExecAction
     */
    public function getExec() {
        return $this->exec;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\ExecAction $exec
     */
    public function setExec($exec) {
        $this->exec = $exec;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\HTTPGetAction
     */
    public function getHttpGet() {
        return $this->httpGet;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\HTTPGetAction $httpGet
     */
    public function setHttpGet($httpGet) {
        $this->httpGet = $httpGet;
    }

    /**
     * @return int
     */
    public function getInitialDelaySeconds() {
        return $this->initialDelaySeconds;
    }

    /**
     * @param int $initialDelaySeconds
     */
    public function setInitialDelaySeconds($initialDelaySeconds) {
        $this->initialDelaySeconds = $initialDelaySeconds;
    }

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\TCPSocketAction
     */
    public function getTcpSocket() {
        return $this->tcpSocket;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\TCPSocketAction $tcpSocket
     */
    public function setTcpSocket($tcpSocket) {
        $this->tcpSocket = $tcpSocket;
    }


} 