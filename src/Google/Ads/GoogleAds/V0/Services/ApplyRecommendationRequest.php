<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [RecommendationService.ApplyRecommendation][google.ads.googleads.v0.services.RecommendationService.ApplyRecommendation].
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.ApplyRecommendationRequest</code>
 */
class ApplyRecommendationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer with the recommendation.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    private $customer_id = '';
    /**
     * If true, successful operations will be carried out and invalid
     * operations will return errors. If false, operations will be carried
     * out as a transaction if and only if they are all valid.
     * Default is false.
     *
     * Generated from protobuf field <code>bool partial_failure = 3;</code>
     */
    private $partial_failure = false;
    /**
     * The list of operations to apply recommendations.
     * If partial_failure=false all recommendations should be of the same type
     * There is a limit of 100 operations per request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.ApplyRecommendationOperation operations = 2;</code>
     */
    private $operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer with the recommendation.
     *     @type bool $partial_failure
     *           If true, successful operations will be carried out and invalid
     *           operations will return errors. If false, operations will be carried
     *           out as a transaction if and only if they are all valid.
     *           Default is false.
     *     @type \Google\Ads\GoogleAds\V0\Services\ApplyRecommendationOperation[]|\Google\Protobuf\Internal\RepeatedField $operations
     *           The list of operations to apply recommendations.
     *           If partial_failure=false all recommendations should be of the same type
     *           There is a limit of 100 operations per request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer with the recommendation.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer with the recommendation.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * If true, successful operations will be carried out and invalid
     * operations will return errors. If false, operations will be carried
     * out as a transaction if and only if they are all valid.
     * Default is false.
     *
     * Generated from protobuf field <code>bool partial_failure = 3;</code>
     * @return bool
     */
    public function getPartialFailure()
    {
        return $this->partial_failure;
    }

    /**
     * If true, successful operations will be carried out and invalid
     * operations will return errors. If false, operations will be carried
     * out as a transaction if and only if they are all valid.
     * Default is false.
     *
     * Generated from protobuf field <code>bool partial_failure = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPartialFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->partial_failure = $var;

        return $this;
    }

    /**
     * The list of operations to apply recommendations.
     * If partial_failure=false all recommendations should be of the same type
     * There is a limit of 100 operations per request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.ApplyRecommendationOperation operations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * The list of operations to apply recommendations.
     * If partial_failure=false all recommendations should be of the same type
     * There is a limit of 100 operations per request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.ApplyRecommendationOperation operations = 2;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\ApplyRecommendationOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Services\ApplyRecommendationOperation::class);
        $this->operations = $arr;

        return $this;
    }

}

