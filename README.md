# Aplicación PHP Insegura – Laboratorio OWASP Top 10 2025  
**Proyecto académico para el curso Aplicaciones y Servicios Seguros – UNAD**

Esta aplicación fue desarrollada con fines exclusivamente académicos y contiene vulnerabilidades intencionales que permiten demostrar, analizar y comprender los riesgos del **OWASP Top 10 – 2025**, así como el uso de herramientas de análisis como **OWASP ZAP**.

NO debe ser utilizada en ambientes de producción ni en servidores expuestos a Internet.

---

## 🎯 Objetivo del proyecto

Este proyecto permite a los estudiantes:

- Identificar vulnerabilidades comunes en aplicaciones web.
- Comprender el impacto del OWASP Top 10 2025 mediante ejemplos reales.
- Practicar el uso de herramientas de análisis de seguridad como OWASP ZAP.
- Reconocer malas prácticas de desarrollo en PHP, MySQL y Apache.
- Experimentar con ataques controlados: SQL Injection, XSS, LFI, CSRF, Broken Access Control, entre otros.

---

## 🛑 Advertencia Importante

Este software es **deliberadamente inseguro**.  
Incluye, entre otras vulnerabilidades:

- Inyección SQL (A03)  
- Fallos en autenticación y sesiones (A07)  
- Exposición de información sensible (A02)  
- XSS reflejado y almacenado (A06)  
- Lectura arbitraria de archivos – LFI / Path Traversal (A04 / A05)  
- Controles de acceso rotos (A09)  
- Contraseñas en texto plano  
- Cookies sin protección  
- Configuraciones inseguras de PHP y Apache  

Debe ejecutarse **solo en entornos locales, aislados y controlados**.

---

## 🧱 Tecnologías utilizadas

- **PHP 8.2.x**
- **MySQL / MariaDB**
- **Apache 2.4**
- (Opcional) Docker / XAMPP / Laragon
- OWASP ZAP para los análisis de seguridad

---

## 📦 Instalación y requisitos

### 1. Clonar el repositorio
```bash
git clone https://github.com/TU-USUARIO/tecnosys-insegura.git
cd tecnosys-insegura
```

### 2. Requisitos mínimos
- PHP 8.2.x con módulos:
  - mysqli  
  - allow_url_fopen enabled (opcional para RFI)  
- MySQL/MariaDB local
- Apache con soporte para PHP

### 3. Crear base de datos
Importar el archivo SQL incluido o ejecutar manualmente:

```sql
CREATE DATABASE tecnosys_insegura;
USE tecnosys_insegura;

-- Tabla de usuarios con contraseñas en texto plano
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255),
  rol VARCHAR(20)
);

INSERT INTO usuarios (username, password, rol) VALUES
('admin', 'admin123', 'admin'),
('juan', '123456', 'user'),
('maria', 'password', 'user');

-- Tabla vulnerable a XSS almacenado
CREATE TABLE comentarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50),
  comentario TEXT,
  fecha DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

### 4. Configurar conexión a la base de datos
Editar el archivo `config.php`:

```php
$DB_HOST = "localhost";
$DB_USER = "root";        // Intencionalmente inseguro
$DB_PASS = "root123";     // Contraseña débil
$DB_NAME = "tecnosys_insegura";
```

---

## ⚙️ Recomendaciones de configuración para prácticas de laboratorio

Para aprovechar todas las vulnerabilidades, habilitar en php.ini:

```ini
display_errors = On
display_startup_errors = On
allow_url_fopen = On
allow_url_include = On
```

En Apache, permitir exploración e inclusión:

```apache
<Directory "/var/www/html/tecnosys-insegura">
    AllowOverride All
    Options Indexes Includes ExecCGI
    Require all granted
</Directory>
```

IMPORTANTE: Estas configuraciones son peligrosas.  
Usarlas solo en entornos locales o máquinas virtuales.

---

## 🧪 ¿Qué vulnerabilidades se pueden probar?

La aplicación incluye ejemplos reales de:

| Vulnerabilidad | Descripción |
|----------------|-------------|
| **A03 – SQL Injection** | Login vulnerable. |
| **A06 – XSS** | Comentarios reflejados y almacenados. |
| **A02 – Información sensible expuesta** | Rutas, credenciales y errores en pantalla. |
| **A09 – Broken Access Control** | Acceso a `admin.php` sin autenticación. |
| **A07 – Fallas en autenticación** | Logout insuficiente, sesión no invalidada. |
| **A04/A05 – LFI / Path Traversal** | Lectura de archivos internos del servidor. |
| **Contraseñas en texto plano** | Usuarios almacenados sin hash. |
| **Cookies inseguras** | Sin flags de seguridad. |

---

## ▶️ Cómo usar la aplicación

1. Abrir en navegador:

```
http://localhost/tecnosys-insegura
```

2. Probar el login inseguro:
```
' OR '1'='1
```

3. Navegar por el menú expuesto:
- Panel de administración
- Lectura de archivos
- Comentarios vulnerables

4. Ejecutar OWASP ZAP:
- Realizar un **Quick Scan**
- Revisar alertas **High** y **Medium**
- Analizar rutas vulnerables

5. Documentar hallazgos como práctica académica.

---

## 🎓 Propósito educativo

Este proyecto se desarrolla en el marco del curso **Aplicaciones y Servicios Seguros**, y sirve para:

- Comprender el impacto real de las malas prácticas de desarrollo.
- Reconocer patrones de vulnerabilidad en aplicaciones PHP.
- Realizar ejercicios de pentesting ético en ambientes controlados.
- Aplicar análisis con OWASP ZAP como herramienta profesional.

---

## 📝 Licencia

MIT License con cláusula de descargo.  
Consultar archivo **LICENSE** incluido en el repositorio.

---

## ⚠️ Descargo de responsabilidad final

Este código es **deliberadamente inseguro**.  
El autor no se hace responsable del uso indebido del software.  
Úselo exclusivamente en entornos académicos y controlados.

---
