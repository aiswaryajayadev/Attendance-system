<html>
<body>
<html lang="en">
<head>
<title>ATTENDANCE SYSTEM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.header {
  background-color:  #000000;
  padding: 10px;
  text-align: center;
}

body {
  margin: 0;
  font-family: Times New Roman;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a.one {
  color: white;
  padding:20;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a.one:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
	padding :20px;
  margin-left: 200px;
  padding-left: 0px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 50px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 80px 100px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #555555;
  padding: 50px 50px;
  border-radius :12px;
}

.button1:hover {
  background-color: #555555;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #555555;
  padding: 50px 50px;
   border-radius :12px;
}

.button2:hover {
  background-color: #555555;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #555555;
  padding: 50px 50px;
  border-radius :12px;
}

.button3:hover {
  background-color: #555555;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  padding: 50px 50px;
  border-radius :12px;
}

.button4:hover {background-color: #555555; color: white;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  padding: 50px 50px;
  border-radius :12px;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
.button6 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  padding: 50px 50px;
  border-radius :12px;
}

.button6:hover {
  background-color: #555555;
  color: white;
}
a.two:link, a.two:visited {
  background-color: white;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  
}

a.two:hover {
  background-color:  #555555;
  color: white ;
}

</style>
</head>

<body>

<div class="sidenav">
 <a href="index.php" class="one">Home</a>

 <a href="studentwise.php" class="one" >Student Wise Report</a>

</div>

<div class="content">
 <h2 align ="center "><p style="font-family:times new roman;color:black">ATTENDANCE SYSTEM</H2>
         <div class="header">
..
</div><br><br>
<?php
include "z_db.php";
if(isset($_POST['submit']))
{
$user_name = $_POST['uname'];
$Roll_no=$_POST['Rollno'];



$reg="INSERT INTO  student(name,rollno) VALUES ('$user_name',$Roll_no)";
            mysqli_query($con ,$reg);
            echo '<script type="text/javascript">
               alert("registration successfull");
               </script>';
            

}

?>
<form action=" " method="post"  >
<div class="transbox">
	<p>
    <div align= "center" class="container">
	

 <U><H2>ADD STUDENT </H2></U>
    <label for="uname"><b>Enter Student Name : </b></label>
    <input type="text" placeholder="Enter name" name="uname" required><br><br>
<label for="rollno"><b>Enter Student Roll_no : </b></label>
    <input type="number" placeholder="Enter Roll_no" name="Rollno" required><br><br>
	
    
    <button type="submit" name="submit">Submit</button><br><br>
   
    <button type="button" class ="cancelbtn"><a href="index.php">Cancel</A></button><br>
   
  </div>
  </DIV>
  </P>
</form>




</body>
</html>