CREATE DATABASE IF NOT EXISTS studi_ecf_arcadia;
CREATE USER 'symfony_user'@'localhost' IDENTIFIED BY 'your_password';
GRANT ALL PRIVILEGES ON studi_ecf_arcadia.* TO 'symfony_user'@'localhost';
FLUSH PRIVILEGES;


<VirtualHost *:80>
    ServerName yourdomain.commit
    DocumentRoot /var/www/symfony/public

    <Directory /var/www/symfony/public>
        AllowOverride All
        Order Allow,Deny
        Allow from All
    </Dirctory>

    ErrorLog ${APACHE_LOG_DIR}/symfony_error.log
    CustomLog ${APACHE_LOG_DIR}/symfony_access.log combined
</VitualHost>

sudo a2ensite symfony
sudo systemctl reload apache2

sudo chown -R www-data:www-data /var/www/symfony
sudo chowd -R 775 /var/www/symfony/var/cache /var/www/symfony/var/log

                DATABASE_URL="mysql://symfony_user:your_password@127.0.0.1:3306/studi-ecf-arcadia?serverVersion=8.0.32&charset=utf8mb4"



