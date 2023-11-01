<!DOCTYPE html>
<html>

<head>
    <title>List</title>

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

        .card-container {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 50px;
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

    <main>
        <div class="card container-fluid p-4 card-container">
            <h5 class="px-2 pt-2 pb-2 fw-bold">BERIKUT ISI DARI LIST DATA: </h5>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('php/dbconfig.php');

                    // Fetch data from the database
                    $sql = "SELECT * FROM matkuldb";
                    $result = mysqli_query($connect, $sql);
                    $nomor = 1;

                    if (!$result) {
                        die("Query failed: " . mysqli_error($connect));
                    }

                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $row['matkul']; ?></td>
                            <td><?php echo $row['deskripsi']; ?></td>

                            <td>
                                <a href='edit.php?matkul=<?php echo $row['matkul']; ?>' class='btn btn-primary'>Edit</a>
                                <a href='php/delform.php?matkul=<?php echo $row['matkul']; ?>' class='btn btn-danger'>Delete</a>
                                <a href='view.php?matkul=<?php echo $row['matkul']; ?>' class='btn btn-success'>VIEW</a>
                            </td>
                        </tr>
                    <?php
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-secondary">KEMBALI</a>
        </div>
    </main>

</body>

</html>
