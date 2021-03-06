<?php
/**
 * NotificationsApi
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
 * NotificationsApi Class Doc Comment
 *
 * @category Class
 * @package  authorizenet_rest
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationsApi
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
     * @return NotificationsApi
     */
    public function setApiClient(\authorizenet_rest\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getNotification
     *
     * Get a Notification.
     *
     * @param string $notifications_id ID of notification to return (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \authorizenet_rest\Model\GetNotificationResponse
     * @throws \authorizenet_rest\ApiException on non-2xx response
     */
    public function getNotification($notifications_id, $authorization = null)
    {
        list($response) = $this->getNotificationWithHttpInfo($notifications_id, $authorization);
        return $response;
    }


    /**
     * Operation getNotificationWithHttpInfo
     *
     * Get a Notification.
     *
     * @param string $notifications_id ID of notification to return (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \authorizenet_rest\Model\GetNotificationResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \authorizenet_rest\ApiException on non-2xx response
     */
    public function getNotificationWithHttpInfo($notifications_id, $authorization = null)
    {
        
        // verify the required parameter 'notifications_id' is set
        if ($notifications_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $notifications_id when calling getNotification');
        }

        // parse inputs
        $resourcePath = "/notifications/{notificationsId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // path params
        if ($notifications_id !== null) {
            $resourcePath = str_replace(
                "{" . "notificationsId" . "}",
                $this->apiClient->getSerializer()->toPathValue($notifications_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\authorizenet_rest\Model\GetNotificationResponse'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\authorizenet_rest\Model\GetNotificationResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\authorizenet_rest\Model\GetNotificationResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\authorizenet_rest\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
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
    /**
     * Operation getNotifications
     *
     * Get Notifications.
     *
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     * @param string $delivery_status Filter by delivery status (optional)
     * @param string $from_date Only include notifications after date (optional)
     * @param string $to_date Only include notifications before date (optional)
     * @param int $offset Only include notifications above of offset (optional)
     * @param int $limit Limit number of notifications (optional)
     *
     * @return \authorizenet_rest\Model\GetNotificationsResponse
     * @throws \authorizenet_rest\ApiException on non-2xx response
     */
    public function getNotifications($authorization = null, $delivery_status = null, $from_date = null, $to_date = null, $offset = null, $limit = null)
    {
        list($response) = $this->getNotificationsWithHttpInfo($authorization, $delivery_status, $from_date, $to_date, $offset, $limit);
        return $response;
    }


    /**
     * Operation getNotificationsWithHttpInfo
     *
     * Get Notifications.
     *
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     * @param string $delivery_status Filter by delivery status (optional)
     * @param string $from_date Only include notifications after date (optional)
     * @param string $to_date Only include notifications before date (optional)
     * @param int $offset Only include notifications above of offset (optional)
     * @param int $limit Limit number of notifications (optional)
     *
     * @return Array of \authorizenet_rest\Model\GetNotificationsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \authorizenet_rest\ApiException on non-2xx response
     */
    public function getNotificationsWithHttpInfo($authorization = null, $delivery_status = null, $from_date = null, $to_date = null, $offset = null, $limit = null)
    {
        
        // parse inputs
        $resourcePath = "/notifications";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($delivery_status !== null) {
            $queryParams['deliveryStatus'] = $this->apiClient->getSerializer()->toQueryValue($delivery_status);
        }// query params
        if ($from_date !== null) {
            $queryParams['from_date'] = $this->apiClient->getSerializer()->toQueryValue($from_date);
        }// query params
        if ($to_date !== null) {
            $queryParams['to_date'] = $this->apiClient->getSerializer()->toQueryValue($to_date);
        }// query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\authorizenet_rest\Model\GetNotificationsResponse'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\authorizenet_rest\Model\GetNotificationsResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\authorizenet_rest\Model\GetNotificationsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
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
