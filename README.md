# Practica1.-Despliegue-de-tu-aplicacion-Web
Usar Ansible para automatizar los pasos de la aplicación de software que se instalan normalmente juntas para permitir que un servidor aloje aplicaciones web y sitios web dinámicos. Los datos del sitio que se almacenan en una base de datos y el contenido dinámico que se procesa mediante un lenguaje de programación.


sitio-web
LABORATORIO PARA EL DESPLIEGUE DE APLICACIONES EMPRESARIALES

se carga en el repositorio el archivo de base de datos y archivos de ejecución de la pagina web, asi como el playbook y sus complementos en carpetas distintas ádemas del archivo maestro es el que se encargara de indicar los pasos de creación de archivos, los comandos de ejecución, los comandos de visualización, las direcciones y configuraciones adicionales.

Desgloce de documentos:

Archivo practica 1: trae los pasos de como se desarrollo la practica.
carpeta archivos ansible:
* El archivo basededatos.yml es el playbook para crear la base de datos
* El archivo practica1.yml es el playbook que controla todo se encarga de actuaizar los paquetes, instalar las apps, configurar las apps y copiar los archivos web.
* La carpeta vars tiene el archivo default.yml que es donde estan cargadas las configuraciones por defecto.
* La carpeta files tiene el archivo de configuracion para php y el de informacion.
* La carpeta sitio tiene tiene los archivos de la pagina web y de la base de datos.
