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
                            <a class="nav-link" href="FormUser.php"> <span class="glyphicon glyphicon-user"></span>User</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">Information</a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="../Song/ViewSong.php">Song</a>
                                <a class="dropdown-item" href="../Singer/SingerView.php">Singer</a>
                                <a class="dropdown-item" href="../Genre/GenreView.php">Genre </a>
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
                    <td>UserID</td>
                    <td>UserName</td>
                    <td>Password</td>
                    <td>FullName</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>DateOfBirth</td>
                    <td>BankCartCode</td>
                    <td>Role</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            <?php
                $connect = mysqli_connect('localhost','root','','Websitemusic');
                if (!$connect){
                  echo "ket noi that bai";
                  }
                  $sql ="select * from user";
                    $query=mysqli_query($connect,"select * from user");
                while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><?php echo $row['UserID']; ?></td>
            <td><?php echo $row['UserName']; ?></td>
            <td><?php echo $row['Password']; ?></td>
            <td><?php echo $row['FullName']; ?></td>
            <td><?php echo $row['Phone']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['DateOfBirth']; ?></td>
            <td><?php echo $row['BankCartCode']; ?></td>
            <td><?php echo $row['Role_1']; ?></td>
            <td><button type="button" class="btn btn-outline-success" ><a href="FormEdit.php?id=<?php echo $row['UserID']; ?>">Edit</a></button></td>
            <td><button type="button" class="btn btn-outline-warning"><a href="FormDelete.php?id=<?php echo $row['UserID']; ?>">Delete</a></button></td>
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