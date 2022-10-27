FROM nginx:latest
COPY /html /usr/share/nginx/html
COPY nginx/nginx.conf /etc/nginx/
COPY nginx/default.conf /etc/nginx/conf.d/default.conf
EXPOSE 9080
CMD ["nginx", "-g", "daemon off;"]

