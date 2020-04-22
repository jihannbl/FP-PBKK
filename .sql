CREATE TABLE users (
  id_user int IDENTITY(1,1) NOT NULL PRIMARY KEY,
  username varchar(100) NOT NULL,
  pwd  varchar(100) NOT NULL,
  tipe varchar(10) NOT NULL,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_at datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
)

CREATE TABLE cucian (
  id_cucian int IDENTITY(1,1) NOT NULL PRIMARY KEY,
  nama_cucian varchar(100) NOT NULL,
  kode_cucian varchar(20) NOT NULL,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_at datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
)

CREATE TABLE alat_berat (
  id_alatBerat int IDENTITY(1,1) NOT NULL PRIMARY KEY,
  nama_alatBerat varchar(100) NOT NULL,
  harga_alatBerat decimal(13,2) NOT NULL,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_at datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
)

CREATE TABLE pemakaian_alatberat (
  id_pemakaian int IDENTITY(1,1) NOT NULL PRIMARY KEY,
  id_alatBerat int NOT NULL FOREIGN KEY REFERENCES alat_berat(id_alatBerat),
  tanggal_mulai DATE NOT NULL,
  tanggal_selesai DATE NOT NULL,
  jam_pakai int NOT NULL,
  harga_pakai decimal(13,2) NOT NULL,	
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_at datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
)
