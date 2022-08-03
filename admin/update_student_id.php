<?php
	require_once 'dbcon.php';
	if (isset ($_POST ['change'])){
		$id_number = $_GET['id_number'];
		$names =$_POST['names'];
		$started=$_POST['started'];
	    $conn->query("UPDATE ids SET  names = '$names', started = '$started' WHERE id_number = '$id_number'")or die($conn->error);
		?>
		<script type="text/javascript">
		alert('Student updated')
		window.location = 'current_students.php';
		</script>
		<?php
	}
?>