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
[Get Postman Collection](http://pipletask.test/docs/collection.json)

<!-- END_INFO -->

#Registration


<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Create user resource.

> Example request:

```bash
curl -X POST \
    "http://pipletask.test/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "name": "Loren Senger Sr.",
            "email": "taya43@example.net",
            "email_verified_at": "2020-08-17T20:29:25.000000Z"
        },
        {
            "name": "Alycia Spinka V",
            "email": "gottlieb.moshe@example.net",
            "email_verified_at": "2020-08-17T20:29:25.000000Z"
        }
    ]
}
```

### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

#Search Management


<!-- START_f7828fe70326ce6166fdba9c0c9d80ed -->
## Display a listing of the Users Resource.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://pipletask.test/api/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
    "data": [
        {
            "overview": "Est iste dignissimos cum sed ut quia quaerat.",
            "description": "Neque sed ab tempore laboriosam ab voluptas neque aut necessitatibus voluptatem.",
            "references": "Voluptatem commodi facilis asperiores ullam et ipsum.",
            "title": "Praesentium recusandae inventore qui voluptas exercitationem atque aperiam.",
            "state_id": 18190915189
        },
        {
            "overview": "At minus non et quia quasi.",
            "description": "Magnam quod quisquam quasi et ea rerum qui distinctio omnis odit possimus.",
            "references": "Sit tempora ut voluptatem quia ipsum est.",
            "title": "Et facilis ut ad molestias debitis voluptatum odio.",
            "state_id": 71147398137
        }
    ]
}
```

### HTTP Request
`GET api/search`


<!-- END_f7828fe70326ce6166fdba9c0c9d80ed -->

#User Type Resource


<!-- START_3927d9858a98b64816c08b1fb902df4b -->
## Display a listing of the resource.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://pipletask.test/api/types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
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
    "data": [
        {
            "name": "Yoga Hocası"
        },
        {
            "name": "Fitness Hocası"
        }
    ]
}
```

### HTTP Request
`GET api/types`


<!-- END_3927d9858a98b64816c08b1fb902df4b -->


