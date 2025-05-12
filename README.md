**📘 API Documentation for DigiLearn**

---

### 🔹 Users

#### `GET /api/users`

* **Description**: Retrieve all users.
* **Response**: 200 OK

#### `GET /api/users/{id}`

* **Description**: Get a specific user.
* **Response**: 200 OK

#### `POST /api/users`

* **Description**: Create a new user.
* **Request Body**:

```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "secret",
  "role": "dosen"
}
```

* **Response**: 201 Created

#### `PUT /api/users/{id}`

* **Description**: Update a user.
* **Request Body**: Same as POST
* **Response**: 200 OK

#### `DELETE /api/users/{id}`

* **Description**: Delete a user.
* **Response**: 200 OK

---

### 🔹 Mata Kuliah

#### `GET /api/mata-kuliah`

* **Description**: Get all mata kuliah.

#### `GET /api/mata-kuliah/{id}`

* **Description**: Get a mata kuliah by ID.

#### `POST /api/mata-kuliah`

* **Request Body**:

```json
{
  "nama": "Pemrograman Web",
  "deskripsi": "Belajar Laravel",
  "video_link": "https://youtube.com/...",
  "dosen_id": 1
}
```

#### `PUT /api/mata-kuliah/{id}`

* **Request Body**: Same as POST

#### `DELETE /api/mata-kuliah/{id}`

---

### 🔹 Pemberitahuan

#### `GET /api/pemberitahuan`

#### `GET /api/pemberitahuan/{id}`

#### `POST /api/pemberitahuan`

```json
{
  "mata_kuliah_id": 1,
  "isi": "Jangan lupa quiz besok"
}
```

#### `PUT /api/pemberitahuan/{id}`

#### `DELETE /api/pemberitahuan/{id}`

---

### 🔹 Materi & Tugas

#### `GET /api/materi-tugas`

#### `GET /api/materi-tugas/{id}`

#### `POST /api/materi-tugas`

```json
{
  "mata_kuliah_id": 1,
  "tipe": "materi",
  "judul": "Intro to PHP",
  "deskripsi": "Materi dasar PHP"
}
```

#### `PUT /api/materi-tugas/{id}`

#### `DELETE /api/materi-tugas/{id}`

---

### 🔹 Nilai

#### `GET /api/nilai`

#### `GET /api/nilai/{id}`

#### `POST /api/nilai`

```json
{
  "tugas_id": 2,
  "mahasiswa_id": 5,
  "nilai": 87.5
}
```

#### `PUT /api/nilai/{id}`

#### `DELETE /api/nilai/{id}`

---

### 🔹 Enroll

#### `GET /api/enroll`

#### `GET /api/enroll/{id}`

#### `POST /api/enroll`

```json
{
  "user_id": 5,
  "mata_kuliah_id": 1
}
```

#### `PUT /api/enroll/{id}`

#### `DELETE /api/enroll/{id}`
