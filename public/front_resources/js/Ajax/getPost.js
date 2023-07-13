$(document).ready(function(){
   console.log('get post');
});

var page = 1; // Initial page number
  var isLoading = false; // Flag to prevent multiple AJAX requests

  // Function to fetch data using AJAX
  function fetchData() {
    if (isLoading) return; // Prevent multiple requests
    isLoading = true;

    $.ajax({
      url: '/ajax/getpost', // Path to your PHP controller method
      type: 'POST',
      data: { page: page },
      dataType: 'json',
      success: function(response) {
        // Process the response data
        if (response.length > 0) {
          var html = '';

          // Generate HTML for each data item
          response.forEach(function(item) {
            html += '<li class="flex justify-between gap-x-6 py-5">';
            html += '<div class="flex gap-x-4">';
            html += '<img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="' + item.image + '" alt="">';
            html += '<div class="min-w-0 flex-auto">';
            html += '<p class="text-sm font-semibold leading-6 text-gray-900">' + item.username + '</p>';
            html += '<p class="mt-1 truncate text-xs leading-5 text-gray-500">' + item.email + '</p>';
            html += '</div>';
            html += '</div>';
            html += '<div class="hidden sm:flex sm:flex-col sm:items-end">';
            html += '<p class="text-sm leading-6 text-gray-900">' + item.role + '</p>';
            html += '<p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="' + item.lastSeen + '">3h ago</time></p>';
            html += '</div>';
            html += '</li>';
          });

          // Append the new HTML to the existing list
          $('#postList').append(html);

          page++; // Increment the page number for the next request
          isLoading = false;
        }
      }
    });
  }

  // Function to check if the user has reached the bottom of the page
  function isBottomReached() {
    return $(window).scrollTop() + $(window).height() >= $(document).height() - 100;
  }

  // Debounce function to limit the frequency of function calls
  function debounce(func, delay) {
    var timeout;
    return function() {
      clearTimeout(timeout);
      timeout = setTimeout(func, delay);
    };
  }

  // Event listener for the scroll event with debounce mechanism
  $(window).scroll(debounce(function() {
    if (isBottomReached()) {
      fetchData();
    }
  }, 250)); // Adjust the debounce delay (in milliseconds) to your preference

  // Initial data fetch
  fetchData();
