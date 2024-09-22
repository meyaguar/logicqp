# LogicQP - Sistema de Gestión de Inventario

## Descripción del Proyecto

LogicQP es una aplicación web diseñada para la gestión de inventarios, con características que permiten controlar productos, clientes, existencias, y generar reportes en tiempo real. El sistema está desarrollado en PHP usando el framework Laravel, con una interfaz de usuario construida en Vue.js. La base de datos utilizada es MySQL.

## Requisitos del Sistema

- **PHP 7.4.33** - [Descargar PHP](https://windows.php.net/downloads/releases/php-7.4.33-Win32-vc15-x64.zip)
- **Node.js (v14)** - [Descargar Node.js](https://nodejs.org/en/about/previous-releases)
- **MySQL 8.3** - [Descargar MySQL](https://cdn.mysql.com/archives/mysql-8.3/mysql-8.3.0-winx64.msi)
- **Composer** - [Instalar Composer](https://getcomposer.org/)
- **Git** - [Descargar Git](https://git-scm.com/downloads)
- **Visual Studio Code** - [Descargar VSCode](https://code.visualstudio.com/download)

## Instalación del Proyecto

### Clonación del Repositorio

1. Clonar el repositorio del proyecto:
    ```bash
    git clone <url-del-repositorio>
    cd nombre-del-proyecto
    ```

2. Instalar dependencias de PHP y Node.js:
    ```bash
    composer install
    npm install
    ```

3. Configurar el archivo `.env` con los siguientes valores:

```plaintext
APP_NAME=LogicQP
APP_ENV=local
APP_KEY=GRUPO010GRUPO010GRUPO010GRUPO010
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_inventory
DB_USERNAME=root
DB_PASSWORD=root

### Configuración de MySQL

Crear la base de datos para la aplicación e importar el esquema de la base de datos usando `schema.sql`.

## Funcionalidades Principales

### Inicio de Sesión

- **Usuario:** `admin@gmail.com`
- **Contraseña:** `root`
  
La pantalla de inicio de sesión permite a los usuarios autenticarse ingresando sus credenciales.

### Dashboard Power BI

El dashboard muestra un resumen visual de los datos del sistema, incluyendo el stock, ventas recientes y productos más vendidos.

### Configuración de la Empresa

Los usuarios pueden configurar la información de la empresa, como nombre, dirección y otros detalles importantes.

### Gestión de Clientes

Permite la creación, edición y eliminación de clientes, almacenando información relevante de cada uno.

### Gestión de Productos

1. **Categorías:** Creación, edición y eliminación de categorías de productos.
2. **Productos:** Administración completa de productos, incluyendo nombre, descripción, precio y stock.

### Gestión de Existencias

- **Ingresos de Productos:** Registro y administración de productos que entran al almacén, actualizando las existencias y lotes.

### Reportes de Inventario

Pantalla de reportes que permite ver información detallada sobre el inventario, movimientos y transacciones.

### Gestión de Usuarios

Asignación de roles y gestión de permisos para controlar los accesos al sistema.
