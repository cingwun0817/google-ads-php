<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/feed_origin.proto

namespace Google\Ads\GoogleAds\V0\Enums\FeedOriginEnum;

/**
 * Possible values for a feed origin.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.FeedOriginEnum.FeedOrigin</code>
 */
class FeedOrigin
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The FeedAttributes for this Feed are managed by the
     * user. Users can add FeedAttributes to this Feed.
     *
     * Generated from protobuf enum <code>USER = 2;</code>
     */
    const USER = 2;
    /**
     * The FeedAttributes for an GOOGLE Feed are created by Google. A feed of
     * this type is maintained by Google and will have the correct attributes
     * for the placeholder type of the feed.
     *
     * Generated from protobuf enum <code>GOOGLE = 3;</code>
     */
    const GOOGLE = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedOrigin::class, \Google\Ads\GoogleAds\V0\Enums\FeedOriginEnum_FeedOrigin::class);

