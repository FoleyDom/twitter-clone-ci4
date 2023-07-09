// infinte scroll
$(document).ready(function() {
   console.log("scroll.js");
});

$(window).scroll(function() {
   if ($(window).scrollTop() == $(document).height() - $(window).height()) {
      // ajax call get data from server and append to the div
      var last_id = $('.post:last').attr('id');
      console.log(last_id);
      $.ajax({
         url: '/posts/scroll/' + last_id,
         type: 'get',
         dataType: 'json',
         success: function(response) {
            console.log(response);
            if (response != '') {
               $('.post:last').after(response);
            }
         }
      });
   }
});