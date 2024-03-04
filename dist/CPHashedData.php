<?php

/**
 * Хэш-значение данных
 *
 * @link
 * https://docs.cryptopro.ru/cades/reference/cadescom/cadescom_class/cadessigneddata
 */
class CPHashedData
{
    public function __construct()
    {
    }

    /**
     * Вычисляет хэш для заданной строки
     *
     * @param string $value Строка для вычисления хэша
     * @return void
     * @throws \Exception
     */
    public function Hash($value)
    {
    }

    /**
     * Позволяет проинициализировать объект
     * готовым хэш-значением
     *
     * @param string $value Хэш-значение, которым следует
     * проинициализировать объект. Должно быть
     * представлено в виде строки
     * шестнадцатеричных цифр.
     * @return void
     * @throws \Exception
     */
    public function SetHashValue($value)
    {
    }

    /**
     * Возвращает результат операции хэширования
     *
     * @return string
     * @throws \Exception
     */
    public function get_Value()
    {
    }

    /**
     * Устанавливает данные для установки ключа,
     * используемого для вычисления HMAC
     *
     * @param string $value Данные для установки ключа,
     * используемого для вычисления HMAC
     * @return void
     * @throws \Exception
     */
    public function set_Key($value)
    {
    }

    /**
     * Возвращает данные для установки ключа,
     * используемого для вычисления HMAC
     *
     * @return string
     * @throws \Exception
     */
    public function get_Key()
    {
    }

    /**
     * Устанавливает алгоритм хэширования
     *
     * @param int $value Алгоритм хэширования
     * @return void
     * @throws \Exception
     */
    public function set_Algorithm($value)
    {
    }

    /**
     * Возвращает алгоритм хэширования
     *
     * @return int
     * @throws \Exception
     */
    public function get_Algorithm()
    {
    }

    /**
     * Устанавливает способ кодирования данных
     * для хэширования
     *
     * Данное свойство задает кодировку данных,
     * передаваемых в метод Hash, и должно быть
     * задано до того, как будет впервые вызван
     * метод Hash. По умолчанию свойство имеет
     * значение CADESCOM_STRING_TO_UCS2LE. Задание свойства
     * DataEncoding сбрасывает состояние объекта.
     *
     * @param int $value Способ кодирования данных для
     * хэширования
     * @return void
     * @throws \Exception
     */
    public function set_DataEncoding($value)
    {
    }

    /**
     * Возвращает способ кодирования данных для
     * хэширования
     *
     * Данное свойство задает кодировку данных,
     * передаваемых в метод Hash, и должно быть
     * задано до того, как будет впервые вызван
     * метод Hash. По умолчанию свойство имеет
     * значение CADESCOM_STRING_TO_UCS2LE.
     *
     * @return int
     * @throws \Exception
     */
    public function get_DataEncoding()
    {
    }
}

