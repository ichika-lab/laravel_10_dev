.PHONY: setup up d b ps node

setup:
	@make up
	@make ps
d:
	docker compose down
up:
	docker compose up -d
upb:
	docker compose up -d --build
ps:
	docker compose ps
lapp:
	docker compose exec l10dev-app bash
ldb:
	docker compose exec l10dev-mysql bash
node:
	docker compose exec node bash
