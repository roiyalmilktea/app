#!/usr/bin/bash

echo -n 'CONTAINER ID:'
read id



docker container exec -it ${id} mysql -u root -proot
