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


class Status extends TypeMeta implements \JsonSerializable {

    protected $status;

    protected $message;

    protected $reason;

    protected $details;

    protected $code;

    /**
     * @return int
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * @param int $code
     *
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\StatusDetails
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\StatusDetails $details
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\StatusDetails
     */
    public function setDetails($details = self::UNIQUE_DEFAULT) {
        if ($details === self::UNIQUE_DEFAULT) {
            $details = new StatusDetails();
            $details->_setEntityCallback([$this,__METHOD__]);
        }
        $this->details = $details;
        return $this->details;
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



} 