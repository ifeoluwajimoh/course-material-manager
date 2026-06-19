# Use an official PHP image with Apache pre-installed
FROM php:8.2-apache

# Copy all your project files into the server's public directory
COPY . /var/www/html/

# Create the uploads folder and set correct permissions for PHP
RUN mkdir -p /var/www/html/files && \
    chown -R www-data:www-data /var/www/html/files && \
    chmod -R 755 /var/www/html/files

# Expose port 80 for web traffic
EXPOSE 80