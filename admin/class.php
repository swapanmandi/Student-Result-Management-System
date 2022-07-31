<?php include 'conn.php';
include 'header.php';
?>


	<div class="class">
		<form method="post" >
		<h2>Create Student Class</h2>
		Class Name:
		<input type="text" name="class" required>
		
		<button type="submit" name="submit">Save</button>
	</form>
	
		<h3>Your Class</h3>

		<table id="example" class="display" style="width:100%">
	<thead>
        <tr>
			<th>Sl No.</th>
			<th>Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		</thead>
			<tbody>
		<?php
		$n = 0;
		$sql = "SELECT * FROM `classes`";
		$result = mysqli_query($con, $sql);
		while($row = mysqli_fetch_assoc($result)){
         $n++;
		?>
		<tr>
        <td><?php echo $n ?></td>
		<td> <?= $row['class'] ?></td>
		<td><a href="">Edit</a></td>
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
	
$sql ="INSERT INTO `classes`(`class`) VALUES ('$class')";
$result = mysqli_query($con, $sql);
	}
	?>


</body>
</html>