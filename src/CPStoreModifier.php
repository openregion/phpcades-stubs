<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPStoreModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Описывает хранилище сертификатов',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/store',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('Open')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Открывает хранилище сертификатов',
          null,
          [
            new ParamTag(
              'location',
              ['int', 'null'],
              '(optional) Местоположение хранилища',
            ),
            new ParamTag(
              'name',
              ['string', 'null'],
              '(optional) Имя хранилища',
            ),
            new ParamTag(
              'mode',
              ['int', 'null'],
              '(optional) Режим открытия хранилища',
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

    if ($method = $class->getMethod('Close')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Закрывает хранилище сертификатов',
          null,
          [
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

    if ($method = $class->getMethod('get_Certificates')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает коллекцию сертификатов в хранилище',
          null,
          [
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

    if ($method = $class->getMethod('get_Location')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает расположение хранилища сертификатов',
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

    if ($method = $class->getMethod('get_Name')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает имя хранилища',
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
