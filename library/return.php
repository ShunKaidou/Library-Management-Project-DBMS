
<?php 
include('header.php');
include('sidebar.php'); 


$error=false;
$success=false;
$error4=false;


if($_POST)
{

	

    include 'config.php';
    $studentname=$_POST['bookname'];
    

    $query="update student set collected_book_id=NULL,due_date=NULL where name='$studentname';";
    $query2="select * from student where name = '$studentname'";
    $query68="select name from Books where id = (select collected_book_id from student where name = '$studentname')";
    
    
    $rowc = mysqli_fetch_row(mysqli_query($conn,$query2));
    
    
    
    if(!mysqli_num_rows(mysqli_query($conn,$query2))==0){
    
	if(strcmp($rowc[2],'')){
   
    	
    	
    	
    	
    	if(mysqli_num_rows(mysqli_query($conn,$query68))>0){
    	$row68 = mysqli_fetch_row(mysqli_query($conn,$query68));
    	$row_69 = $row68[0];
    	
    	
    	 $fixsearch2 = " Book <u>$row_69</u> Returned By <u>$studentname</u> To Library";
		$query_104 = "insert into log (thelog) values ('$fixsearch2');";

		mysqli_query($conn,$query_104);
    	}
    	
    	$result=mysqli_query($conn,$query);
    	$success=true;
    	
    	}
    	
    	else{
    	$error4=true;
    	}
    
    }
    else{
    	$error=true;
    }
    
    
 
    
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
    height: 330px;

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
    color: rgb(36, 36, 36);"><u> Return Book </u></h2>
    
    
     <form method="POST">

	<div class="field">
            <span id="bookname">Student Name</span>
	</div>


            <div>
                <input id="bookbox" name="bookname" type="text" autofocus required autocomplete="off"">
            </div>
            
            <div class="btnfield">
            <input id="btn" class="btn" type="submit" value="Submit">
		</div>

        </form>
    
   <?php
    	 if($error==true){
    	 	  include_once('error_alert2.php');
    	 }
    	 
	if($success==true){

    	 	include_once('success_alert2.php');
    	 }
    	 
    	 if($error4==true){

    	 	include_once('error_alert4.php');
    	 }
    	 
    	 ?>
    	 


</div>

</div>    
   











</body>

</html>

