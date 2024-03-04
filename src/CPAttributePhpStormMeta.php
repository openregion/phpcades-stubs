<?php

namespace OpenRegion\PhpcadesMeta;

class CPAttributePhpStormMeta implements PhpStormMetaInterface
{
  public static function getMeta(): string
  {
    return <<<'PHP'
  expectedArguments(
    \CPAttribute::set_Name(),
    0,
    AUTHENTICATED_ATTRIBUTE_SIGNING_TIME,
    AUTHENTICATED_ATTRIBUTE_DOCUMENT_NAME,
    AUTHENTICATED_ATTRIBUTE_DOCUMENT_DESCRIPTION,
  );

  expectedReturnValues(
    \CPAttribute::get_Name(),
    AUTHENTICATED_ATTRIBUTE_SIGNING_TIME,
    AUTHENTICATED_ATTRIBUTE_DOCUMENT_NAME,
    AUTHENTICATED_ATTRIBUTE_DOCUMENT_DESCRIPTION,
  );

  expectedArguments(
    \CPAttribute::set_ValueEncoding(),
    0,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedReturnValues(
    \CPAttribute::get_ValueEncoding(),
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );
PHP;
  }
}
