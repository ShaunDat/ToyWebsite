<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/33a12d68d3.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <Style>
.a{
    background-color: #ffff;
}
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

    </Style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="../../../IndexAdmin.php">Music Color</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../../../IndexAdmin.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Admin/FormUser.php"> <span class="glyphicon glyphicon-user"></span>User</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">Information</a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="ViewSong.php">Song</a>
                                <a class="dropdown-item" href="../Singer/SingerView.php">Singer</a>
                                <a class="dropdown-item" href="../Genre/GenreView.php">Genre </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="AddSong.php">Add Song </a>
                            </div>
                        </li>
                    </ul>
                    <form action=""> 
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" >LogOut</button>
                    </form>
                </div>
            </div>
          </nav>
          
    </header>
    <section>
    <table border="1">
                <tr>
                    <td>SongID</td>
                    <td>SongName</td>
                    <td>SongImg</td>
                    <td>SongLyric</td>
                    <td>Price</td>
                    <td>Mp3</td>
                    <td>SingerID</td>
                    <td>GenreID</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            <?php
                $connect = mysqli_connect('localhost','root','','Websitemusic');
                if (!$connect){
                  echo "ket noi that bai";
                  }
                  $sql ="select * from song";
                    $query=mysqli_query($connect,"select * from song");
                while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><?php echo $row['SongID']; ?></td>
            <td><?php echo $row['SongName']; ?></td>
            <td><?php echo $row['SongImg']; ?></td>
            <td><?php echo $row['SongLyric']; ?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><?php echo $row['Mp3']; ?></td>
            <td><?php echo $row['SingerID']; ?></td>
            <td><?php echo $row['GenreID']; ?></td>
            <td><button type="button" class="btn btn-outline-success" ><a href="Edit_1.php?id=<?php echo $row['SongID']; ?>">Edit</a></button></td>
            <td><button type="button" class="btn btn-outline-warning"><a href="DeleteSong.php?id=<?php echo $row['SongID']; ?>">Delete</a></button></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <script src="/Vendors/css/style.css"></script>
        <script src="/Vendors/js/jquery-3.3.1.min.js"></script>
    </section>
    <footer>
    </footer>
</body>
</html>