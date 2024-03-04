<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPHashedDataModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Хэш-значение данных',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cadessigneddata',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('Hash')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Вычисляет хэш для заданной строки',
          null,
          [
            new ParamTag(
              'value',
              ['string'],
              'Строка для вычисления хэша',
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

    if ($method = $class->getMethod('SetHashValue')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Позволяет проинициализировать объект готовым хэш-значением',
          null,
          [
            new ParamTag(
              'value',
              ['string'],
              'Хэш-значение, которым следует проинициализировать объект. Должно быть представлено в виде строки шестнадцатеричных цифр.',
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

    if ($method = $class->getMethod('get_Value')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает результат операции хэширования',
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

    if ($method = $class->getMethod('set_Key')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает данные для установки ключа, используемого для вычисления HMAC',
          null,
          [
            new ParamTag(
              'value',
              ['string'],
              'Данные для установки ключа, используемого для вычисления HMAC',
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

    if ($method = $class->getMethod('get_Key')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает данные для установки ключа, используемого для вычисления HMAC',
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

    if ($method = $class->getMethod('set_Algorithm')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает алгоритм хэширования',
          null,
          [
            new ParamTag(
              'value',
              ['int'],
              'Алгоритм хэширования',
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

    if ($method = $class->getMethod('get_Algorithm')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает алгоритм хэширования',
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

    if ($method = $class->getMethod('set_DataEncoding')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает способ кодирования данных для хэширования',
          'Данное свойство задает кодировку данных, передаваемых в метод Hash, и должно быть задано до того, как будет впервые вызван метод Hash. По умолчанию свойство имеет значение CADESCOM_STRING_TO_UCS2LE. Задание свойства DataEncoding сбрасывает состояние объекта.',
          [
            new ParamTag(
              'value',
              ['int'],
              'Способ кодирования данных для хэширования',
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

    if ($method = $class->getMethod('get_DataEncoding')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает способ кодирования данных для хэширования',
          'Данное свойство задает кодировку данных, передаваемых в метод Hash, и должно быть задано до того, как будет впервые вызван метод Hash. По умолчанию свойство имеет значение CADESCOM_STRING_TO_UCS2LE.',
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
