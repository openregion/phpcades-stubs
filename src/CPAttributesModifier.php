<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPAttributesModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Коллекция объектов CPAttribute',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cpattributes',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('Add')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Добавляет атрибут в коллекцию',
          null,
          [
            new ParamTag(
              'item',
              ['\CPAttribute'],
              'Добавляемый атрибут',
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

    if ($method = $class->getMethod('get_Count')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает количество атрибутов в коллекции',
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

    if ($method = $class->getMethod('get_Item')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Возвращает атрибут из коллекции по его индексу',
          null,
          [
            new ParamTag(
              'index',
              ['int'],
              'Индекс атрибута',
            ),
            new ReturnTag(
              ['\CPAttribute'],
            ),
            new ThrowsTag(
              ['\Exception']
            ),
          ],
        )
      );
    }

    if ($method = $class->getMethod('Clear')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Удаляет все атрибуты из коллекции',
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

    if ($method = $class->getMethod('Remove')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Удаляет атрибут из коллекции',
          null,
          [
            new ParamTag(
              'index',
              ['int'],
              'Индекс удаляемого атрибута',
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

    if ($method = $class->getMethod('Assign')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          null,
          null,
          [
            new ParamTag(
              'object',
              ['\CPAttributes'],
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
