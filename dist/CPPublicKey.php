<?php

/**
 * Описывает открытый ключ сертификата
 *
 * @link
 * https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/publickey
 */
class CPPublicKey
{
    public function __construct()
    {
    }

    /**
     * Возвращает OID алгоритма открытого ключа
     *
     * @return \CPOID
     * @throws \Exception
     */
    public function get_Algorithm()
    {
    }

    /**
     * Возвращает длину открытого ключа в битах
     *
     * @return int
     * @throws \Exception
     */
    public function get_Length()
    {
    }

    /**
     * Возвращает значение открытого ключа
     *
     * @return \CPEncodedData
     * @throws \Exception
     */
    public function get_EncodedKey()
    {
    }

    /**
     * Возвращает параметры алгоритма открытого
     * ключа
     *
     * @return \CPEncodedData
     * @throws \Exception
     */
    public function get_EncodedParameters()
    {
    }
}

