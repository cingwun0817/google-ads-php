<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/feed.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.Feed</code>
 */
class Feed extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the feed.
     * Feed resource names have the form:
     * `customers/{customer_id}/feeds/{feed_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The ID of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    private $id = null;
    /**
     * Name of the feed. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    private $name = null;
    /**
     * The Feed's attributes. Required on CREATE.
     * Disallowed on UPDATE. Use attribute_operations to add new attributes.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.resources.FeedAttribute attributes = 4;</code>
     */
    private $attributes;
    /**
     * The list of operations changing the feed attributes. Attributes can only
     * be added, not removed.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.resources.FeedAttributeOperation attribute_operations = 9;</code>
     */
    private $attribute_operations;
    /**
     * Specifies who manages the FeedAttributes for the Feed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.FeedOriginEnum.FeedOrigin origin = 5;</code>
     */
    private $origin = 0;
    /**
     * Status of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.FeedStatusEnum.FeedStatus status = 8;</code>
     */
    private $status = 0;
    protected $system_feed_generation_data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the feed.
     *           Feed resource names have the form:
     *           `customers/{customer_id}/feeds/{feed_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the feed.
     *           This field is read-only.
     *     @type \Google\Protobuf\StringValue $name
     *           Name of the feed. Required.
     *     @type \Google\Ads\GoogleAds\V0\Resources\FeedAttribute[]|\Google\Protobuf\Internal\RepeatedField $attributes
     *           The Feed's attributes. Required on CREATE.
     *           Disallowed on UPDATE. Use attribute_operations to add new attributes.
     *     @type \Google\Ads\GoogleAds\V0\Resources\FeedAttributeOperation[]|\Google\Protobuf\Internal\RepeatedField $attribute_operations
     *           The list of operations changing the feed attributes. Attributes can only
     *           be added, not removed.
     *     @type int $origin
     *           Specifies who manages the FeedAttributes for the Feed.
     *     @type int $status
     *           Status of the feed.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V0\Resources\Feed\PlacesLocationFeedData $places_location_feed_data
     *           Data used to configure a location feed populated from Google My Business
     *           Locations.
     *     @type \Google\Ads\GoogleAds\V0\Resources\Feed\AffiliateLocationFeedData $affiliate_location_feed_data
     *           Data used to configure an affiliate location feed populated with
     *           the specified chains.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\Feed::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the feed.
     * Feed resource names have the form:
     * `customers/{customer_id}/feeds/{feed_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the feed.
     * Feed resource names have the form:
     * `customers/{customer_id}/feeds/{feed_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The ID of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The ID of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Name of the feed. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the feed. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * The Feed's attributes. Required on CREATE.
     * Disallowed on UPDATE. Use attribute_operations to add new attributes.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.resources.FeedAttribute attributes = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * The Feed's attributes. Required on CREATE.
     * Disallowed on UPDATE. Use attribute_operations to add new attributes.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.resources.FeedAttribute attributes = 4;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\FeedAttribute[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Resources\FeedAttribute::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * The list of operations changing the feed attributes. Attributes can only
     * be added, not removed.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.resources.FeedAttributeOperation attribute_operations = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributeOperations()
    {
        return $this->attribute_operations;
    }

    /**
     * The list of operations changing the feed attributes. Attributes can only
     * be added, not removed.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.resources.FeedAttributeOperation attribute_operations = 9;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\FeedAttributeOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributeOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Resources\FeedAttributeOperation::class);
        $this->attribute_operations = $arr;

        return $this;
    }

    /**
     * Specifies who manages the FeedAttributes for the Feed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.FeedOriginEnum.FeedOrigin origin = 5;</code>
     * @return int
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Specifies who manages the FeedAttributes for the Feed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.FeedOriginEnum.FeedOrigin origin = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setOrigin($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\FeedOriginEnum_FeedOrigin::class);
        $this->origin = $var;

        return $this;
    }

    /**
     * Status of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.FeedStatusEnum.FeedStatus status = 8;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.FeedStatusEnum.FeedStatus status = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\FeedStatusEnum_FeedStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Data used to configure a location feed populated from Google My Business
     * Locations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Feed.PlacesLocationFeedData places_location_feed_data = 6;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\Feed\PlacesLocationFeedData
     */
    public function getPlacesLocationFeedData()
    {
        return $this->readOneof(6);
    }

    /**
     * Data used to configure a location feed populated from Google My Business
     * Locations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Feed.PlacesLocationFeedData places_location_feed_data = 6;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\Feed\PlacesLocationFeedData $var
     * @return $this
     */
    public function setPlacesLocationFeedData($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\Feed_PlacesLocationFeedData::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Data used to configure an affiliate location feed populated with
     * the specified chains.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Feed.AffiliateLocationFeedData affiliate_location_feed_data = 7;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\Feed\AffiliateLocationFeedData
     */
    public function getAffiliateLocationFeedData()
    {
        return $this->readOneof(7);
    }

    /**
     * Data used to configure an affiliate location feed populated with
     * the specified chains.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Feed.AffiliateLocationFeedData affiliate_location_feed_data = 7;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\Feed\AffiliateLocationFeedData $var
     * @return $this
     */
    public function setAffiliateLocationFeedData($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\Feed_AffiliateLocationFeedData::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSystemFeedGenerationData()
    {
        return $this->whichOneof("system_feed_generation_data");
    }

}

