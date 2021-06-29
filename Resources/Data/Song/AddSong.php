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
		#h_menu {
			width: 1000px;
			line-height: 30px;
		    background-color: blue
				
		}
		#h_menu ul li{
			
			list-style: none;
			text-align: center;
			display: inline-table;
			margin: 10px
			
		}
		#h_menu ul li a{
			text-decoration: none;
			color: white
		}
		#wrapper{
			width: 1000px;
			margin: auto;
			color: blue;
		}
		#h_menu2{
			width: 200px;
			height: 400px;
			background-color: aqua;
			float: left;
			border: 1px solid black;
		
		}
		.content{
			width: 100%;
			height: 900px;
			border: 1px solid black
		}
		.left{
			width: 20%;
			background: gray;
			height: 900px;
			float: left;
		}
		.footer{
			width: 100%;
			height: 100px;
			background: red;
			border: 1px solid black;
			clear: both;
		}
		#products_box{
			width: 780px;
			text-align: center;
			margin-left: 30px;
			margin-bottom: 10px;
		}
		#single_product{
			float: left;
			margin-left: 30px;
			padding: 10px;
		}
		table{
			border: 1px solid black;
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
    <div class="container">
                <form class="form-song" method="post" enctype="multipart/form-data">
                    <h1>ADD THE SONG</h1>
                    <div class="form-group">
                        <label for="name">Song name</label>
                        <input class="form-control"  name="SongName" type="text">
                    </div>
                    <div class="form-group">
                        <label for="priceproduct">Song Image</label>
                        <input type="file" name="SongImg" id="priceproduct" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Lyrics</label>
                        <textarea name="SongLyric" id="" cols="30" rows="10" ></textarea>
                    </div> 
                    <div class="form-group">
                        <label for="name">Price</label>
                        <input class="form-control"  name="Price" type="text">
                    </div>
                    <div class="form-group">
                        <label for="des">MP3</label>	
                        <input name="Mp3" type="file"  id="priceproduct" class="form-control">
                    </div>
                    <div class="form-text" >
                        <label>SingerID </label>
                        <select name="SingerID">
                        <?php
					            $connect = mysqli_connect('localhost','root','','Websitemusic');
                        $result=$connect->query("select * from Singer");
                        while($row=$result->fetch_array()){
                            $SingerID=$row["SingerID"];
                            $SingerName=$row["SingerName"];
                            echo "<option value='$SingerID'>$SingerName</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div class="form-text">
            <label>Genre Name  </label>
            <select name="GenreID">
                    <?php
					              $connect = mysqli_connect('localhost','root','','Websitemusic');
                        $result=$connect->query("select * from GenreMusic");
                        while($row=$result->fetch_array()){
                            $GenreID=$row["GenreID"];
                            $GenreName=$row["GenreName"];
                            echo "<option value='$GenreID'>$GenreName</option>";
                        }
                    ?>
                </select>
          </div>
                        <button type="submit" value="register" name="register" class="btn btn-outline-success" >Finish </button>
                </form> 
        </div>
        <?php 
            $connect = mysqli_connect('localhost','root','','Websitemusic');
            mysqli_set_charset($connect,"utf8");
            if(isset($_POST['register'])){
                $SongName=$_POST['SongName'];
                $SongImg=$_FILES['SongImg']['name'];
                $SongLyric=$_POST['SongLyric'];
                $Price=$_POST['Price'];
                $Mp3=$_FILES['Mp3']['name'];
                $target="../../img/".basename($SongImg);
                $resulttarget="../../img/".basename($SongImg);
                $target2="../Mp3".basename($Mp3);
                $resulttarget2="../Mp3".basename($Mp3);
                $SingerID=$_POST['SingerID'];
                $GenreID=$_POST['GenreID'];
                move_uploaded_file($_FILES['SongImg']['tmp_name'],$target);
                move_uploaded_file($_FILES['Mp3']['tmp_name'],$target2);
                $sql="INSERT INTO `song`(`SongID`, `SongName`, `SongImg`, `SongLyric`, `Price`, `Mp3`, `SingerID`, `GenreID`) VALUES (NULL,'$SongName','$SongImg','$SongLyric','$Price','$Mp3','$SingerID','$GenreID')";
                $result = mysqli_query($connect,$sql);
            if($result){
                echo"<script>alert('Account has been created successfully!')</script>";
                echo"<script>window.open('ViewSong.php','_self')</script>";
                }
            else{
                echo"<script>alert('Error')</script>";
                }
            }
        ?>
        <!-- <script>
            const formSong = document.querySelectorAll('.form-text input')
            const formLabel = document.querySelectorAll('.form-text label')
            for(let i=0; i<7 ;i++){
                formSong[i].addEventListener("mouseover",function(){
                    formLabel[i].classList.add("focus")
                })
                formSong[i].addEventListener("mouseout",function(){
                    if(formSong[i].value ==""){
                        formLabel[i].classList.add("focus")
                    }
                })
            }
        </script> -->
    </section>
    <footer>

    </footer>
</body>
</html>