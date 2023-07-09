$(document).ready(function(){
   console.log("getPost.js");
   // Get the post
   $("#getPost").click(function(){
      $.ajax({
         url: "getPost",
         type: "POST",
         data: {
            id: $("#id").val()
         },
         success: function(data){
            $("#post").html(data);
         }
      });
   }
   ); 
});