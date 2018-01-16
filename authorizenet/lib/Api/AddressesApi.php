<?php
/**
 * AddressesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * AddressesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressesApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
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
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return AddressesApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createCustomerAddress
     *
     * Create A Customer Address.
     *
     * @param string $customer_id Customer ID (required)
     * @param \Swagger\Client\Model\CreateCustomerAddress $create_customer_address the \&quot;CreateCustomerAddress\&quot; model (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \Swagger\Client\Model\Address
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createCustomerAddress($customer_id, $create_customer_address, $authorization = null)
    {
        list($response) = $this->createCustomerAddressWithHttpInfo($customer_id, $create_customer_address, $authorization);
        return $response;
    }


    /**
     * Operation createCustomerAddressWithHttpInfo
     *
     * Create A Customer Address.
     *
     * @param string $customer_id Customer ID (required)
     * @param \Swagger\Client\Model\CreateCustomerAddress $create_customer_address the \&quot;CreateCustomerAddress\&quot; model (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \Swagger\Client\Model\Address, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createCustomerAddressWithHttpInfo($customer_id, $create_customer_address, $authorization = null)
    {
        
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling createCustomerAddress');
        }

        // verify the required parameter 'create_customer_address' is set
        if ($create_customer_address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $create_customer_address when calling createCustomerAddress');
        }

        // parse inputs
        $resourcePath = "/customers/{customerId}/addresses";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($create_customer_address)) {
            $_tempBody = $create_customer_address;
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
                '\Swagger\Client\Model\Address'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Address', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Address', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation deleteAddress
     *
     * Delete Address.
     *
     * @param string $customer_id Customer ID (required)
     * @param string $address_id Address ID (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteAddress($customer_id, $address_id, $authorization = null)
    {
        list($response) = $this->deleteAddressWithHttpInfo($customer_id, $address_id, $authorization);
        return $response;
    }


    /**
     * Operation deleteAddressWithHttpInfo
     *
     * Delete Address.
     *
     * @param string $customer_id Customer ID (required)
     * @param string $address_id Address ID (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteAddressWithHttpInfo($customer_id, $address_id, $authorization = null)
    {
        
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling deleteAddress');
        }

        // verify the required parameter 'address_id' is set
        if ($address_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address_id when calling deleteAddress');
        }

        // parse inputs
        $resourcePath = "/customers/{customerId}/addresses/{addressId}";
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
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }// path params
        if ($address_id !== null) {
            $resourcePath = str_replace(
                "{" . "addressId" . "}",
                $this->apiClient->getSerializer()->toPathValue($address_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
    /**
     * Operation getAllCustomerAddresses
     *
     * Get All Customer Addresses.
     *
     * @param string $customer_id Customer ID (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \Swagger\Client\Model\AddressCollection
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getAllCustomerAddresses($customer_id, $authorization = null)
    {
        list($response) = $this->getAllCustomerAddressesWithHttpInfo($customer_id, $authorization);
        return $response;
    }


    /**
     * Operation getAllCustomerAddressesWithHttpInfo
     *
     * Get All Customer Addresses.
     *
     * @param string $customer_id Customer ID (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \Swagger\Client\Model\AddressCollection, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getAllCustomerAddressesWithHttpInfo($customer_id, $authorization = null)
    {
        
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getAllCustomerAddresses');
        }

        // parse inputs
        $resourcePath = "/customers/{customerId}/addresses";
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
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
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
                '\Swagger\Client\Model\AddressCollection'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\AddressCollection', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\AddressCollection', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation getCustomerAddress
     *
     * Get A Customer Address.
     *
     * @param string $customer_id Customer ID (required)
     * @param string $address_id Address ID (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \Swagger\Client\Model\Address
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCustomerAddress($customer_id, $address_id, $authorization = null)
    {
        list($response) = $this->getCustomerAddressWithHttpInfo($customer_id, $address_id, $authorization);
        return $response;
    }


    /**
     * Operation getCustomerAddressWithHttpInfo
     *
     * Get A Customer Address.
     *
     * @param string $customer_id Customer ID (required)
     * @param string $address_id Address ID (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \Swagger\Client\Model\Address, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCustomerAddressWithHttpInfo($customer_id, $address_id, $authorization = null)
    {
        
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getCustomerAddress');
        }

        // verify the required parameter 'address_id' is set
        if ($address_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address_id when calling getCustomerAddress');
        }

        // parse inputs
        $resourcePath = "/customers/{customerId}/addresses/{addressId}";
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
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }// path params
        if ($address_id !== null) {
            $resourcePath = str_replace(
                "{" . "addressId" . "}",
                $this->apiClient->getSerializer()->toPathValue($address_id),
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
                '\Swagger\Client\Model\Address'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Address', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Address', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation updateCustomerAddress
     *
     * Update A Customer Address.
     *
     * @param string $customer_id Customer ID (required)
     * @param string $address_id address  ID (required)
     * @param \Swagger\Client\Model\CreateCustomerAddress $create_customer_address the \&quot;UpdateCustomerAddress\&quot; model (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \Swagger\Client\Model\Address
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateCustomerAddress($customer_id, $address_id, $create_customer_address, $authorization = null)
    {
        list($response) = $this->updateCustomerAddressWithHttpInfo($customer_id, $address_id, $create_customer_address, $authorization);
        return $response;
    }


    /**
     * Operation updateCustomerAddressWithHttpInfo
     *
     * Update A Customer Address.
     *
     * @param string $customer_id Customer ID (required)
     * @param string $address_id address  ID (required)
     * @param \Swagger\Client\Model\CreateCustomerAddress $create_customer_address the \&quot;UpdateCustomerAddress\&quot; model (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \Swagger\Client\Model\Address, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateCustomerAddressWithHttpInfo($customer_id, $address_id, $create_customer_address, $authorization = null)
    {
        
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling updateCustomerAddress');
        }

        // verify the required parameter 'address_id' is set
        if ($address_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address_id when calling updateCustomerAddress');
        }

        // verify the required parameter 'create_customer_address' is set
        if ($create_customer_address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $create_customer_address when calling updateCustomerAddress');
        }

        // parse inputs
        $resourcePath = "/customers/{customerId}/addresses/{addressId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }// path params
        if ($address_id !== null) {
            $resourcePath = str_replace(
                "{" . "addressId" . "}",
                $this->apiClient->getSerializer()->toPathValue($address_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($create_customer_address)) {
            $_tempBody = $create_customer_address;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Address'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Address', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Address', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
