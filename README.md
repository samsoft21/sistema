
# Sistema de Gestión de Clientes - Samsoft Systems Solutions

Este proyecto utiliza **Docker** y **docker-compose** para levantar una aplicación web PHP con conexión a una base de datos MySQL. El frontend está construido con **Bootstrap 5.3** y **Font Awesome 6.5**.

---

## 1. Levantar el proyecto

1. Clona el repositorio y entra al directorio:

   ```bash
   git clone https://github.com/samsoft21/sistema.git
   cd sistema
   ```

2. Ejecuta el siguiente comando para construir las imágenes y levantar los contenedores:

   ```bash
   docker-compose up --build -d
   ```

   Esto levantará:
   - `php_web`: servidor PHP con Apache.
   - `mysql_db`: base de datos MySQL 5.7 con volúmenes persistentes.

---

##Acceso a la aplicación

3 Una vez levantado, puedes acceder a la app en:

 [http://localhost:8080](http://localhost:8080)

---

##Acceso a la base de datos

### Opciones que permiten realizar diferentes procesos:

- **CLI dentro del contenedor**:

  ```bash
  docker exec -it mysql_db mysql -u facsis -p
  # Contraseña: fac123
  ```

- **Cliente externo (DBeaver, MySQL Workbench, etc)**:

  - **Host**: `localhost`
  - **Puerto**: `3306`
  - **Usuario**: `facsis`
  - **Contraseña**: `fac123`
  - **Base de datos**: `mydatabase`

---

##Detener y eliminar contenedores

Para detener y eliminar todos los contenedores, redes y volúmenes creados:

```bash
docker-compose down
```

Si deseas eliminar también los volúmenes ( tambien se borra la data de MySQL):

```bash
docker-compose down -v
```

---

**Estructura del proyecto sistema

```
.
├── docker-compose.yml
├── init/
│   └── init.sql         # Script para crear tabla 'clientes'
├── src/
│   └── index.php        # App PHP con Bootstrap
└── README.md
```

---

**Autor
**Ing. Segundo Mena By Samsoft Systems Solutions 2025**
** Santo domingo de los tsachilas -Ecuador**
** 0978759902**
---
