<?php

/**
 * Описывает коллекцию сертификатов
 *
 * @link
 * https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/certificates
 */
class CPCertificates
{
    public function __construct()
    {
    }

    /**
     * Возвращает коллекцию сертификатов,
     * удовлетворяющих заданному критерию
     *
     * @param int $findtype Тип критерия
     * @param mixed $criteria (optional) Критерий
     * @param int $validonly (optional) Вернуть только валидные
     * @return \CPCertificates
     * @throws \Exception
     */
    public function Find($findtype, $criteria, $validonly)
    {
    }

    /**
     * Возвращает сертификат с заданным индексом
     * из коллекции
     *
     * @param int $index Индекс сертификата
     * @return \CPCertificate
     * @throws \Exception
     */
    public function Item($index)
    {
    }

    /**
     * Возвращает количество объектов в коллекции
     * сертификатов
     *
     * @return int
     * @throws \Exception
     */
    public function Count()
    {
    }
}

