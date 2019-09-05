var _empId;
$(document).on('click', '.editProfile', function () {
    var empId = $(this).attr('id').split('_');
    //alert(img_Id);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: webUrl + '/admin/EditProfile',
        type: "post",
        enctype:'multipart/form-data',
        data: {proflId: empId[1]},
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
             //$("#UploadResumes").val(data.prof_Edit.resume);
         } 
         else {
            alert(data.error);
        }
    }
});
    _empId = empId[1];
});

//update
$(document).on('click','#updateProfDetails', function () {
//alert('gdhs');
var id = _empId;
//alert(id);
var client_id = $(this).parents('.modal-content').find('#client_id').val();

var client_document_id = $(this).parents('.modal-content').find('#client_document_id').val();
//alert(client_document_id);
    var objective = $(this).parents('.modal-content').find('#addObjs').val();
    //alert(objective);
    var name = $(this).parents('.modal-content').find('#addNames').val();
    var email = $(this).parents('.modal-content').find('#EmailBoxs').val();   
    var skills = $(this).parents('.modal-content').find('#addskill').val();
    var experience_year = $(this).parents('.modal-content').find('#addexps').val();
    var experience_hotel = $(this).parents('.modal-content').find('#addexphotels').val();
    var education = $(this).parents('.modal-content').find('#addeducations').val();
    //var resume = $(this).parents('.modal-content').find('#uploadss').val();


$.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: webUrl + '/updatingProfle',
    type: "POST",
    data: {id : id, client_id : client_id, client_document_id : client_document_id, addObjs : objective, addNames: name, EmailBoxs: email, addskill: skills, addexps: experience_year, addexphotels: experience_hotel, addeducations: education},
    dataType: 'json',
    success: function (data)
    {           
        if (data.messsage == 'success') {
         alert('Record Updated Successfully');
         $('#addObjs').val("");
         $('#addNames').val("");
         $('#EmailBoxs').val("");
         $('#addskill').val("");
         $('#addexps').val(""); 
         $('#addexphotels').val("");
         $('#addeducations').val("");          
         $('#EditProfileModalForm').modal('hide');              
         $('#' + data.updte_profle.id).find('#obj').html(data.updte_profle.objective);
         $('#' + data.updte_profle.id).find('#nam').html(data.updte_profle.name);
         $('#' + data.updte_profle.id).find('#emal').html(data.updte_profle.email);
         $('#' + data.updte_profle.id).find('#skll').html(data.updte_profle.skills);
         $('#' + data.updte_profle.id).find('#expyr').html(data.updte_profle.experience_year);
         $('#' + data.updte_profle.id).find('#exphotl').html(data.updte_profle.experience_hotel);
         $('#' + data.updte_profle.id).find('#edu').html(data.updte_profle.education);
         //$('#' + data.updte_profle.id).find('#res').html(data.updte_profle.resume);
    } else {
        alert(data.error);
    }
}
});

});

           
$(document).on('click', '.viewProfiles', function () {
  var employId = $(this).attr('id');
  //alert(employId);


  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },

    url: webUrl + "/admin/userdetail",
    type: "GET",
    data: {previd: employId},
    dataType: 'json',
    success: function (data)
    {
        if (data.message == 'success') 
        {
          $("#showProfileModalForm").modal('show');
          $("#id").val(data.show_id.viewsid);
        } 
          else 
          {
        alert(data.error);
        } 
    }
    });
});
