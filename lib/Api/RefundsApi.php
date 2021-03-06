<?php
/**
 * RefundsApi
 * PHP version 5
 *
 * @category Class
 * @package  authorizenet_rest
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Authorize.net REST API
 *
 * Authorize.net REST API
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace authorizenet_rest\Api;

use \authorizenet_rest\Configuration;
use \authorizenet_rest\ApiClient;
use \authorizenet_rest\ApiException;
use \authorizenet_rest\ObjectSerializer;

/**
 * RefundsApi Class Doc Comment
 *
 * @category Class
 * @package  authorizenet_rest
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RefundsApi
{

    /**
     * API Client
     *
     * @var \authorizenet_rest\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \authorizenet_rest\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\authorizenet_rest\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.authorize.net/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \authorizenet_rest\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \authorizenet_rest\ApiClient $apiClient set the API client
     *
     * @return RefundsApi
     */
    public function setApiClient(\authorizenet_rest\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createRefundAPayment
     *
     * .
     *
     * @param string $payment_id  (required)
     * @param \authorizenet_rest\Model\RefundRequest $body  (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \authorizenet_rest\Model\Payment
     * @throws \authorizenet_rest\ApiException on non-2xx response
     */
    public function createRefundAPayment($payment_id, $body, $authorization = null)
    {
        list($response) = $this->createRefundAPaymentWithHttpInfo($payment_id, $body, $authorization);
        return $response;
    }


    /**
     * Operation createRefundAPaymentWithHttpInfo
     *
     * .
     *
     * @param string $payment_id  (required)
     * @param \authorizenet_rest\Model\RefundRequest $body  (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \authorizenet_rest\Model\Payment, HTTP status code, HTTP response headers (array of strings)
     * @throws \authorizenet_rest\ApiException on non-2xx response
     */
    public function createRefundAPaymentWithHttpInfo($payment_id, $body, $authorization = null)
    {
        
        // verify the required parameter 'payment_id' is set
        if ($payment_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payment_id when calling createRefundAPayment');
        }

        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createRefundAPayment');
        }

        // parse inputs
        $resourcePath = "/payments/{paymentId}/refunds";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // path params
        if ($payment_id !== null) {
            $resourcePath = str_replace(
                "{" . "paymentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($payment_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
                // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\authorizenet_rest\Model\Payment'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\authorizenet_rest\Model\Payment', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\authorizenet_rest\Model\Payment', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\authorizenet_rest\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\authorizenet_rest\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
