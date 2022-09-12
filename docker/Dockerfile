FROM ubuntu

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && \
    apt-get install -y php-cli && \
    rm -rf /var/lib/apt/lists/*

ADD . /app/
WORKDIR /app

EXPOSE 8000
CMD ["php", "-S 0.0.0.0:8000", "-t", "/app"]