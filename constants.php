<?php

define('MEMORY_STORE', 0);
define('LOCAL_MACHINE_STORE', 1);
define('CURRENT_USER_STORE', 2);
define('ACTIVE_DIRECTORY_USER_STORE', 3);
define('SMART_CARD_USER_STORE', 4);

define('STORE_OPEN_READ_ONLY', 0);
define('STORE_OPEN_READ_WRITE', 1);
define('STORE_OPEN_MAXIMUM_ALLOWED', 2);
define('STORE_OPEN_EXISTING_ONLY', 128);
define('STORE_OPEN_INCLUDE_ARCHIVED', 256);

define('CERTIFICATE_FIND_SHA1_HASH', 0);
define('CERTIFICATE_FIND_SUBJECT_NAME', 1);
define('CERTIFICATE_FIND_ISSUER_NAME', 2);
define('CERTIFICATE_FIND_ROOT_NAME', 3);
define('CERTIFICATE_FIND_TEMPLATE_NAME', 4);
define('CERTIFICATE_FIND_EXTENSION', 5);
define('CERTIFICATE_FIND_EXTENDED_PROPERTY', 6);
define('CERTIFICATE_FIND_APPLICATION_POLICY', 7);
define('CERTIFICATE_FIND_CERTIFICATE_POLICY', 8);
define('CERTIFICATE_FIND_TIME_VALID', 9);
define('CERTIFICATE_FIND_TIME_NOT_YET_VALID', 10);
define('CERTIFICATE_FIND_TIME_EXPIRED', 11);
define('CERTIFICATE_FIND_KEY_USAGE', 12);

define('CERT_INFO_SUBJECT_SIMPLE_NAME', 0);
define('CERT_INFO_ISSUER_SIMPLE_NAME', 1);
define('CERT_INFO_SUBJECT_EMAIL_NAME', 2);
define('CERT_INFO_ISSUER_EMAIL_NAME', 3);
define('CERT_INFO_SUBJECT_UPN', 4);
define('CERT_INFO_ISSUER_UPN', 5);
define('CERT_INFO_SUBJECT_DNS_NAME', 6);
define('CERT_INFO_ISSUER_DNS_NAME', 7);

define('DIGITAL_SIGNATURE_KEY_USAGE', 128);
define('NON_REPUDIATION_KEY_USAGE', 64);
define('KEY_ENCIPHERMENT_KEY_USAGE', 32);
define('DATA_ENCIPHERMENT_KEY_USAGE', 16);
define('KEY_AGREEMENT_KEY_USAGE', 8);
define('KEY_CERT_SIGN_KEY_USAGE', 4);
define('OFFLINE_CRL_SIGN_KEY_USAGE', 2);
define('CRL_SIGN_KEY_USAGE', 2);
define('ENCIPHER_ONLY_KEY_USAGE', 1);
define('DECIPHER_ONLY_KEY_USAGE', 32768);

define('ENCODE_BASE64', 0);
define('ENCODE_BINARY', 1);
define('ENCODE_ANY', 4294967295);

define('CADESCOM_ENCRYPTION_ALGORITHM_RC2', 0);
define('CADESCOM_ENCRYPTION_ALGORITHM_RC4', 1);
define('CADESCOM_ENCRYPTION_ALGORITHM_DES', 2);
define('CADESCOM_ENCRYPTION_ALGORITHM_3DES', 3);
define('CADESCOM_ENCRYPTION_ALGORITHM_AES', 4);
define('CADESCOM_ENCRYPTION_ALGORITHM_GOST_28147_89', 25);

define('ENCRYPTION_KEY_LENGTH_MAXIMUM', 0);
define('ENCRYPTION_KEY_LENGTH_40_BITS', 1);
define('ENCRYPTION_KEY_LENGTH_56_BITS', 2);
define('ENCRYPTION_KEY_LENGTH_128_BITS', 3);
define('ENCRYPTION_KEY_LENGTH_192_BITS', 4);
define('ENCRYPTION_KEY_LENGTH_256_BITS', 5);


