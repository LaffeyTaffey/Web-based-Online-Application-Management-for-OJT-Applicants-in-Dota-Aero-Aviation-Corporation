   // JavaScript to toggle menu
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('nav-bar').classList.toggle('active');
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

        