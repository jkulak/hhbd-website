# hhbd-website

## Deployment 

`gcloud app deploy`

## Google Cloud

### Logs

https://console.cloud.google.com/logs/query;query=resource.type%3D%22gae_app%22%0Aresource.labels.version_id%3D%2220211125t181237%22%0Aseverity%3DERROR;cursorTimestamp=2021-11-25T17:36:03.122922Z?folder=true&organizationId=true&project=hhbd-pl


## Instalation

Create config file from the template
```
cp app/application/configs/application.ini-example app/application/configs/application.ini
```

Build and run the image

```
$ docker-compose build
$ docker-compose up
```

## Docker

`docker exec -ti hhbdwebsite_web_1 bash -l`
