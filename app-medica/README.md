# MediCitas - Panel Administrativo

Dashboard para la gestión de citas médicas, desarrollado como práctica de la asignatura de Desarrollo Web (ITLA).
Basado en la plantilla gratuita **SB Admin 2** de [Start Bootstrap](https://startbootstrap.com/theme/sb-admin-2) (licencia MIT), migrada de HTML a PHP y adaptada a la temática médica.

## Páginas
| Archivo | Descripción |
|---|---|
| `index.php` | Panel Administrativo: resumen de citas, gráficos y accesos rápidos |
| `pacientes.php` | Listado de pacientes con buscador y paginación |
| `doctores.php` | Equipo médico con especialidad, consultorio y horario |
| `agendar-cita.php` | Formulario para agendar una cita |
| `historial-clinico.php` | Datos del paciente, consultas anteriores y medicamentos |
| `charts.php` | Reportes estadísticos |
| `login.php`, `register.php`, `forgot-password.php` | Acceso de usuarios |

## Cómo ejecutarlo
**Local (Laragon):** copiar la carpeta en `C:\laragon\www\app-medica`, iniciar Laragon y abrir `http://localhost/app-medica/index.php`.

**Cualquier equipo con PHP:**
```bash
php -S localhost:8000
```
y abrir `http://localhost:8000`.

## Cambios realizados a la plantilla
- Extensiones cambiadas de `.html` a `.php` y todos los enlaces internos corregidos.
- Título "MediCitas - Panel Administrativo", logo "MediCitas" y colores en tono médico (turquesa).
- Menú lateral con Pacientes, Doctores, Agendar Cita e Historial Clínico.
- Textos, tablas y gráficos traducidos al español con datos de ejemplo.
- Imágenes externas reemplazadas por imágenes locales y favicon propio.

> Los datos mostrados son ficticios; el proyecto aún no usa base de datos.
