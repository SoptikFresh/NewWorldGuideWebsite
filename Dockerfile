# Use official PHP image with Apache
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Enable Apache mod_rewrite for URL rewriting if needed
RUN a2enmod rewrite

# Copy project files to container
COPY . .

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Configure Apache to serve from the project root
RUN echo '<Directory /var/www/html>' > /etc/apache2/conf-available/php-app.conf && \
    echo '    Options Indexes FollowSymLinks' >> /etc/apache2/conf-available/php-app.conf && \
    echo '    AllowOverride All' >> /etc/apache2/conf-available/php-app.conf && \
    echo '    Require all granted' >> /etc/apache2/conf-available/php-app.conf && \
    echo '</Directory>' >> /etc/apache2/conf-available/php-app.conf && \
    a2enconf php-app

# Install additional PHP extensions if needed
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 8080 (Render uses dynamic port assignment)
EXPOSE 8080

# Configure Apache to listen on port 8080
RUN sed -i 's/Listen 80/Listen 8080/' /etc/apache2/ports.conf && \
    sed -i 's/:80/:8080/' /etc/apache2/sites-available/000-default.conf

# Set environment to development (or production as needed)
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

# Start Apache
CMD ["apache2-foreground"]
