default: all

all: clean build deploy

clean: 
	rm -rf bin/*

build:
	cp -R lib bin
	cp -R img bin
	cp -R config/* bin/
	cp -R src/* bin/

deploy:
	rsync --checksum --delete -Lave 'ssh' bin/ ubuntu@bighorse:/srv/happilyevereldridge2018/

test: clean build
	rsync --checksum --delete -Lave 'ssh' bin/ ubuntu@bighorse:/srv/happilyevereldrdige2018-test/
