<script>
$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});

$(window).ready(function() {
    if ($(this).scrollTop() === 0) {        // If page is scrolled more than 50px
            $('#down-to-scroll').fadeIn();    // Fade in the arrow
        } 
        else {
            $('#down-to-scroll').fadeOut();   // Else fade out the arrow
        }
    });
    
$(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn();    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut();   // Else fade out the arrow
    }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

// $(document).ready(function(){
//     $('#firstSlide').fadeIn();
//     $('#testimonials .slide');
//     setInterval(function(){
//         $('#testimonials .slide').filter(':visible').fadeOut(1000,function(){
//             if($(this).next('div.slide').size()){
//                 $(this).next().fadeIn(1000);
//             }
//             else{
//                 $('#testimonials .slide').eq(0).fadeIn(1000);
//             }
//         });
//     },1000);  
// });
$(document).ready(function() {
        $('a[href*=#]').bind('click', function(e) {
                e.preventDefault(); // prevent hard jump, the default behavior

                var target = $(this).attr("href"); // Set the target as variable

                // perform animated scrolling by getting top-position of target-element and set it as scroll target
                $('html, body').stop().animate({
                        scrollTop: $(target).offset().top
                }, 600, function() {
                        location.hash = target; //attach the hash (#jumptarget) to the pageurl
                });

                return false;
        });
});

$(window).scroll(function() {
        var scrollDistance = $(window).scrollTop();

        // Show/hide menu on scroll
        if (scrollDistance >= 50) {
              $('nav').fadeIn("fast");
        } else {
             $('nav').fadeOut("fast");
        }
    
        // Assign active class to nav links while scolling
        $('page-section').each(function(i) {
                if ($(this).position().top <= scrollDistance) {
                        $('navigation a.active').removeClass('active');
                        $('navigation a').eq(i).addClass('active');
                }
        });
}).scroll();

AOS.init();
</script>
</body>
<div class="container-fluid footer">
<footer><p> ALL RIGHTS RESERVED 2018.</p></footer>
</div>
</html>