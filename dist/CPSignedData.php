<?php

/**
 * Усовершенствованная подпись
 *
 * @link
 * https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cadessigneddata
 */
class CPSignedData
{
    public function __construct()
    {
    }

    /**
     * Добавляет к сообщению усовершенствованную
     * подпись
     *
     * @param \CPSigner $signer Объект CPSigner или CAPICOM.Signer,
     * который будет использован для создания
     * подписи
     * @param int $cadestype Тип усовершенствованной
     * подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long
     * Type 1.
     * @param int $detached Вид подписи: отделенная (true) или
     * совмещенная (false). По умолчанию совмещенная.
     * @param int $encodingtype Кодировка возвращаемой
     * подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию
     * CAPICOM_ENCODE_BASE64.
     * @return string
     * @throws \Exception
     */
    public function SignCades($signer, $cadestype, $detached, $encodingtype)
    {
    }

    /**
     * Создает усовершенствованную подпись
     *
     * @param \CPHashedData $hasheddata Объект HashedData,
     * соответствующий хэш-значению, для которого
     * следует создать подписанное CMS-сообщение
     * @param \CPSigner $signer Объект CPSigner или CAPICOM.Signer,
     * который будет использован для создания
     * подписи
     * @param int $cadestype Тип усовершенствованной
     * подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long
     * Type 1.
     * @param int $encodingtype Кодировка возвращаемой
     * подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию
     * CAPICOM_ENCODE_BASE64.
     * @return string
     * @throws \Exception
     */
    public function SignHash($hasheddata, $signer, $cadestype, $encodingtype)
    {
    }

    /**
     * Создает усовершенствованную подпись типа
     * CAdES-X Long Type 1
     *
     * @param \CPSigner $signer Объект CPSigner или CAPICOM.Signer,
     * который будет использован для создания
     * подписи
     * @param int $detached Вид подписи: отделенная (true) или
     * совмещенная (false). По умолчанию совмещенная.
     * @param int $encodingtype Кодировка возвращаемой
     * подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию
     * CAPICOM_ENCODE_BASE64.
     * @return string
     * @throws \Exception
     */
    public function Sign($signer, $detached, $encodingtype)
    {
    }

    /**
     * Добавляет к сообщению параллельную
     * усовершенствованную подпись типа CAdES-X Long Type
     * 1
     *
     * @param \CPSigner $signer Объект CPSigner или CAPICOM.Signer,
     * который будет использован для создания
     * подписи
     * @param int $encodingtype Кодировка возвращаемой
     * подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию
     * CAPICOM_ENCODE_BASE64.
     * @return string
     * @throws \Exception
     */
    public function CoSign($signer, $encodingtype)
    {
    }

    /**
     * Добавляет к сообщению параллельную
     * усовершенствованную подпись
     *
     * @param \CPSigner $signer Объект CPSigner или CAPICOM.Signer,
     * который будет использован для создания
     * подписи
     * @param int $cadestype Тип усовершенствованной
     * подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long
     * Type 1.
     * @param int $encodingtype Кодировка возвращаемой
     * подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию
     * CAPICOM_ENCODE_BASE64.
     * @return string
     * @throws \Exception
     */
    public function CoSignCades($signer, $cadestype, $encodingtype)
    {
    }

    /**
     * Добавляет к сообщению усовершенствованную
     * подпись
     *
     * @param \CPSigner $signer Объект CPSigner или CAPICOM.Signer,
     * который будет использован для создания
     * подписи
     * @param \CPHashedData $hasheddata Объект CAdESCOM.HashedData,
     * соответствующий хэш-значению, для которого
     * следует добавить электронную подпись в
     * CMS-сообщение
     * @param int $cadestype Тип усовершенствованной
     * подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long
     * Type 1.
     * @param int $encodingtype Кодировка возвращаемой
     * подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию
     * CAPICOM_ENCODE_BASE64.
     * @return string
     * @throws \Exception
     */
    public function CoSignHash($signer, $hasheddata, $cadestype, $encodingtype)
    {
    }

