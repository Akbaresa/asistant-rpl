# specification Praktikan API 

## Tambah Praktikan
### Endpoint
- Method: POST
- Path: /api/praktikan

Request Headers 
- Cookie : guard ('praktikan') [Mandatory]

constraint :
- `npm -> unique, tanpa titik` 
- `email -> unique, akhiran @gmail.com`
- `no_wa -> unique, maks 12` 
#### Request Body :
```json
{
    "nama" : "John Doe",
    "npm" : "062021107462",
    "email": "johndoe@gmail.com",
    "password" : "12345",
    "no_wa" : "08127",
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
  "message" : "gagal menambahkan praktikan",
  "errors" : "{constraint}", jika constraint tidak terpenuhi masukkan pesan di dalam key errors
}
```

## Edit Praktikan
### Endpoint
- Method: PATCH
- Path: /api/praktikan

#### Request Headers 
- Cookie : guard ('praktikan') [Mandatory]

#### Request Param key : 
- id_praktikan : {id_praktikan}
constraint :
- `hanya key yang diganti yang akan diedit`
- `npm -> unique, tanpa titik` 
- `email -> unique, akhiran @gmail.com`
- `no_wa -> unique, maks 12` 

#### Request Body :
```json
{
    "nama" : "John Doe",
    "npm" : "062021107462",
    // "email": "johndoe@gmail.com",
    // "password" : "12345",
    // "no_wa" : "08127",
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
  "message" : "gagal menambahkan praktikan",
  "errors" : "{constraint}", jika constraint tidak terpenuhi masukkan pesan di dalam key errors
}
```

## HAPUS praktikan
#### Endpoint
- Method: DELETE
- Path: /api/praktikan

##### Request Headers 
- Cookie : guard ('admin') [Mandatory]

#### Request Param key : 
- id_praktikan : {id_praktikan}

#### Response Body (Succes , 200): 
```json
{
  "message" : "berhasil"
}
```
#### Response Body (Failed, 400/...): 
```json
{
  "message" : "gagal menghapus praktikan",
  "errors" : "id praktikan tidak ditemukan",
}
```


