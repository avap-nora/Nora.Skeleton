FROM lambci/lambda:build-provided

ENV PHP_MINOR_VERSION=3

RUN \
    yum install -y wget  && \
    yum install -y yum-utils && \
    wget https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm && \
    wget https://rpms.remirepo.net/enterprise/remi-release-6.rpm && \
    rpm -Uvh epel-release-latest-6.noarch.rpm && \
    rpm -Uvh remi-release-6.rpm && \
    yum-config-manager --enable remi-php7${PHP_MINOR_VERSION}

RUN \
    yum install -y httpd && \
    yum install -y postgresql-devel && \
    yum install -y libargon2-devel

RUN \
    yum install -y --disablerepo="*" --enablerepo="remi,remi-php7${PHP_MINOR_VERSION}" \
        php \
        php-mbstring \
        php-pdo \
        php-mysql \
        php-pgsql \
        php-xml \
        php-process

# Extention: xdebug
RUN \
    yum install -y --enablerepo="remi,remi-php7${PHP_MINOR_VERSION}" \
        libxml2-devel libedit-devel
RUN \
    yum install -y --disablerepo="*" --enablerepo="remi,remi-php7${PHP_MINOR_VERSION}" \
        php-devel php-pear
RUN \
    pecl install xdebug

# Extention: redis
RUN \
    pecl install redis

# Extention: yaml
RUN \
    yum install -y libyaml-devel
RUN \
    pecl install yaml

RUN curl https://getcomposer.org/installer  > composer-setup.php
RUN php composer-setup.php --install-dir=/usr/bin --filename=composer

RUN mkdir /tmp/layer
WORKDIR /tmp/layer

COPY build-php-layer.sh /bin/build-php-layer
ENTRYPOINT ["/bin/build-php-layer"]
