<?php include 'conn.php';
include 'header.php';
?>


<?php 
if (isset($_POST['submit'])) {

	$name =$_POST['name'];
	$rollno = $_POST['rollno'];
	$dob = $_POST['dob'];
	$class =$_POST['class'];
	$gmail =$_POST['gmail'];

$sql ="INSERT INTO `students`(`name`, `rollno`, `dob`, `class`, `gmail`) VALUES ('$name', '$rollno', '$dob', '$class', '$gmail')";
$result = mysqli_query($con, $sql);

}
?>

	<div class="reg-div">
		<form method="post">
        <h2>Student Registration</h2>
                 Name:
				<input type="text" name="name" required> <br><br>
				Father's Name:
				<input type="text" name="fname" required> <br><br>
				Class:
				<select name="class" required>
					<option>--select</option>

					<?php

		$sql = "SELECT * FROM `classes`";
		$result = mysqli_query($con, $sql);
		while($row = mysqli_fetch_assoc($result)){

		?>
                    <option> <?= $row['class']; ?></option>

                    <?php
}
		?>
    </select> <br><br>
    Roll No:
				<input type="text" name="rollno" required> <br><br>
				Date of Birth:
				<input type="date" name="dob" required><br><br>
				Mobile No:
				<input type="Mobile" name="mobile"><br><br>
	
	Email:
	<input type="gmail" name="gmail"><br><br>
	Address:
	<textarea name="address"></textarea required><br><br>

		<button type="submit" name="submit">Save</button>

		<form>
	</div>

	<div class="sdt-div">
		<h2>Students List</h2>

		<table id="example" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Sl. No.</th>
					<th>Name</th>
					<th>Roll No.</th>
				</tr>
			</thead>

			<tbody>

				<?php 
				$sql = "SELECT * FROM `students`";
				$result = mysqli_query($con, $sql);
				while( $row= mysqli_fetch_assoc($result)){
					?>
				<tr>
					<td> <?= $row['id']; ?> </td>
					<td> <?= $row['name']; ?> </td>
					<td> <?= $row['rollno']; ?> </td>
				</tr>

				<?php 
			}

			?>

			</tbody>
		</table>
		
	</div>


</body>
</html>