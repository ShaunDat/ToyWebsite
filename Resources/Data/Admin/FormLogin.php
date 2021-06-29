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
:root
{
    --bg1 :#55E6C1;
    --bg2 :#25CCF7;
    --text : #D6A2E8;
}
*{
    margin: 0;
    padding: 0;
    outline: none;
}
.a{
    text-decoration: none;
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
.form-login{
    width: 300px;
    height: 500px;
    background:#fff;
    border-radius: 10px;
    padding: 40px 30px;
}
.form-login h1{
    margin-bottom: 40px;
}
.form-login button{
    height: 35px;
    width: 100%;
    margin-bottom: 30px;
    background: linear-gradient(to bottom right, var(--bg1), var(--bg2) );
    border: none;
    color:dimgray;
    border-radius: 10px;
    background-size: 200%;
}
.form-login button:hover{
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
                <a class="navbar-brand" href="#">Music Color</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../../../Index.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"></span>Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                Dropdown
                            </a>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="get" action="/Resources/Data/Song/Search.php" enctype="multipart/form-data">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
          </nav>
    </header>
    <Section>
        <div class="ContainerSection">
            <form class="form-login" method="post">
                <h1> Login</h1>
                <div class="form-text">
                    <label>User Name </label>
                    <input type="text" required placeholder="" name="UserName">
                </div>
                <div class="form-text">
                    <label> Password</label>
                    <input type="Password" required placeholder="" name = "Password">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div> 
                <button type="submit" value="Login" name="Login">Login</button>
                <span>You don't have an account? Do you want to sign up for a new account <a href="FormSignUp-1.php">Here</a> </span>         
            </form>
            <?php 
	    $connect = mysqli_connect('localhost','root','','Websitemusic');
        if (!$connect){
        echo "ket noi that bai";
        }
	// mysqli_set_charset($connect,"utf8");
	 if(isset($_POST['Login'])){
		 $UserName = $_POST['UserName'];
		 $Password = $_POST['Password'];
		 $sql = "select * from user where UserName = '$UserName' AND Password = '$Password'"; 
		 $result = mysqli_query($connect,$sql);
		 $checkLogin = mysqli_num_rows($result);
         $fetch=mysqli_fetch_array($result);
		 if($checkLogin == 0)
		 {
             
			 echo "<script>alert('Password or username is incorrert, please try again!') </script>";
             echo"<script>window.open('FormLogin.php','_self')</script>";
			 exit();
		 }
		 if($checkLogin> 0)
		 {
            if($fetch['Role_1']==1){
                echo"<script>alert('You have logged in succesfully!')</script>";
                echo"<script>window.open('../../../IndexAdmin.php','_self')</script>";
            }
            else{
                echo"<script>alert('You have logged in succesfully!')</script>";
             echo"<script>window.open('../../../Index.php','_self')</script>";
            }
			 
		 }
	 }
	?>
        </div>
    <script>
        const formLogin = document.querySelectorAll('.form-text input')
            const formLabel = document.querySelectorAll('.form-text label')
            for(let i=0; i<2 ;i++){
                formLogin[i].addEventListener("mouseover",function(){
                    formLabel[i].classList.add("focus")
                })
                formLogin[i].addEventListener("mouseout",function(){
                    if(formLogin[i].value ==""){
                        formLabel[i].classList.add("focus")
                    }
                })
            }
    </script>
    </Section>
    <footer>
    </footer>
</body>
</html>