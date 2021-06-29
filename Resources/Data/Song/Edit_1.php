<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/33a12d68d3.js" crossorigin="anonymous"></script>
        <style>
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
	 <?php
	$connect = mysqli_connect('localhost','root','','Websitemusic');
	 if(isset($_GET['id'])){					
		$SongID=$_GET['id'];
		$result=$connect->query("select * from song Where SongID=$SongID");
        $row=$result->fetch_object();  
                }        
      ?>
   
    <div class="container">
        <div class="row justify-content-center">
			<div class="col col-8">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Song name</label>
                <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->SongName";} ?>" name="SongName" type="text">
            </div>
            <div class="form-group">
                <label for="priceproduct">SongImg:</label>
                <input type="file" name="SongImg" id="priceproduct" value="<?php if(isset($_GET['id'])){echo "$row->SongImg";} ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Song Lyric:</label>
                <textarea name="SongLyric" id="" cols="30" rows="10"> <?php if(isset($_GET['id'])){echo "$row->SongLyric";} ?></textarea>
            </div>
			<div class="form-group">
                <label for="name">Price:</label>
                <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->Price";} ?>" name="Price" type="text">
            </div>
            <div class="form-group">
              <label for="des">Mp3:</label>	
              <input type="file" name="Mp3" id="priceproduct" value="<?php if(isset($_GET['id'])){echo "$row->Mp3";} ?>" class="form-control">
            </div>
			<div class="form-group">
                <label for="categori">Singer Name:</label>
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
            <div class="form-group">
                <label for="categori">Genre name</label>
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
            <button name="Edit" type="submit" class="form-control btn btn-primary">Edit</button>
            </form>
			</div>
        </div>
    </div>
        <?php
            if(isset($_POST['Edit'])){
            $SongName=$_POST['SongName'];
            $SongImg=$_FILES['SongImg']['name'];
            $SongLyric=$_POST['SongLyric'];
            $Price=$_POST['Price'];
			$Mp3=$_FILES['Mp3']['name'];
            $target="../../img/".basename($SongImg);
            $resulttarget="../../img/".basename($SongImg);
            $target2="../../Mp3/".basename($Mp3);
            $resulttarget2="../../Mp3/".basename($Mp3);
            $SingerID=$_POST['SingerID'];
            $GenreID=$_POST['GenreID'];
			move_uploaded_file($_FILES['SongImg']['tmp_name'],$target);
			move_uploaded_file($_FILES['Mp3']['tmp_name'],$target2);
            $result2=$connect->query("UPDATE `song` SET `SongName`='$SongName',`SongImg`='$resulttarget',`SongLyric`='$SongLyric',`Price`='$Price',`Mp3`='$resulttarget2',`SingerID`='$SingerID',`GenreID`='$GenreID' WHERE SongID='$SongID'"); 
            if($result2){
                        echo "<script>alert('Edited data successfully')</script>";
                        echo"<script>window.open('ViewSong.php','_self')</script>";
                        }
                    else{
                        echo "<script>alert('Edit failed')</script>";  
                        }
                }

        ?>
</body>
</html>
