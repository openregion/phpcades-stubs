<?php

namespace PHPSTORM_META {
  expectedReturnValues(
    \CPAlgorithm::get_KeyLength(),
    ENCRYPTION_KEY_LENGTH_MAXIMUM,
    ENCRYPTION_KEY_LENGTH_40_BITS,
    ENCRYPTION_KEY_LENGTH_56_BITS,
    ENCRYPTION_KEY_LENGTH_128_BITS,
    ENCRYPTION_KEY_LENGTH_192_BITS,
    ENCRYPTION_KEY_LENGTH_256_BITS,
  );

  expectedArguments(
    \CPAlgorithm::set_KeyLength(),
    0,
    ENCRYPTION_KEY_LENGTH_MAXIMUM,
    ENCRYPTION_KEY_LENGTH_40_BITS,
    ENCRYPTION_KEY_LENGTH_56_BITS,
    ENCRYPTION_KEY_LENGTH_128_BITS,
    ENCRYPTION_KEY_LENGTH_192_BITS,
    ENCRYPTION_KEY_LENGTH_256_BITS,
  );

  expectedArguments(
    \CPAttribute::set_Name(),
    0,
    AUTHENTICATED_ATTRIBUTE_SIGNING_TIME,
    AUTHENTICATED_ATTRIBUTE_DOCUMENT_NAME,
    AUTHENTICATED_ATTRIBUTE_DOCUMENT_DESCRIPTION,
  );

  expectedReturnValues(
    \CPAttribute::get_Name(),
    AUTHENTICATED_ATTRIBUTE_SIGNING_TIME,
    AUTHENTICATED_ATTRIBUTE_DOCUMENT_NAME,
    AUTHENTICATED_ATTRIBUTE_DOCUMENT_DESCRIPTION,
  );

