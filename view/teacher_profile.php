<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    
    header('location:../index.php');
    exit;
}
?>
<?php
include_once('../controller/config.php');
	
$index=$_GET['index'];
$sql="SELECT * FROM teacher WHERE index_number='$index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);


$full_name=$row['full_name'];
$image=$row['image_name'];
$address=$row['address'];
$gender=$row['gender'];
$phone=$row['phone'];
$email=$row['email'];

?>

<div class="modal msk-fade" id="modalviewTeacher" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="container col-lg-12 ">
      		<div class="row">
        	<div class="col-md-12">
            	<div class="panel">
                	<div class="panel-heading bg-aqua-active">	
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    	<h4 class="panel-title" id="hname"><?php echo $full_name; ?></h4>
                    </div>				
                    <div class="panel-body">
                    	<div class="row">
                			<div class="col-md-3"> 
                				<img id="photo2" alt="User Pic" src="../<?php echo $image; ?>" class="img-circle img-responsive"> 
                			</div>
                			<div class=" col-md-9"> 
                  				<table class="table table-bordered table-striped">
                    				<tbody>
                      					<tr>
                        					<td class="col-md-4">Full Name</td>
                        					<td id="full_name"><?php echo $full_name; ?></td>
                      					</tr>
                             			<tr>
                        					<td>Address</td>
                        					<td id="address"><?php echo $address; ?> </td>
                      					</tr>
                        				<tr>
                        					<td>Gender</td>
                        					<td id="gender"><?php echo $gender; ?> </td>
                      					</tr>
                      					<tr>
                        					<td>Email</td>
                        					<td id="email"><?php echo $email; ?> </td>
                      					</tr>
                                        <tr>
                        					<td>Phone Number</td>
                        					<td id="phone"><?php echo $phone; ?> </td>
                      					</tr>
                    				</tbody>
                  				</table>
                  			</div>
                   		</div>
                     </div>
                     <div class="panel-footer">
                    	<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="#modalUpdateform" onClick="showModal(this)"  data-original-title="Edit this user" id="id3"   data-toggle="modal" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        </span>
                    </div>
            	</div>
        	</div>
		</div>
    	</div>
	</div>
</div>