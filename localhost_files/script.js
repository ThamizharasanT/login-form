
$(document).ready( function(){
    $(document).on("click","#btn",function(e){
        $isvalid=true;
      
    $(document).on("focusin","#fname",function(){
$("#err").hide();
    });
   

    $(document).on("focusout","#fname",function(){
        $fname=$(this).val();
        if($fname===""){
            $isvalid=false;
        $("#err").show();
  
   }else{
    
        $("#err").hide();
            
   }
});
   
});
if($isvalid==false){
    e.preventDefault();  
}else{
    console.log("$fname");
}

});

// $(document).ready(function(){
//     $fname="";
//     $(document).on("focusin","#fname",function(){
// $("#err").hide();
//     });
//     $(document).on("focusout","#fname",function(){

// $fname=$(this).val();
// if($fname===""){
// $("#err").show();
// }else{
//     $("#err").hide();
// }

//     });
// });