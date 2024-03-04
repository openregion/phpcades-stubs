<?php

/**
 * Описывает закрытый ключ сертификата
 *
 * @link
 * https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/privatekey
 */
class CPPrivateKey
{
    public function __construct()
    {
    }

    /**
     * Возвращает строку с именем контейнера
     * закрытого ключа
     *
     * @return string
     * @throws \Exception
     */
    public function get_ContainerName()
    {
    }

    /**
     * Возвращает уникальное имя контейнера
     * закрытого ключа
     *
     * @return string
     * @throws \Exception
     */
    public function get_UniqueContainerName()
    {
    }

    /**
     * Возвращает имя криптографического
     * провайдера
     *
     * @return string
     * @throws \Exception
     */
    public function get_ProviderName()
    {
    }

    /**
     * Возвращает тип криптографического
     * провайдера
     *
     * @return int
     * @throws \Exception
     */
    public function get_ProviderType()
    {
    }

    /**
     * Возвращает назначение ключа
     *
     * @return int
     * @throws \Exception
     */
    public function get_KeySpec()
    {
    }
}

