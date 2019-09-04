$(document).on('click', '.editProfile', function () {
    var profil_Id= $(this).attr('id');
    //alert(img_Id);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: webUrl + '/admin/EditProfile',
        type: "post",
        enctype:'multipart/form-data',
        data: {proflId: profil_Id},
        dataType: 'json',
        
        success: function (data)
        {
            if (data.message == 'success') {
             $("#EditProfileModalForm").modal('show');
             $("#client_id").val(data.prof_Edit.id);
             $("#client_document_id").val(data.prof_Edit.client_document_id);
             $("#addObjs").val(data.prof_Edit.objective);
             $("#addNames").val(data.prof_Edit.name);
             $("#EmailBoxs").val(data.prof_Edit.email);
             $("#addskill").val(data.prof_Edit.skills);
             $("#addexps").val(data.prof_Edit.experience_year);
             $("#addexphotels").val(data.prof_Edit.experience_hotel);
             $("#addeducations").val(data.prof_Edit.education);
             $("#UploadResumes").val(data.prof_Edit.resume);
         } 
         else {
            alert(data.error);
        }
    }
});
});
$(document).on('click', '#UpdateProfile', function(){

});