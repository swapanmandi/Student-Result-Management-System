<?php 
error_reporting(0);
include 'conn.php';
include 'header.php';
?>

<!-- --------for class insert------- -->
	
 
<?php 
$n = $_POST['sub_count'];

$sql ="SELECT * FROM `classes`";
$result = mysqli_query($con, $sql);


?>

<div class="subject">

	<form method="post" action="">
		
		<h3>Add Subject</h3>

		Select Class:

		<select name="class" required> 
			<option>--select--</option>
<?php
		while($row = mysqli_fetch_assoc($result)):;

		?>

			<option value="<?= $row['class']; ?>" name="class[]" ><?= $row['class']; ?></option>


<?php 
endwhile;
?>

</select>

<!--   ------------for multiple subject insert---------  -->

<?php 

for($i=0; $i<$n; $i++){
?>
<br><br>
	Subject<?php echo " " .$i ?>:
<input type="text" name="subject[]" required>
 <br><br>
 <input type="hidden" name="max_sub" value="<?php echo $n ?>" >

<?php

} 

?>
<button type="submit" name="submit">Submit</button>

</form>

<br><br>
<button><a href="subject.php">BACK</a></button>

</div>

<!-- -------------for dta show table-------------- -->


<div class="sub-view-class">
		<br> 
		<h3>Your class wise Subjects:</h3>
		<br><br>
		
<table id="dataTable">
	<thead>

       <tr>
       	    <td>Sl. No</td>
			<td>Class</td>
			<td>Subjects</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>

	</thead>

	<tbody>

		<?php 
        $n = 0;
		$sql ="SELECT * FROM `subjects`";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
        ?>


		<tr>
			<td><?php echo $n++; ?></td>
			<td> <?= $row['class']; ?> </td>
			<td> <?= $row['subject']; ?> </td>
			<td> <a href="">Edit</a> </td>
			<td><a href="">Delete</a></td>
			
		</tr>

		<?php 
	}
	?>

		

	</tbody>
</table>
		
	</div>



<?php 
	

if(isset($_POST['submit'])){

$class = $_POST['class'];
$subject = $_POST['subject'];
$m = $_POST['max_sub'];

for($i=0; $i<$m; $i++){


$query = "INSERT INTO `subjects`(`class`, `subject`) VALUES ('$class', '$subject[$i]') LIMIT 3";
$run = mysqli_query($con, $query);

}
if ($run) {
	echo "inserted successfull.";
}
else 
	echo mysql_error()."there is error";
}

?>

	

</body>
</html>