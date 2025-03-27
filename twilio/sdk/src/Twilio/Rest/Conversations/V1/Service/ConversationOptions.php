<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Conversations\V1\Service;

use Twilio\Options;
use Twilio\Values;

abstract class ConversationOptions
{
    /**
     * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional.
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource's `sid` in the URL.
     * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\"{}\\\" will be returned.
     * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/messaging/api/service-resource) this conversation belongs to.
     * @param \DateTime $dateCreated The date that this resource was created.
     * @param \DateTime $dateUpdated The date that this resource was last updated.
     * @param string $state
     * @param string $timersInactive ISO8601 duration when conversation will be switched to `inactive` state. Minimum value for this timer is 1 minute.
     * @param string $timersClosed ISO8601 duration when conversation will be switched to `closed` state. Minimum value for this timer is 10 minutes.
     * @param string $bindingsEmailAddress The default email address that will be used when sending outbound emails in this conversation.
     * @param string $bindingsEmailName The default name that will be used when sending outbound emails in this conversation.
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return CreateConversationOptions Options builder
     */
    public static function create(
        
        string $friendlyName = Values::NONE,
        string $uniqueName = Values::NONE,
        string $attributes = Values::NONE,
        string $messagingServiceSid = Values::NONE,
        \DateTime $dateCreated = null,
        \DateTime $dateUpdated = null,
        string $state = Values::NONE,
        string $timersInactive = Values::NONE,
        string $timersClosed = Values::NONE,
        string $bindingsEmailAddress = Values::NONE,
        string $bindingsEmailName = Values::NONE,
        string $xTwilioWebhookEnabled = Values::NONE

    ): CreateConversationOptions
    {
        return new CreateConversationOptions(
            $friendlyName,
            $uniqueName,
            $attributes,
            $messagingServiceSid,
            $dateCreated,
            $dateUpdated,
            $state,
            $timersInactive,
            $timersClosed,
            $bindingsEmailAddress,
            $bindingsEmailName,
            $xTwilioWebhookEnabled
        );
    }

    /**
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return DeleteConversationOptions Options builder
     */
    public static function delete(
        
        string $xTwilioWebhookEnabled = Values::NONE

    ): DeleteConversationOptions
    {
        return new DeleteConversationOptions(
            $xTwilioWebhookEnabled
        );
    }


    /**
     * @param string $startDate Specifies the beginning of the date range for filtering Conversations based on their creation date. Conversations that were created on or after this date will be included in the results. The date must be in ISO8601 format, specifically starting at the beginning of the specified date (YYYY-MM-DDT00:00:00Z), for precise filtering. This parameter can be combined with other filters. If this filter is used, the returned list is sorted by latest conversation creation date in descending order.
     * @param string $endDate Defines the end of the date range for filtering conversations by their creation date. Only conversations that were created on or before this date will appear in the results.  The date must be in ISO8601 format, specifically capturing up to the end of the specified date (YYYY-MM-DDT23:59:59Z), to ensure that conversations from the entire end day are included. This parameter can be combined with other filters. If this filter is used, the returned list is sorted by latest conversation creation date in descending order.
     * @param string $state State for sorting and filtering list of Conversations. Can be `active`, `inactive` or `closed`
     * @return ReadConversationOptions Options builder
     */
    public static function read(
        
        string $startDate = Values::NONE,
        string $endDate = Values::NONE,
        string $state = Values::NONE

    ): ReadConversationOptions
    {
        return new ReadConversationOptions(
            $startDate,
            $endDate,
            $state
        );
    }

