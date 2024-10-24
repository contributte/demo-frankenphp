FROM dunglas/frankenphp:1.2.5-php8.3-bookworm

RUN echo "variables_order = \"EGPCS\"" >> $PHP_INI_DIR/conf.d/990-php.ini

RUN install-php-extensions xdebug

RUN echo "[xdebug]" >> $PHP_INI_DIR/conf.d/991-xdebug.ini && \
    echo "xdebug.mode=debug" >> $PHP_INI_DIR/conf.d/991-xdebug.ini && \
    echo "xdebug.client_host=host.docker.internal" >> $PHP_INI_DIR/conf.d/991-xdebug.ini && \
    echo "xdebug.start_with_request=yes" >> $PHP_INI_DIR/conf.d/991-xdebug.ini

WORKDIR /srv

COPY . /srv
COPY .docker/Caddyfile /etc/caddy/Caddyfile
