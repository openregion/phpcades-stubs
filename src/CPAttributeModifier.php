<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPAttributeModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Атрибут усовершенствованной подписи (подписанный или неподписанный)',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cpattribute',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('set_OID')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает объектный идентификатор (OID) атрибута',
          null,
          [
            new ParamTag(
              'oid',
              ['\CPOID'],
              'Объектный идентификатор (OID) атрибута',
            ),
            new ReturnTag(
              ['void'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('get_OID')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает объектный идентификатор (OID) атрибута',
          null,
          [
            new ReturnTag(
              ['\CPOID'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('set_Value')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает закодированное значение атрибута',
          null,
          [
            new ParamTag(
              'value',
              ['string'],
              'Закодированное значение атрибута',
            ),
            new ReturnTag(
              ['void'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('get_Value')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает закодированное значение атрибута',
          null,
          [
            new ReturnTag(
              ['string'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('set_Name')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает имя атрибута',
          null,
          [
            new ParamTag(
              'name',
              ['int'],
              'Имя атрибута',
            ),
            new ReturnTag(
              ['void'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('get_Name')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает имя атрибута',
          null,
          [
            new ReturnTag(
              ['int'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('set_ValueEncoding')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает способ кодирования значения атрибута',
          null,
          [
            new ParamTag(
              'valueencoding',
              ['int'],
              'Способ кодирования значения атрибута',
            ),
            new ReturnTag(
              ['void'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('get_ValueEncoding')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает способ кодирования значения атрибута',
          null,
          [
            new ReturnTag(
              ['int'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }
  }
}
