<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>

<div class="modal msk-fade" id="modalInsertform" tabindex="-1" role="dialog" aria-labelledby="modalInsertform" aria-hidden="true">  
  	<div class="modal-dialog ">
    	<div class="container modal-content1 ">
      		<div class="row ">	
           		<div class="col-md-3 ">
            		<div class="panel panel-primary">
        				<div class="panel-heading">               
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          					<h3 class="panel-title">Add Subject Routing </h3>
   						</div>
            			 <form role="form" action="../index.php" method="post">
            				<div class="panel-body"> 
               					<div class="form-group" id="divDay">
                					<label for="" >Day</label>
        							<select class="form-control"  id="day" name="day">			
     									<option >Select Day</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
									</select>
        						</div>
                                <div class="form-group" id="divSubject">
                					<label for="" >Subject</label>
        							<select class="form-control"  id="subject" name="subject_id">
     									<option>Select Subject</option>
<?php
include_once('../controller/config.php');
$grade_id=$_GET['grade'];
$exam_id=$_GET['exam'];
$sql="select * from subject";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
     									<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?> 	           
									</select>
        						</div> 
                                <div class="form-group" id="divClassroom">
                					<label for="" >Classroom</label>
        							<select class="form-control"  id="classroom" name="classroom_id">
     									<option>Select Classroom</option>
<?php
include_once('../controller/config.php');
$sql="SELECT * FROM class_room";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
     									<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?> 	           
									</select>
        						</div> 
                                <div class="form-group" id="divStartTime">
                					<label for="" >Start Time</label>
        							<input type="text" class="form-control" id="start_time" name="start_time"  placeholder="Enter start time" autocomplete="off"/>
        						</div>  
                                 <div class="form-group" id="divEndTime">
                					<label for="" >End Time</label>
        							<input type="text" class="form-control" id="end_time" name="end_time"  placeholder="Enter end time" autocomplete="off"/>
        						</div>  
            				</div>
            				<div class="panel-footer bg-blue-active">
                            	<input type="hidden" id="grade_id" name="grade_id" value="<?php echo $grade_id; ?>"  />
                                <input type="hidden" id="exam_id" name="exam_id" value="<?php echo $exam_id; ?>"  />
            					<input type="hidden" name="do" value="add_exam_timetable"  />
                                <input type="hidden" name="create_by" value="Teacher"  />
                    			<button type="submit" class="btn btn-info " id="btnSubmit" style="width:100%;">Submit</button>
             				</div>
             			</form>       
      				</div>
         		</div>
            </div>
        </div>
  	</div>
</div>