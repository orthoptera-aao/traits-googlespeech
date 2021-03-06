<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule for transforming a value.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.PrimitiveTransformation</code>
 */
class PrimitiveTransformation extends \Google\Protobuf\Internal\Message
{
    protected $transformation;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.ReplaceValueConfig replace_config = 1;</code>
     * @return \Google\Privacy\Dlp\V2beta1\ReplaceValueConfig
     */
    public function getReplaceConfig()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.ReplaceValueConfig replace_config = 1;</code>
     * @param \Google\Privacy\Dlp\V2beta1\ReplaceValueConfig $var
     * @return $this
     */
    public function setReplaceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\ReplaceValueConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RedactConfig redact_config = 2;</code>
     * @return \Google\Privacy\Dlp\V2beta1\RedactConfig
     */
    public function getRedactConfig()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.RedactConfig redact_config = 2;</code>
     * @param \Google\Privacy\Dlp\V2beta1\RedactConfig $var
     * @return $this
     */
    public function setRedactConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\RedactConfig::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CharacterMaskConfig character_mask_config = 3;</code>
     * @return \Google\Privacy\Dlp\V2beta1\CharacterMaskConfig
     */
    public function getCharacterMaskConfig()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CharacterMaskConfig character_mask_config = 3;</code>
     * @param \Google\Privacy\Dlp\V2beta1\CharacterMaskConfig $var
     * @return $this
     */
    public function setCharacterMaskConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\CharacterMaskConfig::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CryptoReplaceFfxFpeConfig crypto_replace_ffx_fpe_config = 4;</code>
     * @return \Google\Privacy\Dlp\V2beta1\CryptoReplaceFfxFpeConfig
     */
    public function getCryptoReplaceFfxFpeConfig()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CryptoReplaceFfxFpeConfig crypto_replace_ffx_fpe_config = 4;</code>
     * @param \Google\Privacy\Dlp\V2beta1\CryptoReplaceFfxFpeConfig $var
     * @return $this
     */
    public function setCryptoReplaceFfxFpeConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\CryptoReplaceFfxFpeConfig::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.FixedSizeBucketingConfig fixed_size_bucketing_config = 5;</code>
     * @return \Google\Privacy\Dlp\V2beta1\FixedSizeBucketingConfig
     */
    public function getFixedSizeBucketingConfig()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.FixedSizeBucketingConfig fixed_size_bucketing_config = 5;</code>
     * @param \Google\Privacy\Dlp\V2beta1\FixedSizeBucketingConfig $var
     * @return $this
     */
    public function setFixedSizeBucketingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\FixedSizeBucketingConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.BucketingConfig bucketing_config = 6;</code>
     * @return \Google\Privacy\Dlp\V2beta1\BucketingConfig
     */
    public function getBucketingConfig()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.BucketingConfig bucketing_config = 6;</code>
     * @param \Google\Privacy\Dlp\V2beta1\BucketingConfig $var
     * @return $this
     */
    public function setBucketingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\BucketingConfig::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.ReplaceWithInfoTypeConfig replace_with_info_type_config = 7;</code>
     * @return \Google\Privacy\Dlp\V2beta1\ReplaceWithInfoTypeConfig
     */
    public function getReplaceWithInfoTypeConfig()
    {
        return $this->readOneof(7);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.ReplaceWithInfoTypeConfig replace_with_info_type_config = 7;</code>
     * @param \Google\Privacy\Dlp\V2beta1\ReplaceWithInfoTypeConfig $var
     * @return $this
     */
    public function setReplaceWithInfoTypeConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\ReplaceWithInfoTypeConfig::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.TimePartConfig time_part_config = 8;</code>
     * @return \Google\Privacy\Dlp\V2beta1\TimePartConfig
     */
    public function getTimePartConfig()
    {
        return $this->readOneof(8);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.TimePartConfig time_part_config = 8;</code>
     * @param \Google\Privacy\Dlp\V2beta1\TimePartConfig $var
     * @return $this
     */
    public function setTimePartConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\TimePartConfig::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CryptoHashConfig crypto_hash_config = 9;</code>
     * @return \Google\Privacy\Dlp\V2beta1\CryptoHashConfig
     */
    public function getCryptoHashConfig()
    {
        return $this->readOneof(9);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.CryptoHashConfig crypto_hash_config = 9;</code>
     * @param \Google\Privacy\Dlp\V2beta1\CryptoHashConfig $var
     * @return $this
     */
    public function setCryptoHashConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\CryptoHashConfig::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTransformation()
    {
        return $this->whichOneof("transformation");
    }

}

