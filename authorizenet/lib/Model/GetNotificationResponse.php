<?php
/**
 * GetNotificationResponse
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetNotificationResponse Class Doc Comment
 *
 * @category    Class
 * @description Response model for get a Notification
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetNotificationResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GetNotificationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        '_links' => '\Swagger\Client\Model\SelfLink',
        'notification_id' => 'string',
        'delivery_status' => 'string',
        'event_type' => 'string',
        'event_date' => 'string',
        'webhook_id' => 'string',
        'retry_log' => '\Swagger\Client\Model\RetryLog'
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
        '_links' => '_links',
        'notification_id' => 'notificationId',
        'delivery_status' => 'deliveryStatus',
        'event_type' => 'eventType',
        'event_date' => 'eventDate',
        'webhook_id' => 'webhookId',
        'retry_log' => 'retryLog'
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
        '_links' => 'setLinks',
        'notification_id' => 'setNotificationId',
        'delivery_status' => 'setDeliveryStatus',
        'event_type' => 'setEventType',
        'event_date' => 'setEventDate',
        'webhook_id' => 'setWebhookId',
        'retry_log' => 'setRetryLog'
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
        '_links' => 'getLinks',
        'notification_id' => 'getNotificationId',
        'delivery_status' => 'getDeliveryStatus',
        'event_type' => 'getEventType',
        'event_date' => 'getEventDate',
        'webhook_id' => 'getWebhookId',
        'retry_log' => 'getRetryLog'
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
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
        $this->container['notification_id'] = isset($data['notification_id']) ? $data['notification_id'] : null;
        $this->container['delivery_status'] = isset($data['delivery_status']) ? $data['delivery_status'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['webhook_id'] = isset($data['webhook_id']) ? $data['webhook_id'] : null;
        $this->container['retry_log'] = isset($data['retry_log']) ? $data['retry_log'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['_links'] === null) {
            $invalid_properties[] = "'_links' can't be null";
        }
        if ($this->container['notification_id'] === null) {
            $invalid_properties[] = "'notification_id' can't be null";
        }
        if ($this->container['delivery_status'] === null) {
            $invalid_properties[] = "'delivery_status' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalid_properties[] = "'event_type' can't be null";
        }
        if ($this->container['event_date'] === null) {
            $invalid_properties[] = "'event_date' can't be null";
        }
        if ($this->container['webhook_id'] === null) {
            $invalid_properties[] = "'webhook_id' can't be null";
        }
        if ($this->container['retry_log'] === null) {
            $invalid_properties[] = "'retry_log' can't be null";
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
        if ($this->container['_links'] === null) {
            return false;
        }
        if ($this->container['notification_id'] === null) {
            return false;
        }
        if ($this->container['delivery_status'] === null) {
            return false;
        }
        if ($this->container['event_type'] === null) {
            return false;
        }
        if ($this->container['event_date'] === null) {
            return false;
        }
        if ($this->container['webhook_id'] === null) {
            return false;
        }
        if ($this->container['retry_log'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets _links
     * @return \Swagger\Client\Model\SelfLink
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     * @param \Swagger\Client\Model\SelfLink $_links
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets notification_id
     * @return string
     */
    public function getNotificationId()
    {
        return $this->container['notification_id'];
    }

    /**
     * Sets notification_id
     * @param string $notification_id Label of the notification
     * @return $this
     */
    public function setNotificationId($notification_id)
    {
        $this->container['notification_id'] = $notification_id;

        return $this;
    }

    /**
     * Gets delivery_status
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->container['delivery_status'];
    }

    /**
     * Sets delivery_status
     * @param string $delivery_status Status of the pings
     * @return $this
     */
    public function setDeliveryStatus($delivery_status)
    {
        $this->container['delivery_status'] = $delivery_status;

        return $this;
    }

    /**
     * Gets event_type
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     * @param string $event_type Type of the pings
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets event_date
     * @return string
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     * @param string $event_date date time of the pings
     * @return $this
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets webhook_id
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhook_id'];
    }

    /**
     * Sets webhook_id
     * @param string $webhook_id Label of the Webhook
     * @return $this
     */
    public function setWebhookId($webhook_id)
    {
        $this->container['webhook_id'] = $webhook_id;

        return $this;
    }

    /**
     * Gets retry_log
     * @return \Swagger\Client\Model\RetryLog
     */
    public function getRetryLog()
    {
        return $this->container['retry_log'];
    }

    /**
     * Sets retry_log
     * @param \Swagger\Client\Model\RetryLog $retry_log
     * @return $this
     */
    public function setRetryLog($retry_log)
    {
        $this->container['retry_log'] = $retry_log;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
