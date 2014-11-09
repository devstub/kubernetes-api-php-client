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

namespace Binarygoo\KubernetesAPIClient\Adapter;


class AdapterResponse {

    private $_content;

    private $_statusCode;

    private $_reasonPhrase;

    private $_headers;

    /**
     * @return mixed
     */
    public function getHeaders() {
        return $this->_headers;
    }

    /**
     * @param mixed $headers
     */
    public function setHeaders($headers) {
        $this->_headers = $headers;
    }



    /**
     * @return mixed
     */
    public function getContent() {
        return $this->_content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content) {
        $this->_content = $content;
    }

    /**
     * @return mixed
     */
    public function getReasonPhrase() {
        return $this->_reasonPhrase;
    }

    /**
     * @param mixed $reasonPhrase
     */
    public function setReasonPhrase($reasonPhrase) {
        $this->_reasonPhrase = $reasonPhrase;
    }

    /**
     * @return mixed
     */
    public function getStatusCode() {
        return $this->_statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode) {
        $this->_statusCode = $statusCode;
    }



} 