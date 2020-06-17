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





$("#AddRegister").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  location.href='register1.php';
                }, 3000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});


$("#AddRegister1").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                    location.href=data.url;
                  //location.href='register2.php';
                }, 3000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});

jQuery(document).ready(function($){
$("body").on('change', '#SelectCountry', function()
{
    // alert('Hi');
    var country = $('#SelectCountry').val();
    // console.log(user_id);
    if(country){
        $.ajax ({
        type: 'POST',
        url: 'includes/webfunction.php',
        data: { 
            country: country,
            type : "SelectCountry" 
        },

        success : function(htmlresponse) 
        {
            // alert("hi");
            $('#SelectStates').html(htmlresponse);
        }
    })
}})
});


jQuery(document).ready(function($){
$("body").on('change', '#SelectStates', function()
{
    // alert('Hi');
    var state = $('#SelectStates').val();
    // console.log(user_id);
    if(state){
        $.ajax ({
        type: 'POST',
        url: 'includes/webfunction.php',
        data: { 
            state: state,
            type : "SelectStates" 
        },

        success : function(htmlresponse) 
        {
            // alert("hi");
            $('#SelectCity').html(htmlresponse);
        }
    })
}})
});



$("#AddRegister2").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  //location.href='register3.php';
                  location.href=data.url;
                }, 3000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});

$("#AddRegister3").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  //location.href='register4.php';
                  location.href=data.url;
                }, 3000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});


$("#AddRegister4").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  //location.href='register5.php';
                  location.href=data.url;
                }, 3000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});



$("#AddRegister5").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                    location.href=data.url;
                    //location.href='register6.php';
                }, 3000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});


$("#EditNumber").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                swal(data.message);
                // setTimeout(function(){
                //     //location.href=data.url;
                //     location.href='edit_mobile.php';
                // }, 1000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});

$("#AddRegister6").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  location.href=data.url;
                }, 3000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});


$("#EditNumberOtp").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                swal(data.message);
                setTimeout(function(){
                  location.href=data.url;
                }, 2000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});



$("#AddPhoto").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  //location.href='basic_details.php';
                  location.href=data.url;
                }, 3000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});


$("#UserLogin").submit(function(e)
{
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    
    var formData = new FormData(this);
    $.ajax({
        type: "POST",
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if( data.success==true)
                {
                    swal(data.message);
                    setTimeout(function(){
                    location.href='main.php';
                    }, 2000);
                    return false;
                }
                else
                {
                    swal(data.message);
                    return false;
                }
            }
        });
    });


$("#AddBasicDetails").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  //location.href='per_details.php';
                  location.href=data.url;
                }, 3000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});


$("#AddPersonalDetails").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
                $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  location.href=data.url;
                }, 3000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});



$(document).on('click','#pack_type',function () {
  var pack_type = $('#pack_type').val();
  //alert('hi');
  
  
      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          pack_type : pack_type,
          type : 'ManagePack'
        },
        success : function(data)
        {
          var data = jQuery.parseJSON(data);
          if(data.success)
          {
            //alert(data.data);
            $("#select_div").html(data.data);
            //return false;
          }
          else
          {
            
          }
          return false;
        }
      });
   
});


$(document).on('click','#pack_type1',function () {
  var pack_type1 = $('#pack_type1').val();
  //alert('hi');
  
  
      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          pack_type1 : pack_type1,
          type : 'ManagePack1'
        },
        success : function(data)
        {
          var data = jQuery.parseJSON(data);
          if(data.success)
          {
            //alert(data.data);
            $("#select_div1").html(data.data);
            //return false;
          }
          else
          {
            
          }
          return false;
        }
      });
   
});


$(document).on('click','#pack_type2',function () {
  var pack_type2 = $('#pack_type2').val();
  //alert('hi');
  
  
      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          pack_type2 : pack_type2,
          type : 'ManagePack2'
        },
        success : function(data)
        {
          var data = jQuery.parseJSON(data);
          if(data.success)
          {
            //alert(data.data);
            $("#select_div2").html(data.data);
            //return false;
          }
          else
          {
            
          }
          return false;
        }
      });
   
});


