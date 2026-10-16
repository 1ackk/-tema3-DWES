<div align="center">

# 💡 Laravel Ideas · DWES

**Prácticas de Laravel para el módulo de _Desarrollo Web en Entorno Servidor_ (DWES)**

![PHP](https://img.shields.io/badge/PHP-8.3%2B-777BB4?logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?logo=laravel&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-plantillas-F05340?logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4-06B6D4?logo=tailwindcss&logoColor=white)
![Laravel Herd](https://img.shields.io/badge/Laravel_Herd-entorno_local-F53003?logo=laravel&logoColor=white)

</div>

---

## 📖 Sobre el proyecto

Proyecto de aprendizaje en el que se construye, paso a paso, una pequeña aplicación con **Laravel**: un cuaderno digital para apuntar **ideas** y guardarlas para más tarde.

Cada commit corresponde a un apartado del temario, así que el historial del repositorio sirve también como guía de lo aprendido.

## ✨ Qué se ha visto hasta ahora

| Apartado | Contenido |
|---|---|
| **Vistas y rutas** | Rutas con `Route::view` y `Route::get`, vistas Blade para Home, About y Contact |
| **Componentes Blade** | Componente de layout (`<x-layout>`) con `$slot` y `@props`, y componente `<x-card>` |
| **5 · Pasar datos a las vistas** | Arrays de datos hacia la vista, lectura del *query string* con `request()`, escape automático con `{{ }}` frente a `{!! !!}` |
| **6 · Directivas de Blade** | `@dump`, `@dd`, `@if`, `@unless`, `@foreach` y `@forelse` / `@empty` |
| **7 · Formularios** | Formularios `POST`, protección **CSRF** con `@csrf`, lectura de la *request*, sesión y patrón Post/Redirect/Get |

## 🗂️ Estructura

```
.
└── project/                 # Aplicación Laravel
    ├── routes/web.php       # Rutas de la aplicación
    └── resources/views/
        ├── ideas.blade.php  # Formulario y listado de ideas
        ├── about.blade.php
        ├── contact.blade.php
        └── components/      # layout y card
```

## 🚀 Cómo ejecutarlo en local

**Requisitos:** PHP 8.3 o superior, Composer y Node.js (o [Laravel Herd](https://herd.laravel.com), que ya incluye PHP y Composer).

```bash
cd project
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Después:

- **Con Laravel Herd:** enlaza la carpeta `project` y abre `http://project.test`.
- **Sin Herd:** ejecuta `php artisan serve` y abre `http://localhost:8000`.

## 🧭 Rutas disponibles

| Método | URI | Qué hace |
|---|---|---|
| `GET` | `/` | Muestra el formulario y las ideas guardadas en la sesión |
| `POST` | `/ideas` | Guarda una idea nueva en la sesión y redirige a `/` |
| `GET` | `/delete-ideas` | *(Temporal)* Borra todas las ideas de la sesión |
| `GET` | `/about` | Página "About Us" |
| `GET` | `/contact` | Página "Contact Us" |

> ℹ️ Por ahora las ideas se guardan en la **sesión** del navegador, así que solo duran mientras dura la sesión. Más adelante se guardarán en una base de datos.

---

<div align="center">

Hecho con ☕ y Laravel · DWES

</div>
