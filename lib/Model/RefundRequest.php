<?php
/**
 * RefundRequest
 *
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

namespace authorizenet_rest\Model;

use \ArrayAccess;

/**
 * RefundRequest Class Doc Comment
 *
 * @category    Class
 * @description Model for RefundRequest
 * @package     authorizenet_rest
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RefundRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RefundRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'amount' => 'string',
        'order' => '\authorizenet_rest\Model\Order',
        'line_items' => '\authorizenet_rest\Model\LineItem[]',
        'tax' => '\authorizenet_rest\Model\ExtendedAmount',
        'shipping' => '\authorizenet_rest\Model\ExtendedAmount',
        'duty' => '\authorizenet_rest\Model\ExtendedAmount',
        'payment_instrument' => '\authorizenet_rest\Model\PaymentInstrument',
        'bill_to' => '\authorizenet_rest\Model\BaseAddress',
        'ship_to' => '\authorizenet_rest\Model\BaseAddress'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'amount' => 'amount',
        'order' => 'order',
        'line_items' => 'lineItems',
        'tax' => 'tax',
        'shipping' => 'shipping',
        'duty' => 'duty',
        'payment_instrument' => 'paymentInstrument',
        'bill_to' => 'billTo',
        'ship_to' => 'shipTo'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'amount' => 'setAmount',
        'order' => 'setOrder',
        'line_items' => 'setLineItems',
        'tax' => 'setTax',
        'shipping' => 'setShipping',
        'duty' => 'setDuty',
        'payment_instrument' => 'setPaymentInstrument',
        'bill_to' => 'setBillTo',
        'ship_to' => 'setShipTo'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'amount' => 'getAmount',
        'order' => 'getOrder',
        'line_items' => 'getLineItems',
        'tax' => 'getTax',
        'shipping' => 'getShipping',
        'duty' => 'getDuty',
        'payment_instrument' => 'getPaymentInstrument',
        'bill_to' => 'getBillTo',
        'ship_to' => 'getShipTo'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['duty'] = isset($data['duty']) ? $data['duty'] : null;
        $this->container['payment_instrument'] = isset($data['payment_instrument']) ? $data['payment_instrument'] : null;
        $this->container['bill_to'] = isset($data['bill_to']) ? $data['bill_to'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['payment_instrument'] === null) {
            $invalid_properties[] = "'payment_instrument' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['payment_instrument'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets order
     * @return \authorizenet_rest\Model\Order
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param \authorizenet_rest\Model\Order $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets line_items
     * @return \authorizenet_rest\Model\LineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     * @param \authorizenet_rest\Model\LineItem[] $line_items
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets tax
     * @return \authorizenet_rest\Model\ExtendedAmount
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     * @param \authorizenet_rest\Model\ExtendedAmount $tax
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets shipping
     * @return \authorizenet_rest\Model\ExtendedAmount
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     * @param \authorizenet_rest\Model\ExtendedAmount $shipping
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets duty
     * @return \authorizenet_rest\Model\ExtendedAmount
     */
    public function getDuty()
    {
        return $this->container['duty'];
    }

    /**
     * Sets duty
     * @param \authorizenet_rest\Model\ExtendedAmount $duty
     * @return $this
     */
    public function setDuty($duty)
    {
        $this->container['duty'] = $duty;

        return $this;
    }

    /**
     * Gets payment_instrument
     * @return \authorizenet_rest\Model\PaymentInstrument
     */
    public function getPaymentInstrument()
    {
        return $this->container['payment_instrument'];
    }

    /**
     * Sets payment_instrument
     * @param \authorizenet_rest\Model\PaymentInstrument $payment_instrument
     * @return $this
     */
    public function setPaymentInstrument($payment_instrument)
    {
        $this->container['payment_instrument'] = $payment_instrument;

        return $this;
    }

    /**
     * Gets bill_to
     * @return \authorizenet_rest\Model\BaseAddress
     */
    public function getBillTo()
    {
        return $this->container['bill_to'];
    }

    /**
     * Sets bill_to
     * @param \authorizenet_rest\Model\BaseAddress $bill_to
     * @return $this
     */
    public function setBillTo($bill_to)
    {
        $this->container['bill_to'] = $bill_to;

        return $this;
    }

    /**
     * Gets ship_to
     * @return \authorizenet_rest\Model\BaseAddress
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     * @param \authorizenet_rest\Model\BaseAddress $ship_to
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\authorizenet_rest\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\authorizenet_rest\ObjectSerializer::sanitizeForSerialization($this));
    }
}
