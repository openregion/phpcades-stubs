<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPPublicKeyModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Описывает открытый ключ сертификата',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/publickey',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('get_Algorithm')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает OID алгоритма открытого ключа',
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

    if ($method = $class->getMethod('get_Length')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает длину открытого ключа в битах',
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

    if ($method = $class->getMethod('get_EncodedKey')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает значение открытого ключа',
          null,
          [
            new ReturnTag(
              ['\CPEncodedData'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('get_EncodedParameters')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает параметры алгоритма открытого ключа',
          null,
          [
            new ReturnTag(
              ['\CPEncodedData'],
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
