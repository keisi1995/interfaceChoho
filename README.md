# Instalación de la interface

requerimiento:
	version php -> >=5.6.30
	apache server -> importante tener instalado el servidor apache

archivo config:
	application/constants.php -> modificar la constante URL, reemplazar por la url de su proyecto interfaceChoho.
	application/constants.php -> modificar la constante URL_API, reemplazar por la url de su proyecto apiChoho.

archivo php ini:
	php.ini -> configurar la zona horario en el archivo php.ini buscar el siguiente linea de codigo date.timezone y agregar = America/Lima
	quedaria de esta manera date.timezone = America/Lima