<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><title></title>
</head>
<body>
<div id="header" style="background-color:#aaccff; border:solid 2px;">
<h1 align="center">When ever smart people works <br/>
doors are unlocked!
</h1>
</div>
<div id="registration" style="border:solid #37dcfa 2px;background-color:#ecdbdf;">
<div class="donate_bt" style="float:right;">
<form action="" method="POST">
 <input type="text" class="box" placeholder="search hear" name="search_box" style= "width: 100px;height: 20px;margin:7% auto;border-radius: 7px;>
<a href="#"><img src="images/search-icon.png"></a>
    </form>

</div>
<?php 
if(!empty($_SESSION['user'])){
echo "<center><span style='color:blue; font-weight:bold;font-size:30px;'>Welcome ".$_SESSION['user']." "."</span></center>";
?><br/><br/>
<button style="padding: 15px;background-color: #c3e096;letter-spacing: 1px;font-weight: bold;margin-bottom: 70px;border-radius:15px;">
	<a style="text-decoration:none" href="index.html?id=logout"><span style="color:green">Logout</span></a></button>
	
	<!--<button class="delete" style="padding: 15px;background-color: #c3e096;letter-spacing: 1px;
	font-weight: bold;margin-bottom: 70px;border-radius:15px;">
	<a style="text-decoration:none" href="adminhome.php?delete=<?php echo $row['NIC'] ?>" name="delete"onclick="return confirm('are your sure you want to delete this?');">
	<span style="color:green">Delete</span></a></button>-->
	
<?php 
if(isset($_GET['id'])and $_GET['id']=="logout"){
$_SESSION['user']="";
$_SESSION['username']="";
header("location:admin.php");
}?>
<p style="font-size:50px; color:#4b0082; font-weight:bold;">Registered Student Details</p>
<center>
<?php
$con=new mysqli("localhost","testuser","testuser","learnx_db"); 
?>
	<?php $sql_select="SELECT * FROM stdetails";
	$result=mysqli_query($con,$sql_select);
	?>
	<table id="sdetails" width="80%" border="0" cellpadding="5px">
	<?php
	while($data=mysqli_fetch_array($result)){
	?>		
	<tr>
	<td valign="top" width="30%" align="justify">
	<?php
	echo "<u><span style='color:#186a8e; font-weight:bold;font-size:30px;'> ".$data['Fname'];
	echo " ".$data['Lname']."</span></u><br/>";
	echo "<span style='color:#4f3d63;font-size:20px;'>Date Of Birth: ".$data['DOB']."<br/>";
	echo "NIC: ".$data['NIC']."<br/>";
	echo "Address: ".$data['Address']."<br/>";
	echo "EMail: ".$data['EMail']."<br/>";
	echo "TPNo: ".$data['TPNo']."<br/>";
	echo "SubName: ".$data['SubName']."</span><br/><hr/></td>";?>
	<td width="20%"><br/><br/>
	<button class="delete" style="padding: 15px;background-color: #c3e096;letter-spacing: 1px;
	font-weight: bold;margin-bottom: 70px;border-radius:15px;">
	<a style="text-decoration:none" href="adminhome.php?delete=<?php echo $data['NIC']?>" 
	onclick="return confirm('are your sure you want to delete this?');">Delete</a>
	</button>
	
	<button class="update" style="padding: 15px;background-color: #c3e096;letter-spacing: 1px;
	font-weight: bold;margin-bottom: 70px;border-radius:15px;">
	<a style="text-decoration:none" href="adminhome.php?edit=<?php echo $data['NIC']?>" 
	onclick="return confirm('Data Updated!!!');">Update Details</a>
	</button></td>
	</tr>
	

<?php
}
?>

	

	</table>
	
	</center>
	
	<?php
 if((isset($_GET['delete'])==true) && 
  (isset($_GET['delete'])<>null))
{
	$NIC=$_GET['delete'];
	$sql_delete="DELETE FROM stdetails WHERE NIC='$NIC'";
	$result=mysqli_query($con,$sql_delete);
	if($result)
		echo"<span style='color:#e1679c; font-weight:bold;font-size:30px;'>The  data deleted....</span>";
	else
		echo"<span style='color:#e1679c; font-weight:bold;font-size:30px;'>Data is not deleted....</span>".mysqli_error($con);
};
?>
<?php	
if(isset($_POST['update'])){
	 $FName = $_POST['update_FName'];
   $LName = $_POST['update_LName'];
   $DOB = $_POST['update_DOB'];
   $NIC = $_POST['update_NIC'];
   $Address = $_POST['update_Address'];
   $EMail = $_POST['update_EMail'];
   $TPNo = $_POST['update_TPNo'];
   $SubName = $_POST['update_SubName'];
  
   $update_query = mysqli_query($con, "UPDATE stdetails SET Fname = '$FName', Lname = '$LName', 
   DOB = '$DOB',Address='$Address',EMail='$EMail',TPNo='$TPNo',SubName='$SubName'  WHERE NIC='$NIC'");

   if($update_query){
 
      echo"product updated succesfully";
   
   }else{
      echo"product could not be updated";
 
   }

}
?>
<?php
   
   if(isset($_GET['edit']))
{
	$NIC =$_GET['edit'];
$sql_select="SELECT * FROM stdetails WHERE NIC='$NIC'";
	$result=mysqli_query($con,$sql_select);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
   ?>
	<form action="" method="post" enctype="multipart/form-data">
   
    <input type="text"  name="update_FName" value="<?php echo $row['Fname']; ?>"><br/>
    <input type="text"   name="update_LName" value="<?php echo $row['Lname']; ?>"><br/>
    <input type="text"   name="update_DOB" value="<?php echo $row['DOB']; ?>"><br/>
	<input type="text"    name="update_NIC" value="<?php echo $row['NIC']; ?>"><br/>
	<input type="text"    name="update_Address" value="<?php echo $row['Address']; ?>"><br/>
	<input type="text"    name="update_EMail" value="<?php echo $row['EMail']; ?>"><br/>
	<input type="text"    name="update_TPNo" value="<?php echo $row['TPNo']; ?>"><br/>
	<input type="text"    name="update_SubName" value="<?php echo $row['SubName']; ?>"><br/>

      <input type="submit" value="update the data" name="update" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>
	



   <?php
            };
         };
		 
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
   };
        ?>
  <?php } ?>

 <?php
        if(isset($_POST['search_btn'])){
         $search_box = mysqli_real_escape_string($con, $_POST['search_box']);
         $select_products = mysqli_query($con, "SELECT * FROM `stdetails` WHERE SubName LIKE '%{$search_box}%'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
<form action="" method="POST" class="box">
	  
        
	       
		 <div class="name"><?php echo $fetch_products['NIC']; ?></div>
		  <div class="name"><?php echo $fetch_products['Fname']; ?></div>
		 <div class="price"><?php echo $fetch_products['Address']; ?></div>
  
  
      </form>
      <?php
         }
            }else{
                echo '<p class="empty">no result found!</p>';
            }
        }else{
            echo '<p class="empty">search something!</p>';
        }
      ?>
</div>
</body>
</html>
