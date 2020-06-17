$(document).ready(function() {
    /*if($('select').hasClass('categorymultiselect'))
    {
        $('.categorymultiselect').multiselect({
            inclelectAllOption: true,
            buttonWidth: '400px',
            enableFiltering: true
        });
        $('div.btn-group').addClass('importantRule');
    }*/


});




$("#formvalidate").click(function(e)
{
    var formname = $(this).attr("data-form");
    $('#'+formname).validate();
    if($('#'+formname).valid())
    {
        $('#'+formname).submit();
        return false;
    }
    else
    {
        return false
    }
});


/*
 * Admin Login
 */

$("#adminloginform").submit(function(e)
{

    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    var username = $("#username").val();
    var password = $("#password").val();
    if(username == "" || password == "")
    {
        _toastr("Username or password cannot be empty","bottom-right","info",false);
        return false;
    }
    else
    {
        $.ajax({
            type: "POST",
            url	: "../includes/adminfunction.php",
            data:{
                ajax_username : username,
                ajax_password : password,
                ajax_adminlogin : true
            },
            success: function (data)
            {
                $(".submit-loading").remove();
                $elm.show();
                var data = jQuery.parseJSON(data);
                if( data.valid == 1)
                {
                    _toastr(data.message,"bottom-right","success",false);
                    window.location.href = "index.php";
                    return false;
                }
                else
                {
                    _toastr(data.message,"bottom-right","info",false);
                    return false;
                }
                
            }
        });
    }
});

/*
* Change Admin Password
*/
$("#adminclhangepass").submit(function(e)
{
   e.preventDefault();
   $elm=$(".btn-submit");
   $elm.hide();
   $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
   var current_password = $("#current_password").val();
   var new_password = $("#new_password").val();
   var rpassword = $("#rpassword").val();
   if(current_password == "" || new_password == "" || rpassword == "")
   {
       $(".submit-loading").remove();
        $elm.show();
       _toastr("Currrent password or new password cannot be empty","bottom-right","info",false);
       return false;
   }
   else if(new_password !=  rpassword)
   {
       $(".submit-loading").remove();
        $elm.show();
       _toastr("New Password & Confirm Password does not match","bottom-right","info",false);
       return false;
   }
   else
   {
       $.ajax({
           type: "POST",
           url	: "../includes/adminfunction.php",
           data:{
               ajax_current_password : current_password,
               ajax_new_password : new_password,
               ajax_confirm_password : rpassword,
               ajax_changepassword : true
           },
           success: function (data)
           {
               var data = jQuery.parseJSON(data);
                $(".submit-loading").remove();
                $elm.show();
                if( data.valid == 1)
                {
                   _toastr(data.message,"bottom-right","success",false);
                   setTimeout(function(){
                       location.href = 'index.php';
                   }, 3000);
                   return false;
                }
                else
                {
                    _toastr(data.message,"bottom-right","info",false);
                    return false;
                }

           }
       });
   }
});





$("#AddPackName").submit(function(e)
{
     //alert("call"); 
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    var formData = new FormData(this);
    $.ajax({
        type: 'POST',
        url : "../includes/adminfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            var data = jQuery.parseJSON(data);
            if(data.valid)
            {
               _toastr(data.msg,"bottom-right","success",false);
                setTimeout(function(){
                         location.href='pack_name.php';
                }, 2000);
            }
            else
            {
                _toastr(data.msg,"bottom-right","info",false);
                return false;
            }

        }
    });
});


$("#AddDetails").submit(function(e)
{
     //alert("call"); 
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    $("#description").text($("#description").code());
    var formData = new FormData(this);
    $.ajax({
        type: 'POST',
        url : "../includes/adminfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            var data = jQuery.parseJSON(data);
            if(data.valid)
            {
               _toastr(data.msg,"bottom-right","success",false);
                setTimeout(function(){
                    location.href='pack_details.php';
                }, 2000);
            }
            else
            {
                _toastr(data.msg,"bottom-right","info",false);
                return false;
            }

        }
    });
});


$("#AddBrochure").submit(function(e)
{
     //alert("call"); 
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    var formData = new FormData(this);
    $.ajax({
        type: 'POST',
        url : "../includes/adminfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            var data = jQuery.parseJSON(data);
            if(data.valid)
            {
               _toastr(data.msg,"bottom-right","success",false);
                setTimeout(function(){
                         location.href='brochure.php';
                }, 2000);
            }
            else
            {
                _toastr(data.msg,"bottom-right","info",false);
                return false;
            }

        }
    });
});





