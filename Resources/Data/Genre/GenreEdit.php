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
                                <a class="dropdown-item" href="../Singer/SingerView.php">Singer</a>
                                <a class="dropdown-item" href="GenreView.php">Genre </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="GenreAdd.php">Add Genre </a>
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
    <?php
	$connect = mysqli_connect('localhost','root','','Websitemusic');
	if(isset($_GET['id'])){					
		$GenreID=$_GET['id'];
		$result=$connect->query("select * from genremusic Where GenreID=$GenreID");
    $row=$result->fetch_object();  
                }        
      ?>
    <div class="container">
        <div class="row justify-content-center">
			<div class="col col-8">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Genre name</label>
                <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->GenreName";} ?>" name="GenreName" type="text">
            </div>
            <button name="Edit" type="submit" class="form-control btn btn-primary">Edit</button>
            </form>
			</div>
        </div>
    </div>
        <?php
            if(isset($_POST['Edit'])){
            $GenreName=$_POST['GenreName'];
            $result2=$connect->query("UPDATE `genremusic` SET GenreName='$GenreName' WHERE GenreID='$GenreID'"); 
            if($result2){
                    echo "<script>alert('Edited data successfully')</script>";
                    echo"<script>window.open('GenreView.php','_self')</script>";
                    }
                else{
                    echo "<script>alert('Edit failed')</script>";  
                    }
                }

        ?>
    </section>
    </section>
    <footer>
    </footer>
</body>
</html>