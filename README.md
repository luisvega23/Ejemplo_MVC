Descripci�n

Descripci�n:
Como usuario, quiero poder registrarme para poder acceder a la plataforma.

Conversaci�n:
Cada usuario posee 3 campos distintos (usuario, email y password), pero el formulario comprende 5:
Usuario
Email
Password
Repetir Password
Bot�n
Antes de que cada usuario pueda crear su cuenta, ning�n campo del formulario puede estar vac�o y ambas contrase�as deben ser id�nticas.
El Sistema, adem�s, almacena el timestamp de la creaci�n del usuario.
Tambi�n se verificar� si el usuario ya existe en la base de datos o no.
El sistema posee 3 respuestas, dependiendo el resultado del formulario:

Registro Exitoso.
Registro Fallido.
Usuario Existente.

Criterios de aceptaci�n:
Dado un usuario cualquiera, cuando intente crear una cuenta, 
entonces el sistema debe analizar la petici�n para ver que no haya ning�n campo vac�o en el formulario, 
adem�s de que no exista otro usuario con el mismo nombre.