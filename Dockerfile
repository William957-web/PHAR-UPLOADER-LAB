FROM dockerfiles/centos-lamp 

COPY . /var/www/html
RUN rm /var/www/html/Dockerfile
RUN chmod 777 /var/www/html/
RUN mkdir /var/www/html/uploads
RUN chmod 777 /var/www/html/uploads
RUN echo 'ICED{Ph4r_m@st3r_is_u!!!}' > /flag-$(xxd -l 6 -p /dev/urandom)
