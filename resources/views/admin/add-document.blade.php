<!--Add Profile-->
<div class="modal fade" id="addProfileModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title w-100 font-weight-bold" style="margin-top: 10px;">Add Profile</h4>
        </div>
        <div class="modal-body mx-3">

            <form method="post" enctype="multipart/form-data" action="{{url('admin/saveProfileList')}}">
                @csrf
                <!-- <div class="md-form mb-5">                   
                    <input type="hidden" name="id" class="form-control" id="client_id">                         
                </div>
                <div class="md-form mb-5">                   
                    <input type="hidden" name="client_document_id" class="form-control" id="client_documents_id">                         
                </div> -->
                <div class="md-form mb-5" style="margin-bottom: 10px;">
                    <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Objective</label>
                    <input type="text" name="objective" class="form-control" id="addObj" maxlength="50">
                    <span id="ShowObjective"></span>                    
                </div>

                <div class="md-form mb-5" style="margin-bottom: 10px;">
                    <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Name</label>
                    <input type="text" name="name" class="form-control" id="addName" maxlength="50">
                    <span id="ShowName"></span>                    
                </div>

                <div class="md-form mb-5" style="margin-bottom: 10px;">
                    <label data-error="wrong" data-success="right" for="orangeForm-email" style="margin-bottom: 10px;">Email</label>
                    <input type="email" name="email" class="form-control" id="EmailBox"> 
                    <span id="EmailforErrorMsg"></span> 
                </div>

                <div class="md-form mb-5" style="margin-bottom: 10px;">
                    <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Skills</label>
                    <input type="text" name="skills" class="form-control" id="addskills">
                    <span id="ShowSkill"></span>                    
                </div>

                <div class="md-form mb-5" style="margin-bottom: 10px;">
                    <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Experience Year</label>
                    <input type="text" name="experience_year" class="form-control" id="addexp">
                    <span id="Showexp"></span>                    
                </div>

                <div class="md-form mb-5" style="margin-bottom: 10px;">
                    <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Experience Hotel</label>
                    <input type="text" name="experience_hotel" class="form-control" id="addexphotel">
                    <span id="Showexphotel"></span>                    
                </div>

                <div class="md-form mb-5" style="margin-bottom: 10px;">
                    <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Education</label>
                    <input type="text" name="education" class="form-control" id="addeducation">
                    <span id="ShowEdu"></span>                    
                </div>

                <div class="md-form mb-4" style="margin-bottom: 10px;">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass" style="margin-bottom: 10px;">Resume</label>

                    <input type="file" name="resume" id="ResumeUpload" class="UploadResume" style="margin-bottom:10px;">
                    <!-- <img id="ImgId" width="21%" height="100px"> -->
                    <span id="ResumeErrorMessage"></span>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center" style="text-align: center">
                <button class="btn btn-deep-orange" id="AddProfile"  
                style="width:30%;letter-spacing: 1px;background-color:#08c;color: #fff; margin-bottom: 10px;">Add</button>
            </div>
        </form>
    </div>
</div>
</div>

<!-- End Add Employee Image modal-->


<!--Edit Profile-->
<div class="modal fade" id="EditProfileModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title w-100 font-weight-bold" style="margin-top: 10px;">Update Profile</h4>
        </div>
        <div class="modal-body mx-3">
          <form method="post" enctype="multipart/form-data" action="{{url('admin/saveProfileList')}}">
            <div class="md-form mb-5">                   
                    <input type="hidden" name="id" class="form-control" id="id">                         
                </div>
                <div class="md-form mb-5">                   
                    <input type="hidden" name="client_document_id" class="form-control" id="client_document_id">                         
                </div>

            <div class="md-form mb-5" style="margin-bottom: 10px;">
                <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Objective</label>
                <input type="text" name="objective" class="form-control" id="addObjs" maxlength="50">
                <span id="ShowObjective"></span>                    
            </div>

            <div class="md-form mb-5" style="margin-bottom: 10px;">
                <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Name</label>
                <input type="text" name="name" class="form-control" id="addNames" maxlength="50">
                <span id="ShowName"></span>                    
            </div>

            <div class="md-form mb-5" style="margin-bottom: 10px;">
                <label data-error="wrong" data-success="right" for="orangeForm-email" style="margin-bottom: 10px;">Email</label>
                <input type="email" name="email" class="form-control" id="EmailBoxs"> 
                <span id="EmailforErrorMsg"></span> 
            </div>

            <div class="md-form mb-5" style="margin-bottom: 10px;">
                <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Skills</label>
                <input type="text" name="skills" class="form-control" id="addskill">
                <span id="ShowSkill"></span>                    
            </div>

            <div class="md-form mb-5" style="margin-bottom: 10px;">
                <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Experience Year</label>
                <input type="text" name="experience_year" class="form-control" id="addexps">
                <span id="Showexp"></span>                    
            </div>

            <div class="md-form mb-5" style="margin-bottom: 10px;">
                <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Experience Hotel</label>
                <input type="text" name="experience_hotel" class="form-control" id="addexphotels">
                <span id="Showexphotel"></span>                    
            </div>

            <div class="md-form mb-5" style="margin-bottom: 10px;">
                <label data-error="wrong" data-success="right" for="orangeForm-name" style="margin-bottom: 10px;">Education</label>
                <input type="text" name="education" class="form-control" id="addeducations">
                <span id="ShowEdu"></span>                    
            </div>

            <div class="md-form mb-4" style="margin-bottom: 10px;">
                <label data-error="wrong" data-success="right" for="orangeForm-pass" style="margin-bottom: 10px;">Resume</label>

                <input type="file" name="resume" id="ResumeUpload" class="UploadResumes" style="margin-bottom:10px;">
                <!-- <img id="ImgId" width="21%" height="100px"> -->
                <span id="ResumeErrorMessage"></span>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center" style="text-align: center">
            <button class="btn btn-deep-orange" id="UpdateProfile"  
            style="width:30%;letter-spacing: 1px;background-color:#08c;color: #fff; margin-bottom: 10px;">Update</button>
        </div>
    </form>
</div>
</div>
</div>

<!-- End Add Employee Image modal-->
