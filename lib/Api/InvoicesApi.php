<?php
/**
 * InvoicesApi
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
 * InvoicesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoicesApi
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
     * @return InvoicesApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createInvoice
     *
     * Create Invoice API.
     *
     * @param \Swagger\Client\Model\CreateInvoice $create_invoice The \&quot;create invoice \&quot; model (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \Swagger\Client\Model\Invoice
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createInvoice($create_invoice, $authorization = null)
    {
        list($response) = $this->createInvoiceWithHttpInfo($create_invoice, $authorization);
        return $response;
    }


    /**
     * Operation createInvoiceWithHttpInfo
     *
     * Create Invoice API.
     *
     * @param \Swagger\Client\Model\CreateInvoice $create_invoice The \&quot;create invoice \&quot; model (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \Swagger\Client\Model\Invoice, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createInvoiceWithHttpInfo($create_invoice, $authorization = null)
    {
        
        // verify the required parameter 'create_invoice' is set
        if ($create_invoice === null) {
            throw new \InvalidArgumentException('Missing the required parameter $create_invoice when calling createInvoice');
        }

        // parse inputs
        $resourcePath = "/invoices";
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
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($create_invoice)) {
            $_tempBody = $create_invoice;
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
                '\Swagger\Client\Model\Invoice'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Invoice', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Invoice', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 202:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Invoice', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
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
     * Operation getAllInvoices
     *
     * Get List of Invoices.
     *
     * @param int $offset Page offset number (required)
     * @param int $limit Number of items to be returned (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \Swagger\Client\Model\InvoicesCollection
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getAllInvoices($offset, $limit, $authorization = null)
    {
        list($response) = $this->getAllInvoicesWithHttpInfo($offset, $limit, $authorization);
        return $response;
    }


    /**
     * Operation getAllInvoicesWithHttpInfo
     *
     * Get List of Invoices.
     *
     * @param int $offset Page offset number (required)
     * @param int $limit Number of items to be returned (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \Swagger\Client\Model\InvoicesCollection, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getAllInvoicesWithHttpInfo($offset, $limit, $authorization = null)
    {
        
        // verify the required parameter 'offset' is set
        if ($offset === null) {
            throw new \InvalidArgumentException('Missing the required parameter $offset when calling getAllInvoices');
        }

        // verify the required parameter 'limit' is set
        if ($limit === null) {
            throw new \InvalidArgumentException('Missing the required parameter $limit when calling getAllInvoices');
        }

        // parse inputs
        $resourcePath = "/invoices";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
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
                '\Swagger\Client\Model\InvoicesCollection'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InvoicesCollection', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InvoicesCollection', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
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
     * Operation getInvoice
     *
     * Get Invoice Details.
     *
     * @param string $invoice_number Invoice ID (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \Swagger\Client\Model\Invoice
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getInvoice($invoice_number, $authorization = null)
    {
        list($response) = $this->getInvoiceWithHttpInfo($invoice_number, $authorization);
        return $response;
    }


    /**
     * Operation getInvoiceWithHttpInfo
     *
     * Get Invoice Details.
     *
     * @param string $invoice_number Invoice ID (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \Swagger\Client\Model\Invoice, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getInvoiceWithHttpInfo($invoice_number, $authorization = null)
    {
        
        // verify the required parameter 'invoice_number' is set
        if ($invoice_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $invoice_number when calling getInvoice');
        }

        // parse inputs
        $resourcePath = "/invoices/{invoiceNumber}";
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
        if ($invoice_number !== null) {
            $resourcePath = str_replace(
                "{" . "invoiceNumber" . "}",
                $this->apiClient->getSerializer()->toPathValue($invoice_number),
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
                '\Swagger\Client\Model\Invoice'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Invoice', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Invoice', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation performActions
     *
     * Perform an action on Invoice.
     *
     * @param string $invoice_number Invoice ID (required)
     * @param \Swagger\Client\Model\InvoiceAction $invoice_action Perform an action on invoice (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \Swagger\Client\Model\Invoice
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function performActions($invoice_number, $invoice_action, $authorization = null)
    {
        list($response) = $this->performActionsWithHttpInfo($invoice_number, $invoice_action, $authorization);
        return $response;
    }


    /**
     * Operation performActionsWithHttpInfo
     *
     * Perform an action on Invoice.
     *
     * @param string $invoice_number Invoice ID (required)
     * @param \Swagger\Client\Model\InvoiceAction $invoice_action Perform an action on invoice (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \Swagger\Client\Model\Invoice, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function performActionsWithHttpInfo($invoice_number, $invoice_action, $authorization = null)
    {
        
        // verify the required parameter 'invoice_number' is set
        if ($invoice_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $invoice_number when calling performActions');
        }

        // verify the required parameter 'invoice_action' is set
        if ($invoice_action === null) {
            throw new \InvalidArgumentException('Missing the required parameter $invoice_action when calling performActions');
        }

        // parse inputs
        $resourcePath = "/invoices/{invoiceNumber}/actions";
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
        if ($invoice_number !== null) {
            $resourcePath = str_replace(
                "{" . "invoiceNumber" . "}",
                $this->apiClient->getSerializer()->toPathValue($invoice_number),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($invoice_action)) {
            $_tempBody = $invoice_action;
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
                '\Swagger\Client\Model\Invoice'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Invoice', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Invoice', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation updateInvoice
     *
     * Update Invoice API.
     *
     * @param string $invoice_number Invoice ID (required)
     * @param \Swagger\Client\Model\UpdateInvoice $update_invoice The \&quot;update invoice \&quot; model (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return \Swagger\Client\Model\Invoice
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateInvoice($invoice_number, $update_invoice, $authorization = null)
    {
        list($response) = $this->updateInvoiceWithHttpInfo($invoice_number, $update_invoice, $authorization);
        return $response;
    }


    /**
     * Operation updateInvoiceWithHttpInfo
     *
     * Update Invoice API.
     *
     * @param string $invoice_number Invoice ID (required)
     * @param \Swagger\Client\Model\UpdateInvoice $update_invoice The \&quot;update invoice \&quot; model (required)
     * @param string $authorization The value to provide in the Authorization header of ANET API request (optional)
     *
     * @return Array of \Swagger\Client\Model\Invoice, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateInvoiceWithHttpInfo($invoice_number, $update_invoice, $authorization = null)
    {
        
        // verify the required parameter 'invoice_number' is set
        if ($invoice_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $invoice_number when calling updateInvoice');
        }

        // verify the required parameter 'update_invoice' is set
        if ($update_invoice === null) {
            throw new \InvalidArgumentException('Missing the required parameter $update_invoice when calling updateInvoice');
        }

        // parse inputs
        $resourcePath = "/invoices/{invoiceNumber}";
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
        if ($invoice_number !== null) {
            $resourcePath = str_replace(
                "{" . "invoiceNumber" . "}",
                $this->apiClient->getSerializer()->toPathValue($invoice_number),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($update_invoice)) {
            $_tempBody = $update_invoice;
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
                '\Swagger\Client\Model\Invoice'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Invoice', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Invoice', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
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