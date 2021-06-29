<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
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
		/* .right
			width: 80%;
			background:yellow;
			height: 900px;
			float:right;
		} */
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
	 <?php
	$connect = mysqli_connect('localhost','root','','Websitemusic');
	 if(isset($_GET['id'])){					
		$UserID=$_GET['id'];
		$result=$connect->query("select * from user Where UserID=$UserID");
        $row=$result->fetch_object();  
                }        
      ?>
   
    <div class="container">
        <div class="row justify-content-center">
			<div class="col col-8">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">User Name</label>
                <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->UserName";} ?>" name="UserName" type="text">
            </div>
            <div class="form-group">
                <label for="phoneproduct">Password:</label>
                <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->Password";} ?>" name="Password" type="Password">
            </div>
            <div class="form-group">
                <label for="name">FullName</label>
                <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->FullName";} ?>" name="FullName" type="text">
            </div>
            <div class="form-group">
                <label for="name">Phone:</label>
                <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->Phone";} ?>" name="Phone" type="text">
            </div>
            <div class="form-group">
              <label for="des">Email:</label>	
              <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->Email";} ?>" name="Email" type="text">
            </div>
            <div class="form-group">
              <label for="des">Date Of Birth:</label>	
              <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->DateOfBirth";} ?>" name="DateOfBirth" type="date">
            </div>
            <div class="form-group">
              <label for="des">Bank Cart Code</label>	
              <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->BankCartCode";} ?>" name="BankCartCode" type="text">
            </div>
            <div class="form-group">
              <label for="des">Role</label>	
              <input class="form-control" value=" <?php if(isset($_GET['id'])){echo "$row->Role_1";} ?>" name="Role_1" type="text">
            </div>
            <button name="Edit" type="submit" class="form-control btn btn-primary">Edit</button>
            </form>
			</div>
        </div>
    </div>
        <?php
            if(isset($_POST['Edit'])){
            $UserName=$_POST['UserName'];
            $Password=$_POST['Password'];
            $FullName=$_POST['FullName'];
            $Phone=$_POST['Phone'];
			$Email=$_POST['Email'];
            $DateOfBirth=$_POST['DateOfBirth'];
            $BankCartCode=$_POST['BankCartCode'];
            $Role_1=$_POST['Role_1'];
            $result=$connect->query("UPDATE `user` SET `UserName`='$UserName',`Password`='$Password',`FullName`='$FullName',`Phone`='$Phone',`Email`='$Email',`DateOfBirth`='$DateOfBirth',`BankCartCode`='$BankCartCode',`Role_1`='$Role_1' WHERE `UserID`='$UserID'");

            if($result){
                    echo "<script>alert('Edited data successfully')</script>";
                    echo"<script>window.open('FormUser.php','_self')</script>";
                    }
                else{
                    echo "<script>alert('Edit failed')</script>";  
                    }
                }

        ?>
</body>
</html>
