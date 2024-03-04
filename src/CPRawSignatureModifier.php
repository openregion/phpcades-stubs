<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPRawSignatureModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Значение электронной подписи',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/rawsignature',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('VerifyHash')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Проверяет значение электронной подписи на основе переданного хэш-значения',
          null,
          [
            new ParamTag(
              'hasheddata',
              ['\CPHashedData'],
              'Объект CAdESCOM.HashedData, соответствующий хэш-значению, для которого следует проверить значение электронной подписи',
            ),
            new ParamTag(
              'hashvalue',
              ['string'],
              'Значение электронной подписи в виде строки шестнадцатеричных цифр, группами по две цифры на байт, разделённых пробелами',
            ),
            new ParamTag(
              'certificate',
              ['\CPCertificate'],
              'Сертификат, на ключе которого следует проверить значение электронной подписи',
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

    if ($method = $class->getMethod('SignHash')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Вычисляет значение электронной подписи',
          null,
          [
            new ParamTag(
              'hasheddata',
              ['\CPHashedData'],
              'Объект CPHashedData, соответствующий хэш-значению, для которого следует вычислить значение электронной подписи',
            ),
            new ParamTag(
              'certificate',
              ['\CPCertificate'],
              'Сертификат, на ключе которого следует вычислить значение электронной подписи',
            ),
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
