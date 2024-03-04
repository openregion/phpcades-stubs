<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPCertificateModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Описывает сертификат открытого ключа',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cpcertificate',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('GetInfo')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает информацию из сертификата',
          null,
          [
            new ParamTag(
              'type',
              ['int'],
              'Тип запрашиваемых данных',
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

    if ($method = $class->getMethod('FindPrivateKey')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Производит поиск закрытого ключа соответствующего сертификату открытого ключа и устанавливает ссылку на него. В случае отсутствия в системе подходящего ключа порождает исключение.',
          null,
          [
            new ParamTag(
              'criteria_reserved',
              ['int', 'null'],
              '(optional) Зарезервирован. Не используется.',
            ),
            new ReturnTag(
              ['\CPPrivateKey'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('HasPrivateKey')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Имеется ли закрытый ключ для сертификата',
          null,
          [
            new ReturnTag(
              ['bool'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('IsValid')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Является ли сертификат валидным',
          null,
          [
            new ReturnTag(
              ['bool'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('ExtendedKeyUsage')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает объект ExtendedKeyUsage для данного сертификата',
          null,
          [
            new ReturnTag(
              ['\CPExtendedKeyUsage'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('KeyUsage')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает объект KeyUsage для данного сертификата',
          null,
          [
            new ReturnTag(
              ['\CPKeyUsage'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('Export')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Экспортирует сертификат в виде закодированной строки',
          null,
          [
            new ParamTag(
              'encodingtype',
              ['int'],
              'Метод кодирования',
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

    if ($method = $class->getMethod('Import')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Импортирует сертификат из закодированной строки',
          null,
          [
            new ParamTag(
              'value',
              ['int'],
              'Сертификат в закодированной строке',
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

    if ($method = $class->getMethod('get_SerialNumber')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает серийный номер',
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

    if ($method = $class->getMethod('get_Thumbprint')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает отпечаток',
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

    if ($method = $class->getMethod('get_SubjectName')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает имя субъекта',
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

    if ($method = $class->getMethod('get_IssuerName')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает издателя сертификата',
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

    if ($method = $class->getMethod('get_Version')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает версию сертификата',
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

    if ($method = $class->getMethod('get_ValidToDate')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает дату, до которой сертификат действителен',
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

    if ($method = $class->getMethod('get_ValidFromDate')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает дату, с которой сертификат действителен',
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

    if ($method = $class->getMethod('BasicConstraints')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает объект BasicConstraints для данного сертификата',
          null,
          [
            new ReturnTag(
              ['\CPBasicConstraints'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('PublicKey')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает объект PublicKey для данного сертификата',
          null,
          [
            new ReturnTag(
              ['\CPPublicKey'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('PrivateKey')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает объект PrivateKey для данного сертификата',
          null,
          [
            new ReturnTag(
              ['\CPPrivateKey'],
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
