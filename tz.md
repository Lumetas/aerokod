**Тестовое задание**

Стек:

- Laravel >=10;
- PHP >=8;
- Database: на выбор;
- GIT.

Цель: Реализовать вывод списка ипотек, просмотр карточки ипотеки, добавление, редактирование и удаление ипотеки.

1. Создать таблицу _mortgages_

| ID  | uint, A_I |     |
| --- | --- | --- |
| TITLE | string |     |
| IS_ACTIVE | bool | default = false |
| DESCRIPTION | string, null |     |
| PERCENT | int | max = 40 |
| MIN_FIRST_PAYMENT | int | max = 98 |
| MAX_PRICE | float |     |
| MIN_PRICE | float |     |
| MIN_TERM | int |     |
| MAX_TERM | int |     |

1. Добавить модель Mortgage;
2. Создать контроллер для CRUD операций;
    1. resource /admin/mortgages.
3. Добавить валидацию данных на создание/изменение продукта;
4. Создать контроллер для получения клиентами продуктов:
    1. /public/mortgages.
    2. /public/mortgages/{id}.
5. Детальная страница ипотеки должна содержать:
    1. Название ипотеки
    2. Процентная ставка
    3. Ренжи стоимости недвижимости(min_price/max_price)
    4. Ренжи первоначального взноса(min_first_payment/max_first_payment)
    5. Ренжи срока ипотеки(min_term/max_term)
    6. Вывод
6. Если !is_active не выводить его в общем списке(public/mortgages);
7. Готовое приложение выложить на gitlab/github.

**Срок выполнения: 4 дня.**