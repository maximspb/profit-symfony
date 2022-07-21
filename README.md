**ДЗ1.** 


В рамках ДЗ создан контроллер SiteController с методом index() который обрабатывает запросы на роут "/", он возвращает простейший html в качестве примера. Для работы с приложением создано докер-окружение, приложение доступно через браузер как http://localhost:8081

**ДЗ2**

В данном случае роль middleware выполняет слушатель событий UsernameAndPasswordListener:

https://github.com/maximspb/profit-symfony/blob/master/profit/src/EventListener/UsernameAndPasswordListener.php

который реагирует на события вида kernel.request (по условиям задачи нет ограничения по роутам, поэтому в данном случае обрабатывается любой запрос)  