FROM ubuntu:22.04 as base

ARG PHP_VERSION=8.2.5
ARG PHP_DEBUG="no"
ARG PHP_ZTS="no"

RUN apt-get update -y \
    && apt-get upgrade -y \
    && apt-get install -y \
        autoconf \
        pkg-config \
        sudo \
        wget \
        git \
        gcc \
        g++ \
        gdb \
        python3 \
        python3-pip \
        unzip \
        mlocate \
        build-essential \
        ninja-build \
        libasan8 \
        libubsan1 \
    && pip3 install cmake cqlsh \
    && apt-get clean

COPY . /ext-scylladb

ENV PATH="$PATH:$HOME/.local/bin"

WORKDIR /ext-scylladb

RUN ./scripts/compile-php.sh -v $PHP_VERSION -s -d $PHP_DEBUG -zts $PHP_ZTS

ENTRYPOINT ["bash"]

FROM base as build

RUN ./scripts/compile-extension.sh

ENTRYPOINT ["bash"]
