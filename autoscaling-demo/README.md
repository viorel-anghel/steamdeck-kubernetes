# Autoscaling demo (HPA)

- deploy the kubernetes manifests `kubectl apply -f ...`
- test from a browser http://<one node IP>
- check the pods with `kubectl get pods` or `kubectl top pods`
- generate some load, for example `ab -n 2000 http://<node IP/`
- check again the number of pods. or even better `kubectl describe deploy myapp` to see events
- stop the requests, wait for the scale down

