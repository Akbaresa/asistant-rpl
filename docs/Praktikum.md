# Specification Praktikum API 


## Tambah Praktikum
#### Endpoint
- Method: POST
- Path: /api/praktikum

Request Headers 
- Cookie : guard ('admin') [Mandatory]

constraint :
- `id_jenis_praktikum : foreign key, diambil dari table jenis_praktikum` 
#### Request Body :
```json
{
    "tahun" : "2024/2025",
    "id_jenis_praktikum" : 9001,
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
  "message" : "gagal menambahkan praktikum",
  "errors" : "{constraint}", jika constraint tidak terpenuhi masukkan pesan di dalam key errors
}
```

## Edit Praktikum
#### Endpoint
- Method: PUT
- Path: /api/praktikum

Request Headers 
- Cookie : guard ('admin') [Mandatory]

Request Param :
- id_praktikum : {id_praktikum}

constraint :
- `id_jenis_praktikum : foreign key, diambil dari table jenis_praktikum` 
#### Request Body :
```json
{
    "tahun" : "2024/2025",
    "id_jenis_praktikum" : 062021107462,
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
  "message" : "gagal mengedit praktikum",
  "errors" : "{constraint}", jika constraint tidak terpenuhi masukkan pesan di dalam key errors
}
```

## Hapus Praktikum
#### Endpoint
- Method: DELETE
- Path: /api/praktikum

Request Headers 
- Cookie : guard ('admin') [Mandatory]

Request Param :
- id_praktikum : {id_praktikum}

#### Response Body (Succes , 200): 
```json
{
  "message" : "berhasil"
}
```
#### Response Body (Failed, 400/...): 
```json
{
  "message" : "gagal menghapus praktikum",
  "errors" : "praktikum tidak ditemukan", jika constraint tidak terpenuhi masukkan pesan di dalam key errors
}
```