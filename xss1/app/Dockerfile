FROM python:3.8.10

WORKDIR /app
ENV FLASK_APP=app

COPY ./flaskapp/requirements.txt ./

RUN pip install --upgrade pip
RUN pip install -r requirements.txt
RUN apt -y update && apt install -y 
RUN pip install bottle
RUN pip install requests
RUN sqlite3 \
	sudo \
	tcpdump \
	traceroute \
	usbutils \
	vim \
	wget \