    /**
     * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional.
     * @param \DateTime $dateCreated The date that this resource was created.
     * @param \DateTime $dateUpdated The date that this resource was last updated.
     * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\"{}\\\" will be returned.
     * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/messaging/api/service-resource) this conversation belongs to.
     * @param string $state
     * @param string $timersInactive ISO8601 duration when conversation will be switched to `inactive` state. Minimum value for this timer is 1 minute.
     * @param string $timersClosed ISO8601 duration when conversation will be switched to `closed` state. Minimum value for this timer is 10 minutes.
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource's `sid` in the URL.
     * @param string $bindingsEmailAddress The default email address that will be used when sending outbound emails in this conversation.
     * @param string $bindingsEmailName The default name that will be used when sending outbound emails in this conversation.
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return UpdateConversationOptions Options builder
     */
    public static function update(
        
        string $friendlyName = Values::NONE,
        \DateTime $dateCreated = null,
        \DateTime $dateUpdated = null,
        string $attributes = Values::NONE,
        string $messagingServiceSid = Values::NONE,
        string $state = Values::NONE,
        string $timersInactive = Values::NONE,
        string $timersClosed = Values::NONE,
        string $uniqueName = Values::NONE,
        string $bindingsEmailAddress = Values::NONE,
        string $bindingsEmailName = Values::NONE,
        string $xTwilioWebhookEnabled = Values::NONE

    ): UpdateConversationOptions
    {
        return new UpdateConversationOptions(
            $friendlyName,
            $dateCreated,
            $dateUpdated,
            $attributes,
            $messagingServiceSid,
            $state,
            $timersInactive,
            $timersClosed,
            $uniqueName,
            $bindingsEmailAddress,
            $bindingsEmailName,
            $xTwilioWebhookEnabled
        );
    }

}

