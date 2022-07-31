<?php
error_reporting(0);
include 'admin/conn.php';
include 'header.php';

?>


<div class="result-view-div" id="makepdf">

			<div class="result-cont">

				<?php 
$roll = $_POST['roll'];
$class = $_POST['class'];
$sqln = "SELECT * FROM `students` WHERE rollno='$roll' ";
$result = mysqli_query($con, $sqln);
	
        while( $row = mysqli_fetch_assoc($result)){

        	?>

	<h3>XYZ ENGINEERING COLLEGE</h3>
	<h2>RESULT CARD</h2>
	<div class="result-div-1" >

		<p>
	Name: <span style="text-decoration: underline; text-decoration-style: dotted;"> <?= $row['name']; ?> </span><br><br>

	Roll no:<span style="text-decoration: underline; text-decoration-style: dotted;"> <?= $row['rollno']; ?> </span>  <span style="padding-left: 120px;">Class: </span> <span style="text-decoration: underline; text-decoration-style: dotted;"> <?= $row['class']; ?> </span> <br><br>

	Branch: <span style="text-decoration: underline; text-decoration-style: dotted;">Computer Science and Engineering</span> <br><br>

	Semester: <span style="text-decoration: underline; text-decoration-style: dotted;">5th</span> <span style="padding-left: 120px;">
	Session:</span> <span style="text-decoration: underline; text-decoration-style: dotted;"> 2021-22 </span><br>
</p>
</div>
<?php 
}

?>

<table>
	<thead>
		<tr>
			<td>00</td>
			<td>subject</td>
			<td>marks</td>
			<td>max marks</td>

		</tr>
	</thead>
	<tbody>
	
		<?php 
	    $n = 1;
		if (isset($_POST['roll'])) {
			$roll = $_POST['roll'];

		$sqlmkss = "SELECT * FROM `marks`  WHERE rollno = '$roll' and class= '$class'";
        	$result = mysqli_query($con, $sqlmkss);
       
                 while( $row = mysqli_fetch_assoc($result)){

			?>

		<tr>
			<td><?php echo $n ?></td>
			<td> <?= $row['subject']; ?></td>


			<td> <?= $row['mark']; ?></td>
			<td>100</td>
			<?php $total += $row['mark'] ?>
		</tr>
		<?php
		$n++; 
	      }
              }
	       ?>
		<tr>
			<td></td>
			<td>Total</td>
			<td><?php echo $total; ?></td>
			<td>400</td>
		</tr>
			
		
			
			
		percentage = <?php echo ($total / 4); ?>


	</tbody>
</table>

</div>
</div>

	<br><br>
<button onclick="generatePDF()">PDF DOWNLOAD</button>
<script src="index.js"></script>


	


<!---For dtabase connection-->









</body>
</html>