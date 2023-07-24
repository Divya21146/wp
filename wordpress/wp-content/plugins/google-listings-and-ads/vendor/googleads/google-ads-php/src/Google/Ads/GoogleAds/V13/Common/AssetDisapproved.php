<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/asset_policy.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details related to AssetLinkPrimaryStatusReasonPB.ASSET_DISAPPROVED
 * Next Id: 2
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.AssetDisapproved</code>
 */
class AssetDisapproved extends \Google\Protobuf\Internal\Message
{
    /**
     * Provides the quality evaluation disapproval reason of an asset.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.enums.AssetOfflineEvaluationErrorReasonsEnum.AssetOfflineEvaluationErrorReasons offline_evaluation_error_reasons = 1;</code>
     */
    private $offline_evaluation_error_reasons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $offline_evaluation_error_reasons
     *           Provides the quality evaluation disapproval reason of an asset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\AssetPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Provides the quality evaluation disapproval reason of an asset.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.enums.AssetOfflineEvaluationErrorReasonsEnum.AssetOfflineEvaluationErrorReasons offline_evaluation_error_reasons = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOfflineEvaluationErrorReasons()
    {
        return $this->offline_evaluation_error_reasons;
    }

    /**
     * Provides the quality evaluation disapproval reason of an asset.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.enums.AssetOfflineEvaluationErrorReasonsEnum.AssetOfflineEvaluationErrorReasons offline_evaluation_error_reasons = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOfflineEvaluationErrorReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V13\Enums\AssetOfflineEvaluationErrorReasonsEnum\AssetOfflineEvaluationErrorReasons::class);
        $this->offline_evaluation_error_reasons = $arr;

        return $this;
    }

}

