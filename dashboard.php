<?php
include_once('inc/header.php');
if($_SESSION['user_email']==""){
	header('location:index.php');

}
include_once('inc/header.php');
include_once('inc/navbar.php');
 ?>     

    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Video Uploader</h2>
              <p class="text-white-50 mb-5"></p>
              <form name="myform" onSubmit="return validateForm()" method="post" action="upload_video.php" enctype="multipart/form-data">

                <div class="form-outline form-white mb-4">
                  <input type="text" name="v_name" id="v_name" class="form-control" required>
                  <label class="form-label" for="typeEmailX">Video Name</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="text" name="v_desc" id="v_desc" class="form-control" required/>
                  <label class="form-label" for="typePasswordX">Video Description</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="text" name="upload_by" id="upload_by" class="form-control" required/>
                  <label class="form-label" for="typePasswordX">Uploaded By</label>
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="file" name="file" id="file" accept="video/*"  class="form-control" required/>
                </div>

                <input type="submit" name="submit" value="Upload Video" class="btn btn-outline-light btn-lg px-5"/>
              
			        </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>