$("body").on('click', '.DeletePackName', function() {
    var id = $(this).attr("data-id");
    $elm = $( this );
    bootbox.confirm({
        message: "Warning: Are You Sure You Want To Delete Package?",
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback: function (result)
        {
            if(result == true)
            {
                $elm.hide();
                $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
                $.ajax({
                    type: "POST",
                    url: "../includes/adminfunction.php",
                    data: {
                        id : id,
                        type: "DeletePackName"
                    },
                    success: function (data) {
                        $(".submit-loading").remove();
                        $elm.show();
                        var data = jQuery.parseJSON(data);
                        if(data.success)
                        {
                            _toastr(data.message,"bottom-right","success",false);
                            setTimeout(function(){
                                window.location.reload();
                            }, 2000);
                        }
                        else
                        {
                            _toastr(data.message,"bottom-right","error",false);
                            return false;
                        }
                    }
                });
            }
        }
    });
});



$("body").on('click', '.DeleteBrochure', function()
{
    // alert("hi");
    var id = $(this).attr("data-id");
    $elm = $(this);
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    $.ajax({
        type : 'POST',
        url : "../includes/adminfunction.php",
        data :  {
            id : id,
            type : "DeleteBrochure"
        },
        success : function(data)
        {
            $(".submit-loading").remove();
            $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.valid)
            {
                $('#name'+id).hide();
                _toastr(data.message,"bottom-right","success",false);
                setTimeout(function(){
                            window.location.reload(); 
                    }, 2000);
                return false;
            }
            else
            {
                _toastr(data.message,"bottom-right","info",false);
                return false;
            }
            return false;
        }
    });

});




$("body").on('click', '.ApproveID', function() {
    var id = $(this).attr("data-id");
    $elm = $( this );
    bootbox.confirm({
        message: "Warning: Are You Sure You Want To Approve?",
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback: function (result)
        {
            if(result == true)
            {
                $elm.hide();
                $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
                $.ajax({
                    type: "POST",
                    url: "../includes/adminfunction.php",
                    data: {
                        id : id,
                        type: "ApproveID"
                    },
                    success: function (data) {
                        $(".submit-loading").remove();
                        $elm.show();
                        var data = jQuery.parseJSON(data);
                        if(data.success)
                        {
                            _toastr(data.message,"bottom-right","success",false);
                            setTimeout(function(){
                                window.location.reload();
                            }, 2000);
                        }
                        else
                        {
                            _toastr(data.message,"bottom-right","error",false);
                            return false;
                        }
                    }
                });
            }
        }
    });
});

$("body").on('click', '.RejectID', function() {
    var id = $(this).attr("data-id");
    $elm = $( this );
    bootbox.confirm({
        message: "Warning: Are You Sure You Want To Reject?",
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback: function (result)
        {
            if(result == true)
            {
                $elm.hide();
                $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
                $.ajax({
                    type: "POST",
                    url: "../includes/adminfunction.php",
                    data: {
                        id : id,
                        type: "RejectID"
                    },
                    success: function (data) {
                        $(".submit-loading").remove();
                        $elm.show();
                        var data = jQuery.parseJSON(data);
                        if(data.success)
                        {
                            _toastr(data.message,"bottom-right","success",false);
                            setTimeout(function(){
                                window.location.reload();
                            }, 2000);
                        }
                        else
                        {
                            _toastr(data.message,"bottom-right","error",false);
                            return false;
                        }
                    }
                });
            }
        }
    });
});


$("body").on('click', '.ApprovePro', function() {
    var id = $(this).attr("data-id");
    $elm = $( this );
    bootbox.confirm({
        message: "Warning: Are You Sure You Want To Approve?",
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback: function (result)
        {
            if(result == true)
            {
                $elm.hide();
                $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
                $.ajax({
                    type: "POST",
                    url: "../includes/adminfunction.php",
                    data: {
                        id : id,
                        type: "ApprovePro"
                    },
                    success: function (data) {
                        $(".submit-loading").remove();
                        $elm.show();
                        var data = jQuery.parseJSON(data);
                        if(data.success)
                        {
                            _toastr(data.message,"bottom-right","success",false);
                            setTimeout(function(){
                                window.location.reload();
                            }, 2000);
                        }
                        else
                        {
                            _toastr(data.message,"bottom-right","error",false);
                            return false;
                        }
                    }
                });
            }
        }
    });
});

$("body").on('click', '.RejectPro', function() {
    var id = $(this).attr("data-id");
    $elm = $( this );
    bootbox.confirm({
        message: "Warning: Are You Sure You Want To Reject?",
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback: function (result)
        {
            if(result == true)
            {
                $elm.hide();
                $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
                $.ajax({
                    type: "POST",
                    url: "../includes/adminfunction.php",
                    data: {
                        id : id,
                        type: "RejectPro"
                    },
                    success: function (data) {
                        $(".submit-loading").remove();
                        $elm.show();
                        var data = jQuery.parseJSON(data);
                        if(data.success)
                        {
                            _toastr(data.message,"bottom-right","success",false);
                            setTimeout(function(){
                                window.location.reload();
                            }, 2000);
                        }
                        else
                        {
                            _toastr(data.message,"bottom-right","error",false);
                            return false;
                        }
                    }
                });
            }
        }
    });
});