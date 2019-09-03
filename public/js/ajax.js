$(document).on('click', '.editProfile', function(){
var profId = $(this).attr('id');
//alert(profId);
$.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: webUrl + '/admin/EditProfile',
        type: "post",
        data: {id: profId},
        dataType: 'json',
        success: function (data)
        {
            if (data.message == 'success') {
            	alert('jdhfte');
                $("#EditProfileModalForm").modal('show');
               $("#addObj").val(data.prof_Edit.objective);
                $("#addName").val(data.prof_Edit.name);
                $("#EmailBox").val(data.prof_Edit.email);
                $("#addskills").val(data.prof_Edit.skills);
                $("#addexp").val(data.prof_Edit.experience_year);
                $("#addexphotel").val(data.prof_Edit.experience_hotel);
                $("#addeducation").val(data.prof_Edit.education);
                $("#UploadResume").val(data.prof_Edit.resume);
            } 
            else {
                alert(data.error);
            }
        }
});
});