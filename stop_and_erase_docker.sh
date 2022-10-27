#sudo docker stop hello-world-nginx
#sudo docker rm hello-world-nginx
#sudo docker rmi docker-nginx
docker compose -f "docker-compose.yml" down
docker system prune -a