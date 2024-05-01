// JavaScript to toggle menu
document.getElementById('menu-toggle').addEventListener('click', function () {
    var navBar = document.getElementById('nav-bar');
    if (navBar.classList.contains('active')) {
        navBar.classList.remove('active');
        navBar.classList.add('reverse-active');
        setTimeout(function () {
            navBar.classList.remove('reverse-active');
        }, 300); // Adjust the timeout to match animation duration
    } else {
        navBar.classList.add('active');
    }
});



    // JavaScript to handle smooth scrolling animation and close the hamburger menu for internal links
        document.addEventListener('DOMContentLoaded', function () {
            var navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(function (navLink) {
                navLink.addEventListener('click', function (event) {
                    // Check if the href starts with '#' (internal link)
                    if (this.getAttribute('href').startsWith('#')) {
                        event.preventDefault();
                        var targetId = this.getAttribute('href').substring(1);
                        var targetElement = document.getElementById(targetId);
                        if (targetElement) {
                            var headerOffset = document.getElementById('header').offsetHeight;
                            var targetOffset = targetElement.offsetTop - headerOffset;
                            window.scrollTo({
                                top: targetOffset,
                                behavior: 'smooth'
                            });
                            // Close the hamburger menu
                            document.getElementById('nav-bar').classList.remove('active');
                        }
                    }
                });
            });
        });

document.querySelectorAll('.dropdown > a').forEach(function(item) {
    item.addEventListener('click', function(event) {
        event.preventDefault();
        var dropdownMenu = item.nextElementSibling;
        if (dropdownMenu.style.display === 'block') {
            dropdownMenu.style.display = 'none';
        } else {
            dropdownMenu.style.display = 'block';
        }
    });
});


// menu arrow indc

