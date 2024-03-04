# Заглушки phpcades
Заглушки констант, классов и их методов для [phpcades](https://docs.cryptopro.ru/cades/phpcades) (php_CPCSP/libphpcades/libphpcades.so/КриптоПро).

# Установка
Рекомендуется установить пакет через [Composer](https://getcomposer.org/).
```bash
composer require openregion/phpcades-stubs --dev
```

# Разработка пакета
При доработке пакета просьба сверяться с [исходным кодом КриптоПро ЭЦП SDK](https://cryptopro.ru/products/cades/downloads), [руководством разработчика](https://docs.cryptopro.ru/cades/reference/cadescom) и фактической логикой работы расширения.

## Генерация заглушек
Для обновления заглушек в пакете потребуется [установить phpcades](https://docs.cryptopro.ru/cades/phpcades/phpcades-install), после чего можно использовать скрипт ([generate.php](./generate.php)).
```bash
composer run-script generate
```
