<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPPrivateKeyModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Описывает закрытый ключ сертификата',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/privatekey',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('get_ContainerName')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает строку с именем контейнера закрытого ключа',
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

    if ($method = $class->getMethod('get_UniqueContainerName')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает уникальное имя контейнера закрытого ключа',
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

    if ($method = $class->getMethod('get_ProviderName')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает имя криптографического провайдера',
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

    if ($method = $class->getMethod('get_ProviderType')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает тип криптографического провайдера',
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

    if ($method = $class->getMethod('get_KeySpec')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает назначение ключа',
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