setInterval(function(){ 
  update_age();
}, 100000);

function update_age(){
 
 //alert(uid);
  $.ajax({
      type: "POST",
      url : "includes/webfunction.php",
      data :  {
          /*uid : uid,*/
          type : 'update_age' },
      success: function(resp){ 
        //resp=JSON.parse(resp);
        //alert(resp.data);
        // $(".submit-loading").remove();
        // $elm.show();
         //$(".msg_history123").html(resp.data);          
      }
  });
}


$(document).on('click','#pack_type3',function () {
  var pack_type3 = $('#pack_type3').val();
  //alert('hi');
  
  
      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          pack_type3 : pack_type3,
          type : 'ManagePack3'
        },
        success : function(data)
        {
          var data = jQuery.parseJSON(data);
          if(data.success)
          {
            //alert(data.data);
            $("#select_div3").html(data.data);
            //return false;
          }
          else
          {
            
          }
          return false;
        }
      });
   
});


$("#SearchProfile").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
            $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  location.href='search_view.php';
                }, 1000);
                
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});


$("#SearchProfileAdvance").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
            $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  location.href='search_view.php';
                }, 1000);
                
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});


$("#SearchProfileKey").submit(function(e)
{
     
    e.preventDefault();
    $elm=$(".btn-submit");
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    //$("#description").text($("#description").code());
    var formData = new FormData(this);
    
    $.ajax({
        type: 'POST',
        url : "includes/webfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            $(".submit-loading").remove();
            $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.success)
            {
                //swal(data.message);
                setTimeout(function(){
                  location.href='search_view.php';
                }, 1000);
                
            }
            else{
                swal(data.message);
                return false;
            } 
        }
    });
});


jQuery(document).ready(function($){
    $(document).ready(function(){
        $("#AddPartnerDetails").submit(function(e)
        {
             
            e.preventDefault();
            $elm=$(".btn-submit");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
            //$("#description").text($("#description").code());
            var formData = new FormData(this);
            
            $.ajax({
                type: 'POST',
                url : "includes/webfunction.php",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $(".submit-loading").remove();
                        $elm.show();
                    var data = jQuery.parseJSON(data);
                    if(data.success)
                    {
                        //swal(data.message);
                        setTimeout(function(){
                          //location.href='main.php';
                          location.href=data.url;
                        }, 3000);
                    }
                    else{
                        swal(data.message);
                        return false;
                    } 
                }
            });
        });
    });
});

jQuery(document).ready(function($){
$(document).on('click','.SendInterest',function () {
  var u_id = $(this).attr("u_id");
  var profile_id = $(this).attr("profile_id");
  //alert('hi');
  
  
      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          u_id : u_id,
          profile_id : profile_id,
          type : 'SendInterest'
        },
        success : function(data)
        {
          var data = jQuery.parseJSON(data);
          if(data.success)
            {
                swal(data.message);
                setTimeout(function(){
                  window.location.reload(); 
                }, 2000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
        });
    });
});

jQuery(document).ready(function($){
$(document).on('click','.Shortlist',function () {
  var u_id = $(this).attr("u_id");
  var profile_id = $(this).attr("profile_id");
  //alert('hi');
  
  
      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          u_id : u_id,
          profile_id : profile_id,
          type : 'Shortlist'
        },
        success : function(data)
        {
          var data = jQuery.parseJSON(data);
          if(data.success)
            {
                swal(data.message);
                setTimeout(function(){
                  window.location.reload(); 
                }, 2000);
            }
            else{
                swal(data.message);
                return false;
            } 
        }
      });
    });
});

jQuery(document).ready(function($){
$(document).on('click','.AcceptInterest',function () {
  var u_id = $(this).attr("u_id");
  var profile_id = $(this).attr("profile_id");
  swal({
    title: "Are you sure?",
    text: "you want to accept interest!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          u_id : u_id,
          profile_id : profile_id,
          type : 'AcceptInterest'
        },
        success : function(data)
        {
          var data = jQuery.parseJSON(data);
          if(data.success)
          {
            swal(data.message);
            setTimeout(function(){
              location.reload();
            }, 2000);
            return false;
          }
          else
          {
            swal(data.message);
            return false;
          }
          return false;
        }
      });
    }
  }); 
   
});
});


