
```
# build the image
docker build -t autoscaling-demo:0.1 .

# local test with docker
docker run -p 1234:80 -d --name a1 autoscaling-demo:0.1
# try in browser http://localhost:1234

# tag and push on docker hub
docker tag autoscaling-demo:0.1 vvang/autoscaling-demo:0.1
docker push vvang/autoscaling-demo:0.1
# see it at https://hub.docker.com/repository/docker/vvang/autoscaling-demo

```
