<?php

/**
 * Описывает основные ограничения на
 * использование сертификата
 *
 * @link
 * https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/basicconstraints
 */
class CPBasicConstraints
{
    public function __construct()
    {
    }

    /**
     * Устанавливает присутствует ли расширение
     *
     * @param int $ispresent Присутствует ли расширение
     * @return void
     * @throws \Exception
     */
    public function set_IsPresent($ispresent)
    {
    }

    /**
     * Присутствует ли расширение
     *
     * @return int
     * @throws \Exception
     */
    public function get_IsPresent()
    {
    }

    /**
     * Устанавливает является ли расширение
     * критическим
     *
     * @param int $iscritical Является ли расширение
     * критическим
     * @return void
     * @throws \Exception
     */
    public function set_IsCritical($iscritical)
    {
    }

    /**
     * Является ли расширение критическим
     *
     * @return int
     * @throws \Exception
     */
    public function get_IsCritical()
    {
    }

    /**
     * Является ли сертификат сертификатом УЦ
     *
     * @return int
     * @throws \Exception
     */
    public function get_IsCertificateAuthority()
    {
    }

    /**
     * Существует ли ограничение на длину пути
     * сертификата
     *
     * @return int
     * @throws \Exception
     */
    public function get_IsPathLenConstraintPresent()
    {
    }

    /**
     * Ограничение на длину пути
     *
     * @return int
     * @throws \Exception
     */
    public function get_PathLenConstraint()
    {
    }
}

