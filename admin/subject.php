<?php 
error_reporting(0);
include 'conn.php';
include 'header.php';
?>

<div class="sub-div">
		
		How many subject you want to create? <br><br>

       <form method="post" action="sub_add.php">


	<input type="number" name="sub_count" min="4" max="4" required> <br><br>
	
	<input type="submit" name="submit">

</form>  

</div>


<!-- -------------for dta show table-------------- -->


<div class="sub-view-class">
		<br> 
		<h3>Your class wise Subjects:</h3>
		<br><br>
		
<table id="example" class="display" style="width:100%">
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


	

</body>
</html>