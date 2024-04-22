# Prueba Técnica en Laravel - API de Usuarios

## Objetivos
1. Crear un endpoint para la creación de usuarios con validaciones correspondientes, incluida la validación del formato del DNI.
2. Crear un endpoint para traer un usuario por DNI.
3. Crear una tabla en la base de datos para asociar los teléfonos de los usuarios, con un endpoint para cargar teléfonos a un usuario y otro para traer los teléfonos por usuario.

## Detalles de la Prueba

### 1. Creación de Usuarios
- **Ruta:** POST /api/usuarios
- **Parámetros de Entrada:** nombre (texto), apellido (texto), dni (texto), edad (entero)
- **Validaciones:**
  - Todos los campos son requeridos.
  - El formato del DNI debe ser válido.

### 2. Obtener Usuario por DNI
- **Ruta:** GET /api/usuarios/{dni}
- **Parámetros de Entrada:** dni (texto)

### 3. Gestión de Teléfonos
- **Tabla en la Base de Datos:** "telefonos" con los campos usuario_id (entero), telefono (texto)
- **Creación de Teléfono para Usuario:**
  - **Ruta:** POST /api/usuarios/{usuario_id}/telefonos
  - **Parámetros de Entrada:** usuario_id (entero), telefono (texto)
  - **Respuesta Exitosa:** Código 201 (Creado) con el teléfono creado para el usuario en formato JSON.
  - **Respuesta Fallida:** Código 422 (No procesable) con los errores de validación en formato JSON.
- **Obtener Teléfonos por Usuario:**

### Evaluación

Durante la evaluación de esta prueba técnica se tendrán en cuenta los siguientes aspectos:

- **Buenas prácticas de programación:** Se espera que el código siga las convenciones y principios de diseño de Laravel y PHP en general.

- **Seguimiento de la estructura del proyecto:** Debe mantenerse la estructura típica de un proyecto Laravel, siguiendo las recomendaciones de organización de archivos y directorios.

- **Validaciones correspondientes:** Se deben implementar todas las validaciones necesarias para garantizar la integridad de los datos y la seguridad del sistema, incluida la validación del formato del DNI.

- **Manejo de errores:** Se espera un manejo adecuado de errores y mensajes de error claros y descriptivos.

- **Simplicidad del código:** Se valorará la simplicidad y claridad del código, evitando complejidades innecesarias.
