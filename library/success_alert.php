
<style>


.alert {

	
  background-color: green; 
  color: white;
  font-weight:bold;
  
  position:absolute;
  bottom:0px;
  padding:6px;
  
  opacity:0.8;
  left:50%;
  
      transform: translate(-50% , -50%);
      
      text-align:center;
  
  
}


.closebtn:hover {
  color: black;
}

.closebtn{
margin-left: 15px;
color: white;
font-weight: bold;
float: right;
font-size: 22px;
line-height: 22px;
cursor: pointer;
transition: 1s;
text-align:center;
}



</style>


<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  Success
</div> 


