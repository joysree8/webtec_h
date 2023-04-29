function validateEmail(emailField){
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

  if (reg.test(emailField.value) == false) 
  {
    $("#message").html("<li>Invalid Email Address</li>");
    return false;
  }
  $("#message").html("");
    return true;
}

$(document).ready(function(){
  $("#checkValidation").click(function(){
    var username = $("#userEmail").val().trim();
    var password = $("#userPassword").val().trim();
    $.ajax({
      url:'showData.php',
      type:'post',
      data:{username:username,password:password},
      success:function(response){
        $("#message").html(response);
      }
    });
  });
});