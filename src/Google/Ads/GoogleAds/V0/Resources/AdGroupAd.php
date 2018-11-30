<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/resources/ad_group_ad.proto

namespace Google\Ads\GoogleAds\V0\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ad group ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.resources.AdGroupAd</code>
 */
class AdGroupAd extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ad.
     * Ad group ad resource names have the form:
     * `customers/{customer_id}/adGroupAds/{ad_group_id}_{ad_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The status of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdGroupAdStatusEnum.AdGroupAdStatus status = 3;</code>
     */
    private $status = 0;
    /**
     * The ad group to which the ad belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 4;</code>
     */
    private $ad_group = null;
    /**
     * The ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Ad ad = 5;</code>
     */
    private $ad = null;
    /**
     * Policy information for the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.AdGroupAdPolicySummary policy_summary = 6;</code>
     */
    private $policy_summary = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the ad.
     *           Ad group ad resource names have the form:
     *           `customers/{customer_id}/adGroupAds/{ad_group_id}_{ad_id}`
     *     @type int $status
     *           The status of the ad.
     *     @type \Google\Protobuf\StringValue $ad_group
     *           The ad group to which the ad belongs.
     *     @type \Google\Ads\GoogleAds\V0\Resources\Ad $ad
     *           The ad.
     *     @type \Google\Ads\GoogleAds\V0\Resources\AdGroupAdPolicySummary $policy_summary
     *           Policy information for the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\AdGroupAd::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ad.
     * Ad group ad resource names have the form:
     * `customers/{customer_id}/adGroupAds/{ad_group_id}_{ad_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the ad.
     * Ad group ad resource names have the form:
     * `customers/{customer_id}/adGroupAds/{ad_group_id}_{ad_id}`
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
     * The status of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdGroupAdStatusEnum.AdGroupAdStatus status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.enums.AdGroupAdStatusEnum.AdGroupAdStatus status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V0\Enums\AdGroupAdStatusEnum_AdGroupAdStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The ad group to which the ad belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * The ad group to which the ad belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * The ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Ad ad = 5;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\Ad
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * The ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.Ad ad = 5;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\Ad $var
     * @return $this
     */
    public function setAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\Ad::class);
        $this->ad = $var;

        return $this;
    }

    /**
     * Policy information for the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.AdGroupAdPolicySummary policy_summary = 6;</code>
     * @return \Google\Ads\GoogleAds\V0\Resources\AdGroupAdPolicySummary
     */
    public function getPolicySummary()
    {
        return $this->policy_summary;
    }

    /**
     * Policy information for the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v0.resources.AdGroupAdPolicySummary policy_summary = 6;</code>
     * @param \Google\Ads\GoogleAds\V0\Resources\AdGroupAdPolicySummary $var
     * @return $this
     */
    public function setPolicySummary($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V0\Resources\AdGroupAdPolicySummary::class);
        $this->policy_summary = $var;

        return $this;
    }

}

