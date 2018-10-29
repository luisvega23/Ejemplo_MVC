Descripción

Descripción:
Como usuario, quiero poder registrarme para poder acceder a la plataforma.

Conversación:
Cada usuario posee 3 campos distintos (usuario, email y password), pero el formulario comprende 5:
Usuario
Email
Password
Repetir Password
Botón
Antes de que cada usuario pueda crear su cuenta, ningún campo del formulario puede estar vacío y ambas contraseñas deben ser idénticas.
El Sistema, además, almacena el timestamp de la creación del usuario.
También se verificará si el usuario ya existe en la base de datos o no.
El sistema posee 3 respuestas, dependiendo el resultado del formulario:

Registro Exitoso.
Registro Fallido.
Usuario Existente.

Criterios de aceptación:
Dado un usuario cualquiera, cuando intente crear una cuenta, 
entonces el sistema debe analizar la petición para ver que no haya ningún campo vacío en el formulario, 
además de que no exista otro usuario con el mismo nombre.