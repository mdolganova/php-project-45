install: 
	composer install

brain-games:
	php ./bin/brain-games

publish:
	npm publish --dry-run

make lint:
	npx eslint .

validate:
	composer validate