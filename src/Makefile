setup:
	composer install
	cp .env.example .env
	php artisan key:generate
	php artisan migrate
	php artisan db:seed

ide-helper:
	php artisan ide-helper:generate
	php artisan ide-helper:models --write --reset
	php artisan ide-helper:meta
	php artisan ide-helper:eloquent

