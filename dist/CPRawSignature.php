<?php

/**
 * Значение электронной подписи
 *
 * @link
 * https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/rawsignature
 */
class CPRawSignature
{
    public function __construct()
    {
    }

    /**
     * Проверяет значение электронной подписи на
     * основе переданного хэш-значения
     *
     * @param \CPHashedData $hasheddata Объект CAdESCOM.HashedData,
     * соответствующий хэш-значению, для которого
     * следует проверить значение электронной
     * подписи
     * @param string $hashvalue Значение электронной подписи
     * в виде строки шестнадцатеричных цифр,
     * группами по две цифры на байт, разделённых
     * пробелами
     * @param \CPCertificate $certificate Сертификат, на ключе
     * которого следует проверить значение
     * электронной подписи
     * @return void
     * @throws \Exception
     */
    public function VerifyHash($hasheddata, $hashvalue, $certificate)
    {
    }

    /**
     * Вычисляет значение электронной подписи
     *
     * @param \CPHashedData $hasheddata Объект CPHashedData,
     * соответствующий хэш-значению, для которого
     * следует вычислить значение электронной
     * подписи
     * @param \CPCertificate $certificate Сертификат, на ключе
     * которого следует вычислить значение
     * электронной подписи
     * @return string
     * @throws \Exception
     */
    public function SignHash($hasheddata, $certificate)
    {
    }
}

