<?php

/**
 * Описывает сертификат открытого ключа
 *
 * @link
 * https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cpcertificate
 */
class CPCertificate
{
    public function __construct()
    {
    }

    /**
     * Возвращает информацию из сертификата
     *
     * @param int $type Тип запрашиваемых данных
     * @return string
     * @throws \Exception
     */
    public function GetInfo($type)
    {
    }

    /**
     * Производит поиск закрытого ключа
     * соответствующего сертификату открытого
     * ключа и устанавливает ссылку на него. В
     * случае отсутствия в системе подходящего
     * ключа порождает исключение.
     *
     * @param int|null $criteria_reserved (optional) Зарезервирован. Не
     * используется.
     * @return \CPPrivateKey
     * @throws \Exception
     */
    public function FindPrivateKey($criteria_reserved = null)
    {
    }

    /**
     * Имеется ли закрытый ключ для сертификата
     *
     * @return bool
     * @throws \Exception
     */
    public function HasPrivateKey()
    {
    }

    /**
     * Является ли сертификат валидным
     *
     * @return bool
     * @throws \Exception
     */
    public function IsValid()
    {
    }

    /**
     * Возвращает объект ExtendedKeyUsage для данного
     * сертификата
     *
     * @return \CPExtendedKeyUsage
     * @throws \Exception
     */
    public function ExtendedKeyUsage()
    {
    }

    /**
     * Возвращает объект KeyUsage для данного
     * сертификата
     *
     * @return \CPKeyUsage
     * @throws \Exception
     */
    public function KeyUsage()
    {
    }

    /**
     * Экспортирует сертификат в виде
     * закодированной строки
     *
     * @param int $encodingtype Метод кодирования
     * @return string
     * @throws \Exception
     */
    public function Export($encodingtype)
    {
    }

    /**
     * Импортирует сертификат из закодированной
     * строки
     *
     * @param int $value Сертификат в закодированной
     * строке
     * @return void
     * @throws \Exception
     */
    public function Import($value)
    {
    }

    /**
     * Возвращает серийный номер
     *
     * @return string
     * @throws \Exception
     */
    public function get_SerialNumber()
    {
    }

    /**
     * Возвращает отпечаток
     *
     * @return string
     * @throws \Exception
     */
    public function get_Thumbprint()
    {
    }

    /**
     * Возвращает имя субъекта
     *
     * @return string
     * @throws \Exception
     */
    public function get_SubjectName()
    {
    }

    /**
     * Возвращает издателя сертификата
     *
     * @return string
     * @throws \Exception
     */
    public function get_IssuerName()
    {
    }

    /**
     * Возвращает версию сертификата
     *
     * @return int
     * @throws \Exception
     */
    public function get_Version()
    {
    }

    /**
     * Возвращает дату, до которой сертификат
     * действителен
     *
     * @return string
     * @throws \Exception
     */
    public function get_ValidToDate()
    {
    }

    /**
     * Возвращает дату, с которой сертификат
     * действителен
     *
     * @return string
     * @throws \Exception
     */
    public function get_ValidFromDate()
    {
    }

    /**
     * Возвращает объект BasicConstraints для данного
     * сертификата
     *
     * @return \CPBasicConstraints
     * @throws \Exception
     */
    public function BasicConstraints()
    {
    }

    /**
     * Возвращает объект PublicKey для данного
     * сертификата
     *
     * @return \CPPublicKey
     * @throws \Exception
     */
    public function PublicKey()
    {
    }

    /**
     * Возвращает объект PrivateKey для данного
     * сертификата
     *
     * @return \CPPrivateKey
     * @throws \Exception
     */
    public function PrivateKey()
    {
    }
}

