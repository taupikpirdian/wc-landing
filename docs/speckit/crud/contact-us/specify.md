# Speckit — Specify: CRUD Contact Us (Filament)

## 1. Purpose
Menyediakan fitur manajemen kontak pada panel admin menggunakan Filament. Admin dapat membuat, melihat, mengubah, dan menghapus data kontak, termasuk upload gambar.

---

## 2. Actors
- **Admin**: pengguna yang memiliki akses ke dashboard Filament.

---

## 3. Functional Requirements

### 3.1 List Kontak
- Admin dapat melihat daftar kontak dalam tabel.
- Kolom yang ditampilkan:
  - ID  
  - Mail  
  - Location  
  - Phone  
  - Mobile  
  - Created At  
- Fitur:
  - Search berdasarkan `title`
  - Sort by `created_at`
  - Pagination default Filament

---

### 3.2 Create Kontak
- Admin dapat menambahkan kontak baru.
- Field yang diisi:
  - **Mail** (required)
  - **Location** (optional)
  - **Phone** (optional)
  - **Mobile** (optional)
  - **Working Day Summary** (optional)
- Validasi:
  - Mail wajib
  - Location optional
  - Phone optional
  - Mobile optional
  - Working Day Summary optional
- Setelah submit, data tersimpan ke tabel `contact_us`.
- Input Multiple Data untuk Working Day:
  - Admin dapat menambahkan multiple working day dengan format:
    - Day (e.g., Monday, Tuesday)
    - Open Time (e.g., 09:00)
    - Close Time (e.g., 17:00)
    - Is Closed (true/false)

---

### 3.3 Edit Kontak
- Admin dapat mengubah:
  - Mail  
  - Location (optional)
  - Phone (optional)
  - Mobile (optional)
  - Working Day Summary (optional)

---

### 3.4 Delete Kontak
- Admin dapat menghapus kontak.
- Mendukung single delete dan bulk delete.

---

### 3.5 View Kontak Detail (Opsional)
- Menampilkan detail lengkap kontak.  
- Menggunakan Filament View Page.

---

## 4. Non-Functional Requirements

### 4.1 Performance
- Query harus efisien, minimal penggunaan eager load.

### 4.2 Security
- Akses hanya untuk user yang sudah login di panel Filament.
- Validasi input mengikuti standar Filament Forms.

### 4.3 UX/UI
- Menggunakan komponen standar Filament:
  - `TextInput`
  - `Textarea`
  - `FileUpload`

---

## 5. Data Structure Mapping

Table contact_us {
  id int [pk, increment] // auto-increment
  mail text
  location text
  phone varchar
  mobile varchar
  working_day_summary text
  latitude decimal(10, 8)
  longitude decimal(11, 8)
  created_at timestamp
  updated_at timestamp
}

Table working_times {
  id int [pk, increment]
  contact_us_id int
  day varchar(20)
  open_time time
  close_time time
  is_closed boolean 
  created_at timestamp
  updated_at timestamp
}

---

## 6. API / Events
CRUD dilakukan hanya melalui panel Filament.  
Tidak ada endpoint API tambahan.

---

## 7. Acceptance Criteria

### Create
- [ ] Dapat membuat layanan baru  
- [ ] Image Icon dan Image Cover berhasil di-upload ke folder `services/`  
- [ ] Validasi berjalan sesuai aturan  

### Edit
- [ ] Dapat mengubah Title, Label, dan Description  
- [ ] Dapat mengganti gambar  
- [ ] Gambar lama terhapus saat diganti  

### Delete
- [ ] Single delete & bulk delete berjalan  
- [ ] File gambar ikut terhapus  

### List
- [ ] Pagination berfungsi  
- [ ] Search by title berfungsi  
- [ ] Sort by created_at berfungsi  
- [ ] Image Icon dan Image Cover tampil  

---
