
<?php 
include('header.php');
include('sidebar.php'); 



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
	 
.wbtnid::placeholder {

color: white !important;
  opacity: 1;
}

.wbtnid{

font-size: 18px !important;
  
border-bottom: 2px solid white !important;
}

.wbtnid:focus{
border-bottom: 2px solid black !important;
}


  </style>
  
  
  
 </head>
	
<body>


<div class="headbox">

	<div class="container">
	<form method="POST">
	
	<input type="text" class="wbtnid" placeholder="Search	Book Name, Book Author, Issued Student Name or Dates" name="searchresult" type="text" required autocomplete="off">
	<button class="btn" name="submitbutton">Search</button>
	
	</form>
	
	
	</div>
	
	<div style="overflow-y: scroll; max-height: 81.5%;background-color:darkgrey;" class="container">

		<table class="table centered highlight">
		
		<thead>
          <tr>
              
              <th>Book Name</th>
              <th>Author</th>
              <th>Issued_To</th>
              <th>Issue_Date</th>
              <th>Due_Date</th>
              
          </tr>
        </thead>
        
         <tbody>
		

           
		<?php 
		
		$query_1="select Books.name,Books.author,student.name,date(student.created_at),student.due_date from Books left join student on student.collected_book_id=Books.id";
		
		include 'config.php';
		$result_1 = mysqli_query($conn,$query_1);
		
		$row_1 = mysqli_fetch_row($result_1);
		
		
		if(isset($_POST['submitbutton'])){
		
		$search2 = $_POST['searchresult'];
		
		$fixsearch2 = "Searched For <u>$search2</u>";
		$query_100 = "insert into log (thelog) values ('$fixsearch2');";

		mysqli_query($conn,$query_100);	
		
		
		 $query_76="select Books.name,Books.author,student.name,date(student.created_at),student.due_date from Books left join student on student.collected_book_id=Books.id where Books.name='$search2' or Books.author='$search2' or student.name='$search2' or date(student.created_at) = '$search2' or student.due_date = '$search2'";
		 
		 $result_76 = mysqli_query($conn,$query_76);
		 
		 if(mysqli_num_rows($result_76)>0){
		 
		 $row_76 = mysqli_fetch_row($result_76);
		 
		 
		 		echo '<tr>
            		<td>'.$row_76[0].'</td>
			<td>'.$row_76[1].'</td>
			<td>'.$row_76[2].'</td>
			<td>'.$row_76[3].'</td>
			<td>'.$row_76[4].'</td>
         	</tr>
			';
		 
		
		 
		 while ($row_76 = mysqli_fetch_row($result_76)) {
 		   echo '<tr>
            		<td>'.$row_76[0].'</td>
			<td>'.$row_76[1].'</td>
			<td>'.$row_76[2].'</td>
			<td>'.$row_76[3].'</td>
			<td>'.$row_76[4].'</td>
         	</tr>
			';
		
		
		
		
		}	
		
		
		
		}}
		elseif($result_1){
		if(mysqli_num_rows($result_1)>0){
		
			echo '<tr>
            		<td>'.$row_1[0].'</td>
			<td>'.$row_1[1].'</td>
			<td>'.$row_1[2].'</td>
			<td>'.$row_1[3].'</td>
			<td>'.$row_1[4].'</td>
         	</tr>
			';
		 
		
		while ($row_1 = mysqli_fetch_row($result_1)) {
 		   echo '<tr>
            		<td>'.$row_1[0].'</td>
			<td>'.$row_1[1].'</td>
			<td>'.$row_1[2].'</td>
			<td>'.$row_1[3].'</td>
			<td>'.$row_1[4].'</td>
         	</tr>
			';
		}	
		
		
		}}
		
			
		
		?>
		
	   </tbody>
      </table>
		
	
	</div>


	
	


</div>    
   











</body>

</html>

