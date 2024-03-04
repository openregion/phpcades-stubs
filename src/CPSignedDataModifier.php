<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPSignedDataModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Усовершенствованная подпись',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cadessigneddata',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('SignCades')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Добавляет к сообщению усовершенствованную подпись',
          null,
          [
            new ParamTag(
              'signer',
              ['\CPSigner'],
              'Объект CPSigner или CAPICOM.Signer, который будет использован для создания подписи',
            ),
            new ParamTag(
              'cadestype',
              ['int'],
              'Тип усовершенствованной подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long Type 1.',
            ),
            new ParamTag(
              'detached',
              ['int'],
              'Вид подписи: отделенная (true) или совмещенная (false). По умолчанию совмещенная.',
            ),
            new ParamTag(
              'encodingtype',
              ['int'],
              'Кодировка возвращаемой подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию CAPICOM_ENCODE_BASE64.',
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

    if ($method = $class->getMethod('SignHash')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Создает усовершенствованную подпись',
          null,
          [
            new ParamTag(
              'hasheddata',
              ['\CPHashedData'],
              'Объект HashedData, соответствующий хэш-значению, для которого следует создать подписанное CMS-сообщение',
            ),
            new ParamTag(
              'signer',
              ['\CPSigner'],
              'Объект CPSigner или CAPICOM.Signer, который будет использован для создания подписи',
            ),
            new ParamTag(
              'cadestype',
              ['int'],
              'Тип усовершенствованной подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long Type 1.',
            ),
            new ParamTag(
              'encodingtype',
              ['int'],
              'Кодировка возвращаемой подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию CAPICOM_ENCODE_BASE64.',
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

    if ($method = $class->getMethod('Sign')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Создает усовершенствованную подпись типа CAdES-X Long Type 1',
          null,
          [
            new ParamTag(
              'signer',
              ['\CPSigner'],
              'Объект CPSigner или CAPICOM.Signer, который будет использован для создания подписи',
            ),
            new ParamTag(
              'detached',
              ['int'],
              'Вид подписи: отделенная (true) или совмещенная (false). По умолчанию совмещенная.',
            ),
            new ParamTag(
              'encodingtype',
              ['int'],
              'Кодировка возвращаемой подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию CAPICOM_ENCODE_BASE64.',
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

    if ($method = $class->getMethod('CoSign')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Добавляет к сообщению параллельную усовершенствованную подпись типа CAdES-X Long Type 1',
          null,
          [
            new ParamTag(
              'signer',
              ['\CPSigner'],
              'Объект CPSigner или CAPICOM.Signer, который будет использован для создания подписи',
            ),
            new ParamTag(
              'encodingtype',
              ['int'],
              'Кодировка возвращаемой подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию CAPICOM_ENCODE_BASE64.',
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

    if ($method = $class->getMethod('CoSignCades')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Добавляет к сообщению параллельную усовершенствованную подпись',
          null,
          [
            new ParamTag(
              'signer',
              ['\CPSigner'],
              'Объект CPSigner или CAPICOM.Signer, который будет использован для создания подписи',
            ),
            new ParamTag(
              'cadestype',
              ['int'],
              'Тип усовершенствованной подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long Type 1.',
            ),
            new ParamTag(
              'encodingtype',
              ['int'],
              'Кодировка возвращаемой подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию CAPICOM_ENCODE_BASE64.',
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

    if ($method = $class->getMethod('CoSignHash')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Добавляет к сообщению усовершенствованную подпись',
          null,
          [
            new ParamTag(
              'signer',
              ['\CPSigner'],
              'Объект CPSigner или CAPICOM.Signer, который будет использован для создания подписи',
            ),
            new ParamTag(
              'hasheddata',
              ['\CPHashedData'],
              'Объект CAdESCOM.HashedData, соответствующий хэш-значению, для которого следует добавить электронную подпись в CMS-сообщение',
            ),
            new ParamTag(
              'cadestype',
              ['int'],
              'Тип усовершенствованной подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long Type 1.',
            ),
            new ParamTag(
              'encodingtype',
              ['int'],
              'Кодировка возвращаемой подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию CAPICOM_ENCODE_BASE64.',
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

    if ($method = $class->getMethod('EnhanceCades')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Позволяет дополнить подпись до усовершенствованной',
          null,
          [
            new ParamTag(
              'cadestype',
              ['int'],
              'Тип усовершенствованной подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long Type 1.',
            ),
            new ParamTag(
              'tsaaddress',
              ['string'],
              ' Адрес службы штампов времени',
            ),
            new ParamTag(
              'encodingtype',
              ['int'],
              'Кодировка возвращаемой подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию CAPICOM_ENCODE_BASE64.',
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

    if ($method = $class->getMethod('VerifyCades')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Проверяет усовершенствованную подпись',
          null,
          [
            new ParamTag(
              'message',
              ['string'],
              'Проверяемое подписанное сообщение',
            ),
            new ParamTag(
              'cadestype',
              ['int', 'null'],
              'Тип усовершенствованной подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long Type 1.',
            ),
            new ParamTag(
              'detached',
              ['int', 'null'],
              'Вид подписи: отделенная (true) или совмещенная (false). По умолчанию совмещенная.',
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

    if ($method = $class->getMethod('VerifyHash')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Проверяет усовершенствованную подпись на основе переданного хэш-значения',
          null,
          [
            new ParamTag(
              'hasheddata',
              ['\CPHashedData'],
              'Объект CPHashedData, соответствующий хэш-значению, при помощи которого следует проверить подписанное CMS-сообщение',
            ),
            new ParamTag(
              'message',
              ['string'],
              'Проверяемое подписанное сообщение',
            ),
            new ParamTag(
              'cadestype',
              ['int', 'null'],
              'Тип усовершенствованной подписи (см. CADESCOM_CADES_TYPE), на соответствие которому следует проверить указанную подпись. По умолчанию CAdES-X Long Type 1.',
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

    if ($method = $class->getMethod('Verify')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Выполняет проверку усовершенствованной подписи типа CAdES-X Long Type 1',
          null,
          [
            new ParamTag(
              'message',
              ['string'],
              'Проверяемое подписанное сообщение',
            ),
            new ParamTag(
              'detached',
              ['int'],
              'Вид подписи: отделенная (true) или совмещенная (false). По умолчанию совмещенная.',
            ),
            new ParamTag(
              'verifyflag',
              ['int'],
              'Флаг проверки (CAPICOM_SIGNED_DATA_VERIFY_FLAG). По-умолчанию VERIFY_SIGNATURE_AND_CERTIFICATE.',
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

    if ($method = $class->getMethod('set_ContentEncoding')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает способ кодирования данных для подписи',
          'Данный параметр должен быть указан до того, как будет присвоено или получено значение свойства Content. По умолчанию свойство имеет значение CADESCOM_STRING_TO_UCS2LE.',
          [
            new ParamTag(
              'contentencoding',
              ['int'],
              'Способ кодирования данных для подписи',
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

    if ($method = $class->getMethod('get_ContentEncoding')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает способ кодирования данных для подписи',
          'Данный параметр должен быть указан до того, как будет присвоено или получено значение свойства Content. По умолчанию свойство имеет значение CADESCOM_STRING_TO_UCS2LE.',
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

    if ($method = $class->getMethod('set_Content')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает данные для подписи',
          null,
          [
            new ParamTag(
              'content',
              ['string'],
              'Данные для подписи',
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

    if ($method = $class->getMethod('get_Content')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает данные для подписи',
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

    if ($method = $class->getMethod('get_Signers')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает коллекцию подписантов',
          null,
          [
            new ReturnTag(
              ['\CPSigners'],
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
          'Возвращает коллекцию сертификатов из объекта подписи',
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
  }
}
