



# API GUATEMALA.COM

API Guatemala.com es un api que te permite visualizar las promociones disponibles: 

Pasos para hacerlo funcionar 
- Instalar Composer 
- Montar el proyecto laravel en tu servidor preferido (puedes usar Xampp, Wamp o Lamp). 
- Crear una base de datos (esquema) en mysql con el nombre `guatemala`
- Agrega los datos de tu configuracion en el archivo .env
- Ejecutar las migraciones `php artisan migrate --seed`
- Instalar PassPort `php artisan passport:install`
- Ejecutar `php artisan ui vue --auth`
- Ejecutar `npm install && npm run dev` (debemos tener instalado node.js)
- Ejecutar `php artisan serve`


###Login

POST: `http://127.0.0.1:8000/api/login`

user: api@guatemala.com

password: api

`{
   "user_id": 1,
   "user_name": "guate",
   "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYTQzMjRlODc1YzJmOGNjZGVhYzYzNTgzMjAyZGEzNWYxOTY0ZDNjMTYzMGU4MTcxODVhNWNmNjQ3MTVlMDY3ZTA2MTU2MzZlZjZmYjRmMmQiLCJpYXQiOjE1OTUxMDE3NjgsIm5iZiI6MTU5NTEwMTc2OCwiZXhwIjoxNjI2NjM3NzY4LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.DG6UaP96hNiinfqb4cuL9keWH3aZsnXghJ4UnPgPOBWwDk_V4CclBV7kpkiyhEElJH02tRFaHtQhhCUzteyvzIcuM4GEr2C0fUYmdHvjzNWSzvIo5KVfuEngr833-mT72-22kNwKD65JpFltbnK-pzwWWwzljNUWdUim7q5kJJPqRvy8BRFFH_xd-OmI2FQNtGuBjet65T7Nc3CZ1lkWf49hbksY9jKx_f7_CHyB_fu41VDjR9krG46DJmU1bBYMcIEky_MvNweKLlHG23T38GvipoPWeyOrWZFPIb9LkhJ7n460JzRIIrI2U5WG2NWhfdnN5es8q6-3hJcN3HyNM-M5NpEgzNHRqV3hV-0f4utCb4talzNqeG3RWv9ZZ2JRlYxJo7T5svnuJFl-3gNupPWLtZRFQPXNAYP3OW2K6n1kLVfYQQOfQAYSJteefTdRM-XsjUTQZqXw3d4W9m_0HMH7z2aNdi5unkf21-OFZpMA5dJEq45Lcmj9XEfLts1zUFDIrTbRFqWftqvsSt5QXMtVoyWWs6H0X1LNyiR-GuaLj1Id4vHkaf2wZyuLwVakV3oZ-UpPVB5rum0o91Lp40I6gvv54goAWSZpoRlO4k5fgYHUlPgMPErMj3lUtiHfVHMG34QFz0PY5LTp-3kMDIm8VX3Y6ECBjDfvPixMfxk",
   "token_type": "Bearer",
   "expires_at": "2020-07-25 19:49:28"
 }`

###Promociones

GET: `http://127.0.0.1:8000/api/promotion/list?page=1&length=2`

Header:

- Authorization: Bearer {access_token}

por ejemplo = Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYTQzMjRlODc1YzJmOGNjZGVhYzYzNTgzMjAyZGEzNWYxOTY0ZDNjMTYzMGU4MTcxODVhNWNmNjQ3MTVlMDY3ZTA2MTU2MzZlZjZmYjRmMmQiLCJpYXQiOjE1OTUxMDE3NjgsIm5iZiI6MTU5NTEwMTc2OCwiZXhwIjoxNjI2NjM3NzY4LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.DG6UaP96hNiinfqb4cuL9keWH3aZsnXghJ4UnPgPOBWwDk_V4CclBV7kpkiyhEElJH02tRFaHtQhhCUzteyvzIcuM4GEr2C0fUYmdHvjzNWSzvIo5KVfuEngr833-mT72-22kNwKD65JpFltbnK-pzwWWwzljNUWdUim7q5kJJPqRvy8BRFFH_xd-OmI2FQNtGuBjet65T7Nc3CZ1lkWf49hbksY9jKx_f7_CHyB_fu41VDjR9krG46DJmU1bBYMcIEky_MvNweKLlHG23T38GvipoPWeyOrWZFPIb9LkhJ7n460JzRIIrI2U5WG2NWhfdnN5es8q6-3hJcN3HyNM-M5NpEgzNHRqV3hV-0f4utCb4talzNqeG3RWv9ZZ2JRlYxJo7T5svnuJFl-3gNupPWLtZRFQPXNAYP3OW2K6n1kLVfYQQOfQAYSJteefTdRM-XsjUTQZqXw3d4W9m_0HMH7z2aNdi5unkf21-OFZpMA5dJEq45Lcmj9XEfLts1zUFDIrTbRFqWftqvsSt5QXMtVoyWWs6H0X1LNyiR-GuaLj1Id4vHkaf2wZyuLwVakV3oZ-UpPVB5rum0o91Lp40I6gvv54goAWSZpoRlO4k5fgYHUlPgMPErMj3lUtiHfVHMG34QFz0PY5LTp-3kMDIm8VX3Y6ECBjDfvPixMfxk


Parametros: 
- page: el número de pagina a cargar. 
- length: la cantidad de elementos a mostrar por paginas. 

Response:

`{
   "total_elements": 1000,
   "total_filtered": 2,
   "data": [
     {
       "id": 1,
       "title": "Lucky Break",
       "price": 22,
       "address": "708 Moland Drive",
       "latitude": 25.63273,
       "longitude": 118.980277,
       "created_at": "3\/27\/2020",
       "updated_at": "11\/28\/2019"
     },
     {
       "id": 2,
       "title": "Scenesters, The",
       "price": 12,
       "address": "9 Spenser Place",
       "latitude": 34.1926332,
       "longitude": 131.9199103,
       "created_at": "9\/5\/2019",
       "updated_at": "5\/10\/2020"
     }
   ]
 }`
 
 ###Promocion
 Para poder acceder a una promoción en especifico: 
 
 GET: `http://127.0.0.1:8000/api/promotion/{id}`
 
 Header:
 
 - Authorization: Bearer {access_token}
 
 Parametros: 
 - id: el número de id de la promoción. 
 
 Response:


`{
   "id": 1,
   "title": "Lucky Break",
   "price": 22,
   "address": "708 Moland Drive",
   "latitude": 25.63273,
   "longitude": 118.980277,
   "created_at": "3\/27\/2020",
   "updated_at": "11\/28\/2019"
 }`







