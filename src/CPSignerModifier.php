<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPSignerModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Объект, задающий параметры создания и содержащий информацию об усовершенствованной подписи',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cpsigner',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('get_Certificate')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает сертификат подписанта',
          null,
          [
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

    if ($method = $class->getMethod('set_Certificate')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает сертификат подписанта',
          null,
          [
            new ParamTag(
              'certificate',
              ['\CPCertificate'],
              'Сертификат подписанта',
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

    if ($method = $class->getMethod('get_Options')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает параметры сертификата подписанта',
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

    if ($method = $class->getMethod('set_Options')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает параметры сертификата подписанта',
          null,
          [
            new ParamTag(
              'options',
              ['int'],
              'Параметры сертификата подписанта',
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

    if ($method = $class->getMethod('get_AuthenticatedAttributes')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает коллекцию аутентифицированных атрибутов',
          null,
          [
            new ReturnTag(
              ['\CPAttributes'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('get_UnauthenticatedAttributes')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает коллекцию неподписанных атрибутов',
          null,
          [
            new ReturnTag(
              ['\CPAttributes'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('get_TSAAddress')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает адрес службы штампов времени',
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

    if ($method = $class->getMethod('set_TSAAddress')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает адрес службы штампов времени',
          null,
          [
            new ParamTag(
              'tsaaddress',
              ['string'],
              'Адрес службы штампов времени',
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

    if ($method = $class->getMethod('get_CRLs')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает коллекцию СОС',
          null,
          [
            new ReturnTag(
              ['mixed'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('get_OCSPResponses')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает коллекция ответов служб актуальных статусов',
          null,
          [
            new ReturnTag(
              ['mixed'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('get_SigningTime')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает время подписи из атрибута signingTime',
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

    if ($method = $class->getMethod('get_SignatureTimeStampTime')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает время подписи из штампа времени на значение подписи',
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

    if ($method = $class->getMethod('set_KeyPin')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает пин-код для доступа к закрытому ключу',
          null,
          [
            new ParamTag(
              'pin',
              ['string'],
              'Пин-код для доступа к закрытому ключу',
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
