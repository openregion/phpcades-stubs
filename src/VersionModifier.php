<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class VersionModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Описывает версию',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/version',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('get_MajorVersion')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает старший компонент версии',
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

    if ($method = $class->getMethod('get_MinorVersion')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает младший компонент версии',
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

    if ($method = $class->getMethod('get_BuildVersion')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает номер сборки',
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

    if ($method = $class->getMethod('toString')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает строковое представление версии',
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
