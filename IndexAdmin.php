<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/33a12d68d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Demowebsite(1)/Vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/Vendors/css/style.css">
	  <link rel="stylesheet" type="text/css" href="/Resources/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">

    <style>
        *{
	margin: 0;
	padding: 0;
}

/*xử lý menu*/
.dropdown{
	position: relative;
	display: inline-block;
}
.dropdown-content{
	display: none;
	position: absolute;
	z-index: 1;
	background-color: #f5f5f5;
}
.dropdown:hover .dropdown-content{
	display: block;
}
/*list product*/
.list-product-title{
	width: 100%;
	text-transform: uppercase;
	margin-left: 5px;
	margin-right: 5px;

}
.list-product-subtitle{
	width: 100%;
	margin-left: 5px;
	margin-right: 5px;
}

/*product card*/
.card-product{
	width: 100%;
	margin-left: 5px;
	margin-right: 5px;
	overflow: hidden;	
}

    </style>
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="IndexAdmin.php">Music Color</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="IndexAdmin.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Resources/Data/Admin/FormUser.php"> <span class="glyphicon glyphicon-user"></span>User</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">Information</a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="Resources/Data/Song/ViewSong.php">Song</a>
                                <a class="dropdown-item" href="Resources/Data/Singer/SingerView.php">Singer</a>
                                <a class="dropdown-item" href="Resources/Data/Genre/GenreView.php">Genre </a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="get" action="/Resources/Data/Song/Search.php" enctype="multipart/form-data">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <a href="Index.php"><button class="btn btn-outline-dark my-2 my-sm-0" type="submit" >LogOut</button></a>
                </div>
            </div>
          </nav>
                    
    </header>
    <section>
          <div class="container">
            <div class="row mt-5">
                <?php
                $connect = mysqli_connect('localhost','root','','Websitemusic');
                if (!$connect){
                  echo "ket noi that bai";
                  }
                  $sql ="select * from song";
                    $query=mysqli_query($connect,"select * from song");
                    while($row_pro=mysqli_fetch_array($query)){
                    $SongID = $row_pro['SongID'];
                    $SongName = $row_pro['SongName'];
                    $SongImg = $row_pro['SongImg'];
                    $Price = $row_pro['Price'];
                    $SingerID = $row_pro['SingerID'];
                    $Mp3 = $row_pro['Mp3'];
                    echo"
                    <div class='col-md-3 col-sm-6 col-12'>
                    <div class='card card-product mb-3'>
                    <div id='song'>
                    <h2>$SongName</h2>
                    <img src='../img/$SongImg' width='250' height='250' alt='Hinh Anh'/>
                    <p><b>Price: $Price </b> VND</p>
                    <audio id='audio_1' style='width: 247px'controls controlsList='nodownload' ><source src='../Song/$Mp3' type='audio/mpeg' >
                    </audio>
                    <a href='Resources/Data/Song/Edit_1.php?id=$SongID'>
                    <button style='float:' type='button' class='btn btn-info'>
                    Edit
                    </button>
                    </a>
                    <a href='Resources/Data/Song/DeleteSong.php?id=$SongID'>
                     <button style='float:' type='button' class='btn btn-warning'>Delete</button>
                    </a>
                    </div>
                    </div>
                    </div>
                    ";
                  }
                ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="/Vendors/css/style.css"></script>
        <script src="/Vendors/js/jquery-3.3.1.min.js"></script>
    </section>
    <footer>
    </footer>
</body>
</html>