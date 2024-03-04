<?php

/**
 * Описывает алгоритм шифрования
 *
 * @link
 * https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/algorithm
 */
class CPAlgorithm
{
    public function __construct()
    {
    }

    /**
     * Возвращает алгоритм подписи или шифрования
     *
     * @return string
     * @throws \Exception
     */
    public function get_Name()
    {
    }

    /**
     * Устанавливает алгоритм подписи или
     * шифрования
     *
     * @param int $name Алгоритм подписи или шифрования
     * @return void
     * @throws \Exception
     */
    public function set_Name($name)
    {
    }

    /**
     * Возвращает длину ключа
     *
     * @return int
     * @throws \Exception
     */
    public function get_KeyLength()
    {
    }

    /**
     * Устанавливает длину ключа
     *
     * @param int $keylength Длина ключа
     * @return void
     * @throws \Exception
     */
    public function set_KeyLength($keylength)
    {
    }
}

