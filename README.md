# IgoreFy
IgoreFy for KR of backend
IgoreFy - это музыкальный стриминговый сервис, предоставляющий возможность
пользователю прослушивать и загружать музыку.

Для установки проекта необходимо переместить папку с проектом в папку domains и указать 
путь до папки public в настройках openServer
Запуск приложения осуществляется стандартно, как и для остальных проектов на openServer

Алгоритм взаимодействия пользователя с программой
- Первым делом пользователю необходимо нажать на кнопку «MAIN» на глав-ной странице фреймворка Laravel.
- После этого пользователь может либо загрузить новый альбом на сайт, либо прослушать один из имеющихся на сервисе альбомов. 
- Допустим, пользователь решил загрузить новый альбом.
 - Для этого необходимо нажать на кнопку «Добавить альбом».
- Далее необходимо указать количество треков в альбоме. Для примера в альбоме будет 4 трека.
- Затем необходимо указать все предложенные данные об альбоме.
- После нажатия на кнопку «Отправить» данные будут храниться на сервере. 
- Можно возвращаться на главную страницу путём нажатия на изображение в вер-ней левой части страницы.
- Альбом появился в списке. Теперь можно нажимать на обложку, тем самым перейдя к прослушиванию треков данного альбома.
- После нажатия на обложку альбома пользователь может приступить к про-слушиванию аудиозаписей.
- На главную страницу можно вернуться аналогичным способом – путём нажатия на изображение в верхней левой части экрана.

Структура проекта стандартная для проектов, созданных на фреймворке Laravel, за исключением папки public: 
внутри неё располагается папка aFileStorage, в которой располагается две папки - для хранение аудиозаписей(songs) и обложек (albumCovers)

Ссылка на GitHub: https://github.com/20772077/IgoreFy.git

Ссылка на Google Disk: https://drive.google.com/file/d/1mQ_ZTTv63WRZxPjZejH1azASZ8ouKZoA/view?usp=drive_link 
