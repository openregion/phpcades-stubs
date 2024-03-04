<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\ThrowsTag;
use Laminas\Code\Generator\DocBlockGenerator;

class CPBasicConstraintsModifier implements ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void
  {
    $class->setDocBlock(
      new DocBlockGenerator(
        'Описывает основные ограничения на использование сертификата',
        null,
        [
          new GenericTag(
            'link',
            'https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/basicconstraints',
          ),
        ],
      )
    );

    if ($method = $class->getMethod('set_IsPresent')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает присутствует ли расширение',
          null,
          [
            new ParamTag(
              'ispresent',
              ['int'],
              'Присутствует ли расширение',
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

    if ($method = $class->getMethod('get_IsPresent')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Присутствует ли расширение',
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

    if ($method = $class->getMethod('set_IsCritical')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Устанавливает является ли расширение критическим',
          null,
          [
            new ParamTag(
              'iscritical',
              ['int'],
              'Является ли расширение критическим',
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

    if ($method = $class->getMethod('get_IsCritical')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Является ли расширение критическим',
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

    if ($method = $class->getMethod('get_IsCertificateAuthority')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Является ли сертификат сертификатом УЦ',
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

    if ($method = $class->getMethod('get_IsPathLenConstraintPresent')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Существует ли ограничение на длину пути сертификата',
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

    if ($method = $class->getMethod('get_PathLenConstraint')) {
      $method->setDocBlock(
        new DocBlockGenerator(
          'Ограничение на длину пути',
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
