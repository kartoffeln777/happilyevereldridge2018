default: all

all: clean build deploy

clean: 
	rm -rf bin/*

build:
	cp -R lib bin
	cp -R img bin
	cp -R src/* bin/

deploy:
	rsync --checksum --delete -Lave 'ssh' bin/ michael@alisonmichaelwedding.com:/srv/alisonmichaelwedding/

test: clean build
	rsync --checksum --delete -Lave 'ssh' bin/ michael@alisonmichaelwedding.com:/srv/alisonmichaelwedding-test/