class CreateConversationOptions extends Options
    {
    /**
     * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional.
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource's `sid` in the URL.
     * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\"{}\\\" will be returned.
     * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/messaging/api/service-resource) this conversation belongs to.
     * @param \DateTime $dateCreated The date that this resource was created.
     * @param \DateTime $dateUpdated The date that this resource was last updated.
     * @param string $state
     * @param string $timersInactive ISO8601 duration when conversation will be switched to `inactive` state. Minimum value for this timer is 1 minute.
     * @param string $timersClosed ISO8601 duration when conversation will be switched to `closed` state. Minimum value for this timer is 10 minutes.
     * @param string $bindingsEmailAddress The default email address that will be used when sending outbound emails in this conversation.
     * @param string $bindingsEmailName The default name that will be used when sending outbound emails in this conversation.
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        string $uniqueName = Values::NONE,
        string $attributes = Values::NONE,
        string $messagingServiceSid = Values::NONE,
        \DateTime $dateCreated = null,
        \DateTime $dateUpdated = null,
        string $state = Values::NONE,
        string $timersInactive = Values::NONE,
        string $timersClosed = Values::NONE,
        string $bindingsEmailAddress = Values::NONE,
        string $bindingsEmailName = Values::NONE,
        string $xTwilioWebhookEnabled = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['attributes'] = $attributes;
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['state'] = $state;
        $this->options['timersInactive'] = $timersInactive;
        $this->options['timersClosed'] = $timersClosed;
        $this->options['bindingsEmailAddress'] = $bindingsEmailAddress;
        $this->options['bindingsEmailName'] = $bindingsEmailName;
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
     * The human-readable name of this conversation, limited to 256 characters. Optional.
     *
     * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource's `sid` in the URL.
     *
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource's `sid` in the URL.
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self
    {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\"{}\\\" will be returned.
     *
     * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\"{}\\\" will be returned.
     * @return $this Fluent Builder
     */
    public function setAttributes(string $attributes): self
    {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The unique ID of the [Messaging Service](https://www.twilio.com/docs/messaging/api/service-resource) this conversation belongs to.
     *
     * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/messaging/api/service-resource) this conversation belongs to.
     * @return $this Fluent Builder
     */
    public function setMessagingServiceSid(string $messagingServiceSid): self
    {
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        return $this;
    }

    /**
     * The date that this resource was created.
     *
     * @param \DateTime $dateCreated The date that this resource was created.
     * @return $this Fluent Builder
     */
    public function setDateCreated(\DateTime $dateCreated): self
    {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date that this resource was last updated.
     *
     * @param \DateTime $dateUpdated The date that this resource was last updated.
     * @return $this Fluent Builder
     */
    public function setDateUpdated(\DateTime $dateUpdated): self
    {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * @param string $state
     * @return $this Fluent Builder
     */
    public function setState(string $state): self
    {
        $this->options['state'] = $state;
        return $this;
    }

    /**
     * ISO8601 duration when conversation will be switched to `inactive` state. Minimum value for this timer is 1 minute.
     *
     * @param string $timersInactive ISO8601 duration when conversation will be switched to `inactive` state. Minimum value for this timer is 1 minute.
     * @return $this Fluent Builder
     */
    public function setTimersInactive(string $timersInactive): self
    {
        $this->options['timersInactive'] = $timersInactive;
        return $this;
    }

    /**
     * ISO8601 duration when conversation will be switched to `closed` state. Minimum value for this timer is 10 minutes.
     *
     * @param string $timersClosed ISO8601 duration when conversation will be switched to `closed` state. Minimum value for this timer is 10 minutes.
     * @return $this Fluent Builder
     */
    public function setTimersClosed(string $timersClosed): self
    {
        $this->options['timersClosed'] = $timersClosed;
        return $this;
    }

    /**
     * The default email address that will be used when sending outbound emails in this conversation.
     *
     * @param string $bindingsEmailAddress The default email address that will be used when sending outbound emails in this conversation.
     * @return $this Fluent Builder
     */
    public function setBindingsEmailAddress(string $bindingsEmailAddress): self
    {
        $this->options['bindingsEmailAddress'] = $bindingsEmailAddress;
        return $this;
    }

    /**
     * The default name that will be used when sending outbound emails in this conversation.
     *
     * @param string $bindingsEmailName The default name that will be used when sending outbound emails in this conversation.
     * @return $this Fluent Builder
     */
    public function setBindingsEmailName(string $bindingsEmailName): self
    {
        $this->options['bindingsEmailName'] = $bindingsEmailName;
        return $this;
    }

    /**
     * The X-Twilio-Webhook-Enabled HTTP request header
     *
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return $this Fluent Builder
     */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self
    {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.CreateConversationOptions ' . $options . ']';
    }
}

class DeleteConversationOptions extends Options
    {
    /**
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     */
    public function __construct(
        
        string $xTwilioWebhookEnabled = Values::NONE

    ) {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
     * The X-Twilio-Webhook-Enabled HTTP request header
     *
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return $this Fluent Builder
     */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self
    {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.DeleteConversationOptions ' . $options . ']';
    }
}


class ReadConversationOptions extends Options
    {
    /**
     * @param string $startDate Specifies the beginning of the date range for filtering Conversations based on their creation date. Conversations that were created on or after this date will be included in the results. The date must be in ISO8601 format, specifically starting at the beginning of the specified date (YYYY-MM-DDT00:00:00Z), for precise filtering. This parameter can be combined with other filters. If this filter is used, the returned list is sorted by latest conversation creation date in descending order.
     * @param string $endDate Defines the end of the date range for filtering conversations by their creation date. Only conversations that were created on or before this date will appear in the results.  The date must be in ISO8601 format, specifically capturing up to the end of the specified date (YYYY-MM-DDT23:59:59Z), to ensure that conversations from the entire end day are included. This parameter can be combined with other filters. If this filter is used, the returned list is sorted by latest conversation creation date in descending order.
     * @param string $state State for sorting and filtering list of Conversations. Can be `active`, `inactive` or `closed`
     */
    public function __construct(
        
        string $startDate = Values::NONE,
        string $endDate = Values::NONE,
        string $state = Values::NONE

    ) {
        $this->options['startDate'] = $startDate;
        $this->options['endDate'] = $endDate;
        $this->options['state'] = $state;
    }

    /**
     * Specifies the beginning of the date range for filtering Conversations based on their creation date. Conversations that were created on or after this date will be included in the results. The date must be in ISO8601 format, specifically starting at the beginning of the specified date (YYYY-MM-DDT00:00:00Z), for precise filtering. This parameter can be combined with other filters. If this filter is used, the returned list is sorted by latest conversation creation date in descending order.
     *
     * @param string $startDate Specifies the beginning of the date range for filtering Conversations based on their creation date. Conversations that were created on or after this date will be included in the results. The date must be in ISO8601 format, specifically starting at the beginning of the specified date (YYYY-MM-DDT00:00:00Z), for precise filtering. This parameter can be combined with other filters. If this filter is used, the returned list is sorted by latest conversation creation date in descending order.
     * @return $this Fluent Builder
     */
    public function setStartDate(string $startDate): self
    {
        $this->options['startDate'] = $startDate;
        return $this;
    }

    /**
     * Defines the end of the date range for filtering conversations by their creation date. Only conversations that were created on or before this date will appear in the results.  The date must be in ISO8601 format, specifically capturing up to the end of the specified date (YYYY-MM-DDT23:59:59Z), to ensure that conversations from the entire end day are included. This parameter can be combined with other filters. If this filter is used, the returned list is sorted by latest conversation creation date in descending order.
     *
     * @param string $endDate Defines the end of the date range for filtering conversations by their creation date. Only conversations that were created on or before this date will appear in the results.  The date must be in ISO8601 format, specifically capturing up to the end of the specified date (YYYY-MM-DDT23:59:59Z), to ensure that conversations from the entire end day are included. This parameter can be combined with other filters. If this filter is used, the returned list is sorted by latest conversation creation date in descending order.
     * @return $this Fluent Builder
     */
    public function setEndDate(string $endDate): self
    {
        $this->options['endDate'] = $endDate;
        return $this;
    }

    /**
     * State for sorting and filtering list of Conversations. Can be `active`, `inactive` or `closed`
     *
     * @param string $state State for sorting and filtering list of Conversations. Can be `active`, `inactive` or `closed`
     * @return $this Fluent Builder
     */
    public function setState(string $state): self
    {
        $this->options['state'] = $state;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.ReadConversationOptions ' . $options . ']';
    }
}

class UpdateConversationOptions extends Options
    {
    /**
     * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional.
     * @param \DateTime $dateCreated The date that this resource was created.
     * @param \DateTime $dateUpdated The date that this resource was last updated.
     * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\"{}\\\" will be returned.
     * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/messaging/api/service-resource) this conversation belongs to.
     * @param string $state
     * @param string $timersInactive ISO8601 duration when conversation will be switched to `inactive` state. Minimum value for this timer is 1 minute.
     * @param string $timersClosed ISO8601 duration when conversation will be switched to `closed` state. Minimum value for this timer is 10 minutes.
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource's `sid` in the URL.
     * @param string $bindingsEmailAddress The default email address that will be used when sending outbound emails in this conversation.
     * @param string $bindingsEmailName The default name that will be used when sending outbound emails in this conversation.
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     */
    public function __construct(
        
        string $friendlyName = Values::NONE,
        \DateTime $dateCreated = null,
        \DateTime $dateUpdated = null,
        string $attributes = Values::NONE,
        string $messagingServiceSid = Values::NONE,
        string $state = Values::NONE,
        string $timersInactive = Values::NONE,
        string $timersClosed = Values::NONE,
        string $uniqueName = Values::NONE,
        string $bindingsEmailAddress = Values::NONE,
        string $bindingsEmailName = Values::NONE,
        string $xTwilioWebhookEnabled = Values::NONE

    ) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['dateCreated'] = $dateCreated;
        $this->options['dateUpdated'] = $dateUpdated;
        $this->options['attributes'] = $attributes;
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        $this->options['state'] = $state;
        $this->options['timersInactive'] = $timersInactive;
        $this->options['timersClosed'] = $timersClosed;
        $this->options['uniqueName'] = $uniqueName;
        $this->options['bindingsEmailAddress'] = $bindingsEmailAddress;
        $this->options['bindingsEmailName'] = $bindingsEmailName;
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
    }

    /**
     * The human-readable name of this conversation, limited to 256 characters. Optional.
     *
     * @param string $friendlyName The human-readable name of this conversation, limited to 256 characters. Optional.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The date that this resource was created.
     *
     * @param \DateTime $dateCreated The date that this resource was created.
     * @return $this Fluent Builder
     */
    public function setDateCreated(\DateTime $dateCreated): self
    {
        $this->options['dateCreated'] = $dateCreated;
        return $this;
    }

    /**
     * The date that this resource was last updated.
     *
     * @param \DateTime $dateUpdated The date that this resource was last updated.
     * @return $this Fluent Builder
     */
    public function setDateUpdated(\DateTime $dateUpdated): self
    {
        $this->options['dateUpdated'] = $dateUpdated;
        return $this;
    }

    /**
     * An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\"{}\\\" will be returned.
     *
     * @param string $attributes An optional string metadata field you can use to store any data you wish. The string value must contain structurally valid JSON if specified.  **Note** that if the attributes are not set \\\"{}\\\" will be returned.
     * @return $this Fluent Builder
     */
    public function setAttributes(string $attributes): self
    {
        $this->options['attributes'] = $attributes;
        return $this;
    }

    /**
     * The unique ID of the [Messaging Service](https://www.twilio.com/docs/messaging/api/service-resource) this conversation belongs to.
     *
     * @param string $messagingServiceSid The unique ID of the [Messaging Service](https://www.twilio.com/docs/messaging/api/service-resource) this conversation belongs to.
     * @return $this Fluent Builder
     */
    public function setMessagingServiceSid(string $messagingServiceSid): self
    {
        $this->options['messagingServiceSid'] = $messagingServiceSid;
        return $this;
    }

    /**
     * @param string $state
     * @return $this Fluent Builder
     */
    public function setState(string $state): self
    {
        $this->options['state'] = $state;
        return $this;
    }

    /**
     * ISO8601 duration when conversation will be switched to `inactive` state. Minimum value for this timer is 1 minute.
     *
     * @param string $timersInactive ISO8601 duration when conversation will be switched to `inactive` state. Minimum value for this timer is 1 minute.
     * @return $this Fluent Builder
     */
    public function setTimersInactive(string $timersInactive): self
    {
        $this->options['timersInactive'] = $timersInactive;
        return $this;
    }

    /**
     * ISO8601 duration when conversation will be switched to `closed` state. Minimum value for this timer is 10 minutes.
     *
     * @param string $timersClosed ISO8601 duration when conversation will be switched to `closed` state. Minimum value for this timer is 10 minutes.
     * @return $this Fluent Builder
     */
    public function setTimersClosed(string $timersClosed): self
    {
        $this->options['timersClosed'] = $timersClosed;
        return $this;
    }

    /**
     * An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource's `sid` in the URL.
     *
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. It can be used to address the resource in place of the resource's `sid` in the URL.
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self
    {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * The default email address that will be used when sending outbound emails in this conversation.
     *
     * @param string $bindingsEmailAddress The default email address that will be used when sending outbound emails in this conversation.
     * @return $this Fluent Builder
     */
    public function setBindingsEmailAddress(string $bindingsEmailAddress): self
    {
        $this->options['bindingsEmailAddress'] = $bindingsEmailAddress;
        return $this;
    }

    /**
     * The default name that will be used when sending outbound emails in this conversation.
     *
     * @param string $bindingsEmailName The default name that will be used when sending outbound emails in this conversation.
     * @return $this Fluent Builder
     */
    public function setBindingsEmailName(string $bindingsEmailName): self
    {
        $this->options['bindingsEmailName'] = $bindingsEmailName;
        return $this;
    }

    /**
     * The X-Twilio-Webhook-Enabled HTTP request header
     *
     * @param string $xTwilioWebhookEnabled The X-Twilio-Webhook-Enabled HTTP request header
     * @return $this Fluent Builder
     */
    public function setXTwilioWebhookEnabled(string $xTwilioWebhookEnabled): self
    {
        $this->options['xTwilioWebhookEnabled'] = $xTwilioWebhookEnabled;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Conversations.V1.UpdateConversationOptions ' . $options . ']';
    }
}

