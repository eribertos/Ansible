<Files "index.php">
            SetHandler "proxy:unix:/var/opt/remi/php74/run/php-fpm/www.sock|fcgi://localhost/"
        </Files>
