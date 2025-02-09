#!/usr/bin/env bash
role=$1;
echo $role;
while [ true ]
do
if [ "$role" = "schedule" ]; then
    php artisan schedule:run --verbose --no-interaction &
elif [ "$role" = "queue" ]; then
    php artisan queue:work --timeout=30
fi
  sleep 60
done
