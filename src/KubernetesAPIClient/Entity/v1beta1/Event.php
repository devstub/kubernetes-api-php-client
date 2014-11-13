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


class Event extends TypeMeta implements \JsonSerializable {

    protected $involvedObject;

    protected $status;

    protected $reason;

    protected $message;

    protected $source;

    protected $timestamp;

    /**
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ObjectReference
     */
    public function getInvolvedObject() {
        return $this->involvedObject;
    }

    /**
     * @param \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ObjectReference $involvedObject
     *
     * @return \Binarygoo\KubernetesAPIClient\Entity\v1beta1\ObjectReference
     */
    public function setInvolvedObject($involvedObject = self::UNIQUE_DEFAULT) {
        if ($involvedObject === self::UNIQUE_DEFAULT) {
            $involvedObject = new ObjectReference();
            $involvedObject->_setEntityCallback([$this,__METHOD__]);
        }
        $this->involvedObject = $involvedObject;
        return $this->involvedObject;
    }

    /**
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function setReason($reason) {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return $this
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp() {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
        return $this;
    }


} 