<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPOIDModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Описывает объектный идентификатор',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/oid',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('get_Value')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает OID',
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

    if ($method = $class->getMethod('set_Value')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает OID',
          null,
          [
            new ParamTag(
              'value',
              ['string'],
              'Значение OID',
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

    if ($method = $class->getMethod('get_FriendlyName')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает имя для отображения для OID',
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
  }
}
