<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPAlgorithmModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Описывает алгоритм шифрования',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/algorithm',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('get_Name')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает алгоритм подписи или шифрования',
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
          'Устанавливает алгоритм подписи или шифрования',
          null,
          [
            new ParamTag(
              'name',
              ['int'],
              'Алгоритм подписи или шифрования',
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

    if ($method = $class->getMethod('get_KeyLength')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает длину ключа',
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

    if ($method = $class->getMethod('set_KeyLength')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает длину ключа',
          null,
          [
            new ParamTag(
              'keylength',
              ['int'],
              'Длина ключа',
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
  }
}
