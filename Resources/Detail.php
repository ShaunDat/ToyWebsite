<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
.Name{
    justify-content: center;
    align-items: center;
    text-align: center;
}
.Play{
    justify-content: center;
    align-items: center;
    text-align: center;
}

    </style>
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
                            <a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
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
    <?php 
        $connect = mysqli_connect('localhost','root','','Websitemusic');
        $id=$_GET['id'];
        $sqldetail="SELECT * FROM `song` WHERE SongID like $id";
        $result = mysqli_query($connect,$sqldetail);
        $data = mysqli_fetch_array($result);
    ?>
    <div class="container " wfd-id="310"> 
        <h3> Song details</h3>  
    </div> 
        <div id="products" class="list-group" wfd-id="311"> 
            <div class="item row align-self-center" wfd-id="354">
                <h4 class="Name col-12"> <?php echo $data[1] ?></h4>
            </div> 
            <div class="row">
                <img class="image col-4" src="../img/<?php echo $data[2] ?>" alt="Image" width="300">  
                <p class="SongLyric col-8"><?php echo $data[3] ?> </p> 
            </div>    
            <div class="Play row">
                <div class=" col-4 ">
                <p> Listen to music here </p>
                <audio src="../Song/<?php echo $data[5] ?>" id='audio_1' style='width: 247px'controls controlsList='nodownload'  type='audio/mpeg's></audio> 
                </div>
                <div  class="col-4"> 
                    <p>Price <?php echo $data[4] ?> VND </p> 
                </div>
                <div class="col-4 "> 
                    <a class="btn btn-success" href="Resources/Data/AddCart.php?id=<?php echo $id?>">Buy</a> 
                </div>
            </div>
        </div> 
            
  </Section> 
</body>
</html>