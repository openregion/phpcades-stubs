<?php

namespace OpenRegion\PhpcadesMeta;

class CPCertificatesPhpStormMeta implements PhpStormMetaInterface
{
  public static function getMeta(): string
  {
    return <<<'PHP'
  expectedArguments(
    \CPCertificates::Find(),
    0,
    CERTIFICATE_FIND_SHA1_HASH,
    CERTIFICATE_FIND_SUBJECT_NAME,
    CERTIFICATE_FIND_ISSUER_NAME,
    CERTIFICATE_FIND_ROOT_NAME,
    CERTIFICATE_FIND_TEMPLATE_NAME,
    CERTIFICATE_FIND_CERTIFICATE_POLICY,
    CERTIFICATE_FIND_EXTENDED_PROPERTY,
    CERTIFICATE_FIND_KEY_USAGE,
    CERTIFICATE_FIND_EXTENSION,
    CERTIFICATE_FIND_APPLICATION_POLICY,
    CERTIFICATE_FIND_TIME_VALID,
    CERTIFICATE_FIND_TIME_NOT_YET_VALID,
    CERTIFICATE_FIND_TIME_EXPIRED,
  );

  expectedArguments(
    \CPCertificates::Find(),
    2,
    0,
    1,
  );
PHP;
  }
}
