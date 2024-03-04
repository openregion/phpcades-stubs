<?php

namespace OpenRegion\PhpcadesMeta;

use Laminas\Code\Generator\ClassGenerator;

interface ClassModifierInterface
{
  public static function apply(ClassGenerator $class): void;
}
