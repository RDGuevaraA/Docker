# Dockerfile

FROM php:8.1-apache

# Habilitar el módulo rewrite (si es necesario)
RUN a2enmod rewrite

# Establecer ServerName para evitar advertencias
RUN echo "ServerName localhost" >> /etc/apache2/conf-available/servername.conf && a2enconf servername

# Copiar la configuración personalizada de Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Copiar todo el proyecto al contenedor
COPY . /var/www/html/

# Ajustar permisos para que Apache (usuario www-data) tenga acceso a los archivos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80

# Ejecutar Apache en primer plano
CMD ["apache2-foreground"]
