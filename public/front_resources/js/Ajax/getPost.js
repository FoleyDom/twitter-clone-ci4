$(document).ready(function () {
   console.log("getPost.js");

   var limit = 10; // Number of posts to load per request
   var offset = 0; // Initial offset

   // Function to load more posts
   function loadPosts() {
      $.ajax({
         url: "ajax/getPost.php",
         type: "POST",
         data: {
            limit: limit,
            offset: offset
         },
         success: function (data) {
            var posts = JSON.parse(data);

            posts.forEach(function (post) {
               // Generate HTML for each post and append it to the postList container
               // ...
               var listItem = '<li class="flex justify-between gap-x-6 py-5">' +
                  '<div class="flex gap-x-4">' +
                  '<img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">' +
                  '<div class="min-w-0 flex-auto">' +
                  '<p class="text-sm font-semibold leading-6 text-gray-900">' + post.username + '</p>' +
                  '<p class="mt-1 truncate text-xs leading-5 text-gray-500">' + post.content + '</p>' +
                  '</div>' +
                  '</div>' +
                  '<div class="hidden sm:flex sm:flex-col sm:items-end">' +
                  '<p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>' +
                  '<p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="' + post.date + '">3h ago</time></p>' +
                  '</div>' +
                  '</li>';

               $("#postList").append(listItem);
            });

            // Increment the offset for the next request
            offset += limit;
         }
      });
   }

   // Initial load of posts
   loadPosts();

   // Infinite scroll
   $(window).scroll(function () {
      if ($(window).scrollTop() + $(window).innerHeight() >= $(document).scrollHeight) {
         loadPosts();
      }
   });
});
