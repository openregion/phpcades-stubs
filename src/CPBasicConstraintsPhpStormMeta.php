<?php

namespace OpenRegion\PhpcadesMeta;

class CPBasicConstraintsPhpStormMeta implements PhpStormMetaInterface
{
  public static function getMeta(): string
  {
    return <<<'PHP'
  expectedArguments(
    \CPBasicConstraints::set_IsPresent(),
    0,
    0,
    1,
  );

  expectedReturnValues(
    \CPBasicConstraints::get_IsPresent(),
    0,
    1,
  );

  expectedArguments(
    \CPBasicConstraints::set_IsCritical(),
    0,
    0,
    1,
  );

  expectedReturnValues(
    \CPBasicConstraints::get_IsCritical(),
    0,
    1,
  );

  expectedReturnValues(
    \CPBasicConstraints::get_IsCertificateAuthority(),
    0,
    1,
  );

  expectedReturnValues(
    \CPBasicConstraints::get_IsPathLenConstraintPresent(),
    0,
    1,
  );
PHP;
  }
}
