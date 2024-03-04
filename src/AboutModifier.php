<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class AboutModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Версия библиотеки',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/about',
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

    if ($method = $class->getMethod('get_Version')) {
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

    if ($method = $class->getMethod('CSPVersion')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает объект Version c версией криптопровайдера (CSP) производства компании Крипто-Про',
          null,
          [
            new ParamTag(
              'provname',
              ['string', 'null'],
              '(optional) Имя криптопровайдера. Если не задано, то будет указан криптопровайдер по умолчанию.',
            ),
            new ParamTag(
              'provtype',
              ['int', 'null'],
              '(optional) Тип криптопровайдера. Если не указан, то будет использован 75.',
            ),
            new ReturnTag(
              ['\Version'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('PluginVersion')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает объект Version c версией плагина',
          null,
          [
            new ReturnTag(
              ['\Version'],
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
