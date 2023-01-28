# python 3.7 をベースにDockerイメージを作成
FROM python:3.7

WORKDIR /app

ADD . /app

RUN pip install Flask

EXPOSE 8000

CMD ["python3", "app.py"]