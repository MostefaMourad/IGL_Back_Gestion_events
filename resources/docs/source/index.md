---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_742a1cbd4a274c7269f0db99a704ff41 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "",
    "data": [
        {
            "id": 2,
            "nom": "LeapFrog",
            "description": "laay laay",
            "nbr_interesse": 1023,
            "nbr_participe": 125,
            "organisateur": "CSE",
            "adresse": "esi oued semar",
            "date_debut": null,
            "duree": "3 full days",
            "created_at": "2020-01-01 21:58:58",
            "updated_at": "2020-01-01 21:58:58"
        },
        {
            "id": 4,
            "nom": "Hackit",
            "description": "laay laay 74",
            "nbr_interesse": 1023,
            "nbr_participe": 125,
            "organisateur": "CSE",
            "adresse": "esi oued semar",
            "date_debut": null,
            "duree": "3 adys 2",
            "created_at": "2020-01-01 22:32:44",
            "updated_at": "2020-01-01 22:48:46"
        },
        {
            "id": 7,
            "nom": "DevFest8888",
            "description": "laaaaaay laaaaay",
            "nbr_interesse": 5000,
            "nbr_participe": 400,
            "organisateur": "GDG Algiers",
            "adresse": "Polytechnique",
            "date_debut": null,
            "duree": "3 jours",
            "created_at": "2020-01-02 07:45:34",
            "updated_at": "2020-01-02 07:46:05"
        }
    ]
}
```

### HTTP Request
`GET api/events`


<!-- END_742a1cbd4a274c7269f0db99a704ff41 -->

<!-- START_f36e77ce83ef3131131753e9591ba60f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": false,
    "code": 204,
    "message": "Evenement introuvable"
}
```

### HTTP Request
`GET api/events/{id}`


<!-- END_f36e77ce83ef3131131753e9591ba60f -->

<!-- START_de3413bf02c9bb71627fa96e1c1c409f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/events`


<!-- END_de3413bf02c9bb71627fa96e1c1c409f -->

<!-- START_c49cd321b88d402fa4331e4cbbe4f636 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/events/{id}`


<!-- END_c49cd321b88d402fa4331e4cbbe4f636 -->

<!-- START_2038229c1955ace45257c67d608e3f40 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/events/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/events/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/events/{id}`


<!-- END_2038229c1955ace45257c67d608e3f40 -->


