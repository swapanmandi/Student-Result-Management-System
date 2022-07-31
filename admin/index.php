<?php 
include 'header.php';

?>


<?php 

		$sql = " SELECT * FROM `students`";
              $result = mysqli_query($con, $sql);
              $student_count = mysqli_num_rows($result);

              $sql = " SELECT * FROM `classes`";
              $result = mysqli_query($con, $sql);
              $class_count = mysqli_num_rows($result);

              $sql = " SELECT * FROM `subjects`";
              $result = mysqli_query($con, $sql);
              $subject_count = mysqli_num_rows($result);

		?>

<div class="img-div">
	 <figure>
	<img src="upload\reading-book.png" height="80px" width="80px" >
	<figcaption style="text-align: center;"><?php echo "Registered Students<br>".$student_count; ?></figcaption>

        </figure>
        <figure>
	<img src="upload\presentation.png" height="80px" width="80px">
	<figcaption style="text-align: center;"><?php echo "Registered Classes<br>".$class_count; ?></figcaption>
        </figure>

         <figure>
	<img src="upload\book-stack.png" height="100px" width="100px">
	<figcaption style="text-align: center;"><?php echo "Registered Subjects<br>".$subject_count; ?></figcaption>
        </figure>
</div>


		<div class="result-div">

             <h1>Search Result</h1>
			<form method="post" action="http://localhost/srms/view_result.php">
				Student Roll No:
				<input type="text" name="roll"> <br><br>

				Class:
             <select name="class">
             	<option>--select--</option>

			<?php 

     $sql = " SELECT `class` FROM `classes`";
     $result = mysqli_query($con, $sql);
     while( $row = mysqli_fetch_assoc($result)){

			?>
			<option> <?= $row['class']; ?></option>

       <?php 
              }
        ?>
 
    </select>
		<br><br>
		<button type="submit">Search</button>
		</form>

		</div>


		

		</body>
		</html>

