# 🚗 Landing Page Concurso – Laravel

Este es un proyecto desarrollado en Laravel para una campaña de recolección de datos de clientes de una compañía automotriz. Permite registrar usuarios, visualizar un ganador aleatorio cuando hay al menos 5 registros, y exportar la información en Excel.

## Se arreglo la logica para que funcionara correctamente las ciudades y departamentos, y se agregaron validaciones para los campos de formulario

## 📦 Requisitos

- PHP >= 8.1
- Composer
- Node.js y npm (opcional, si usas diseño con Vite)
- MySQL o MariaDB
- Laravel 10+

---

## ⚙️ Instalación

1. **Clonar el repositorio**

```bash
git@github.com:bemera49/landing-page.git
cd landing-page

## Instalar dependencias de PHP

composer install

## Copiar y configurar el archivo .env

cp .env.example .env

## Edita el archivo .env y configura tus credenciales de base de datos:

DB_DATABASE=landing
DB_USERNAME=root
DB_PASSWORD=tu_contraseña

## Generar la clave de la aplicación

php artisan key:generate

## Ejecutar migraciones y seeders
para las ciudades y departamentos
php artisan migrate --seed

Esto creará las tablas necesarias y llenará la base de datos con algunos registros iniciales (si están definidos en los seeders).

    Si solo quieres correr los seeders individualmente:

php artisan db:seed --class=DepartamenSeeder

🚀 Levantar el servidor

php artisan serve

Visita la app en http://localhost:8000
```
