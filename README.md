# authorizenet_rest
Authorize.net REST API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Package version: 0.0.9
- Build date: 2018-01-16T20:22:28.539+05:30
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/AuthorizeNet/authorizenet_rest.git"
    }
  ],
  "require": {
    "AuthorizeNet/authorizenet_rest": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/mirror-library-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\AddressesApi();
$customer_id = "customer_id_example"; // string | Customer ID
$create_customer_address = new \authorizenet_rest\Model\CreateCustomerAddress(); // \authorizenet_rest\Model\CreateCustomerAddress | the \"CreateCustomerAddress\" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->createCustomerAddress($customer_id, $create_customer_address, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->createCustomerAddress: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.authorize.net/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressesApi* | [**createCustomerAddress**](docs/Api/AddressesApi.md#createcustomeraddress) | **POST** /customers/{customerId}/addresses | Create A Customer Address
*AddressesApi* | [**deleteAddress**](docs/Api/AddressesApi.md#deleteaddress) | **DELETE** /customers/{customerId}/addresses/{addressId} | Delete Address
*AddressesApi* | [**getAllCustomerAddresses**](docs/Api/AddressesApi.md#getallcustomeraddresses) | **GET** /customers/{customerId}/addresses | Get All Customer Addresses
*AddressesApi* | [**getCustomerAddress**](docs/Api/AddressesApi.md#getcustomeraddress) | **GET** /customers/{customerId}/addresses/{addressId} | Get A Customer Address
*AddressesApi* | [**updateCustomerAddress**](docs/Api/AddressesApi.md#updatecustomeraddress) | **PUT** /customers/{customerId}/addresses/{addressId} | Update A Customer Address
*CapturesApi* | [**createACapture**](docs/Api/CapturesApi.md#createacapture) | **POST** /payments/{paymentId}/captures | 
*CreditsApi* | [**createACredit**](docs/Api/CreditsApi.md#createacredit) | **POST** /credits | 
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /customers | Create A Customer
*CustomersApi* | [**deleteCustomer**](docs/Api/CustomersApi.md#deletecustomer) | **DELETE** /customers/{customerId} | Delete customer
*CustomersApi* | [**getAllCustomers**](docs/Api/CustomersApi.md#getallcustomers) | **GET** /customers | Get All Customers
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /customers/{customerId} | Get A Customer
*CustomersApi* | [**updateCustomer**](docs/Api/CustomersApi.md#updatecustomer) | **PUT** /customers/{customerId} | Update A Customer
*EventtypesApi* | [**getEventTypes**](docs/Api/EventtypesApi.md#geteventtypes) | **GET** /eventtypes | Retrieving Event Types
*ForcedCapturesApi* | [**createAForcedCapture**](docs/Api/ForcedCapturesApi.md#createaforcedcapture) | **POST** /forcedcaptures | 
*InvoicesApi* | [**createInvoice**](docs/Api/InvoicesApi.md#createinvoice) | **POST** /invoices | Create Invoice API
*InvoicesApi* | [**getAllInvoices**](docs/Api/InvoicesApi.md#getallinvoices) | **GET** /invoices | Get List of Invoices
*InvoicesApi* | [**getInvoice**](docs/Api/InvoicesApi.md#getinvoice) | **GET** /invoices/{invoiceNumber} | Get Invoice Details
*InvoicesApi* | [**performActions**](docs/Api/InvoicesApi.md#performactions) | **POST** /invoices/{invoiceNumber}/actions | Perform an action on Invoice
*InvoicesApi* | [**updateInvoice**](docs/Api/InvoicesApi.md#updateinvoice) | **PUT** /invoices/{invoiceNumber} | Update Invoice API
*NotificationsApi* | [**getNotification**](docs/Api/NotificationsApi.md#getnotification) | **GET** /notifications/{notificationsId} | Get a Notification
*NotificationsApi* | [**getNotifications**](docs/Api/NotificationsApi.md#getnotifications) | **GET** /notifications | Get Notifications
*PaymentmethodsApi* | [**createPaymentMethod**](docs/Api/PaymentmethodsApi.md#createpaymentmethod) | **POST** /customers/{customerId}/paymentmethods | Create A Payment Method
*PaymentmethodsApi* | [**deletePaymentmethod**](docs/Api/PaymentmethodsApi.md#deletepaymentmethod) | **DELETE** /customers/{customerId}/paymentmethods/{paymentMethodId} | Delete paymentmethods
*PaymentmethodsApi* | [**getCustomerPaymentMethod**](docs/Api/PaymentmethodsApi.md#getcustomerpaymentmethod) | **GET** /customers/{customerId}/paymentmethods/{paymentMethodId} | Get Customer Payment Method
*PaymentmethodsApi* | [**getCustomerPaymentMethods**](docs/Api/PaymentmethodsApi.md#getcustomerpaymentmethods) | **GET** /customers/{customerId}/paymentmethods | Get Customer Payment Methods
*PaymentmethodsApi* | [**updatePaymentMethod**](docs/Api/PaymentmethodsApi.md#updatepaymentmethod) | **PUT** /customers/{customerId}/paymentmethods/{paymentMethodId} | Update A paymentMethod
*PaymentsApi* | [**createAPayment**](docs/Api/PaymentsApi.md#createapayment) | **POST** /payments | 
*PaymentsApi* | [**getAPayment**](docs/Api/PaymentsApi.md#getapayment) | **GET** /payments/{paymentId} | 
*PaymentsApi* | [**getAllPayments**](docs/Api/PaymentsApi.md#getallpayments) | **GET** /payments | 
*RefundsApi* | [**createRefundAPayment**](docs/Api/RefundsApi.md#createrefundapayment) | **POST** /payments/{paymentId}/refunds | 
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /webhooks | Create A Webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{webhookId} | Delete A Webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{webhookId} | Get A Webhook
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | List My Webhooks
*WebhooksApi* | [**pingsWebhook**](docs/Api/WebhooksApi.md#pingswebhook) | **POST** /webhooks/{webhookId}/pings | Pings A Webhook
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /webhooks/{webhookId} | Update A Webhook


## Documentation For Models

 - [AddressCollection](docs/Model/AddressCollection.md)
 - [AddressLinks](docs/Model/AddressLinks.md)
 - [AddressList](docs/Model/AddressList.md)
 - [Addresses](docs/Model/Addresses.md)
 - [AmountDetail](docs/Model/AmountDetail.md)
 - [BankAccount](docs/Model/BankAccount.md)
 - [BaseAddress](docs/Model/BaseAddress.md)
 - [Batch](docs/Model/Batch.md)
 - [CaptureRequest](docs/Model/CaptureRequest.md)
 - [CollectionLinks](docs/Model/CollectionLinks.md)
 - [CreateCustomer](docs/Model/CreateCustomer.md)
 - [CreateCustomerAddress](docs/Model/CreateCustomerAddress.md)
 - [CreateInvoice](docs/Model/CreateInvoice.md)
 - [CreatePaymentMethod](docs/Model/CreatePaymentMethod.md)
 - [CreateWebhookBody](docs/Model/CreateWebhookBody.md)
 - [CreditCard](docs/Model/CreditCard.md)
 - [CreditRequest](docs/Model/CreditRequest.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerCollection](docs/Model/CustomerCollection.md)
 - [CustomerLinks](docs/Model/CustomerLinks.md)
 - [CustomerList](docs/Model/CustomerList.md)
 - [CustomerPayment](docs/Model/CustomerPayment.md)
 - [ErrorDetails](docs/Model/ErrorDetails.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [EventType](docs/Model/EventType.md)
 - [ExtendedAmount](docs/Model/ExtendedAmount.md)
 - [FluidData](docs/Model/FluidData.md)
 - [ForcedCaptureRequest](docs/Model/ForcedCaptureRequest.md)
 - [FraudFilter](docs/Model/FraudFilter.md)
 - [FraudInformation](docs/Model/FraudInformation.md)
 - [GetNotificationsResponse](docs/Model/GetNotificationsResponse.md)
 - [GetWebhookResponse](docs/Model/GetWebhookResponse.md)
 - [Identifier](docs/Model/Identifier.md)
 - [Invoice](docs/Model/Invoice.md)
 - [InvoiceAction](docs/Model/InvoiceAction.md)
 - [InvoiceListInfo](docs/Model/InvoiceListInfo.md)
 - [InvoicesCollection](docs/Model/InvoicesCollection.md)
 - [LineItem](docs/Model/LineItem.md)
 - [Link](docs/Model/Link.md)
 - [Log](docs/Model/Log.md)
 - [Notification](docs/Model/Notification.md)
 - [Order](docs/Model/Order.md)
 - [Payment](docs/Model/Payment.md)
 - [PaymentCollection](docs/Model/PaymentCollection.md)
 - [PaymentInstrument](docs/Model/PaymentInstrument.md)
 - [PaymentLinks](docs/Model/PaymentLinks.md)
 - [PaymentMethod](docs/Model/PaymentMethod.md)
 - [PaymentMethodCollection](docs/Model/PaymentMethodCollection.md)
 - [PaymentMethodLinks](docs/Model/PaymentMethodLinks.md)
 - [PaymentMethodList](docs/Model/PaymentMethodList.md)
 - [PaymentMethods](docs/Model/PaymentMethods.md)
 - [PaymentRequest](docs/Model/PaymentRequest.md)
 - [Payments](docs/Model/Payments.md)
 - [PaymentsList](docs/Model/PaymentsList.md)
 - [Processor](docs/Model/Processor.md)
 - [RefundRequest](docs/Model/RefundRequest.md)
 - [RetryLog](docs/Model/RetryLog.md)
 - [SelfLink](docs/Model/SelfLink.md)
 - [Solution](docs/Model/Solution.md)
 - [Tax](docs/Model/Tax.md)
 - [UpdateInvoice](docs/Model/UpdateInvoice.md)
 - [Address](docs/Model/Address.md)
 - [GetNotificationResponse](docs/Model/GetNotificationResponse.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




