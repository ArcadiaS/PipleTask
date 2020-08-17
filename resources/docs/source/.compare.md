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

#General Routes


<!-- START_4e5cce52d2a74c2f3db49ded7491e123 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://pipletask.test/api/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/authorize"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/oauth/authorize`


<!-- END_4e5cce52d2a74c2f3db49ded7491e123 -->

<!-- START_31891a0c40b657fa1789125f120e382c -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://pipletask.test/api/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/authorize"
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



### HTTP Request
`POST api/oauth/authorize`


<!-- END_31891a0c40b657fa1789125f120e382c -->

<!-- START_9a0f023075c012ec7c332a24349dd89c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://pipletask.test/api/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/oauth/authorize`


<!-- END_9a0f023075c012ec7c332a24349dd89c -->

<!-- START_afa573efcb404c394e835b474f167e56 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://pipletask.test/api/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/token"
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



### HTTP Request
`POST api/oauth/token`


<!-- END_afa573efcb404c394e835b474f167e56 -->

<!-- START_b4bff9acd35af4f8e7052cc499256d80 -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://pipletask.test/api/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/tokens"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/oauth/tokens`


<!-- END_b4bff9acd35af4f8e7052cc499256d80 -->

<!-- START_3426813d113e67889b69895375b2f1e8 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://pipletask.test/api/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/oauth/tokens/{token_id}`


<!-- END_3426813d113e67889b69895375b2f1e8 -->

<!-- START_042c9d482936925dc0c20931422c64d3 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://pipletask.test/api/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/token/refresh"
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



### HTTP Request
`POST api/oauth/token/refresh`


<!-- END_042c9d482936925dc0c20931422c64d3 -->

<!-- START_ac7d23bc3d155ecf4023a1b8b6353703 -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://pipletask.test/api/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/clients"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/oauth/clients`


<!-- END_ac7d23bc3d155ecf4023a1b8b6353703 -->

<!-- START_df9661e38978cc5e272bf288d2249a8c -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://pipletask.test/api/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/clients"
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



### HTTP Request
`POST api/oauth/clients`


<!-- END_df9661e38978cc5e272bf288d2249a8c -->

<!-- START_53ed6a8c6cd5825f50b9f05eeb7d02a6 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://pipletask.test/api/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/oauth/clients/{client_id}`


<!-- END_53ed6a8c6cd5825f50b9f05eeb7d02a6 -->

<!-- START_c64c8de58bd9d1cade9ca3a8d5405256 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://pipletask.test/api/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/oauth/clients/{client_id}`


<!-- END_c64c8de58bd9d1cade9ca3a8d5405256 -->

<!-- START_c15dbf978e9d50a3b0e91ff75f839b62 -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://pipletask.test/api/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/scopes"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/oauth/scopes`


<!-- END_c15dbf978e9d50a3b0e91ff75f839b62 -->

<!-- START_fcc2cce1f36e999858b5918ff32c6267 -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://pipletask.test/api/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/personal-access-tokens"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/oauth/personal-access-tokens`


<!-- END_fcc2cce1f36e999858b5918ff32c6267 -->

<!-- START_a4e17d5011f69f4b5dbfd7cff9befca7 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://pipletask.test/api/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/personal-access-tokens"
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



### HTTP Request
`POST api/oauth/personal-access-tokens`


<!-- END_a4e17d5011f69f4b5dbfd7cff9befca7 -->

<!-- START_94fb2b2f8e0254b40fa4b0a8ceb78956 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://pipletask.test/api/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/oauth/personal-access-tokens/{token_id}`


<!-- END_94fb2b2f8e0254b40fa4b0a8ceb78956 -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://pipletask.test/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/home"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

#Registration


<!-- START_638687f1aca2f1e69b360d1516c7c1f9 -->
## Create user resource.

> Example request:

```bash
curl -X POST \
    "http://pipletask.test/api/user/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://pipletask.test/api/user/register"
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
            "name": "Prof. Anthony Nader II",
            "email": "bergnaum.felipe@example.org",
            "email_verified_at": "2020-08-17T21:23:41.000000Z"
        },
        {
            "name": "Mr. Rocio Kautzer I",
            "email": "balistreri.osborne@example.org",
            "email_verified_at": "2020-08-17T21:23:41.000000Z"
        }
    ]
}
```

### HTTP Request
`POST api/user/register`


<!-- END_638687f1aca2f1e69b360d1516c7c1f9 -->

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
    -H "Authorization: Bearer {token}" \
    -d '{"Request":"voluptatem"}'

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

let body = {
    "Request": "voluptatem"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "overview": "Velit perferendis in et sit.",
            "description": "Voluptates sunt consectetur nemo excepturi ut et esse consectetur et voluptas sed reiciendis laborum.",
            "references": "Ut quo ullam at et.",
            "title": "Sapiente delectus quibusdam consequuntur et est delectus aliquid quia.",
            "state_id": 32889227677
        },
        {
            "overview": "Et atque error ab debitis.",
            "description": "Doloremque illum et porro sit nihil eius aliquid at quia minima error voluptatum.",
            "references": "Sed expedita et libero nesciunt.",
            "title": "Maiores voluptates libero facilis pariatur adipisci eos.",
            "state_id": 28683835724
        }
    ]
}
```

### HTTP Request
`GET api/search`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `Request` | $request |  optional  | 
    
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
            "name": "Fitness Hocası"
        },
        {
            "name": "Veteriner Hekim"
        }
    ]
}
```

### HTTP Request
`GET api/types`


<!-- END_3927d9858a98b64816c08b1fb902df4b -->


