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
/* Section */
:root{
    --bg1:#34ace0;
    --bg2:#33d9b2;
    --text:#ffda79;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
}
.ContainerSection{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100vw;
    height: 100vh;
    background: linear-gradient(to bottom right, var(--bg1), var(--bg2) );
}
.form-signup{
    width: 300px;
    height: 500px;
    background:#fff;
    border-radius: 10px;
    padding: 40px 30px;
}
.form-signup h1{
    margin-bottom: 45px;
}
.form-signup button{
    height: 35px;
    width: 100%;
    margin-bottom: 30px;
    background: linear-gradient(to bottom right, var(--bg1), var(--bg2) );
    border: none;
    color:dimgray;
    border-radius: 10px;
    background-size: 200%;
}
.form-signup button:hover{
    background-position:right ;
}
.form-text{
    margin-bottom: 40px;
    position: relative;
}
.form-text input {
    width: 100%;
    height: 35px;
    border: none;
    border-bottom: 2px solid rgb(107, 107, 107);
    cursor: pointer;
}
.form-text label{
    position: absolute;
    left: 12px;
    bottom: 12px;
    transition: 0.5s;
}
.form-text label.focus{
    transform: translateY(-35px);
}
    </style>
    <title>Document</title>
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
                                <a class="dropdown-item" href="../Song/ViewSong.php">Song</a>
                                <a class="dropdown-item" href="SingerView.php">Singer</a>
                                <a class="dropdown-item" href="../Genre/GenreView.php">Genre </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="SingerAdd.php">Add Singer </a>
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
                    <td>SingerID</td>
                    <td>Singer Name</td>
                    <td>Singer Img</td>
                    <td>Singer Biography</td>
                    <td>GenreID</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            <?php
                $connect = mysqli_connect('localhost','root','','Websitemusic');
                if (!$connect){
                  echo "ket noi that bai";
                  }
                  $sql ="select * from Singer";
                    $query=mysqli_query($connect,"select * from Singer");
                while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><?php echo $row['SingerID']; ?></td>
            <td><?php echo $row['SingerName']; ?></td>
            <td><?php echo $row['SingerImg']; ?></td>
            <td><?php echo $row['SingerBiography']; ?></td>
            <td><?php echo $row['GenreID']; ?></td>
            <td><button type="button" class="btn btn-outline-success" ><a href="SingerEdit.php?id=<?php echo $row['SingerID']; ?>">Edit</a></button></td>
            <td><button type="button" class="btn btn-outline-warning"><a href="SingerDelete.php?id=<?php echo $row['SingerID']; ?>">Delete</a></button></td>
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