<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPCertificatesModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Описывает коллекцию сертификатов',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/certificates',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('Find')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает коллекцию сертификатов, удовлетворяющих заданному критерию',
          null,
          [
            new ParamTag(
              'findtype',
              ['int'],
              'Тип критерия',
            ),
            new ParamTag(
              'criteria',
              ['mixed'],
              '(optional) Критерий',
            ),
            new ParamTag(
              'validonly',
              ['int'],
              '(optional) Вернуть только валидные',
            ),
            new ReturnTag(
              ['\CPCertificates'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('Item')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает сертификат с заданным индексом из коллекции',
          null,
          [
            new ParamTag(
              'index',
              ['int'],
              'Индекс сертификата',
            ),
            new ReturnTag(
              ['\CPCertificate'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('Count')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает количество объектов в коллекции сертификатов',
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
