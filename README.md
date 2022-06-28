## Menu
### [Task1](#task-1) [Task2](#task-2) [Task3](#task-3) [Task4](#task-4)
### [Task5](#task-5) [Task6](#task-6) [Task7](#task-7)
## Task #1
[go back](#menu)
> PHP: вывести цифры по порядку
> 
> ![](img/task1.png)

Код:

![](img/1.1.png)

Вывод:

![](img/1.2.png)


## Task #2
[go back](#menu)
> MySQL: Написать запрос для выборки данных из таблицы, где id = 10 

```SQL
SELECT * FROM table1 WHERE id=10;
```


## Task #3
[go back](#menu)
> PHP: вывести ключи и значения массива
>
> ![](img/task3.png)

Код:

![](img/3.1.png)

Вывод:

![](img/3.2.png)


## Task #4
[go back](#menu)
> PHP: вывести месяца года
>
> ![](img/task4.png)

Код:

![](img/4.1.png)

Вывод:

![](img/4.2.png)


## Task #5
[go back](#menu)
> PHP: Дана информация в json формате, надо вывести её. <br>
> {"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008
,2009,2010]}

Код:

![](img/5.1.png)

Вывод:

![](img/5.2.png)


## Task #6
[go back](#menu)
> PHP и MySQL: Дан код, нужно ответить на вопросы аргументировав
свой ответ

>
> ![](img/task6.png)

1) Будет ли выполнен запрос?<br>Запрос будет выполен при работающем сервисе mysql на той же машине, с которой запускается php код, при пароле рут пользователя = 123, при существовании схемы data и в ней - таблицы users. При несоблюдении одного из условий подключение не может быть установлено.
<br><br>
2) Что сделает запрос?<br>Запрос собирает все столбцы и все строки из таблицы users и помещает информацию в виде объекта в переменную $resultSet
<br><br>
3) Написать запрос для удаления данных, где id пользователей равен одному из данных цифр = 1,2,3,4,5<br>
```SQL
DELETE FROM users WHERE id > 0 AND id < 6;
```


## Task #7
[go back](#menu)
> PHP и HTML: Написать форму с одним полей для ввода текста и
кнопкой, по нажатию которой идёт сохранения данных из поля в файл.

Код html:

![](img/7.1.png)

Код php:

![](img/7.2.png)

Результат:

![](img/7.3.png)
![](img/7.4.png)

Содержимое log.txt:

![](img/7.5.png)