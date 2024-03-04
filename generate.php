<?php

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\FileGenerator;
use Laminas\Code\Reflection\ClassReflection;
use OpenRegion\PhpcadesMeta\AboutModifier;
use OpenRegion\PhpcadesMeta\ClassModifierInterface;
use OpenRegion\PhpcadesMeta\CPAlgorithmModifier;
use OpenRegion\PhpcadesMeta\CPAlgorithmPhpStormMeta;
use OpenRegion\PhpcadesMeta\CPAttributeModifier;
use OpenRegion\PhpcadesMeta\CPAttributePhpStormMeta;
use OpenRegion\PhpcadesMeta\CPAttributesModifier;
use OpenRegion\PhpcadesMeta\CPBasicConstraintsModifier;
use OpenRegion\PhpcadesMeta\CPBasicConstraintsPhpStormMeta;
use OpenRegion\PhpcadesMeta\CPCertificateModifier;
use OpenRegion\PhpcadesMeta\CPCertificatePhpStormMeta;
use OpenRegion\PhpcadesMeta\CPCertificatesModifier;
use OpenRegion\PhpcadesMeta\CPCertificatesPhpStormMeta;
use OpenRegion\PhpcadesMeta\CPHashedDataModifier;
use OpenRegion\PhpcadesMeta\CPHashedDataPhpStormMeta;
use OpenRegion\PhpcadesMeta\CPOIDModifier;
use OpenRegion\PhpcadesMeta\CPPrivateKeyModifier;
use OpenRegion\PhpcadesMeta\CPPrivateKeyPhpStormMeta;
use OpenRegion\PhpcadesMeta\CPPublicKeyModifier;
use OpenRegion\PhpcadesMeta\CPRawSignatureModifier;
use OpenRegion\PhpcadesMeta\CPSignedDataModifier;
use OpenRegion\PhpcadesMeta\CPSignedDataPhpStormMeta;
use OpenRegion\PhpcadesMeta\CPSignerModifier;
use OpenRegion\PhpcadesMeta\CPSignerPhpStormMeta;
use OpenRegion\PhpcadesMeta\CPStoreModifier;
use OpenRegion\PhpcadesMeta\CPStorePhpStormMeta;
use OpenRegion\PhpcadesMeta\PhpStormMetaInterface;
use OpenRegion\PhpcadesMeta\VersionModifier;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Cleanup
 */
$removeFiles = static function (string $file) {
  if (is_file($file)) {
    unlink($file);
  }
};

array_map(
  $removeFiles,
  glob(__DIR__ . '/dist/meta/.*.php') ?: [],
);

array_map(
  $removeFiles,
  glob(__DIR__ . '/dist/*.php') ?: [],
);

/**
 * Main meta
 */

/** @var array<ClassModifierInterface|null> $classes */
$classes = [
  'About' => AboutModifier::class,
  'CPAlgorithm' => CPAlgorithmModifier::class,
  'CPAttribute' => CPAttributeModifier::class,
  'CPAttributes' => CPAttributesModifier::class,
  'CPBasicConstraints' => CPBasicConstraintsModifier::class,
  'CPCardholderData' => null,
  'CPCertificate' => CPCertificateModifier::class,
  'CPCertificates' => CPCertificatesModifier::class,
  'CPCertificateStatus' => null,
  'CPEKU' => null,
  'CPEKUs' => null,
  'CPEncodedData' => null,
  'CPEnvelopedData' => null,
  'CPExtendedKeyUsage' => null,
  'CPHashedData' => CPHashedDataModifier::class,
  'CPKeyUsage' => null,
  'CPOID' => CPOIDModifier::class,
  'CPPrivateKey' => CPPrivateKeyModifier::class,
  'CPPublicKey' => CPPublicKeyModifier::class,
  'CPRawSignature' => CPRawSignatureModifier::class,
  'CPRecipients' => null,
  'CPSignedData' => CPSignedDataModifier::class,
  'CPSignedXML' => null,
  'CPSigner' => CPSignerModifier::class,
  'CPSigners' => null,
  'CPStore' => CPStoreModifier::class,
  'SymmetricAlgorithm' => null,
  'Version' => VersionModifier::class,
];

foreach ($classes as $className => $classModifier) {
  if (!class_exists($className, false)) {
    continue;
  }

  $classGenerator = ClassGenerator::fromReflection(
    new ClassReflection($className)
  );

  if ($classModifier !== null) {
    $classModifier::apply($classGenerator);
  }

  $fileGenerator = (new FileGenerator)->setClass($classGenerator);
  file_put_contents(__DIR__ . "/dist/{$className}.php", $fileGenerator->generate());
}

/**
 * PhpStorm metadata
 */

/** @var PhpStormMetaInterface[] $phpStormMetas */
$phpStormMetas = [
  CPAlgorithmPhpStormMeta::class,
  CPAttributePhpStormMeta::class,
  CPBasicConstraintsPhpStormMeta::class,
  CPCertificatePhpStormMeta::class,
  CPCertificatesPhpStormMeta::class,
  CPHashedDataPhpStormMeta::class,
  CPPrivateKeyPhpStormMeta::class,
  CPSignedDataPhpStormMeta::class,
  CPSignerPhpStormMeta::class,
  CPStorePhpStormMeta::class,
];

$body = <<<'PHP'
<?php

namespace PHPSTORM_META {
PHP;

foreach ($phpStormMetas as $phpStormMeta) {
  $body .= "\n" . $phpStormMeta::getMeta() . "\n";
}

$body .= <<<'PHP'
}
PHP;

file_put_contents(__DIR__ . '/dist/meta/.phpstorm.meta.php', $body);
