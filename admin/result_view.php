<?php 
error_reporting(0);
include 'conn.php';
include 'header.php';

?>

<div class="mark-div">
<form method="post" action="">


<?php 
$getname = $_GET['name'];

 $sql ="SELECT * FROM `students` WHERE name='$getname'";
$result = mysqli_query($con, $sql);
while ($row=mysqli_fetch_assoc($result)) {

		?>
		<input type="hidden" name="name" value="<?php echo " ".$row['name'] ?>">
		Name: <?php echo $row['name'] ?> <br><br>
		<input type="hidden" name="rollno" value="<?php echo " ".$row['rollno'] ?>">
		Roll No: <?php echo $row['rollno'] ?>  <br><br>
		<input type="hidden" name="class" value="<?php echo " ".$row['class'] ?>">
		Class: <?php echo $row['class'] ?>
         <br><br>

         <h3>Add your marks</h3>


		<?php 
		$gotsub = $row['class'];
		
       }

$sql ="SELECT * FROM `subjects` WHERE class ='$gotsub'";
$resultt = mysqli_query($con, $sql);

?>

<table>
	<thead>
		<tr>
			<td>Subject</td>
			<td>Mark</td>
		</tr>
	</thead>

	<tbody>



<?php 
while ($row=mysqli_fetch_assoc($resultt)) {

for($i=0; $i<1; $i++){

?>
<tr>
	<td><input type="text" name="sub[]" value="<?php echo $row['subject'] ?>" required></td>
	<td><input type="numberic" name="mark[]" value="" required></td>
	  </tr>
	<?php 
}
}
?>	

</tbody>
</table>
<br><br>
<input type="submit" name="submit"> <br><br>
</form>

</div>

<?php 
	

if(isset($_POST['submit'])){

$name = $_POST['name'];
$rollno = $_POST['rollno'];
$class = $_POST['class'];
$sub = $_POST['sub'];
//$code = $_POST['sub_code'];
$mark = $_POST['mark'];


for($i=0; $i<4; $i++){


$query = "INSERT INTO `marks`(`name`, `rollno`, `class`, `subject`, `mark`) VALUES ('$name', '$rollno', '$class', '$sub[$i]', '$mark[$i]')";
$run = mysqli_query($con, $query);

}
if ($run) {
	echo "inserted successfull.";
}
else 
	echo mysqli_error()."there is error";
}

?>
