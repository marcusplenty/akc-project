# Use the official WordPress image
FROM wordpress:6.1-php7.4

# Install required PHP extensions
RUN docker-php-ext-install mysqli

# Copy the custom theme to the themes directory in WordPress
COPY wordpress/wp-content/themes/main /var/www/html/wp-content/themes/main
