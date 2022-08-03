<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>
<?php include 'side_bar.php'; ?>
    <div id="row">
        <?php
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['ch_id']))
					{
						$_SESSION['ch_id'] = "";
					}
					else
					{
						$_SESSION['ch_id'] = $_POST['ch_id'];
					}
					if(!ISSET($_POST['vc_id']))
					{
						$_SESSION['vc_id'] = "";
					}
					else
					{
						$_SESSION['vc_id'] = $_POST['vc_id'];
					}
					if(!ISSET($_POST['sg_id']))
					{
						$_SESSION['sg_id'] = "";
					}
					else
					{
						$_SESSION['sg_id'] = $_POST['sg_id'];
					}
					if(!ISSET($_POST['ac_id']))
					{
						$_SESSION['ac_id'] = "";
					}
					else
					{
						$_SESSION['ac_id'] = $_POST['ac_id'];
					}
					if(!ISSET($_POST['fs_id']))
					{
						$_SESSION['fs_id'] = "";
					}
					else
					{
						$_SESSION['fs_id'] = $_POST['fs_id'];
					}
					if(!ISSET($_POST['sp_id']))
					{
						$_SESSION['sp_id'] = "";
					}
					else
					{
						$_SESSION['sp_id'] = $_POST['sp_id'];
					}
					if(!ISSET($_POST['ew_id']))
					{
						$_SESSION['ew_id'] = "";
					}
					else
					{
						$_SESSION['ew_id'] = $_POST['ew_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:25%; margin-right:25%;" >
		  <div class = "alert alert-info">
			<div class="panel-heading"><center>CHAIRPERSON</center></div>
			<br />
			<?php
				if(!$_SESSION['ch_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ch_id]'")->fetch_array();
						
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>VICE-CHAIRPERSON</center></div>
			<br />
			<?php
				if(!$_SESSION['vc_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vc_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>SECRETARY GENERAL</center></div>
			<br/>
			<?php
				if(!$_SESSION['sg_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sg_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
		
			<div class = "alert alert-info">
			
			<div class="panel-heading"><center>ACADEMICS</center></div>
			<br />
			<?php
				if(!$_SESSION['ac_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ac_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>FINANCE SERCRETRY</center></div>
			<br />
			<?php
				if(!$_SESSION['fs_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[fs_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>SPORTS SERCRETARY</center></div>
			<br />
			<?php
				if(!$_SESSION['sp_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sp_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>ENTERTAINMENT & WELFARE SECRETARY</center></div>
			<br />
			<?php
				if(!$_SESSION['ew_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ew_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<br />
			</div>
	</center>
                                    <div class="modal-body">
										<p><center>Are you sure you want to submit your Votes? </center></p>
                                    </div>
									
									<div class="modal-footer"><center>
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</center></div>
                                    <!-- /.modal-content -->
                                
                                <!-- /.modal-dialog -->
                            

</body>

<?php include ('script.php');
include ('footer.php');?>
</html>

