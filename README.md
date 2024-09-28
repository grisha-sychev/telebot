# Telebot Laravel – Api Telegram Bot

Telergam Bot SDK — это готовый пакет для Laravel, который значительно упрощает процесс разработки ботов для Telegram.

## Установка и настройка

- Прежде чем приступить к установке, убедитесь, что ваше приложение подключено к базе данных.

```bash
composer require reijo/telebot
```

- Затем выполните миграцию:

```bash
php artisan migrate
```

- После этого зарегистрируйте webhook под именем вашего бота (по умолчанию default), используя команду:

```bash
php artisan tgb:new default {ваш токен}
```

## Использование бота

- Теперь, когда все настроено, вы можете вызвать команду `start` в вашем боте и получить ответ `Hello Word`.

- Вся логика основного бота сосредоточена в файле `app/Http/Bots/Default/Start.php`, который можно легко найти и отредактировать.

- Если вы решите создать нового бота с другим именем, новый раздел будет автоматически создан.


