<?php

namespace OpenRegion\PhpcadesMeta;

class CPSignedDataPhpStormMeta implements PhpStormMetaInterface
{
  public static function getMeta(): string
  {
    return <<<'PHP'
  expectedArguments(
    \CPSignedData::SignCades(),
    1,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::SignCades(),
    2,
    0,
    1,
  );

  expectedArguments(
    \CPSignedData::SignCades(),
    3,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::SignHash(),
    2,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::SignHash(),
    3,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::Sign(),
    1,
    0,
    1,
  );

  expectedArguments(
    \CPSignedData::Sign(),
    2,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::CoSign(),
    1,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::CoSignCades(),
    1,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::CoSignCades(),
    2,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::CoSignHash(),
    2,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::CoSignHash(),
    3,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::EnhanceCades(),
    0,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::EnhanceCades(),
    2,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::VerifyCades(),
    1,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::VerifyCades(),
    2,
    0,
    1,
  );

  expectedArguments(
    \CPSignedData::VerifyHash(),
    2,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::Verify(),
    1,
    0,
    1,
  );

  expectedArguments(
    \CPSignedData::Verify(),
    2,
    VERIFY_SIGNATURE_ONLY,
    VERIFY_SIGNATURE_AND_CERTIFICATE,
  );

  expectedArguments(
    \CPSignedData::set_ContentEncoding(),
    0,
    STRING_TO_UCS2LE,
    BASE64_TO_BINARY,
  );

  expectedReturnValues(
    \CPSignedData::get_ContentEncoding(),
    STRING_TO_UCS2LE,
    BASE64_TO_BINARY,
  );
PHP;
  }
}
