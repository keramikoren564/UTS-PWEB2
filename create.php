<!DOCTYPE html>
<html>

<head>
    <title>Create</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Add Bootstrap JavaScript and jQuery for interactive components -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .profile-picture {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .form-container {
            background-color: white;
            max-width: 1750px;
            margin: 0 auto;
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        
    </style>
</head>

<body class="bg-dark-subtle">

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
              <a class="navbar-brand" href="dashboard.php">
                  <img src="hakim.jpg" alt="Profile Picture" class="profile-picture">
                  22.01.4825 | Bimo Hakim P.S
              </a>
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="create.php">Create</a></li>
                  <li class="nav-item"><a class="nav-link" href="list.php">List</a></li>
                  <li class="nav-item"><a class="nav-link" href="logout.php"><strong>Logout</a></li></strong>
              </ul>
          </div>
    </nav>
    
</header>

        <main class="container align-items-center justify-content-center d-flex mt-2">
            <div class="d-flex align-items-center justify-content-center">
            <form action="php/createrps.php" method="POST" class="form-container p-5 rounded shadow">
                    <h5 class="px-2 pt-2 fw-bold text-center">BUAT RPS BARU</h5>
                    <div class="d-flex flex-row">
                        <div class="form-group p-2">
                            <label for="matkul" class="form-label">Mata Kuliah</label>
                            <input type="text" name="matkul" id="matkul" class="form-control mb-2" placeholder="masukkan nama matkul">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control mb-2" placeholder="masukkan deskripsi">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                    <label for="materi1" class="form-label">Pertemuan 1</label>
                                    <input type="text" name="materi1" id="materi1" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi2" class="form-label">Pertemuan 2</label>
                                    <input type="text" name="materi2" id="materi2" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi3" class="form-label">Pertemuan 3</label>
                                    <input type="text" name="materi3" id="materi3" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi4" class="form-label">Pertemuan 4</label>
                                    <input type="text" name="materi4" id="materi4" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi5" class="form-label">Pertemuan 5</label>
                                    <input type="text" name="materi5" id="materi5" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi6" class="form-label">Pertemuan 6</label>
                                    <input type="text" name="materi6" id="materi6" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi7" class="form-label">Pertemuan 7</label>
                                    <input type="text" name="materi7" id="materi7" class="form-control mb-2" placeholder="masukkan judul materi">
                                    </div>
                                    <div class="col">
                                    <label for="materi8" class="form-label">Pertemuan 8</label>
                                    <input type="text" name="materi8" id="materi8" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi9" class="form-label">Pertemuan 9</label>
                                    <input type="text" name="materi9" id="materi9" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi10" class="form-label">Pertemuan 10</label>
                                    <input type="text" name="materi10" id="materi10" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi11" class="form-label">Pertemuan 11</label>
                                    <input type="text" name="materi11" id="materi11" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi12" class="form-label">Pertemuan 12</label>
                                    <input type="text" name="materi12" id="materi12" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi13" class="form-label">Pertemuan 13</label>
                                    <input type="text" name="materi13" id="materi13" class="form-control mb-2" placeholder="masukkan judul materi">
                                    <label for="materi14" class="form-label">Pertemuan 14</label>
                                    <input type="text" name="materi14" id="materi14" class="form-control mb-2" placeholder="masukkan judul materi">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <button name="daftar" type="submit" class="btn btn-primary">SUBMIT</i></button>
                    <a href="dashboard.php" class="btn btn-secondary">KEMBALI</a>
                </form>
            </div>
        </main>

</body>

</html>
