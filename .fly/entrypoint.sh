#!/usr/bin/env bash

cd /var/www/html

echo "Starting PAAB Website..."

# Create SQLite database if it doesn't exist
if [ ! -f /var/www/html/database/database.sqlite ]; then
    echo "Creating SQLite database..."
    touch /var/www/html/database/database.sqlite
    chmod 664 /var/www/html/database/database.sqlite
    chown www-data:www-data /var/www/html/database/database.sqlite
fi

# Ensure correct permissions on storage
echo "Setting permissions..."
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Ensure database directory is writable
chown -R www-data:www-data /var/www/html/database
chmod -R 775 /var/www/html/database

# Clear old caches
echo "Clearing caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Create storage symlink
echo "Creating storage link..."
php artisan storage:link --force

# Cache configuration for production
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Starting services..."
# Start supervisor (nginx + php-fpm)
exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf