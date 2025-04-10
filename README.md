# prueba-asdrubal-nerea-santos

## 🎯 Tema WordPress personalizado 

Desarrollado como parte de la prueba técnica del proceso de selección para el puesto de Programadora Junior WordPress en Asdrubal SEO.

---

## 📌 Descripción General

Este proyecto consiste en la creación de un tema personalizado para WordPress, diseñado para ser **instalable, funcional y fácilmente reutilizable** en cualquier entorno WordPress. Está orientado a demostrar conocimientos básicos de desarrollo frontend y backend en WordPress, manejo de Git y buenas prácticas de estructura y organización de código.

---

## 🧩 Requisitos cumplidos

- ✅ Tema funcional e instalable
- ✅ Home personalizada (`home.php`)
- ✅ Estructura HTML semántica (`<head>`, `<body>`, `<header>`, `<h1>`, `<footer>`)
- ✅ 3 secciones distintas divididas mediante `include()`
- ✅ Una sección renderizada mediante condicional PHP
- ✅ Llamadas correctas a `wp_head()` y `wp_footer()`
- ✅ Estilos propios enlazados mediante `style.css`
- ✅ Script JavaScript que modifica dinámicamente el contenido del `<h1>`

---

## 🏗️ Estructura del Tema
/prueba-asdrubal-jairo-sanchez
│
├── assets/
│   └── script.js              ← Modifica dinámicamente el <h1>
│
├── img/
│   ├── icono-cliente1.png  
│   ├── icono-nosotros2.png 
│   └── icono-servicios2.png
│
├── template-parts/
│   ├── section-1.php
│   ├── section-2.php
│   └── section-3.php         
│
│
├── style.css                 
├── functions.php            
├── home.php                  ← Página principal con las distintas secciones
├── header.php
├── footer.php
└── index.php

## 🚀 Instalación del Tema
Instrucciones para la instalación del tema prueba-asdrubal-nerea-santos

1.- Descárga el archivo .zip.
2.- Tenemos dos opciones de instalación: 
    2.1- Coloca la carpeta en el directorio /wp-content/themes/ y descomprime el archivo
    2.2- Accede al panel de control de wordPress > apariencia > añadir nuevo tema > sube el tema descargado con la extención .zip
3.- Activa el tema desde el panel de administración de WordPress.
