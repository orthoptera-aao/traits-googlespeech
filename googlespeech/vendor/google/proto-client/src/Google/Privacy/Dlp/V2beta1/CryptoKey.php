<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This is a data encryption key (DEK) (as opposed to
 * a key encryption key (KEK) stored by KMS).
 * When using KMS to wrap/unwrap DEKs, be sure to set an appropriate
 * IAM policy on the KMS CryptoKey (KEK) to ensure an attacker cannot
 * unwrap the data crypto key.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.CryptoKey</code>
 */
class CryptoKey extends \Google\Protobuf\Internal\Message
{
    protected $source;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.TransientCryptoKey transient = 1;</code>
     * @return \Google\Privacy\Dlp\V2beta1\TransientCryptoKey
     */
    public function getTransient()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.TransientCryptoKey transient = 1;</code>
     * @param \Google\Privacy\Dlp\V2beta1\TransientCryptoKey $var
     * @return $this
     */
    public function setTransient($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\TransientCryptoKey::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.UnwrappedCryptoKey unwrapped = 2;</code>
     * @return \Google\Privacy\Dlp\V2beta1\UnwrappedCryptoKey
     */
    public function getUnwrapped()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.UnwrappedCryptoKey unwrapped = 2;</code>
     * @param \Google\Privacy\Dlp\V2beta1\UnwrappedCryptoKey $var
     * @return $this
     */
    public function setUnwrapped($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\UnwrappedCryptoKey::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.KmsWrappedCryptoKey kms_wrapped = 3;</code>
     * @return \Google\Privacy\Dlp\V2beta1\KmsWrappedCryptoKey
     */
    public function getKmsWrapped()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.KmsWrappedCryptoKey kms_wrapped = 3;</code>
     * @param \Google\Privacy\Dlp\V2beta1\KmsWrappedCryptoKey $var
     * @return $this
     */
    public function setKmsWrapped($var)
    {
        GPBUtil::checkMessage($var, \Google\Privacy\Dlp\V2beta1\KmsWrappedCryptoKey::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

