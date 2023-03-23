# Como usar

Copiar `.kube/overlays/local/Deployment.yml.example` en `.kube/overlays/local/Deployment.yml`, y cambiar la ruta de `/path/to/code` a la ruta real donde se haya clonado el repositorio

Instalar Docker Desktop y activar Kubernetes

Ejecutar: `kubectl apply -k ./kube/overlays/local`