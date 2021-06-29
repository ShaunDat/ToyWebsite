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
    width: 200vw;
    height: 200vh;
    background: linear-gradient(to bottom right, var(--bg1), var(--bg2) );
}
.form-signup{
    width: 500px;
    height: 900px;
    background:#fff;
    border-radius: 10px;
    padding: 40px 30px;
}
.form-signup h1{
    margin-bottom: 40px;
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
    <section>
        <div class="ContainerSection">
                <form class="form-signup" method="POST" >
                    <h1>ACCOUNT INFORMATION</h1>
                    <div class="form-text">
                        <label>User Name </label>
                        <input type="text" placeholder="" name="UserName">
                    </div>
                    <div class="form-text">
                        <label>Password</label>
                        <input type="password" placeholder="" name="Password">
                    </div>
                    <div class="form-text">
                        <label>Full Name </label>
                        <input type="text" placeholder="" name="FullName">
                    </div> 
                    <div class="form-text">
                        <label>Email </label>
                        <input type="text" placeholder="" name="Email">
                    </div>
                    <div class="form-text" > 
                        <label>Date Of Birth</label>
                        <input type="date" placeholder="" name="DateOfBirth">
                    </div>
                    <div class="form-text" >
                        <label>Phone </label>
                        <input type="text" placeholder="" name="Phone">
                    </div>
                    <div class="form-text">
                        <label>Bank Cart Code </label>
                        <input type="text" placeholder="" name="BankCartCode">
                    </div>
                    <button type="submit" value="register" name="register">Finish </button>
                </form> 

        </div>
        <?php 
            $connect = mysqli_connect('localhost','root','','Websitemusic');
            mysqli_set_charset($connect,"utf8");
            if(isset($_POST['register'])){
                $UserName = $_POST['UserName'];
                $Password = $_POST['Password'];
                $FullName = $_POST['FullName'];
                $Phone = $_POST['Phone'];
                $Email = $_POST['Email'];
                $DateOfBirth = $_POST['DateOfBirth'];
                $BankCartCode = $_POST['BankCartCode'];
                $sql="INSERT INTO `user`( `UserName`, `Password`, `FullName`, `Phone`, `Email`, `DateOfBirth`, `BankCartCode`, `Role_1`) 
                VALUES ('$UserName','$Password','$FullName','$Phone','$Email','$DateOfBirth','$BankCartCode','0')";
                $result = mysqli_query($connect,$sql);
            if($result){
                echo"<script>alert('Account has been created successfully!')</script>";
                echo"<script>window.open('FormLogin.php','_self')</script>";
                }
            else{
                echo"<script>alert('Error')</script>";
                }
            }
        ?>
        <script>
            const formSignUp = document.querySelectorAll('.form-text input')
            const formLabel = document.querySelectorAll('.form-text label')
            for(let i=0; i<7 ;i++){
                formSignUp[i].addEventListener("mouseover",function(){
                    formLabel[i].classList.add("focus")
                })
                formSignUp[i].addEventListener("mouseout",function(){
                    if(formSignUp[i].value ==""){
                        formLabel[i].classList.add("focus")
                    }
                })
            }
        </script>
        <script src="/Vendors/css/style.css"></script>
        <script src="/Vendors/js/jquery-3.3.1.min.js"></script>
    </section>
            
    <footer>
    </footer>
</body>
</html>