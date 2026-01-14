
UserManager es una app web para gestionar usuarios con PHP MySQL y JS. Permite registro, login y gestión de usuarios, con panel exclusivo para administradores.

Funcionalidades

Usuarios:

    Registro y login
    Dashboard personal
    Logout

Administradores:

    Panel admin
    Listar, editar y eliminar usuarios
    Ver estadísticas

Tecnologías usadas

    Backend: PHP
    BD: MySQL
    Frontend: HTML, CSS, JS
    Seguridad: Hash de contraseñas, sesiones, prepared statements

    Instalación

1. Crear DB `usermanager`
2. crear una tabla con`CREACIONDB.sql` 
3.Configurar `conexion.php` con tus credenciales

    Admin por defecto:*`admin@system.com` / `P@ssw0rd`

Seguridad

    Hash de contraseñas
    Control de roles
    Validación JS + PHP

Ruta de uso
 Usuario: Registro → Login → Dashboard → Logout
 Admin: Login → Dashboard → Panel Admin → Gestión de usuarios
