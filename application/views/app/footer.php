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

$(document).ready(function(){
    $('#firstSlide').fadeIn();
    $('#testimonials .slide');
    setInterval(function(){
        $('#testimonials .slide').filter(':visible').fadeOut(1000,function(){
            if($(this).next('div.slide').size()){
                $(this).next().fadeIn(1000);
            }
            else{
                $('#testimonials .slide').eq(0).fadeIn(1000);
            }
        });
    },1000);  
});

AOS.init();
</script>
</body>
<div class="container-fluid footer">
<footer><p> ALL RIGHTS RESERVED 2018.</p></footer>
</div>
</html>