jQuery(document).ready(function($){
$(document).on('click','.RejectInterest',function () {
  var profile_id = $(this).attr("profile_id");
  swal({
    title: "Are you sure?",
    text: "you want to reject interest!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          profile_id : profile_id,
          type : 'RejectInterest'
        },
        success : function(data)
        {
          var data = jQuery.parseJSON(data);
          if(data.success)
          {
            swal(data.message);
            setTimeout(function(){
              location.reload();
            }, 2000);
            return false;
          }
          else
          {
            swal(data.message);
            return false;
          }
          return false;
        }
      });
    }
  }); 
   
});
});


jQuery(document).ready(function($){
$(document).on('click','.Viewlist',function () {
  var u_id = $(this).attr("u_id");
  var profile_id = $(this).attr("profile_id");
  //alert('hi');
  
  
      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          u_id : u_id,
          profile_id : profile_id,
          type : 'Viewlist'
        },
        success : function(data)
        {
          var data = jQuery.parseJSON(data);
          if(data.success)
            {
                //swal(data.message);
            }
            else{
                //swal(data.message);
                return false;
            } 
        }
      });
    });
});



$(document).on('click','.EditRegister1',function () {
  var data_id = $(this).attr("data-id");

      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          data_id : data_id,
          type : 'EditRegister1'
        },
        success : function(data)
        {
          var resp = jQuery.parseJSON(data);
          if(resp.success)
          {
            $("#b_day").val(resp.data.b_day);
            $('#b_year').val(resp.data.b_year);
            $('#b_month').val(resp.data.b_month);
            $('#gender').val(resp.data.gender);
            $('#religion').val(resp.data.religion);
            $('#mother_tongue').val(resp.data.mother_tongue);
            $('#register1_id').val(resp.data.register1_id);
            
          }
          else{
            //swal(resp.message);
          } 
        }
      });
  });

$(document).on('click','.EditRegister2',function () {
  var data_id = $(this).attr("data-id");

      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          data_id : data_id,
          type : 'EditRegister2'
        },
        success : function(data)
        {
          var resp = jQuery.parseJSON(data);
          if(resp.success)
          {
            $("#gotra").val(resp.data.gotra);
            $("#caste").val(resp.data.caste);
            $("#dosh_div").html(resp.data_new);
            $('#country_div').html(resp.data_new1);
            $('#state_div').html(resp.data_new2);
            $('#city_div').html(resp.data_new3);
            $('#pincode').val(resp.data.pincode);
            $('#register2_id').val(resp.data.register2_id);
            
          }
          else{
            //swal(resp.message);
          } 
        }
      });
  });


$(document).on('click','.EditRegister3',function () {
  var data_id = $(this).attr("data-id");

      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          data_id : data_id,
          type : 'EditRegister3'
        },
        success : function(data)
        {
          var resp = jQuery.parseJSON(data);
          if(resp.success)
          {
            $("#height").val(resp.data.height);
            $("#marital_div").html(resp.data_new);
            $('#family_s_div').html(resp.data_new1);
            $('#family_t_div').html(resp.data_new2);
            $('#main_div').html(resp.data_new3);
            $('#register3_id').val(resp.data.register3_id);
            
          }
          else{
            //swal(resp.message);
          } 
        }
      });
  });

$(document).on('click','.EditRegister4',function () {
  var data_id = $(this).attr("data-id");

      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          data_id : data_id,
          type : 'EditRegister4'
        },
        success : function(data)
        {
          var resp = jQuery.parseJSON(data);
          if(resp.success)
          {
            $("#height").val(resp.data.height);
            $("#caste").val(resp.data.caste);
            $("#emp_id").html(resp.data_new);
            $('#country').val(resp.data.country);
            $('#education').val(resp.data.education);
            $('#occupation').val(resp.data.occupation);
            $('#income').val(resp.data.income);
            $('#register4_id').val(resp.data.register4_id);
            
          }
          else{
            //swal(resp.message);
          } 
        }
      });
  });


