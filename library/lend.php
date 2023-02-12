
<?php 
include('header.php');
include('sidebar.php'); 

$error=false;
$issued=false;
$error2=false;
$error6=false;

$varp="something";

if($_POST)
{

	

    include 'config.php';
    $bookname=$_POST['bookname'];
    $studentname=$_POST['authorname'];
    $duedate=$_POST['duedate'];
	$date_now = new DateTime();
	$date2 = new DateTime($duedate);
    
    
    $query2="select * from student where name = '$studentname'";
    
    
    $rowc = mysqli_fetch_row(mysqli_query($conn,$query2));
     
    
    $result2 = mysqli_query($conn,"select name from Books where name='$bookname'");
    
    $result3 = mysqli_query($conn,"select name from student where name='$studentname'");
    
    $result6=mysqli_query($conn,"select * from student where collected_book_id=(select id from Books where name = '$bookname')");
    
  
    if(

	$date_now > $date2
	
	or	
    
    mysqli_num_rows($result2)==0
    
    or
    
    !$result2
    
    or  
    
    mysqli_num_rows($result3)==0
    
    or
    
    !$result3
    
    )
    
    {
    	
    $error=true;
    }
    

elseif(!mysqli_num_rows($result6)==0){$error6=true;}

    
    elseif(!mysqli_num_rows($result3)==0){
    
    
    	if(!strcmp($rowc[2],'')){
    	
    	
    
    $query="UPDATE student SET collected_book_id=(SELECT id FROM Books WHERE name = '$bookname'),due_date = '$duedate' WHERE name = '$studentname';";
    
    $result=mysqli_query($conn,$query);

    $issued=true;
    
    
    $fixsearch2 = "Issued Book <u>$bookname</u> to <u>$studentname</u>";
		$query_102 = "insert into log (thelog) values ('$fixsearch2');";

		mysqli_query($conn,$query_102);
    
    
    
    }
    
     else{$error2=true;}
    
    }
    
    else{$error=true;}
    
  
    	
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
	top:115px;
	
	left: 50%;
    
    transform: translate(-50% , -50%);

	position:absolute;
	


}

#bookbox{

top:142px;
	
    
    transform: translate(-50% , -50%);

	position:absolute;
transition:1s;

text-align: center;

}

#due{


font-size:22px;
	bottom:135px;
	
	left: 50%;

    
    transform: translate(-50% , -50%);

	position:absolute;


}

#duebox{

	bottom:75px;
	
    
    transform: translate(-50% , -50%);

	position:absolute;
	text-align: center;
	transition:1s;


}

#authorname{


	font-size:22px;
	top:200px;
	
	left: 50%;

    
    transform: translate(-50% , -50%);

	position:absolute;
}

#authorbox{

bottom:168px;
	
    
    transform: translate(-50% , -50%);

	position:absolute;
	text-align: center;
	transition:1s;

}



.btnfield{

bottom:25px;
	
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
    color: rgb(36, 36, 36);"><u> Issue Book </u></h2>
   
     <form method="POST">

	<div class="field">
            <span id="bookname">Book Name</span>
	</div>


            <div>
                <input id="bookbox" name="bookname" type="text" autofocus required autocomplete="off"">
            </div>

		<div class="field">
            <span id="authorname">Student Name</span>
	</div>

            <div>
                <input id="authorbox" name="authorname" type="text" required autocomplete="off"">
            </div>
            

	<div class="field">
            <span id="due">Due By</span>
	</div>

            <div>
                <input id="duebox" name="duedate" type="date" required autocomplete="off"">
            </div>            
            
            
            <div class="btnfield">
            <input id="btn" class="btn" type="submit" value="Submit">
		</div>

        </form>
    
<?php
    	 if($error==true){
    	 	  include_once('error_alert.php');
    	 }
    	 
    	  if($error6==true){
    	 	  include_once('error_alert6.php');
    	 }
    	 
    	 
    	 	 if($error2==true){

    	 	include_once('error_alert3.php');
    	 }
    	 
	if($issued==true){

    	 	include_once('issued_alert.php');
    	 }
    	 
    	 ?>
    	 
    	

</div>

</div>    
   











</body>

</html>

