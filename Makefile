default: deploy

deploy:
	rsync --checksum --delete -ave 'ssh' * michael@alisonmichaelwedding.com:/srv/alisonmichaelwedding/
