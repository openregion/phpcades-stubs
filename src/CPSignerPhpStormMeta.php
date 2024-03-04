<?php

namespace OpenRegion\PhpcadesMeta;

class CPSignerPhpStormMeta implements PhpStormMetaInterface
{
  public static function getMeta(): string
  {
    return <<<'PHP'
  expectedReturnValues(
    \CPSigner::get_Options(),
    CERTIFICATE_INCLUDE_CHAIN_EXCEPT_ROOT,
    CERTIFICATE_INCLUDE_WHOLE_CHAIN,
    CERTIFICATE_INCLUDE_END_ENTITY_ONLY,
  );

  expectedArguments(
    \CPSigner::set_Options(),
    0,
    CERTIFICATE_INCLUDE_CHAIN_EXCEPT_ROOT,
    CERTIFICATE_INCLUDE_WHOLE_CHAIN,
    CERTIFICATE_INCLUDE_END_ENTITY_ONLY,
  );
PHP;
  }
}
