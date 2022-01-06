$('.signup').click(function(e){
    console.log("uhgj");
    var name= document.getElementById('name').value;
var email= document.getElementById('email').value;
var password= document.getElementById('password').value;
var city = document.getElementById('city').value;

var details = {
    'name':name,
    'email':email,
    'password':password,
    'city':city,
};
   e.preventDefault();
    if(name==''){
        $('#nameerr').css('display','inline');
    }else{
        $('#nameerr').css('display','none');
    }
    if(email==''){
        $('#emailerr').css('display','inline');
    }else{
        $('#emailerr').css('display','none');
    }
    if(password==''){
        $('#pwderr').css('display','inline');
    }else{
        $('#pwderr').css('display','none');
    }
    if(city==''){
        $('#cityerr').css('display','inline');
    }else{
        $('#cityerr').css('display','none');
    }
    if(name!='' && email!='' && password!='' && city!=''){
        $.ajax({
            type:'POST',
            url:'insert.php',
            data:details,
            success:function(data){
                $('#msg').html(data); 
                setTimeout (function(data){
                   if(data=="email allready exide")
                    window.location.href='ui_login.php';

                },2000,data) ;        
  
                
            }
           
        });
        $("#js")[0].reset();
    }
    
});
$("#eye").click(function () {

    if ($("#password").attr("type")== "password")
    { 
        $("#password").attr("type", "text");
    } else
    {
        $("#password").attr("type", "password");
    }
});