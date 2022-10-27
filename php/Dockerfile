FROM nginx:latest
COPY /html /usr/share/nginx/html
COPY nginx.conf /etc/nginx/
COPY default.conf /etc/nginx/conf.d/site.conf
EXPOSE 9080
CMD ["nginx", "-g", "daemon off;"]

