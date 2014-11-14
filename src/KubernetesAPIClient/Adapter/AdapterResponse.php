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

namespace DevStub\KubernetesAPIClient\Adapter;


use DevStub\KubernetesAPIClient\Exception\AdapterException;
use DevStub\KubernetesAPIClient\IConfig;

class AdapterResponse {

    private $_content;

    private $_statusCode;

    private $_reasonPhrase;

    private $_headers;

    private $_debugRequest;

    private $_debugResponse;

    private $_jsonMapper;

    /**
     * @var IConfig
     */
    private $_config;


    public function __construct(IConfig $config = null) {

        if ($config !== null ) $this->setConfig($config);

    }

    /**
     * @param IConfig $config
     */
    public function setConfig(IConfig $config) {
        $this->_config = $config;
    }

    /**
     * @return mixed
     */
    public function getDebugRequest() {
        return $this->_debugRequest;
    }

    /**
     * @param mixed $debugRequest
     */
    public function setDebugRequest($debugRequest) {
        $this->_debugRequest = $debugRequest;
    }

    /**
     * @return mixed
     */
    public function getDebugResponse() {
        return $this->_debugResponse;
    }

    /**
     * @param mixed $debugResponse
     */
    public function setDebugResponse($debugResponse) {
        $this->_debugResponse = $debugResponse;
    }

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
    public function getContentRaw() {
        return $this->_content;
    }


    public function getContentObject() {

        $response = null;
        if ($this->_content === null) return null;

        if ($this->_jsonMapper === null) {
            $this->_jsonMapper = new \JsonMapper();
            //$this->_jsonMapper->bExceptionOnMissingData = true;
        }

        $json = json_decode($this->_content);

        if (isset($json->kind) && $json->kind !== null) {
            $response = $this->_jsonMapper->map($json,$this->_getObjectFromKind($json->kind));
        }
        else {
            throw new AdapterException("Invalid response schema, could not locate 'kind' property");
        }
        return $response;
    }

    protected function _getObjectFromKind($kind) {

        if ($this->_config === null) throw new AdapterException('Missing config object, it is required for mapping response to objects');

        $version = $this->_config->getAPIVersion();

        $classToLoad = "\\DevStub\\KubernetesAPIClient\\Entity\\".$version."\\".$kind;

        return new $classToLoad();
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