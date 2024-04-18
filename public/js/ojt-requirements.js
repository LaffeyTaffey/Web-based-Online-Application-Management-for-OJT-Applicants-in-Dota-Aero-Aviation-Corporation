var current_slide, next_slide, previous_slide;
var left, opacity, scale;
var animation;

var error = false;


// first step validation
$(".fs_next_btn").click(function() {
    var error = false; // Reset error variable

    // Check if the checkbox is checked
    if (!$(".checkbox input[type='checkbox']").prop("checked")) {
        alert('Please consent to the collection, use, and processing of your personal data.');
        error = true;
    }

    // Proceed to next step if no errors
    if (!error) {
        performAnimation();
    }
});

// Animation function
// Animation function
function performAnimation() {
    if (animation) return false;
    animation = true;

    var current_slide = $(".multistep-box:visible");
    var next_slide = current_slide.next(".multistep-box");

    if (next_slide.length === 0) {
        // No next slide found
        return false;
    }

    $("#progress_header li").eq($(".multistep-box").index(next_slide)).addClass("active");

    next_slide.show();
    current_slide.animate({
        opacity: 0
    }, {
        step: function(now, mx) {
            var scale = 1 - (1 - now) * 0.2;
            var left = (now * 50) + "%";
            var opacity = 1 - now;
            current_slide.css({
                'transform': 'scale(' + scale + ')'
            });
            next_slide.css({
                'left': left,
                'opacity': opacity
            });
        },
        duration: 800,
        complete: function() {
            current_slide.hide();
            animation = false;
        },
        easing: 'easeInOutBack'
    });
}


// Step 2 - Next button click event
$(".ss_next_btn").click(function() {
    performAnimation();
});

// previous
$(".previous").click(function() {
    if (animation) return false;
    animation = true;

    current_slide = $(this).parent().parent();
    previous_slide = $(this).parent().parent().prev();

    $("#progress_header li").eq($(".multistep-box").index(current_slide)).removeClass("active");

    previous_slide.show();
    current_slide.animate({
        opacity: 0
    }, {
        step: function(now, mx) {
            scale = 0.8 + (1 - now) * 0.2;
            left = ((1 - now) * 50) + "%";
            opacity = 1 - now;
            current_slide.css({
                'left': left
            });
            previous_slide.css({
                'transform': 'scale(' + scale + ')',
                'opacity': opacity
            });
        },
        duration: 800,
        complete: function() {
            current_slide.hide();
            animation = false;
        },
        easing: 'easeInOutBack'
    });
});





