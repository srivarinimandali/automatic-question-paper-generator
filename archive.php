<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<form action="" method="">
        <input type="hidden" name="p_id" id="p_id" value="<?php echo $rows['p_id']; ?>">
        <button class="btn btn-danger" name="archive" type="submit" onclick="archiveFunction()">
            <i class="fa fa-archive"></i>
                Archive
        </button>
</form>
<script>
function archiveFunction() {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
   title: "Are you sure?",
  text: "Do you want to accept this profile !",
  type: "warning",
  showCancelButton: true,
   confirmButtonColor: "#7cb064",
    cancelButtonColor: "#ff0055",
  confirmButtonText: "Yes, Accept it!",
  cancelButtonText: "No, cancel !",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
        swal("Cancelled", "Your imaginary file is safe :)", "success");         // submitting the form when user press yes
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
}
</script>