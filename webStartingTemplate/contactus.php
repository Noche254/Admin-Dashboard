<?php
require_once('logics/dbconnection.php');

$sqlQuery= mysqli_query($conn,"SELECT * FROM contactus");



?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>
	
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>
		

	</div>
	<div class="main-content"> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Messages</span>
					</div>
				</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font-style: 12px;">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>First name</th>
                                    <th>last name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>created_at</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($fetchRecords=mysqli_fetch_array($sqlQuery)) { ?>
								<tr>
									<td><?php echo $fetchRecords['no']?></td>
									<td><?php echo $fetchRecords['firstname']?></td>
									<td><?php echo $fetchRecords['lastname']?></td>
									<td><?php echo $fetchRecords['email']?></td>
									<td><?php echo $fetchRecords['phonenumber']?></td>
									<td><?php echo $fetchRecords['message']?></td>
									<td><?php echo $fetchRecords['created_at']?></td>
									<td>
										<a href="edit-contactus.php?id=<?php echo $fetchRecords['no'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
										<a href="view-contactus.php?id=<?php echo $fetchRecords['no'] ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
										<a href="delete-contactus.php?id=<?php echo $fetchRecords['no'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<?php }?>
                            </tbody>
                        </table>
                    </div>
			</div>
		</div>	
	</div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>