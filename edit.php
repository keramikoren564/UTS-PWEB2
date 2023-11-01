<!DOCTYPE html>
<html>

<head>
    <title>MENGEDIT</title>

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
            max-width: 400px;
            margin: 0 auto;
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

    <main class="container mt-5">
        <h1>EDIT DATA</h1>

        <?php
        include('php/dbconfig.php');

        if (isset($_GET['matkul'])) {
            $matkul = $_GET['matkul'];

            $sql = "SELECT * FROM matkuldb WHERE matkul = '$matkul'";
            $result = mysqli_query($connect, $sql);

            if ($result && $row = mysqli_fetch_assoc($result)) {
                $record_id = $row['matkul'];
            } else {
                echo "Record not found.";
            }
        }
        ?>

        <form action="php/edform.php" method="POST">
            <input type="hidden" name="matkul" value="<?php echo $record_id; ?>">
            <div class="mb-3">
                <label for="new_matkul" class="form-label">matkul</label>
                <input type="text" name="new_matkul" class="form-control" value="<?php echo $record_id; ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $row['deskripsi']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi1" class="form-label">materi1</label>
                <input type="text" name="materi1" class="form-control" value="<?php echo $row['materi1']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi2" class="form-label">materi2</label>
                <input type="text" name="materi2" class="form-control" value="<?php echo $row['materi2']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi3" class="form-label">materi3</label>
                <input type="text" name="materi3" class="form-control" value="<?php echo $row['materi3']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi4" class="form-label">materi4</label>
                <input type="text" name="materi4" class="form-control" value="<?php echo $row['materi4']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi5" class="form-label">materi5</label>
                <input type="text" name="materi5" class="form-control" value="<?php echo $row['materi5']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi6" class="form-label">materi6</label>
                <input type="text" name="materi6" class="form-control" value="<?php echo $row['materi6']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi7" class="form-label">materi7</label>
                <input type="text" name="materi7" class="form-control" value="<?php echo $row['materi7']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi8" class="form-label">materi8</label>
                <input type="text" name="materi8" class="form-control" value="<?php echo $row['materi8']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi9" class="form-label">materi9</label>
                <input type="text" name="materi9" class="form-control" value="<?php echo $row['materi9']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi10" class="form-label">materi10</label>
                <input type="text" name="materi10" class="form-control" value="<?php echo $row['materi10']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi11" class="form-label">materi11</label>
                <input type="text" name="materi11" class="form-control" value="<?php echo $row['materi11']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi12" class="form-label">materi12</label>
                <input type="text" name="materi12" class="form-control" value="<?php echo $row['materi12']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi13" class="form-label">materi13</label>
                <input type="text" name="materi13" class="form-control" value="<?php echo $row['materi13']; ?>">
            </div>
            <div class="mb-3">
                <label for="materi14" class="form-label">materi14</label>
                <input type="text" name="materi14" class="form-control" value="<?php echo $row['materi14']; ?>">
            </div>
            <button name="update" type="submit" class="btn btn-primary">SUBMIT</i></button>
        </form>
        </div>
    </main>

</body>

</html>
