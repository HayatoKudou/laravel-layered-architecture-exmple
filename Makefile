docker/setup:
	docker build --pull --tag libra_sys --cache-from=libra_sys src/.
	$(MAKE) docker/up
	$(MAKE) docker/exec command="make setup"

docker/up:
	docker-compose up -d

docker/exec: docker_option=
docker/exec: service=app
docker/exec: command=bash
docker/exec:
	docker-compose exec $(docker_option) $(service) $(command)
