
<div class="modal fade" id="edit_voters<?php  echo $voters_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														<center>Edit Student Details</center>
													</div>    
												</div>
											</h4>
										</div>
										
										
				<div class="modal-body">										
				<form action="update_student_id.php?id_number=<?php echo $id_number; ?>" method = "post" >	
					<input type="hidden" name="id_number" value="<?php echo $row1['id_number'] ?>">
				<div class="form-group">
						<label>Student ID</label>
							<input type = "text" class="form-control" type ="text" name = "id_number" required="true" value="<?php echo $row1 ['id_number']?>">
					</div>
					<div class="form-group">
						<label>Full Names</label>
							<input type = "text" class="form-control" type ="text" name = "names" required="true" value="<?php echo $row1 ['names']?>">
					</div>
					<div class="form-group">
						<label>Year First Registered</label>
							<input type = "date" class="form-control" type ="date" name = "started" required="true" value="<?php echo $row1 ['started']?>">
					</div>
											
					<button name = "change" type="submit" class="btn btn-primary">Update</button>
					
				</form>
			</div>
			<div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>

			</div>
	</div>
</div>
<!-- /.modal-content -->
                         
