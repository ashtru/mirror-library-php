<?php
/**
 * BankAccount
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
 * BankAccount Class Doc Comment
 *
 * @category    Class
 * @description Model for BankAccount
 * @package     authorizenet_rest
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BankAccount implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BankAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account_type' => 'string',
        'routing_number' => 'string',
        'account_number' => 'string',
        'name_on_account' => 'string',
        'e_check_type' => 'string',
        'bank_name' => 'string',
        'check_number' => 'string'
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
        'account_type' => 'accountType',
        'routing_number' => 'routingNumber',
        'account_number' => 'accountNumber',
        'name_on_account' => 'nameOnAccount',
        'e_check_type' => 'eCheckType',
        'bank_name' => 'bankName',
        'check_number' => 'checkNumber'
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
        'account_type' => 'setAccountType',
        'routing_number' => 'setRoutingNumber',
        'account_number' => 'setAccountNumber',
        'name_on_account' => 'setNameOnAccount',
        'e_check_type' => 'setECheckType',
        'bank_name' => 'setBankName',
        'check_number' => 'setCheckNumber'
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
        'account_type' => 'getAccountType',
        'routing_number' => 'getRoutingNumber',
        'account_number' => 'getAccountNumber',
        'name_on_account' => 'getNameOnAccount',
        'e_check_type' => 'getECheckType',
        'bank_name' => 'getBankName',
        'check_number' => 'getCheckNumber'
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
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['routing_number'] = isset($data['routing_number']) ? $data['routing_number'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['name_on_account'] = isset($data['name_on_account']) ? $data['name_on_account'] : null;
        $this->container['e_check_type'] = isset($data['e_check_type']) ? $data['e_check_type'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['check_number'] = isset($data['check_number']) ? $data['check_number'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['routing_number'] === null) {
            $invalid_properties[] = "'routing_number' can't be null";
        }
        if ($this->container['account_number'] === null) {
            $invalid_properties[] = "'account_number' can't be null";
        }
        if ($this->container['name_on_account'] === null) {
            $invalid_properties[] = "'name_on_account' can't be null";
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
        if ($this->container['routing_number'] === null) {
            return false;
        }
        if ($this->container['account_number'] === null) {
            return false;
        }
        if ($this->container['name_on_account'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets account_type
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     * @param string $account_type
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets routing_number
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->container['routing_number'];
    }

    /**
     * Sets routing_number
     * @param string $routing_number
     * @return $this
     */
    public function setRoutingNumber($routing_number)
    {
        $this->container['routing_number'] = $routing_number;

        return $this;
    }

    /**
     * Gets account_number
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     * @param string $account_number
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets name_on_account
     * @return string
     */
    public function getNameOnAccount()
    {
        return $this->container['name_on_account'];
    }

    /**
     * Sets name_on_account
     * @param string $name_on_account
     * @return $this
     */
    public function setNameOnAccount($name_on_account)
    {
        $this->container['name_on_account'] = $name_on_account;

        return $this;
    }

    /**
     * Gets e_check_type
     * @return string
     */
    public function getECheckType()
    {
        return $this->container['e_check_type'];
    }

    /**
     * Sets e_check_type
     * @param string $e_check_type
     * @return $this
     */
    public function setECheckType($e_check_type)
    {
        $this->container['e_check_type'] = $e_check_type;

        return $this;
    }

    /**
     * Gets bank_name
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     * @param string $bank_name
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets check_number
     * @return string
     */
    public function getCheckNumber()
    {
        return $this->container['check_number'];
    }

    /**
     * Sets check_number
     * @param string $check_number
     * @return $this
     */
    public function setCheckNumber($check_number)
    {
        $this->container['check_number'] = $check_number;

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
