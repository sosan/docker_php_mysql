CONFIGURACION ARCHIVOS
=============================
en el archivo docker-compose.yml le hemos dado un nombre al contenedor mysql (mysql, en este caso)

como le hemos llamado mysql y lo hemos linkeado al contenedor-php con este nombre en los archivos de configuracion de la aplicacion debemos cambiar localhost por mysql (normalmente la configuracion por defecto es localhost), en este caso

```
services:
    mysql: ***** coincidir
```

en el archivo "includes/config.php" contiene
```
    define('DB_HOST','mysql'); **** coincidir
```

Como el archivo "includes/config.php" y el "docker-compose.yml" no recogen la informacion de un tercero (por ejemplo un arhivo .env) la configuracion de ambos archivos tienen que coincidir.

- archivo config.php
    ```
    define('DB_USER','db_usuario_test');
    define('DB_PASS','db_clave_usuario_test');
    define('DB_NAME','db_nombre');
    ```
- archivo docker-compose.yml
    ```
    MYSQL_DATABASE: db_nombre
    MYSQL_USER: db_usuario_test
    MYSQL_PASSWORD: db_clave_usuario_test
    MYSQL_ROOT_PASSWORD: db_clave_root
    ```

PUNTO DE ENTRADA PHPMYADMIN
===============================

- caso de localhost:
    http://localhost:8081/
- en caso online:
    http://www.url.com:8081/


LOGIN DE PHPMYADMIN
===================

- Servidor: mysql
- Usuario: db_usuario_test
- Contraseña: db_clave_usuario_test

IMPORTAR DATOS
=================
- Seleccionar una base de datos (izquierda)
- Boton IMPORTAR de phpmyadmin
- Seleccionar boton archivo
- seleccionar www/database/dbdump.sql
- Boton continuar


PUNTO DE ENTRADA WEB
==========================
- caso de localhost:
    http://localhost/
- en caso online:
    http://www.url.com/
