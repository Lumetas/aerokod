Реализация тестового [задания](tz.md)

Использовалось:
- php 8.2
- laravel 12
- db: mysqlite

Как развернуть:
- `git clone https://github.com/Lumetas/aerokod.git`
- `composer install`
- Создать .env файл
- `php artisan migrate`
- `php artisan serve`

Использование: 
- /admin/mortgages - Админ панель, где можно добавлять, удалять изменять и просматривать ипотеки.
- /public/mortgages - Выводит список активных ипотек в формате json
- /public/mortgages/{id} - Выводит детальную информацию по ипотеке

