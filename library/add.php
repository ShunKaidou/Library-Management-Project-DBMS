
<?php 
include('header.php');
include('sidebar.php'); 

$Success = false;
$Fail2 = false;


if($_POST)
{


	

    include 'config.php';
    $bookname=$_POST['bookname'];
    $authorname=$_POST['authorname'];
    
    $query_9 = "select * from Books where name='$bookname' and author='$authorname'";
    $query_11 = "select * from Books where name='$bookname'";

	if(mysqli_num_rows(mysqli_query($conn,$query_9))==0 and mysqli_num_rows(mysqli_query($conn,$query_11))==0){

    $query="INSERT INTO `Books` (`id`, `name`, `author`, `created_at`) VALUES (NULL, '$bookname', '$authorname', current_timestamp()) ";
    $result=mysqli_query($conn,$query);
    $Success = true;
    
    
    $fixsearch2 = "Added Book <u>$bookname</u> By <u>$authorname</u> To Library";
		$query_101 = "insert into log (thelog) values ('$fixsearch2');";

		mysqli_query($conn,$query_101);
    
    
    
    }
    
    else{$Fail2 = true;}
    
    
    
 
    
}



?>



<html>


<head>

<style type="text/css">


.headbox{

	background-color:#B2BEB5;
	width:82%;
	height:580px;
	position:relative;
	left:225px;
	
	background-image: linear-gradient(to top right, #494D55 1%,#3baa90 40%, #494D55);
	
	
}	

body{background-image: linear-gradient(to top right, #494D55 1%,#3baa90 40%, #494D55);}

.formbox{

 position: relative;
    width: 350px;
    height: 450px;

    left: 50%;
    top: 50%;
    transform: translate(-50% , -50%);
    text-align: center;
    border-radius: 10px;
    overflow: hidden;
    background-color: #fff;
}



#bookname{


	font-size:22px;
	top:130px;
	
	left: 50%;
    
    transform: translate(-50% , -50%);

	position:absolute;
	


}

#bookbox{

top:160px;
	
    
    transform: translate(-50% , -50%);

	position:absolute;
transition:1s;

text-align: center;

}



#authorname{


	font-size:22px;
	top:240px;
	
	left: 50%;

    
    transform: translate(-50% , -50%);

	position:absolute;
}

#authorbox{

top:270px;
	
    
    transform: translate(-50% , -50%);

	position:absolute;
	text-align: center;
	transition:1s;

}



.btnfield{

bottom:10%;
	
    left:50%;
    
    transform: translate(-50% , -50%);

	position:absolute;

	width:80%;

}

#btn{

background: #3baa90 !important;
color: #fff !important;

width: 80%;
height: 40px;
margin: auto;
left: 0%;
right: 0%;
border-radius: 25px;

border:0;
outline:0;



}

#btn:hover{

	cursor:pointer;

}

	 
  </style>
  
 </head>
	
<body>


<div class="headbox">


<div class="formbox">

<h2 style="font-size: 38px;
    color: rgb(36, 36, 36);"><u> Add Book </u></h2>
    
    
     <form method="POST">

	<div class="field">
            <span id="bookname">Book Name</span>
	</div>


            <div>
                <input id="bookbox" name="bookname" type="text" autofocus required autocomplete="off"">
            </div>

		<div class="field">
            <span id="authorname">Author Name</span>
	</div>

            <div>
                <input id="authorbox" name="authorname" type="text" required autocomplete="off"">
            </div>
            
            <div class="btnfield">
            <input id="btn" class="btn" type="submit" value="Submit">
		</div>

        </form>
    
    <?php
    	 if($Success){
    	 	  include_once('success_alert.php');
    	 }
    	 if($Fail2){
    	 	  include_once('fail2.php');
    	 }
    	 ?>


</div>

</div>    
   











</body>

</html>

