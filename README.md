
ymlありのビルド
docker-compose -f docker-compose.yml up



Dockerfileを作成した状態でDockerイメージを作成andビルド方法
docker build -t Dockerイメージ名 .

docker build -t XSS_lecutre .


Dockerイメージの立ち上げ
docker run -d -p ローカル側:Docker側 イメージ名

docker run -d -p 8000:8000 xss_lecture


image削除
docker rmi -f IMAGE ID# app
