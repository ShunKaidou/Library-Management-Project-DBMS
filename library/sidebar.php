<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

.sidebar{

	background-color:#494D55;
	font-size:large;
	font-weight:bold;
	
	position: fixed;
   	 left: 0;
   	 width: 225px;
   	 height: 100%;

   	 transition: all 0.5s ease;
   	 
   	 text-align:center;
	
	}
	
.sidebartext{
	
		color:#B9BBBE;
		
			
	}
	
	
.sidebaritems{

	padding-top:40px;
	
	border: 6px;
	 border-style: solid;
  	border-color:  #494D55 #494D55 #B9BBBE #494D55;

	}
	
.sidebartext:hover{

	text-decoration:underline;
	color:#3baa90;
	
	
}

    </style>


	 <div class="sidebar">

	<div class="sidebaritems"><a href="dashboard.php" class="sidebartext"> Dashboard</a></div>
	<div class="sidebaritems"><a href="manage.php" class="sidebartext"> Search</a></div>
	<div class="sidebaritems"><a href="add.php" class="sidebartext"> Add Book</a></div>
	<div class="sidebaritems"><a href="lend.php" class="sidebartext"> Issue Book</a></div>
	<div class="sidebaritems"><a href="return.php" class="sidebartext"> Return Book</a></div>
	<div class="sidebaritems"><a href="student.php" class="sidebartext">Add Student</a></div>

        </div>	
	


</body>
</html>

