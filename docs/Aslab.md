# specification ASLAB API 

## Tambah ASLAB
#### Endpoint
- Method: POST
- Path: /api/aslab

Request Headers 
- Cookie : guard ('admin') [Mandatory]

constraint :
- `npm -> unique, tanpa titik` 
- `email -> unique, akhiran @gmail.com`
- `no_wa -> unique, maks 12` 
- `id_role_aslab -> foreign key`
#### Request Body :
```json
{
    "nama" : "John Doe",
    "npm" : "062021107462",
    "email": "johndoe@gmail.com",
    "password" : "12345",
    "no_wa" : "08127",
    "status_aktif" : "aktif",
    "id_role_aslab" : 9002, 
}
```

#### Response Body (Succes , 200): 
```json
{
  "message" : "berhasil"
}
```
#### Response Body (Failed, 400/...): 
```json
{
  "message" : "gagal menambahkan aslab",
  "errors" : "{constraint}", jika constraint tidak terpenuhi masukkan pesan di dalam key errors
}
```


## Edit ASLAB
#### Endpoint
- Method: PATCH
- Path: /api/aslab

#### Request Param key : 
- id_aslab : {id_aslab}

#### Request Headers 
- Cookie : guard ('admin') [Mandatory]

constraint :
- `hanya key yang diisi yang akan diedit`
- `npm -> unique, tanpa titik` 
- `email -> unique, akhiran @gmail.com`
- `no_wa -> unique, maks 12` 
- `id_role_aslab -> foreign key`

#### Request Body :
```json
{
    "nama" : "John Doe",
    "npm" : "062021107462",
    "email": "johndoe@gmail.com",
    // "password" : "12345",
    // "no_wa" : "08127",
    // "status_aktif" : "aktif",
    // "id_role_aslab" : 9002, 
}
```

#### Response Body (Succes , 200): 
```json
{
  "message" : "berhasil"
}
```
#### Response Body (Failed, 400/...): 
```json
{
  "message" : "gagal mengedit aslab",
  "errors" : "{constraint}", jika constraint tidak terpenuhi masukkan pesan di dalam key errors
}
```

## HAPUS ASLAB
#### Endpoint
- Method: DELETE
- Path: /api/aslab

##### Request Headers 
- Cookie : guard ('admin') [Mandatory]

#### Request Param key : 
- id_aslab : {id_aslab}

#### Response Body (Succes , 200): 
```json
{
  "message" : "berhasil"
}
```
#### Response Body (Failed, 400/...): 
```json
{
  "message" : "gagal menghapus aslab",
  "errors" : "id aslab tidak ditemukan",
}
```
