if [ -e .env ]
then
    echo "Existed file ENV"
else
    cp ./laravel/.env.example ./laravel/.env
    
fi

docker-compose down
docker-compose up -d
docker-compose exec php composer install
docker-compose exec php php artisan key:generate  --force
docker-compose exec php php artisan storage:link  --force
docker-compose exec php php artisan migrate --seed
docker-compose exec php php artisan passport:install
# docker-compose exec php composer require laravel/horizon --ignore-platform-reqs 
# docker-compose exec php php artisan horizon:install