    /**
     * Позволяет дополнить подпись до
     * усовершенствованной
     *
     * @param int $cadestype Тип усовершенствованной
     * подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long
     * Type 1.
     * @param string $tsaaddress  Адрес службы штампов времени
     * @param int $encodingtype Кодировка возвращаемой
     * подписи (см. CAPICOM.CAPICOM_ENCODING_TYPE). По умолчанию
     * CAPICOM_ENCODE_BASE64.
     * @return string
     * @throws \Exception
     */
    public function EnhanceCades($cadestype, $tsaaddress, $encodingtype)
    {
    }

    /**
     * Проверяет усовершенствованную подпись
     *
     * @param string $message Проверяемое подписанное
     * сообщение
     * @param int|null $cadestype Тип усовершенствованной
     * подписи (см. CADESCOM_CADES_TYPE). По умолчанию CAdES-X Long
     * Type 1.
     * @param int|null $detached Вид подписи: отделенная (true)
     * или совмещенная (false). По умолчанию
     * совмещенная.
     * @return void
     * @throws \Exception
     */
    public function VerifyCades($message, $cadestype = null, $detached = null)
    {
    }

    /**
     * Проверяет усовершенствованную подпись на
     * основе переданного хэш-значения
     *
     * @param \CPHashedData $hasheddata Объект CPHashedData,
     * соответствующий хэш-значению, при помощи
     * которого следует проверить подписанное
     * CMS-сообщение
     * @param string $message Проверяемое подписанное
     * сообщение
     * @param int|null $cadestype Тип усовершенствованной
     * подписи (см. CADESCOM_CADES_TYPE), на соответствие
     * которому следует проверить указанную
     * подпись. По умолчанию CAdES-X Long Type 1.
     * @return void
     * @throws \Exception
     */
    public function VerifyHash($hasheddata, $message, $cadestype = null)
    {
    }

    /**
     * Выполняет проверку усовершенствованной
     * подписи типа CAdES-X Long Type 1
     *
     * @param string $message Проверяемое подписанное
     * сообщение
     * @param int $detached Вид подписи: отделенная (true) или
     * совмещенная (false). По умолчанию совмещенная.
     * @param int $verifyflag Флаг проверки
     * (CAPICOM_SIGNED_DATA_VERIFY_FLAG). По-умолчанию
     * VERIFY_SIGNATURE_AND_CERTIFICATE.
     * @return void
     * @throws \Exception
     */
    public function Verify($message, $detached, $verifyflag)
    {
    }

    /**
     * Устанавливает способ кодирования данных
     * для подписи
     *
     * Данный параметр должен быть указан до того,
     * как будет присвоено или получено значение
     * свойства Content. По умолчанию свойство имеет
     * значение CADESCOM_STRING_TO_UCS2LE.
     *
     * @param int $contentencoding Способ кодирования данных
     * для подписи
     * @return void
     * @throws \Exception
     */
    public function set_ContentEncoding($contentencoding)
    {
    }

    /**
     * Возвращает способ кодирования данных для
     * подписи
     *
     * Данный параметр должен быть указан до того,
     * как будет присвоено или получено значение
     * свойства Content. По умолчанию свойство имеет
     * значение CADESCOM_STRING_TO_UCS2LE.
     *
     * @return int
     * @throws \Exception
     */
    public function get_ContentEncoding()
    {
    }

    /**
     * Устанавливает данные для подписи
     *
     * @param string $content Данные для подписи
     * @return void
     * @throws \Exception
     */
    public function set_Content($content)
    {
    }

    /**
     * Возвращает данные для подписи
     *
     * @return string
     * @throws \Exception
     */
    public function get_Content()
    {
    }

    /**
     * Возвращает коллекцию подписантов
     *
     * @return \CPSigners
     * @throws \Exception
     */
    public function get_Signers()
    {
    }

    /**
     * Возвращает коллекцию сертификатов из
     * объекта подписи
     *
     * @return \CPCertificates
     * @throws \Exception
     */
    public function get_Certificates()
    {
    }
}