define('EKU_OTHER', 0);
define('EKU_SERVER_AUTH', 1);
define('EKU_CLIENT_AUTH', 2);
define('EKU_CODE_SIGNING', 3);
define('EKU_EMAIL_PROTECTION', 4);
define('EKU_SMARTCARD_LOGON', 5);
define('EKU_ENCRYPTING_FILE_SYSTEM', 6);

define('SEX_NOT_KNOWN', 0);
define('SEX_MALE', 1);
define('SEX_FEMALE', 2);
define('SEX_NOT_APPLICABLE', 9);

define('PROV_RSA_FULL', 1);
define('PROV_RSA_SIG', 2);
define('PROV_DSS', 3);
define('PROV_FORTEZZA', 4);
define('PROV_MS_EXCHANGE', 5);
define('PROV_SSL', 6);
define('PROV_RSA_SCHANNEL', 12);
define('PROV_DSS_DH', 13);
define('PROV_EC_ECDSA_SIG', 14);
define('PROV_EC_ECNRA_SIG', 15);
define('PROV_EC_ECDSA_FULL', 16);
define('PROV_EC_ECNRA_FULL', 17);
define('PROV_DH_SCHANNEL', 18);
define('PROV_SPYRUS_LYNKS', 20);
define('PROV_RNG', 21);
define('PROV_INTEL_SEC', 22);
define('PROV_REPLACE_OWF', 23);
define('PROV_RSA_AES', 24);

define('KEY_SPEC_KEYEXCHANGE', 1);
define('KEY_SPEC_SIGNATURE', 2);

define('OID_OTHER', 0);
define('OID_AUTHORITY_KEY_IDENTIFIER_EXTENSION', 1);
define('OID_KEY_ATTRIBUTES_EXTENSION', 2);
define('OID_CERT_POLICIES_95_EXTENSION', 3);
define('OID_KEY_USAGE_RESTRICTION_EXTENSION', 4);
define('OID_LEGACY_POLICY_MAPPINGS_EXTENSION', 5);
define('OID_SUBJECT_ALT_NAME_EXTENSION', 6);
define('OID_ISSUER_ALT_NAME_EXTENSION', 7);
define('OID_BASIC_CONSTRAINTS_EXTENSION', 8);
define('OID_SUBJECT_KEY_IDENTIFIER_EXTENSION', 9);
define('OID_KEY_USAGE_EXTENSION', 10);
define('OID_PRIVATEKEY_USAGE_PERIOD_EXTENSION', 11);
define('OID_SUBJECT_ALT_NAME2_EXTENSION', 12);
define('OID_ISSUER_ALT_NAME2_EXTENSION', 13);
define('OID_BASIC_CONSTRAINTS2_EXTENSION', 14);
define('OID_NAME_CONSTRAINTS_EXTENSION', 15);
define('OID_CRL_DIST_POINTS_EXTENSION', 16);
define('OID_CERT_POLICIES_EXTENSION', 17);
define('OID_POLICY_MAPPINGS_EXTENSION', 18);
define('OID_AUTHORITY_KEY_IDENTIFIER2_EXTENSION', 19);
define('OID_POLICY_CONSTRAINTS_EXTENSION', 20);
define('OID_ENHANCED_KEY_USAGE_EXTENSION', 21);
define('OID_CERTIFICATE_TEMPLATE_EXTENSION', 22);
define('OID_APPLICATION_CERT_POLICIES_EXTENSION', 23);
define('OID_APPLICATION_POLICY_MAPPINGS_EXTENSION', 24);
define('OID_APPLICATION_POLICY_CONSTRAINTS_EXTENSION', 25);
define('OID_AUTHORITY_INFO_ACCESS_EXTENSION    ', 26);
define('OID_SERVER_AUTH_eku', 100);
define('OID_CLIENT_AUTH_eku', 101);
define('OID_CODE_SIGNING_eku', 102);
define('OID_EMAIL_PROTECTION_eku', 103);
define('OID_IPSEC_END_SYSTEM_eku', 104);
define('OID_IPSEC_TUNNEL_eku', 105);
define('OID_IPSEC_USER_eku', 106);
define('OID_TIME_STAMPING_eku', 107);
define('OID_CTL_USAGE_SIGNING_eku', 108);
define('OID_TIME_STAMP_SIGNING_eku', 109);
define('OID_SERVER_GATED_CRYPTO_eku', 110);
define('OID_ENCRYPTING_FILE_SYSTEM_eku', 111);
define('OID_EFS_RECOVERY_eku', 112);
define('OID_WHQL_CRYPTO_eku', 113);
define('OID_NT5_CRYPTO_eku', 114);
define('OID_OEM_WHQL_CRYPTO_eku', 115);
define('OID_EMBEDED_NT_CRYPTO_eku', 116);
define('OID_ROOT_LIST_SIGNER_eku', 117);
define('OID_QUALIFIED_SUBORDINATION_eku', 118);
define('OID_KEY_RECOVERY_eku', 119);
define('OID_DIGITAL_RIGHTS_eku', 120);
define('OID_LICENSES_eku', 121);
define('OID_LICENSE_SERVER_eku', 122);
define('OID_SMART_CARD_LOGON_eku', 123);
define('OID_PKIX_POLICY_QUALIFIER_CPS', 124);
define('OID_PKIX_POLICY_QUALIFIER_USERNOTICE', 125);

