<?php

namespace OpenRegion\PhpcadesMeta;

class CPPrivateKeyPhpStormMeta implements PhpStormMetaInterface
{
  public static function getMeta(): string
  {
    return <<<'PHP'
  expectedReturnValues(
    \CPPrivateKey::get_ProviderType(),
    PROV_RSA_FULL,
    PROV_RSA_SIG,
    PROV_FORTEZZA,
    PROV_MS_EXCHANGE,
    PROV_SSL,
    PROV_RSA_SCHANNEL,
    PROV_DSS_DH,
    PROV_EC_ECDSA_SIG,
    PROV_EC_ECNRA_SIG,
    PROV_EC_ECDSA_FULL,
    PROV_EC_ECNRA_FULL,
    PROV_DH_SCHANNEL,
    PROV_SPYRUS_LYNKS,
    PROV_RNG,
    PROV_INTEL_SEC,
    PROV_REPLACE_OWF,
    PROV_RSA_AES,
  );

  expectedReturnValues(
    \CPPrivateKey::get_KeySpec(),
    KEY_SPEC_KEYEXCHANGE,
    KEY_SPEC_SIGNATURE,
  );
PHP;
  }
}
