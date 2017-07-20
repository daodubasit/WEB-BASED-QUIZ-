<div class="row"  style="border-bottom:1px solid #dddddd;">
<div class="container"  >
<div class="col-md-1">
</div>
<style type="text/css">
	body{
		/*background-color: #337ab7;*/
	}

	.move{
		position: absolute;
		top: 0%;
		left:70%;
	}
</style>
<div class="col-md-10">
<a href="<?php echo base_url();?>"><img class="move" src="<?php echo base_url('images/babcock.jpg');?>"></a>
<h2><?php echo "Test Platform";?></h2>
</div>
<div class="col-md-1">
</div>

</div>

</div>

 <div class="container">

   
 <h3><?php echo $title;?></h3>
   
 <body>

  <div class="row">
     <form method="post" action="<?php echo site_url('login/verifylogin');?>">
	
<div class="col-md-8">
<br> 
 <div class="login-panel panel panel-default">
		<div class="panel-body"> 
	
	
	
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		
		
				<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('email_address');?></label> 
					<input type="hidden" id="inputEmail" name="email" class="form-control" value="xx@yahoo.com" placeholder="<?php echo $this->lang->line('email_address');?>" required autofocus>
			</div>
			<div class="form-group">	  
					<label for="inputPassword" class="sr-only"><?php echo $this->lang->line('password');?></label>
					<input type="hidden" id="inputPassword" name="password"  value="asdf" class="form-control" placeholder="<?php echo $this->lang->line('password');?>" required >
			 </div>
				<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('first_name');?></label> 
					<input type="text"  name="first_name"  class="form-control" placeholder="<?php echo $this->lang->line('first_name');?>"   autofocus required>
			</div>
				<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('last_name');?></label> 
					<input type="text"   name="last_name"  class="form-control" placeholder="<?php echo $this->lang->line('last_name');?>"   autofocus required>
			</div>
			<div class="form-group">	 
					<label for="inputEmail" class="sr-only"><?php echo $this->lang->line('contact_no');?></label> 
					<input type="text" name="contact_no"  class="form-control" placeholder="Matric No"   autofocus required>
			</div>

			<div class="form-group">	 
					<label for="inputCourse" class="sr-only"><?php echo 'Input Course';?></label> 
					Courses:<select name="course" class="form-control" id="course" onchange="courses('course')">
  		<option value="Dr Maitanmi">Web Design</option>
  		<option value="Mr Akinsanya">Computer Architecture</option>
  		<option value="Engr. Ogunlere">Digital Electronics</option>
  		<option value="Dr Eze">Automata</option>
</select>
			</div>
				<div class="form-group">	 
					<label for="inputCourse" class="sr-only"><?php echo 'Input Course';?></label> 
				Lecturer:<input type="text" name="coursess" class="form-control" value="Dr Maitanmi" id="coursess" readonly>
				</div>

				<div class="form-group">	 
					 
				<input type="hidden" name="Lecturer" class="form-control" value="1" id="Lecturerid">
				</div>

				<div class="form-group">	 
					
					<input type="hidden" name="group" id="gid" value="1">
					<!--<select class="form-control" name="gid" id="gid" onchange="groups('gid')" >
					
					
					</select>!-->
			</div>
 

				 

 
	<button class="btn btn-default" type="submit" onClick="javascript:capturephoto();" ><?php echo $this->lang->line('submit');?></button>
 &nbsp;&nbsp;&nbsp;&nbsp;</a>
		</div>
</div>
 
 
 
 
</div>
      </form>

</div>
</body>

</div>

<div id="my_photo" style="width:0px;position:absolute; left: 50%;height:0px;background:#000000;padding:2px;border:1px solid #000000;color:red"></div>
<br><br>
<script type="text/javascript" src="<?php echo base_url();?>js/webcamjs/webcam.js"></script>
	<script language="JavaScript">
		Webcam.set({
			width: 500,
			height: 400,
			image_format: 'jpeg',
			jpeg_quality: 100
		});
		Webcam.attach( '#my_photo' );

		
		 function take_snapshot() {
		     Webcam.snap( function(data_uri) {
                document.getElementById('my_photo').innerHTML = '<img src="'+data_uri+'"/>';
            } );
        }
		
		function upload_photo(){
		Webcam.snap( function(data_uri) {

    Webcam.upload( data_uri, '<?php echo site_url('quiz/upload_photo');?>',function(code, text) {
        // Upload complete!
        // 'code' will be the HTTP response code from the server, e.g. 200
        // 'text' will be the raw response content
	 document.getElementById('quiz_detail').submit();
    });
	});
	
	}
	
	 function capturephoto(){
		 
		void(take_snapshot());upload_photo(); 
	 }
	</script>
	
	
	
<div id="my_phkkoto" style="width:519px;position:absolute;top:530px;left:50%;height:520px;background:#ffffff;padding:2px;border:0px solid #000000;color:red"></div>

<script type="text/javascript">

function courses(cou) { 
 var id = 'coursess';
 document.getElementById(id).value = document.getElementById('course').value;

 if(document.getElementById('coursess').value=="Dr Maitanmi"){
 	document.getElementById('Lecturerid').value='1';
 	document.getElementById('inputEmail').value='xx@yahoo.com';
 	document.getElementById('inputPassword').value='asdf';
 	document.getElementById('gid').value='1';

 }

 else if(document.getElementById('coursess').value=="Mr Akinsanya"){
 	document.getElementById('Lecturerid').value='2';
 	document.getElementById('inputEmail').value='trial@g.com';
 	document.getElementById('inputPassword').value='hackeny';
 	document.getElementById('gid').value='2';
 }

 else if(document.getElementById('coursess').value=="Engr. Ogunlere"){
 	document.getElementById('Lecturerid').value='3';
 	document.getElementById('inputEmail').value='user@example.com';
 	document.getElementById('inputPassword').value='asdf';
 	document.getElementById('gid').value='3';
 }


 else{
 	document.getElementById('Lecturerid').value='4';
 	document.getElementById('inputEmail').value='one@example.com';
 	document.getElementById('inputPassword').value='asdf';
 	document.getElementById('gid').value='4';
 }

 console.log(document.getElementById('Lecturerid').value);
}


</script>