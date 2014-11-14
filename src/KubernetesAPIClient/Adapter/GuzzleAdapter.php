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

use DevStub\KubernetesAPIClient\Config;
use DevStub\KubernetesAPIClient\Entity\BaseEntity;
use DevStub\KubernetesAPIClient\Exception\AdapterException;
use DevStub\KubernetesAPIClient\IConfig;
use GuzzleHttp\Client;
use GuzzleHttp\Event\ErrorEvent;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ServerException;

class GuzzleAdapter implements IAdapter {

    /**
     * @var \GuzzleHttp\Client
     */
    protected $_client;

    /**
     * @var \DevStub\KubernetesAPIClient\Config;
     */
    protected $_config;

    public function __construct(IConfig $config = null) {

        if ($config !== null ) $this->setConfig($config);

    }

    /**
     *
     * Prepares and returns a Guzzle Client
     *
     * @param bool $cache
     *
     * @return Client
     */
    protected function _getClient($cache = true) {

        if ($this->_client === null || $cache === false) {

            if ($this->_config === null ) throw new AdapterException("Could not find the config object",
                                                                     AdapterException::MISSING_CONFIG);

            $defaults = [];
            // prepare any auth settings
            $authType = $this->_config->getAuthType();
            switch(strtolower($authType)) {

                case Config::AUTH_TYPE_HTTP_BASIC:
                    $authOptions = $this->_config->getAuthOptions();
                    if (!isset($authOptions['username']) || !isset($authOptions['password'])) {
                        throw new AdapterException("Auth type :".Config::AUTH_TYPE_HTTP_BASIC
                                                   ." requires 'username' and 'password' options to be set as authOptions",
                                                   AdapterException::INVALID_AUTH_OPTIONS);
                    }
                    $defaults['auth'] = [$authOptions['username'],$authOptions['password']];

            }

            // prepare the client
            $this->_client = new Client([
                           'base_url' => rtrim($this->_config->getAPINodeUrl(), '/').'/'.trim($this->_config->getAPIVersion(),'/').'/',
                           'defaults' => $defaults
                       ]);
        }

        return $this->_client;

    }

    /**
     * @param IConfig $config
     */
    public function setConfig(IConfig $config) {
            $this->_config = $config;
    }

    /**
     * @param string $path
     * @param null   $options
     *
     * @return AdapterResponse
     */
    public function sendGETRequest($path, $options = null) {
        $client = $this->_getClient();

        $clientOptions = [];
        $this->_processConfigOptions($clientOptions);
        if (is_array($options) && isset($options['headers'])) {
            $clientOptions['headers'] = $options['headers'];
        }
        try {
            $request = $client->createRequest('GET', $path, $clientOptions);
            $response = $client->send($request);

        } catch (RequestException $e) {
            $response = null;
            $request = $e->getRequest();
            if ($e->hasResponse()) {
                $response = $e->getResponse();
            }
            return $this->_processResponse($response,$request);
        }

        return $this->_processResponse($response,$request);
    }

    /**
     * @param string $path
     * @param string $content
     * @param null   $options
     *
     * @return AdapterResponse
     */
    public function sendPUTRequest($path, $content, $options = null) {
        $client = $this->_getClient();

        $clientOptions = [];
        $this->_processConfigOptions($clientOptions);
        $clientOptions['body'] = $this->_processContent($content);

        $clientOptions['headers'] = ['Accept' => '*/*',
                                     'Content-Type' => 'application/json',
                                     'Accept-Encoding' => 'gzip,deflate'
                                    ];
        if (is_array($options) && isset($options['headers'])) {
            $clientOptions['headers'] = array_merge($clientOptions['headers'],$options['headers']);
        }

        try {
            $request = $client->createRequest('PUT', $path, $clientOptions);
            $response = $client->send($request);

        } catch (RequestException $e) {
            $response = null;
            $request = $e->getRequest();
            if ($e->hasResponse()) {
                $response = $e->getResponse();
            }
            return $this->_processResponse($response,$request);
        }

        return $this->_processResponse($response,$request);
    }

    /**
     * @param string $path
     * @param string $content
     * @param null   $options
     *
     * @internal param null $clientOptions
     *
     * @return AdapterResponse
     */
    public function sendPOSTRequest($path, $content, $options = null) {
        $client = $this->_getClient();

        $clientOptions = [];
        $this->_processConfigOptions($clientOptions);
        $clientOptions['body'] = $this->_processContent($content);
        $clientOptions['headers'] = ['Accept' => '*/*',
                                     'Content-Type' => 'application/json',
                                     'Accept-Encoding' => 'gzip,deflate'
        ];
        if (is_array($options) && isset($options['headers'])) {
            $clientOptions['headers'] = array_merge($clientOptions['headers'],$options['headers']);
        }

        try {
            $request = $client->createRequest('POST', $path, $clientOptions);
            $response = $client->send($request);

        } catch (RequestException $e) {
            $response = null;
            $request = $e->getRequest();
            if ($e->hasResponse()) {
                $response = $e->getResponse();
            }
            return $this->_processResponse($response,$request);
        }

        return $this->_processResponse($response,$request);
    }

    /**
     * @param string $path
     * @param null   $options
     *
     * @return AdapterResponse
     */
    public function sendDELETERequest($path, $options = null) {
        $client = $this->_getClient();

        $clientOptions = [];
        $this->_processConfigOptions($clientOptions);
        if (is_array($options) && isset($options['headers'])) {
            $clientOptions['headers'] = $options['headers'];
        }
        try {
            $request = $client->createRequest('DELETE', $path, $clientOptions);
            $response = $client->send($request);

        } catch (RequestException $e) {
            $response = null;
            $request = $e->getRequest();
            if ($e->hasResponse()) {
                $response = $e->getResponse();
            }
            return $this->_processResponse($response,$request);
        }

        return $this->_processResponse($response,$request);
    }


    /**
     * @param $content
     *
     * @return string
     */
    protected function _processContent($content) {

        if ($content instanceof BaseEntity) {
            $content =  json_encode($content,JSON_UNESCAPED_SLASHES);
            $error = json_last_error();
        }
        else if (is_string($content)) {
            //leave as is
        }
        else {
            throw new AdapterException("Invalid content type, Only string or objects that extend from BaseEntity are allowed",
                                       AdapterException::INVALID_TYPE);

        }
        return $content;
    }

    /**
     * @param $clientOptions
     */
    protected function _processConfigOptions(&$clientOptions) {

        $configSSLVerify = $this->_config->getSslVerify();
        if ($configSSLVerify  !== null) {
            $clientOptions['verify'] = $configSSLVerify;
        }

    }

    /**
     * @param \GuzzleHttp\Message\Response $guzzleResponse
     *
     * @return AdapterResponse
     */
    protected function _processResponse($guzzleResponse = null, $guzzleRequest = null) {
        $adapterResponse = new AdapterResponse($this->_config);
        if (is_object($guzzleResponse)) {
            $adapterResponse->setHeaders($guzzleResponse->getHeaders());
            $adapterResponse->setReasonPhrase($guzzleResponse->getReasonPhrase());
            $adapterResponse->setStatusCode($guzzleResponse->getStatusCode());
            $adapterResponse->setDebugResponse($guzzleResponse->__toString());
            $adapterResponse->setContent((string) $guzzleResponse->getBody());
        }
        else {
            $adapterResponse->setStatusCode(500);
            $adapterResponse->setReasonPhrase("Internal Server Error");
        }

        if (is_object($guzzleRequest)) {
            $adapterResponse->setDebugRequest($guzzleRequest->__toString());
        }

        return $adapterResponse;
    }


}