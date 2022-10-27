FROM nginx:latest
COPY /html /var/www/html
COPY nginx/nginx.conf /etc/nginx/
COPY nginx/nginx.conf /etc/nginx/conf.d
EXPOSE 9080
CMD ["nginx", "-g", "daemon off;"]

