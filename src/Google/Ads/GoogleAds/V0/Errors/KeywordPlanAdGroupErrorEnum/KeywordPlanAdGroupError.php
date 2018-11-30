<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/keyword_plan_ad_group_error.proto

namespace Google\Ads\GoogleAds\V0\Errors\KeywordPlanAdGroupErrorEnum;

/**
 * Enum describing possible errors from applying a keyword plan ad group.
 *
 * Protobuf type <code>google.ads.googleads.v0.errors.KeywordPlanAdGroupErrorEnum.KeywordPlanAdGroupError</code>
 */
class KeywordPlanAdGroupError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The keyword plan ad group name is missing, empty, longer than allowed
     * limit or contains invalid chars.
     *
     * Generated from protobuf enum <code>INVALID_NAME = 2;</code>
     */
    const INVALID_NAME = 2;
    /**
     * The keyword plan ad group name is duplicate to an existing keyword plan
     * AdGroup name or other keyword plan AdGroup name in the request.
     *
     * Generated from protobuf enum <code>DUPLICATE_NAME = 3;</code>
     */
    const DUPLICATE_NAME = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordPlanAdGroupError::class, \Google\Ads\GoogleAds\V0\Errors\KeywordPlanAdGroupErrorEnum_KeywordPlanAdGroupError::class);