  expectedArguments(
    \CPAttribute::set_ValueEncoding(),
    0,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedReturnValues(
    \CPAttribute::get_ValueEncoding(),
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPBasicConstraints::set_IsPresent(),
    0,
    0,
    1,
  );

  expectedReturnValues(
    \CPBasicConstraints::get_IsPresent(),
    0,
    1,
  );

  expectedArguments(
    \CPBasicConstraints::set_IsCritical(),
    0,
    0,
    1,
  );

  expectedReturnValues(
    \CPBasicConstraints::get_IsCritical(),
    0,
    1,
  );

  expectedReturnValues(
    \CPBasicConstraints::get_IsCertificateAuthority(),
    0,
    1,
  );

  expectedReturnValues(
    \CPBasicConstraints::get_IsPathLenConstraintPresent(),
    0,
    1,
  );

  expectedArguments(
    \CPCertificate::GetInfo(),
    0,
    CERT_INFO_SUBJECT_SIMPLE_NAME,
    CERT_INFO_ISSUER_SIMPLE_NAME,
    CERT_INFO_SUBJECT_EMAIL_NAME,
    CERT_INFO_ISSUER_EMAIL_NAME,
    CERT_INFO_SUBJECT_UPN,
    CERT_INFO_ISSUER_UPN,
    CERT_INFO_SUBJECT_DNS_NAME,
    CERT_INFO_ISSUER_DNS_NAME,
  );

  expectedArguments(
    \CPCertificate::Export(),
    0,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPCertificates::Find(),
    0,
    CERTIFICATE_FIND_SHA1_HASH,
    CERTIFICATE_FIND_SUBJECT_NAME,
    CERTIFICATE_FIND_ISSUER_NAME,
    CERTIFICATE_FIND_ROOT_NAME,
    CERTIFICATE_FIND_TEMPLATE_NAME,
    CERTIFICATE_FIND_CERTIFICATE_POLICY,
    CERTIFICATE_FIND_EXTENDED_PROPERTY,
    CERTIFICATE_FIND_KEY_USAGE,
    CERTIFICATE_FIND_EXTENSION,
    CERTIFICATE_FIND_APPLICATION_POLICY,
    CERTIFICATE_FIND_TIME_VALID,
    CERTIFICATE_FIND_TIME_NOT_YET_VALID,
    CERTIFICATE_FIND_TIME_EXPIRED,
  );

  expectedArguments(
    \CPCertificates::Find(),
    2,
    0,
    1,
  );

  expectedArguments(
    \CPHashedData::set_Algorithm(),
    0,
    HASH_ALGORITHM_SHA1,
    HASH_ALGORITHM_MD2,
    HASH_ALGORITHM_MD4,
    HASH_ALGORITHM_MD5,
    HASH_ALGORITHM_SHA_256,
    HASH_ALGORITHM_SHA_384,
    HASH_ALGORITHM_SHA_512,
    HASH_ALGORITHM_GOSTR_3411,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_256,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_512,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411_HMAC,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_256_HMAC,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_512_HMAC,
  );

  expectedReturnValues(
    \CPHashedData::get_Algorithm(),
    HASH_ALGORITHM_SHA1,
    HASH_ALGORITHM_MD2,
    HASH_ALGORITHM_MD4,
    HASH_ALGORITHM_MD5,
    HASH_ALGORITHM_SHA_256,
    HASH_ALGORITHM_SHA_384,
    HASH_ALGORITHM_SHA_512,
    HASH_ALGORITHM_GOSTR_3411,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_256,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_512,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411_HMAC,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_256_HMAC,
    CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_512_HMAC,
  );

  expectedArguments(
    \CPHashedData::set_DataEncoding(),
    0,
    STRING_TO_UCS2LE,
    BASE64_TO_BINARY,
  );

  expectedReturnValues(
    \CPHashedData::get_DataEncoding(),
    STRING_TO_UCS2LE,
    BASE64_TO_BINARY,
  );

  expectedReturnValues(
    \CPPrivateKey::get_ProviderType(),
    PROV_RSA_FULL,
    PROV_RSA_SIG,
    PROV_FORTEZZA,
    PROV_MS_EXCHANGE,
    PROV_SSL,
    PROV_RSA_SCHANNEL,
    PROV_DSS_DH,
    PROV_EC_ECDSA_SIG,
    PROV_EC_ECNRA_SIG,
    PROV_EC_ECDSA_FULL,
    PROV_EC_ECNRA_FULL,
    PROV_DH_SCHANNEL,
    PROV_SPYRUS_LYNKS,
    PROV_RNG,
    PROV_INTEL_SEC,
    PROV_REPLACE_OWF,
    PROV_RSA_AES,
  );

  expectedReturnValues(
    \CPPrivateKey::get_KeySpec(),
    KEY_SPEC_KEYEXCHANGE,
    KEY_SPEC_SIGNATURE,
  );

  expectedArguments(
    \CPSignedData::SignCades(),
    1,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::SignCades(),
    2,
    0,
    1,
  );

  expectedArguments(
    \CPSignedData::SignCades(),
    3,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::SignHash(),
    2,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::SignHash(),
    3,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::Sign(),
    1,
    0,
    1,
  );

  expectedArguments(
    \CPSignedData::Sign(),
    2,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::CoSign(),
    1,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::CoSignCades(),
    1,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::CoSignCades(),
    2,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::CoSignHash(),
    2,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::CoSignHash(),
    3,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::EnhanceCades(),
    0,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::EnhanceCades(),
    2,
    ENCODE_BASE64,
    ENCODE_BINARY,
    ENCODE_ANY,
  );

  expectedArguments(
    \CPSignedData::VerifyCades(),
    1,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::VerifyCades(),
    2,
    0,
    1,
  );

  expectedArguments(
    \CPSignedData::VerifyHash(),
    2,
    CADES_DEFAULT,
    CADES_BES,
    CADES_X_LONG_TYPE_1,
    CADES_T,
    PKCS7_TYPE,
  );

  expectedArguments(
    \CPSignedData::Verify(),
    1,
    0,
    1,
  );

  expectedArguments(
    \CPSignedData::Verify(),
    2,
    VERIFY_SIGNATURE_ONLY,
    VERIFY_SIGNATURE_AND_CERTIFICATE,
  );

  expectedArguments(
    \CPSignedData::set_ContentEncoding(),
    0,
    STRING_TO_UCS2LE,
    BASE64_TO_BINARY,
  );

  expectedReturnValues(
    \CPSignedData::get_ContentEncoding(),
    STRING_TO_UCS2LE,
    BASE64_TO_BINARY,
  );

  expectedReturnValues(
    \CPSigner::get_Options(),
    CERTIFICATE_INCLUDE_CHAIN_EXCEPT_ROOT,
    CERTIFICATE_INCLUDE_WHOLE_CHAIN,
    CERTIFICATE_INCLUDE_END_ENTITY_ONLY,
  );

  expectedArguments(
    \CPSigner::set_Options(),
    0,
    CERTIFICATE_INCLUDE_CHAIN_EXCEPT_ROOT,
    CERTIFICATE_INCLUDE_WHOLE_CHAIN,
    CERTIFICATE_INCLUDE_END_ENTITY_ONLY,
  );

  expectedArguments(
    \CPStore::Open(),
    0,
    ACTIVE_DIRECTORY_USER_STORE,
    CURRENT_USER_STORE,
    LOCAL_MACHINE_STORE,
    MEMORY_STORE,
    SMART_CARD_USER_STORE,
  );

  expectedArguments(
    \CPStore::Open(),
    2,
    STORE_OPEN_MAXIMUM_ALLOWED,
    STORE_OPEN_READ_ONLY,
    STORE_OPEN_READ_WRITE,
    STORE_OPEN_MAXIMUM_ALLOWED | STORE_OPEN_EXISTING_ONLY,
    STORE_OPEN_READ_ONLY | STORE_OPEN_EXISTING_ONLY,
    STORE_OPEN_READ_WRITE | STORE_OPEN_EXISTING_ONLY,
    STORE_OPEN_MAXIMUM_ALLOWED | STORE_OPEN_INCLUDE_ARCHIVED,
    STORE_OPEN_READ_ONLY | STORE_OPEN_INCLUDE_ARCHIVED,
    STORE_OPEN_READ_WRITE | STORE_OPEN_INCLUDE_ARCHIVED,
  );

  expectedReturnValues(
    \CPStore::get_Location(),
    ACTIVE_DIRECTORY_USER_STORE,
    CURRENT_USER_STORE,
    LOCAL_MACHINE_STORE,
    MEMORY_STORE,
    SMART_CARD_USER_STORE,
  );
}