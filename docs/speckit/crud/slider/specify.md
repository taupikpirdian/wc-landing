# Speckit — Specify: CRUD Sliders (Filament)

## 1. Purpose
Menyediakan fitur manajemen slider pada panel admin menggunakan Filament. Admin dapat membuat, melihat, mengubah, dan menghapus data slider, termasuk upload gambar.

---

## 2. Actors
- **Admin**: pengguna yang memiliki akses ke dashboard Filament.

---

## 3. Functional Requirements

### 3.1 List Sliders
- Admin dapat melihat daftar slider dalam tabel.
- Kolom yang ditampilkan:
  - ID  
  - Title  
  - Description (truncated)  
  - Image (thumbnail)  
  - Created At  
- Fitur:
  - Search berdasarkan `title`
  - Sort by `created_at`
  - Pagination default Filament

---

### 3.2 Create Slider
- Admin dapat menambahkan slider baru.
- Field yang diisi:
  - **Title** (required)
  - **Description** (optional)
  - **Image** (required, upload → stored under `sliders/`)
- Validasi:
  - Title wajib
  - Image wajib dan harus berupa file jpeg/png
  - Ukuran maksimal 2MB
- Setelah submit, data tersimpan ke tabel `sliders`.

---

### 3.3 Edit Slider
- Admin dapat mengubah:
  - Title  
  - Description  
  - Image (opsional untuk diganti)
- Jika image diganti:
  - File lama dihapus
  - File baru disimpan

---

### 3.4 Delete Slider
- Admin dapat menghapus slider.
- Mendukung single delete dan bulk delete.
- Ketika data dihapus:
  - File gambar terkait ikut dihapus dari storage.

---

### 3.5 View Slider Detail (Opsional)
- Menampilkan detail lengkap slider.
- Menggunakan Filament View Page.

---

## 4. Non-Functional Requirements

### 4.1 Performance
- Query harus efisien, minimal penggunaan eager load.
- Upload file menggunakan storage default (`public`).
- Compress image sebelum disimpan.

### 4.2 Security
- Akses hanya untuk user yang sudah login di panel Filament.
- Validasi input mengikuti standar Filament Forms.

### 4.3 UX/UI
- Menggunakan komponen standar Filament:
  - `TextInput`
  - `Textarea`
  - `FileUpload`
- Preview gambar muncul pada list dan detail page.

---

## 5. Data Structure Mapping

| Table Column | Form Field | Notes |
|--------------|------------|-------|
| id | auto | handled by DB |
| title | TextInput | required |
| desc | Textarea | optional |
| image | FileUpload | required on create |
| created_at | auto | otomatis |
| updated_at | auto | otomatis |

---

## 6. API / Events
CRUD dilakukan hanya melalui panel Filament.  
Tidak ada endpoint API tambahan.

---

## 7. Acceptance Criteria

### Create
- [ ] Dapat membuat slider baru  
- [ ] Image berhasil di-upload ke folder `sliders/`  
- [ ] Validasi berjalan sesuai aturan  

### Edit
- [ ] Dapat mengubah Title dan Description  
- [ ] Dapat mengganti gambar  
- [ ] Gambar lama terhapus saat diganti  

### Delete
- [ ] Single delete & bulk delete berjalan  
- [ ] File gambar ikut terhapus  

### List
- [ ] Pagination berfungsi  
- [ ] Search by title berfungsi  
- [ ] Sort by created_at berfungsi  
- [ ] Thumbnail image tampil  

---
