<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>


    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    ?>
    <div class="container-fluid">
        <h1 class="display-4 text-center mt-1">Edit Buku <?php echo $id ?></h1>
    </div>
    <br><br>
    <form class="mr-2 ml-2" action="terima-edit.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
        <?php
        $query = mysqli_query($connect, "SELECT * FROM buku1 WHERE id='$id'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <div class="form-group">
                <label for="exampleFormControlInput1">Judul Buku</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="<?php echo $data['judul'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">ISBN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="isbn" value="<?php echo $data['isbn'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Penulis</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="penulis" value="<?php echo $data['penulis'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Penerbit</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="penerbit" value="<?php echo $data['penerbit'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Tahun Terbit</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="tahun" value="<?php echo $data['tahun'] ?>">
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary">Simpan</button>

    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>