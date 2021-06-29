<!DOCTYPE html>
<html lang="en">

<head>
<script data-ad-client="ca-pub-4802060218454967" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Giỏ hàng</title>
       <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../Index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../Index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <?php
    include 'connect.php';
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = $connect->query("SELECT * FROM song,genremusic,singer where SongID='$id' and song.GenreID=genremusic.GenreID and song.SingerId=singer.SingerID");
        $product = $result->fetch_array();
        $item = [
            'id' => $product['SongID'],
            'name' => $product['SongName'],
            'price' => $product['Price'],
            'image' => $product['SongImg'],
            'Genre'=>$product['GenreName'],
            'Singer'=>$product['SingerName'],
            'Mpmusic'=>$product['Mp3'],
        ];
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['thishere']="<3";
        } else {
            $_SESSION['cart'][$id] = $item;
        }
    }
    $cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
    ?>
    <div class="container bg-success">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Singer</th>
                            <th>Genre</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sum=0;
                        foreach ($cart as $key => $value) {
                           $value1=$value['name'];
                           $value2=$value['price'];
                           $value3=$value['image'];
                           $value4=$value['Genre'];
                           $value5=$value['Singer'];
                           $idsong=$value['id'];
                            echo "<tr>";
                            echo "<td>$value1</td><td>$value2</td><td>$value5</td><td>$value4</td><td><img style='height:70px;width:120px' src='../img/$value3' /></td><td><a href='./delete.php?xoa=$idsong' class='btn btn-primary'>Delete</a></td>";
                            echo "</tr>";
                            $sum+=$value2;
                            if (isset($_POST['submit'])) {
                                echo("<script>window.location.href='thanhtoan.php'</script>");
                          }
                        } ?>
                    </tbody>

                </table>
            </div>

            <div class="col-lg-12">
                <form action="thanhtoan.php" method="POST">
                    
                    <div class="form-group">
                        <label for="">Tổng tiền :<?php echo($sum); ?> </label>
                    </div>
                    <input class='btn btn-warning form-control' type="submit" value="Buy" name="submit">
                </form>
            </div>
        </div>
    </div>
    <?php
   

    ?>
</body>

</html>