$(document).on('click','.EditOther',function () {
  var data_id = $(this).attr("data-id");

      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          data_id : data_id,
          type : 'EditOther'
        },
        success : function(data)
        {
          var resp = jQuery.parseJSON(data);
          if(resp.success)
          {
            $("#body_type").html(resp.data_new);
            $("#test_div").html(resp.data_new1);
            $("#family_loc").html(resp.data_new2);
            $("#weight").val(resp.data.weight);
            $("#college").val(resp.data.college);
            $('#organization').val(resp.data.organization);
            $('#star').val(resp.data.star);
            $('#raasi').val(resp.data.raasi);
            $('#father_occu').val(resp.data.father_occu);
            $('#mother_occu').val(resp.data.mother_occu);      
            $('#brother').val(resp.data.brother);
            $('#brother_married').val(resp.data.brother_married);
            $('#sister').val(resp.data.sister);
            $('#sister_married').val(resp.data.sister_married);
            $('#parents_mobile').val(resp.data.parents_mobile);
            $('#parents_mobile1').val(resp.data.parents_mobile1);
            $('#parents_mobile2').val(resp.data.parents_mobile2);
            $('#ancestral').val(resp.data.ancestral);


            $('#basic_id').val(resp.data.basic_id);
            
          }
          else{
            //swal(resp.message);
          } 
        }
      });
  });


$(document).on('click','.EditLife',function () {
  var data_id = $(this).attr("data-id");

      $.ajax({
        type : 'POST',
        url : 'includes/webfunction.php',
        data :  {
          data_id : data_id,
          type : 'EditLife'
        },
        success : function(data)
        {
          var resp = jQuery.parseJSON(data);
          if(resp.success)
          {
            $("#hob_div").html(resp.data_new);
            $("#cuisine_div").html(resp.data_new1);
            $("#all_div").html(resp.data_new11);
            $('#personal_id').val(resp.data.personal_id);
            
          }
          else{
            //swal(resp.message);
          } 
        }
      });
  });


jQuery(document).ready(function($){
$('body').on('hidden.bs.modal', '#basic-modal-edit', function () {
$(this)
      setTimeout(function(){
        window.location.reload();
      }, 1000);
    });
});


jQuery(document).ready(function($){
    $(document).ready(function(){
        $("#AddIDBadge").submit(function(e)
        {
             
            e.preventDefault();
            $elm=$(".btn-submit");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
            //$("#description").text($("#description").code());
            var formData = new FormData(this);
            
            $.ajax({
                type: 'POST',
                url : "includes/webfunction.php",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $(".submit-loading").remove();
                        $elm.show();
                    var data = jQuery.parseJSON(data);
                    if(data.success)
                    {
                        //swal(data.message);
                        setTimeout(function(){
                          location.href='main.php';
                          //location.href=data.url;
                        }, 3000);
                    }
                    else{
                        swal(data.message);
                        return false;
                    } 
                }
            });
        });
    });
});


jQuery(document).ready(function($){
    $(document).ready(function(){
        $("#AddProBadge").submit(function(e)
        {
             
            e.preventDefault();
            $elm=$(".btn-submit");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
            //$("#description").text($("#description").code());
            var formData = new FormData(this);
            
            $.ajax({
                type: 'POST',
                url : "includes/webfunction.php",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $(".submit-loading").remove();
                        $elm.show();
                    var data = jQuery.parseJSON(data);
                    if(data.success)
                    {
                        //swal(data.message);
                        setTimeout(function(){
                          location.href='main.php';
                          //location.href=data.url;
                        }, 3000);
                    }
                    else{
                        swal(data.message);
                        return false;
                    } 
                }
            });
        });
    });
});

