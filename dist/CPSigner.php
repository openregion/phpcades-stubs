<?php

/**
 * Объект, задающий параметры создания и
 * содержащий информацию об
 * усовершенствованной подписи
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cpsigner
 */
class CPSigner
{
    public function __construct()
    {
    }

    /**
     * Возвращает сертификат подписанта
     *
     * @return \CPCertificate
     * @throws \Exception
     */
    public function get_Certificate()
    {
    }

    /**
     * Устанавливает сертификат подписанта
     *
     * @param \CPCertificate $certificate Сертификат подписанта
     * @return void
     * @throws \Exception
     */
    public function set_Certificate($certificate)
    {
    }

    /**
     * Возвращает параметры сертификата
     * подписанта
     *
     * @return int
     * @throws \Exception
     */
    public function get_Options()
    {
    }

    /**
     * Устанавливает параметры сертификата
     * подписанта
     *
     * @param int $options Параметры сертификата
     * подписанта
     * @return void
     * @throws \Exception
     */
    public function set_Options($options)
    {
    }

    /**
     * Возвращает коллекцию аутентифицированных
     * атрибутов
     *
     * @return \CPAttributes
     * @throws \Exception
     */
    public function get_AuthenticatedAttributes()
    {
    }

    /**
     * Возвращает коллекцию неподписанных
     * атрибутов
     *
     * @return \CPAttributes
     * @throws \Exception
     */
    public function get_UnauthenticatedAttributes()
    {
    }

    /**
     * Возвращает адрес службы штампов времени
     *
     * @return string
     * @throws \Exception
     */
    public function get_TSAAddress()
    {
    }

    /**
     * Устанавливает адрес службы штампов времени
     *
     * @param string $tsaaddress Адрес службы штампов времени
     * @return void
     * @throws \Exception
     */
    public function set_TSAAddress($tsaaddress)
    {
    }

    /**
     * Возвращает коллекцию СОС
     *
     * @return mixed
     * @throws \Exception
     */
    public function get_CRLs()
    {
    }

    /**
     * Возвращает коллекция ответов служб
     * актуальных статусов
     *
     * @return mixed
     * @throws \Exception
     */
    public function get_OCSPResponses()
    {
    }

    /**
     * Возвращает время подписи из атрибута signingTime
     *
     * @return string
     * @throws \Exception
     */
    public function get_SigningTime()
    {
    }

    /**
     * Возвращает время подписи из штампа времени
     * на значение подписи
     *
     * @return string
     * @throws \Exception
     */
    public function get_SignatureTimeStampTime()
    {
    }

    /**
     * Устанавливает пин-код для доступа к
     * закрытому ключу
     *
     * @param string $pin Пин-код для доступа к закрытому
     * ключу
     * @return void
     * @throws \Exception
     */
    public function set_KeyPin($pin)
    {
    }
}

