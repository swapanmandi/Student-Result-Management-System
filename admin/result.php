<?php 
error_reporting(0);
include 'conn.php';
include 'header.php';
session_start();
?>

<div class="classList">

<h2>Class List</h2>
        
<?php 

$sql = " SELECT `class` FROM `classes`";
     $result = mysqli_query($con, $sql);
     while( $row = mysqli_fetch_assoc($result)){
        ?>
	
        	<a href="result.php?class=<?= $row['class']; ?>"> <?= $row['class']; ?> </a>
        	
            <?php 
        }
        ?>

        <!--   ----------for name list---------    -->

<h2>Students List</h2>

<?php 

$class = $_GET['class'];

if($class=='five'){
    $sql ="SELECT * FROM `students` WHERE class='five'";
    }

    else if($class=='six'){
        $sql ="SELECT * FROM `students` WHERE class='six'";
    }
        
        else if($class=='nine'){
        $sql ="SELECT * FROM `students` WHERE class='nine'";
}

$result = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_assoc($result)){ 
        if (mysqli_num_rows($result) > 0) {

        ?>

        <p><a href="result_view.php?name=<?= $row['name'] ?>"> <?= $row['name']; ?> </a></p>

        <?php 
        }
        else{
            echo "No students found.";
        }
    }
    
    ?>

    </div>
	

</body>
</html>