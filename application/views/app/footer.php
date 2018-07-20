
<footer> <p> ALL RIGHTS RESERVED 2018.</p>
</footer>

<script>
	$(window).scroll(function(){
		$('nav').toggleClass('scrolled', $(this).scrollTop() > 500);
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
</html>