define('AUTHENTICATED_ATTRIBUTE_SIGNING_TIME', 0);
define('AUTHENTICATED_ATTRIBUTE_DOCUMENT_NAME', 1);
define('AUTHENTICATED_ATTRIBUTE_DOCUMENT_DESCRIPTION', 2);
define('ATTRIBUTE_OTHER', 4294967295);

define('CHECK_NONE', 0);
define('CHECK_TRUSTED_ROOT', 1);
define('CHECK_TIME_VALIDITY', 2);
define('CHECK_SIGNATURE_VALIDITY', 4);
define('CHECK_ONLINE_REVOCATION_STATUS', 8);
define('CHECK_OFFLINE_REVOCATION_STATUS', 16);
define('CHECK_COMPLETE_CHAIN', 32);
define('CHECK_NAME_CONSTRAINTS', 64);
define('CHECK_BASIC_CONSTRAINTS', 128);
define('CHECK_NESTED_VALIDITY_PERIOD', 256);
define('CHECK_ONLINE_ALL', 495);
define('CHECK_OFFLINE_ALL', 503);

define('STRING_TO_UCS2LE', 0);
define('BASE64_TO_BINARY', 1);

define('CERTIFICATE_INCLUDE_CHAIN_EXCEPT_ROOT', 0);
define('CERTIFICATE_INCLUDE_WHOLE_CHAIN', 1);
define('CERTIFICATE_INCLUDE_END_ENTITY_ONLY', 2);

define('CADES_DEFAULT', 0);
define('CADES_BES', 1);
define('CADES_X_LONG_TYPE_1', 93);
define('CADES_T', 5);
define('PKCS7_TYPE', 65535);

define('VERIFY_SIGNATURE_ONLY', 0);
define('VERIFY_SIGNATURE_AND_CERTIFICATE', 1);

define('HASH_ALGORITHM_SHA1', 0);
define('HASH_ALGORITHM_MD2', 1);
define('HASH_ALGORITHM_MD4', 2);
define('HASH_ALGORITHM_MD5', 3);
define('HASH_ALGORITHM_SHA_256', 4);
define('HASH_ALGORITHM_SHA_384', 5);
define('HASH_ALGORITHM_SHA_512', 6);
define('HASH_ALGORITHM_GOSTR_3411', 100);
define('CADESCOM_HASH_ALGORITHM_CP_GOST_3411', 100);
define('CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_256', 101);
define('CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_512', 102);
define('CADESCOM_HASH_ALGORITHM_CP_GOST_3411_HMAC', 110);
define('CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_256_HMAC', 111);
define('CADESCOM_HASH_ALGORITHM_CP_GOST_3411_2012_512_HMAC', 112);

define('XML_SIGNATURE_TYPE_ENVELOPED', 0);
define('XML_SIGNATURE_TYPE_ENVELOPING', 1);
define('XML_SIGNATURE_TYPE_TEMPLATE', 2);