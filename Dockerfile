FROM php:8-apache
RUN a2enmod rewrite && \
  a2enmod headers

ENV APACHE_DOCUMENT_ROOT /srv/web/src/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /srv/web
COPY . .
EXPOSE 80