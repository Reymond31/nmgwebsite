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
        $('#return-to-top').fadeIn();
        $('#down-to-scroll').fadeOut();    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut();
        $('#down-to-scroll').fadeIn();   // Else fade out the arrow
    }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

$(window).ready(function() {
    if ($(this).scrollTop() > 0) {        // If page is scrolled more than 50px
            $('#scroll-down').fadeIn();    // Fade in the arrow
        } 
        else {
            $('#scroll-down').fadeIn();   // Else fade out the arrow
        }
    });

    
$(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {        // If page is scrolled more than 50px
        $('#scroll-up').fadeIn();
        $('#scroll-down').fadeOut();    // Fade in the arrow
    } else {
        $('#scroll-up').fadeOut();
        $('#scroll-down').fadeIn();   // Else fade out the arrow
    }
    });
    $('#scroll-up').click(function() {      // When arrow is clicked
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

$('a[data-slide="prev"]').click(function() {
  $('#myCarousel').carousel('prev');
});

$('a[data-slide="next"]').click(function() {
  $('#myCarousel').carousel('next');
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

var slideIndex = [1,1,1,1,1];
var slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4","mySlides5"]
showDivs(1, 0);
showDivs(1, 1);
showDivs(1, 2);
showDivs(1, 3);
showDivs(1, 4);

function plusDivs(n, no) {
  showDivs(slideIndex[no] += n, no);
}

function showDivs(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}

AOS.init();
</script>
</body>
<div class="container-fluid footer">
<footer><p>2018 © NMG(NMGResources.Inc). All rights reserved.</p></footer>
</div>
</html>