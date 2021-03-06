<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Max findings configuration per info type, per content item or long running
 * operation.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.InspectConfig.InfoTypeLimit</code>
 */
class InspectConfig_InfoTypeLimit extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of information the findings limit applies to. Only one limit per
     * info_type should be provided. If InfoTypeLimit does not have an
     * info_type, the DLP API applies the limit against all info_types that are
     * found but not specified in another InfoTypeLimit.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.InfoType info_type = 1;</code>
     */
    private $info_type = null;
    /**
     * Max findings limit for the given infoType.
     *
     * Generated from protobuf field <code>int32 max_findings = 2;</code>
     */
    private $max_findings = 0;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Type of information the findings limit applies to. Only one limit per
     * info_type should be provided. If InfoTypeLimit does not have an
     * info_type, the DLP API applies the limit against all info_types that are
     * found but not specified in another InfoTypeLimit.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.InfoType info_type = 1;</code>
     * @return \Google\Privacy\Dlp\V2beta1\InfoType
     */
    public function getInfoType()
    {
        return $this->info_type;
    }

    /**
     * Type of information the findings limit applies to. Only one limit per
     * info_type should be provided. If InfoTypeLimit does not have an
     * info_type, the DLP API applies the limit against all info_types that are
     * found but not specified in another InfoTypeLimit.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.InfoType info_type = 1;</code>
     * @param \Google\Privacy\Dlp\V2beta1\InfoType $var
     * @return $this
     */
    public function setInfoType($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\InfoType::class);
        $this->info_type = $var;

        return $this;
    }

    /**
     * Max findings limit for the given infoType.
     *
     * Generated from protobuf field <code>int32 max_findings = 2;</code>
     * @return int
     */
    public function getMaxFindings()
    {
        return $this->max_findings;
    }

    /**
     * Max findings limit for the given infoType.
     *
     * Generated from protobuf field <code>int32 max_findings = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxFindings($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_findings = $var;

        return $this;
    }

}

