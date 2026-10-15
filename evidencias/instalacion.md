# Evidencia de instalación (Etapa 1)

Reemplaza cada `...` con TU información real (copiada de tu equipo, no inventada).

- **Sistema operativo:** Windows 11 (build 26200), 64 bits
- **Paquete usado:** XAMPP (Control Panel v3.3.0) 
- **Versión de PHP:** 8.2.12 
- **Servidor web:** Apache 2.4.58 (Win64)  
- **Base de datos:** MariaDB 10.4.32  
- **Puerto del servidor web:** 80
- **Ruta de instalación:** C:\xampp
- **Problema encontrado y cómo lo resolviste:**  Tuve un problema con la versión de PHP: al escribir `php -v` me mostraba la 8.5.0 en vez de la 8.2.12 de XAMPP, porque Herd estaba en el PATH del sistema. Lo resolví agregando C:\xampp\php en las variables del sistema y subiéndolo por encima de Herd. Reinicié VS Code y ya mostraba la 8.2.12.