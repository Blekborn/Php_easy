Читаем:
---
- https://www.php.net/manual/ru/function.is-bool
- https://www.php.net/manual/ru/function.is-int
- https://www.php.net/manual/ru/function.is-string
- https://www.php.net/manual/ru/function.is-double.php
- https://www.php.net/manual/ru/function.is-null.php
- https://www.php.net/manual/ru/function.empty.php
- https://www.php.net/manual/ru/function.gettype.php
- https://www.php.net/manual/ru/function.isset.php

Делаем:
----

1. Проверка пустой переменной при помощи isset()
2. Инициализируем переменные $a, $b, $c
   a. Проверяем их существование через isset()
3. Создаем около 10 переменных разного типа
   a. Проверяем каждую переменную функцией для этого типа is_...
   b. Выводим результат каждой проверки в echo
   c. 2-ю, 5-ю и 9-ю переменные удаляем
   i. Вспоминаем функцию удаления переменных
   ii. И проверяем их посредством gettype()