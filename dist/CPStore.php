<?php

/**
 * Описывает хранилище сертификатов
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/store
 */
class CPStore
{
    public function __construct()
    {
    }

    /**
     * Открывает хранилище сертификатов
     *
     * @param int|null $location (optional) Местоположение
     * хранилища
     * @param string|null $name (optional) Имя хранилища
     * @param int|null $mode (optional) Режим открытия хранилища
     * @return void
     * @throws \Exception
     */
    public function Open($location, $name, $mode)
    {
    }

    /**
     * Закрывает хранилище сертификатов
     *
     * @return void
     * @throws \Exception
     */
    public function Close()
    {
    }

    /**
     * Возвращает коллекцию сертификатов в
     * хранилище
     *
     * @return \CPCertificates
     * @throws \Exception
     */
    public function get_Certificates()
    {
    }

    /**
     * Возвращает расположение хранилища
     * сертификатов
     *
     * @return int
     * @throws \Exception
     */
    public function get_Location()
    {
    }

    /**
     * Возвращает имя хранилища
     *
     * @return string
     * @throws \Exception
     */
    public function get_Name()
    {
    }
}

