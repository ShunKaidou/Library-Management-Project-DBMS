
<?php 
include('header.php');
include('sidebar.php'); ?>

<html>


<head>

<style type="text/css">


.headbox{

	background-color:#B2BEB5;
	width:82%;
	height:250px;
	position:relative;
	margin-left:225px;
	
}	

.box{

	background-color:#3baa90;
	width:250px;
	height:150px;
	display:inline-block;	
	float:left;
	top:-5%;
	
	margin-left:8%;
	margin-top:60px;
	
	
	position:relative;

	border-radius:22px;
	

	} 
	
.intext{

position: absolute;
    top: 1%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);

	color:white;
	font-weight:bold;
	font-size:40px;
	
	opacity:1;

	}
	
.logclass{

	background-color:lightgrey;
	width:82%;
	position:relative;
	top:40px;
	overflow-y: scroll; 
	max-height: 120%;


}


	 
  </style>
  
 </head>
	


<div class="headbox container">

<div class="box" style="background-color:#0091b2">
		
		<div>
		
		 <p class="intext">Books</p>
              <h3 class="intext" style="top:50%;"><?php include_once('books_count.php');?></h3>

             
            </div>
            
 </div>
 
 <div class="box" style="background-color:#00A65A">
		
		<div>
		
		 <p class="intext">Students</p>
              <h3 class="intext" style="top:50%;"><?php include_once('students_count.php');?></h3>

             
            </div>
            
 </div>
 
 
 <div class="box" style="background-color:#c64233">
		
		<div>
		
		 <p class="intext">Issued</p>
              <h3 class="intext" style="top:50%;"><?php include_once('issue_count.php');?></h3>

             
            </div>
            
 </div>
 
 
 <div class="logclass container"> 
 
 <table class="table centered highlight">
		
		<thead>
          <tr>
              
              <th>LOG</th>
              
              
          </tr>
        </thead>
        
         <tbody>
 
 	<?php
 
 	include 'config.php';
 	
 	$query_38 = "select time(created_at),thelog from log order by created_at desc";
 	
 	$result_38 = mysqli_query($conn,$query_38);
 	
 	$row_38 = mysqli_fetch_row($result_38);
 	
 	if($result_38){
		if(mysqli_num_rows($result_38)>0){
		
		echo '<tr>
            		<td>'.$row_38[0]," : ",$row_38[1].'</td>
         	</tr>
			';
		 
		
		while ($row_38 = mysqli_fetch_row($result_38)) {
 		   echo '<tr>
            		<td>'.$row_38[0]," : ",$row_38[1].'</td>
         	</tr>
			';
 
 
 
 
 	}}}
 
 	?>
 
    </tbody>
      </table>
 </div>
 
 


</div>    
   











</body>

</html>


