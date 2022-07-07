<?php
require_once('logics/dbconnection.php');
$queryuser=mysqli_query($conn,"SELECT * FROM enrollment WHERE no ='".$_GET['id']."'");


while($fetchuser=mysqli_fetch_array($queryuser))
{
	$fullname=$fetchuser['fullname'];
	$phone=$fetchuser['phonenumber'];
	$email=$fetchuser['email'];
	$gender=$fetchuser['gender'];
}
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
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">
                            <h4>Edit Student: <?php echo $fullname?> </h4>
                        </div>
						<div class="card-body">
							<!--form here  -->
							<form action="enroll.php" method="post">
                                <div class="container">
                                <div class="row">
                                <div class="col-lg-6">
                                    <label for="full name" class="form-label"><b>Full name:</b></label>
                                    <input type="text" class="form-control" name="fullname" value=<?php echo $fullname ?> placeholder="Enter your full name">
                         </div>
                        <div class="col-lg-6">
                        <label for="phonenumber" class="form-label"><b>Phone number:</b></label>
                        <input type="tel" class="form-control" name ="phonenumber" value=<?php echo $phone ?> placeholder="+2547...">
              </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
                <label for="email" class="form-label"><b>Email address:</b></label>
                <input type="email" class="form-control" name="email" value=<?php echo $email ?> placeholder="Enter your email">
            </div>
                <div class="col-lg-6">
                    <label for="gender" class="form-label"><b>What is your gender</b></label>
                    <select class="form-control" name="gender"  aria-label="Default select example">
                        <option selected><?php echo $gender ?></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
                <div class="mb-5 mt-5 col-lg-6">
                    <label for="course" class="form-label"><b>What's your preffered course?</b></label>
                    <select class="form-control" name="course"  aria-label="Default select example">
                        <option value="disable selected">...select your course--</option>
                        <option value="Web design">Web design</option>
                        <option value="Web development">Web development</option>
                        <option value="Android">Android</option>
                        <option value="Game development">Game development</option>
                        <option value="Graphic design">Graphic design</option>
                        <option value="Cyber security">Cyber security</option>
                    </select>
                </div>
                     <div class="row">
                     <div class="col-lg-3">
                     <button class="btn btn-primary mb-7" name="enroll">Update Records</button>
             </div>
             </form>
             </div>
             </div>
             </div>
		    </div>	
	    </div>
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>