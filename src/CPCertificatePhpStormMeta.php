<?php

namespace OpenRegion\PhpcadesMeta;

class CPCertificatePhpStormMeta implements PhpStormMetaInterface
{
  public static function getMeta(): string
  {
    return <<<'PHP'
  expectedArguments(
    \CPCertificate::GetInfo(),
    0,
    CERT_INFO_SUBJECT_SIMPLE_NAME,
    CERT_INFO_ISSUER_SIMPLE_NAME,
    CERT_INFO_SUBJECT_EMAIL_NAME,
    CERT_INFO_ISSUER_EMAIL_NAME,
    CERT_INFO_SUBJECT_UPN,
    CERT_INFO_ISSUER_UPN,
    CERT_INFO_SUBJECT_DNS_NAME,
    CERT_INFO_ISSUER_DNS_NAME,
  );

  expectedArguments(
    \CPCertificate::Export(),
    0,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );
PHP;
  }
}
