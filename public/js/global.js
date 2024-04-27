document.addEventListener("DOMContentLoaded", function() {
    // Delay the application of fade-in class
    setTimeout(function() {
        // Get all elements with the class 'fade-in'
        var elements = document.querySelectorAll('.fade-in');
        // Loop through each element and add the fade-in class
        for (var i = 0; i < elements.length; i++) {
            elements[i].classList.add('fade-in');
        }
    }, 500);
});
