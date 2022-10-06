<!DOCTYPE html>
<html>
<head>
	<title>manager</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="client_portal1.css">
  <style type="text/css">
    button
    {
      background-color:green;
  width:100%;
  border-radius:10px;
    }
  </style>
</head>
<header>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed">
  <!-- Brand -->
  
 <a href="home.html">
    <img width="50" height="50" src="http://csmehulthakkar.com/images/logo_dark.png">
  	
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav">
      <li class="nav-item"style="margin-left: 620px;">
        <a class="nav-link" href="#">Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Task Assign</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="client_update.php">Updated Detials</a>
      </li>
   <li class="nav-item">
        <a class="nav-link" href="employee_reply.php">Reply</a>
      </li>
  
    </ul>
  </div>
</nav>
</header>
<body>

</body>
</html>
<?php

include_once 'connect.php';
$sql = "SELECT * FROM client1 ";
if(! ($result = mysqli_query($conn, $sql)))
{
	
	echo "Errormessage: ".mysqli_error($conn)."\n";
}
else

{
   
	echo "<table border=4 align=center>
		<tr><th>NAME</th>
		<th>EMAIL</th>
		<th>PHONE</th>
<th>PURPOSE</th>
<th>REQUIREMENTS</th>
<th >REPLY TO CLIENT</th>
		</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['purpose']."</td><td>".$row['requirments']."</td><td ><a href=manager_reply.php ><button >reply</button></td></a></tr>";
	}
	echo "</table>";


}
mysqli_close($conn);


?>