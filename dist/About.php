<?php

/**
 * Версия библиотеки
 *
 * @link https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/about
 */
class About
{
    public function __construct()
    {
    }

    /**
     * Возвращает старший компонент версии
     *
     * @return int
     * @throws \Exception
     */
    public function get_MajorVersion()
    {
    }

    /**
     * Возвращает младший компонент версии
     *
     * @return int
     * @throws \Exception
     */
    public function get_MinorVersion()
    {
    }

    /**
     * Возвращает номер сборки
     *
     * @return int
     * @throws \Exception
     */
    public function get_BuildVersion()
    {
    }

    /**
     * Возвращает строковое представление версии
     *
     * @return string
     * @throws \Exception
     */
    public function get_Version()
    {
    }

    /**
     * Возвращает объект Version c версией
     * криптопровайдера (CSP) производства компании
     * Крипто-Про
     *
     * @param string|null $provname (optional) Имя криптопровайдера.
     * Если не задано, то будет указан
     * криптопровайдер по умолчанию.
     * @param int|null $provtype (optional) Тип криптопровайдера.
     * Если не указан, то будет использован 75.
     * @return \Version
     * @throws \Exception
     */
    public function CSPVersion($provname = null, $provtype = null)
    {
    }

    /**
     * Возвращает объект Version c версией плагина
     *
     * @return \Version
     * @throws \Exception
     */
    public function PluginVersion()
    {
    }
}