jQuery(document).ready(function($){
    $(document).ready(function(){
        $("#AddTransaction").submit(function(e)
        {
             
            e.preventDefault();
            $elm=$(".btn-submit");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
            //$("#description").text($("#description").code());
            var formData = new FormData(this);
            
            $.ajax({
                type: 'POST',
                url : "includes/webfunction.php",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $(".submit-loading").remove();
                        $elm.show();
                    var data = jQuery.parseJSON(data);
                    if(data.success)
                    {
                        swal(data.message);
                        setTimeout(function(){
                          location.href='main.php';
                        }, 2000);
                    }
                    else{
                        swal(data.message);
                        return false;
                    } 
                }
            });
        });
    });
});


jQuery(document).ready(function($){
    $(document).ready(function(){
        $("#AddFeedback").submit(function(e)
        {
             
            e.preventDefault();
            $elm=$(".btn-submit");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
            //$("#description").text($("#description").code());
            var formData = new FormData(this);
            
            $.ajax({
                type: 'POST',
                url : "includes/webfunction.php",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $(".submit-loading").remove();
                        $elm.show();
                    var data = jQuery.parseJSON(data);
                    if(data.success)
                    {
                        swal(data.message);
                        setTimeout(function(){
                          location.href='main.php';
                        }, 2000);
                    }
                    else{
                        swal(data.message);
                        return false;
                    } 
                }
            });
        });
    });
});


jQuery(document).ready(function($){
    $(document).ready(function(){
        $("#UpdateEmail").submit(function(e)
        {
             
            e.preventDefault();
            $elm=$(".btn-submit");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
            //$("#description").text($("#description").code());
            var formData = new FormData(this);
            
            $.ajax({
                type: 'POST',
                url : "includes/webfunction.php",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $(".submit-loading").remove();
                        $elm.show();
                    var data = jQuery.parseJSON(data);
                    if(data.success)
                    {
                        swal(data.message);
                        setTimeout(function(){
                          location.href='profsetting.php';
                        }, 2000);
                    }
                    else{
                        swal(data.message);
                        return false;
                    } 
                }
            });
        });
    });
});



jQuery(document).ready(function($){
    $(document).ready(function(){
        $("#ChangePass").submit(function(e)
        {
             
            e.preventDefault();
            $elm=$(".btn-submit");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
            //$("#description").text($("#description").code());
            var formData = new FormData(this);
            
            $.ajax({
                type: 'POST',
                url : "includes/webfunction.php",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $(".submit-loading").remove();
                        $elm.show();
                    var data = jQuery.parseJSON(data);
                    if(data.success)
                    {
                        swal(data.message);
                        setTimeout(function(){
                          location.href='profsetting.php';
                        }, 2000);
                    }
                    else{
                        swal(data.message);
                        return false;
                    } 
                }
            });
        });
    });
});



jQuery(document).ready(function($){
    $(document).ready(function(){
        $("#ForgotPassword").submit(function(e)
        {
             
            e.preventDefault();
            $elm=$(".btn-submit");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
            //$("#description").text($("#description").code());
            var formData = new FormData(this);
            
            $.ajax({
                type: 'POST',
                url : "includes/webfunction.php",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $(".submit-loading").remove();
                        $elm.show();
                    var data = jQuery.parseJSON(data);
                    if(data.success)
                    {
                        swal(data.message);
                        setTimeout(function(){
                          location.href='index.php';
                        }, 2000);
                    }
                    else{
                        swal(data.message);
                        return false;
                    } 
                }
            });
        });
    });
});




jQuery(document).ready(function($){
    $(document).ready(function(){
        $("#SearchFrontProfile").submit(function(e)
        {
             
            e.preventDefault();
            $elm=$(".btn-submit");
            $elm.hide();
            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
            //$("#description").text($("#description").code());
            var formData = new FormData(this);
            
            $.ajax({
                type: 'POST',
                url : "includes/webfunction.php",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $(".submit-loading").remove();
                    $elm.show();
                    var data = jQuery.parseJSON(data);
                    if(data.success)
                    {
                        //swal(data.message);
                        setTimeout(function(){
                          location.href='search_view1.php';
                        }, 1000);
                        
                    }
                    else{
                        swal(data.message);
                        return false;
                    } 
                }
            });
        });
    });
});


