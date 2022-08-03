<div class="modal fade" id="add_voters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														<center>Add Voter</center>
													</div>    
												</div>
											</h4>
										</div>
																			
                                        <div class="modal-body">
										<form method = "post" enctype = "multipart/form-data">	
											<div class="form-group">
												<label>Student ID</label>
												<input class ="form-control" type = "text" name = "id_number" placeholder = "ID number" required="true">													
											</div>										
											<div class="form-group">
												<label>Password</label>
													<input class="form-control" type ="text" name = "password" placeholder="Password" required="true">
											</div>
											<div class="form-group">
												<label>Firstname</label>
													<input class="form-control" type ="text" name = "firstname" placeholder="Firstname" required="true">
											</div>
											<div class="form-group">
												<label>Lastname</label>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
											</div>
																																	
											<div class="form-group">
												<label>Program of Study </label>
													<input class="form-control"  type = "text" name = "prog_study" placeholder="E.g BIT, CS,BFIN, IT" required="true">
											</div>
												<div class="form-group">
												<label>Gender</label>
													<select class = "form-control" name = "gender">
														<option></option>
														<option>Male</option>
														<option>Female</option>
													</select>
											</div>
											
											<div class="form-group">
												<label>Year_Level</label>
													<select class = "form-control" name = "year_level">
														<option></option>
														<option>1st Year</option>
														<option>2nd Year</option>
														<option>3rd Year</option>
														<option>4th Year</option>
									
													</select>
													
											</div>

											 <button name = "save" type="submit" class="btn btn-primary">Save Data</button>
												 <button name = "save" type="reset" class="btn btn-success">Cancel All</button>
						  
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           
                                        </div>
										
										</form>
									
										<?php require 'dbcon.php';
										if (isset ($_POST ['save'])){
										$id_number=$_POST['id_number'];
										$firstname=$_POST['firstname'];
										$lastname=$_POST['lastname'];
										$year_level=$_POST['year_level'];
										$gender=$_POST['gender'];
										$program=$_POST['prog_study'];
										$date = date("Y-m-d H:i:s");

										$query = $conn->query("SELECT * FROM ids WHERE id_number='$id_number'") or die ($conn->error);
										$count = $query->fetch_array();
								if ($count  < 1){
								?>
									<script>
										alert( 'Invalid Student ID');
										window.location='voters.php';
									</script>	
									<?php
										}
										else{
											
											$query = $conn->query("SELECT * FROM voters WHERE id_number='$id_number'") or die ($conn->error);
											$count1 = $query->fetch_array();
											if ($count1 == 0) {
											$conn->query("INSERT INTO voters(id_number,firstname,lastname,year_level,gender,prog_study,status,date)values('$id_number','$firstname','$lastname','$year_level','$gender','$program','Unvoted','$date')")or die($conn->error);
											?>
											
					<script>
						alert( 'Successfully Registered');
						window.location='voters.php';
					</script>

	    <script>
			     alert( 'ID Already Registered');
			    window.location='voters.php';
	    </script>
    <?php
		}
		

	}

													} 
									?>
								</div>
                                    <!-- /.modal-content -->
                            </div>
                                <!-- /.modal-dialog -->
                         </div>