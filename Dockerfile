FROM php:8.4-apache

# Enable mod_rewrite for .htaccess clean URLs
RUN a2enmod rewrite

# Configure Apache: set DocumentRoot to /public, allow .htaccess override
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf && \
    sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Copy project files
COPY public/   /var/www/html/public/
COPY pages/    /var/www/html/pages/
COPY includes/ /var/www/html/includes/

# Create uploads directory and set ownership.
# Coolify: mount a persistent volume to /var/www/html/public/uploads/
# The directory must exist at build time so the volume mount inherits correct permissions.
RUN mkdir -p /var/www/html/public/uploads && \
    chown -R www-data:www-data /var/www/html/public/uploads && \
    chmod 755 /var/www/html/public/uploads

# Fix permissions on all project files
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
