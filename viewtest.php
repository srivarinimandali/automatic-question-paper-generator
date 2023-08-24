<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title> Edit details </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#id').keyup(function() {
                var sid = $(this).val();
				alert(sid);
                var data_String = 'sid=' + sid;
                $.get('search.php', data_String, function(result) {

                    $.each(result, function(){
                        $('#id').val(this.id);
                        $('#name').val(this.name);
                        $('#course').val(this.course);
                        $('#mobile').val(this.mobile);
						$('#pincode').val(this.pincode);
						$('#country').val(this.country);
						$('#email').val(this.email);
                    });


                });
            });
        });
    </script>
</head>

  <body> <br><br><br>
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <form class="form-horizontal" role="form" method="post" action="">
        <fieldset>

          <!-- Form Name -->
          <legend>Edit Details...</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Student Id</label>
            <div class="col-sm-10">
              <input type="text" id="id" name="id" placeholder="Student ID" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Name</label>
            <div class="col-sm-10">
              <input type="text" id="name" name="name" placeholder="Name" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Course</label>
            <div class="col-sm-10">
              <input type="text" id="course" name="course" placeholder="Course" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Mobile</label>
            <div class="col-sm-4">
              <input type="text" id="mobile" name="mobile" placeholder="Mobile Number" class="form-control">
            </div>
			
		  <!-- Text input-->
            <label class="col-sm-2 control-label" for="textinput">Postcode</label>
            <div class="col-sm-4">
              <input type="text" id="pincode" name="pincode" placeholder="Pin Code" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Country</label>
            <div class="col-sm-10">
              <input type="text" id="country" name="country" placeholder="Country" class="form-control">
            </div>
          </div>
		  
		    <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Email</label>
            <div class="col-sm-10">
              <input type="text" id="email" name="email" placeholder="Email" class="form-control">
            </div>
          </div>
		  
			<!-- Text input-->
          <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
</body>

</html>