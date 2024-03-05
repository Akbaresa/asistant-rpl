# specification Register Praktikan API 

## Register Praktikan
### Endpoint
- Method: POST
- Path: /api/RegisterPraktikan

Request Headers 
- Cookie : guard ('praktikan') [Mandatory]

constraint :
- `tambahkan ke dalam table registrasi_praktikum`
- `id_aslab -> null` 
- `status_verifikasi -> null`
- `id_praktikum = value id_praktikum yang dipilih, ambil dari table praktikum yang status_pendaftaran = aktif`
#### Request Body :
```json
{
    "id_praktikan" : 900212,
    "id_praktikum" : 21029,
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
  "message" : "gagal menambahkan registrasi",
  "errors" : "{constraint}", jika constraint tidak terpenuhi masukkan pesan di dalam key errors
}
```

## Verifikasi Praktikan
### Endpoint
- Method: PATCH
- Path: /api/RegisterPraktikan

Request Headers 
- Cookie : guard ('admin') [Mandatory]

#### Request Param key : 
- id_praktikan : {id_praktikan}

constraint :
- `id_aslab adalah aslab praktikan saat menjalani praktikum`
#### Request Body :
```json
{
    "status_aktif" : "aktif",
    "id_aslab" : 21029,
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
  "message" : "gagal verifikasi praktikan",
  "errors" : "{constraint}", jika constraint tidak terpenuhi masukkan pesan di dalam key errors
}
```