$('.signup').click(function(e){
    e.preventDefault();
  
  var email= document.getElementById('email').value;
  var password= document.getElementById('password').value;
  
  
  var details = {
  
    'email':email,
    'password':password,
  
  };
   
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
   
    if( email!='' && password!=''){
        $.ajax({
            type:'POST',
            url:'select_login.php',
            data:details,
            success:function(datas){

                
                if(datas == "success"){
                    window.location.href='ui_home_screen.php';
                }else{
                   $('#msg').html(datas);
                  
                }
                
            }
           
        });
        $("#js")[0].reset();
    }
    
  });