run:
	./vendor/bin/sail up -d
	./vendor/bin/sail composer install
	cp .env.example .env
	./vendor/bin/sail artisan migrate
	./vendor/bin/sail artisan db:seed

test:
	./vendor/bin/sail artisan test

db_refresh:
	./vendor/bin/sail artisan migrate:refresh --seed

ssh_container:
	./vendor/bin/sail shell

prune:
	docker system prune -a
	docker volume prune
