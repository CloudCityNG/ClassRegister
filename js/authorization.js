 $(document).ready(function(){
  
  //Checking user
  $('#login_form').on('submit', 
    function(){
      event.preventDefault();
      $.ajax({
        url: "../log/checkUser.php",
        type: "POST",
        data: ({password: $('#login_form input[name = "password"]').val(),
                groupName: $('#login_form input[name = "groupName"]').val()}),
        dataType: "html",
        success: function(data){
          if(data){
            $('#login_form div:nth-child(2)').addClass("has-danger");
            $('#login_form div:nth-child(3)').addClass("has-danger");
            $("#error_messages").text(data);
            $("#error_messages").slideDown();
          }
          else
            $('#login_form').unbind('submit');
            
          $('#login_form').submit();
        }
      });      
    });
  
  //Remove danger from inputs
  $('#login_form input').on('blur', 
    function(){
      $('#login_form div:nth-child(2)').removeClass("has-danger");
      $('#login_form div:nth-child(3)').removeClass("has-danger");
    });
})