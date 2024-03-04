<?php

namespace OpenRegion\PhpcadesMeta;

class CPAlgorithmPhpStormMeta implements PhpStormMetaInterface
{
  public static function getMeta(): string
  {
    return <<<'PHP'
  expectedReturnValues(
    \CPAlgorithm::get_KeyLength(),
    ENCRYPTION_KEY_LENGTH_MAXIMUM,
    ENCRYPTION_KEY_LENGTH_40_BITS,
    ENCRYPTION_KEY_LENGTH_56_BITS,
    ENCRYPTION_KEY_LENGTH_128_BITS,
    ENCRYPTION_KEY_LENGTH_192_BITS,
    ENCRYPTION_KEY_LENGTH_256_BITS,
  );

  expectedArguments(
    \CPAlgorithm::set_KeyLength(),
    0,
    ENCRYPTION_KEY_LENGTH_MAXIMUM,
    ENCRYPTION_KEY_LENGTH_40_BITS,
    ENCRYPTION_KEY_LENGTH_56_BITS,
    ENCRYPTION_KEY_LENGTH_128_BITS,
    ENCRYPTION_KEY_LENGTH_192_BITS,
    ENCRYPTION_KEY_LENGTH_256_BITS,
  );
PHP;
  }
}
