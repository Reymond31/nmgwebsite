<div id="landingpage">
	<div class="overlay">
	<div class="container-fluid">
		<nav class ="navbar navbar-default navbar-fixed-top" role= "navigation">
			<div class="container">
				<div class ="navbar-header">
					<a href="#landingpage"><img src="<?php echo base_url("assets/img/logo.png")?>" class="logo"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#aboutus" class="hvr-grow-shadow"> ABOUT US</a></li>
						<li><a href="#services" class="hvr-grow-shadow">SERVICES</a></li>
						<li><a href="#products" class="hvr-grow-shadow">PRODUCTS</a></li>
						<li><a href="#contactus" class="hvr-grow-shadow">CONTACT US</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	</div>
	<div class="container">
		<div class="welcome">
			<div class="row">
				<div class="col-lg-12 col-xs-12">
					<span class = "nmg"> NMG</span>  RESOURCES INC.
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-xs-6">
					<p class="exp">EXPERTISE ON</p>
				</div>
				<div class="col-lg-6 col-xs-6">
					<div id="testimonials">
            			<div class="slide testimonials" id="firstSlide">
                			<p class="quotations"><b>DEMAND</b></p>
            			</div>
           				<div class="slide testimonials">
                			<p class="quotations"><b>DESIGN</b></p>
           	 			</div>
            			<div class="slide testimonials">
               				<p class="quotations"><b>CODE</b></p>
            			</div>
            			<div class="slide testimonials">
               				<p class="quotations"><b>RESOURCES</b></p>
            			</div>
            		</div>
				</div>
				<div class="arrow-down">
					<a href="#aboutus" class="hvr-icon-down">
  						<i class="fa fa-angle-double-down fa-2x hvr-icon-down:hover hvr-icon hvr-icon-down:focus hvr-icon,hvr-icon-down:active hvr-icon"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="aboutus">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<p class="big" data-aos="flip-down" data-aos-offset="200" data-aos-duration="2000" >We Are <br> NMG</p></div>
			<div class="col-lg-7">
				<p class="small"> NMG's main goal is to promote interactivity, robust functionality as well as user-friendliness through its products and services that meet and satiate every client's expectations accordingly, with full accountability sans errs and delays.<span id="dots">...</span><span id="more">We seriously believe in such proverbial adage that the customer is always right. That's why the company puts the clients at the top of its list, as it aims to meet the clients' utmost standards, helping them facilitate and develop their businesses through its maximized efforts.
				This paragraph contains a lot of lines in the source code, but the browser ignores it. This paragraph contains         a lot of spaces in the source code, but the browser ignores it. Here are many examples of short stories for you to read online. Online has become another leg in our life. WE have to take that into account so that we will go along the growth of the science and technology. Computer has revolutionalised our world. The people have started to see another world. What we were has become history. The twentieth century has become remote history. The IT companies and other computer-based companies have outperformed other traditional companies which have been there for a long time. Accuracy has become the most used word among the people. Telecommunication has become very very cheap affair all over the world. All these achievements are possible because of Computer and the Internet. Reading short stories online has become our favorite pastime. Here are many examples of short stories for you to read online. Online has become another leg in our life.</span></p>

				<button onclick="myFunction()" id="myBtn" style="background-color: #0099ff; 
				padding-bottom: 55px;
   				border: none;
    			color: white;
    			padding: 15px 32px;
    			margin-top: 20px;
    			text-align: left;
    			text-decoration: none;
    			margin-bottom: 30px;
    			font-size: 16px;
    			float:right;">READ MORE</button>

				<script>
				function myFunction() {
  				var dots = document.getElementById("dots");
  				var moreText = document.getElementById("more");
 				var btnText = document.getElementById("myBtn");

  				if (dots.style.display === "none") {
  				dots.style.display = "inline";
    			btnText.innerHTML = "Read more"; 
   				moreText.style.display = "none";
 				} else {
   				 dots.style.display = "none";
   				 btnText.innerHTML = "Read less"; 
   				 moreText.style.display = "inline";
 				 	}
				}
				</script>
			</div>
		</div>
	</div>
</div>
<div id="services">
	<div class="container">
		<p>OUR SERVICES</p>
		<div class="row"><center>
			<div class="col-lg-4">
				<img src="<?php echo base_url("assets/img/gallery.png")?>" class="img-responsive" id="gallery">
				<h3 id="hey">Web Based Database Programming</h3>
				<h5>Simple to complex data structuring, processing and database optimization</h5>
			</div>
			<div class="col-lg-4">
				<img src="<?php echo base_url("assets/img/pen.png")?>" class="img-responsive" id="pen">
				<h3>Website Design</h3>
				<h5>Art and creative direction, graphic and user interface design for individual and corporate website </h5>
			</div>
			<div class="col-lg-4">
				<img src="<?php echo base_url("assets/img/monitoe.png")?>" class="img-responsive" id="monitoe">
				<h3>Website Development</h3>
				<h5>Comprehensive interactive components programming and web scripting services.</h5></center>
			</div>
		</div>
	</div>
</div>
<div id="products">
	<div class="row">
		<div class="container">
			<div class="col-lg-3">
				<p id="general"> HAVE A QUESTION FOR US?</p>
				<button type="button" class="btnc btn-primary btn-login">CONTACT US</button>
			</div>
			<div class="col-lg-3">
				<p id="general"> WANT TO WORK FOR US?</p>
				<button type="button" class="btnc btn-primary btn-login">YOU BETCHA</button>
			</div>
			<div class="col-lg-3">
				<p id="general"> HAVE A PROJECT FOR US?</p>
				<button type="button" class="btnc btn-primary btn-login">TELL US MORE</button>
			</div>
			<div class="col-lg-3">
				<p id="general"> THINGS WONKY ON YOUR SITE?</p>
				<button type="button" class="btnc btn-primary btn-login">ACTIVATE THE BAT SIGNAL</button>
			</div>
		</div>
	</div>
</div>
</div>
<div id="contactus">
	<p id="contacts"> CONTACT US </p>

	<div class="row">
		<div class="container">
			<div class="col-lg-4"><center>
				<img src="<?php echo base_url("assets/img/add.jpg")?>" class="img-responsive" id="gallerys">
				<h5>136 Yakal St., <br>Makati City, 1203 Kalakhang Maynila</h5> 
			</div>
			<div class="col-lg-4">
				<img src="<?php echo base_url("assets/img/call.png")?>" class="img-responsive" id="pens">
				<h5> (02) 576-6505</h5>
			</div>
			<div class="col-lg-4">
				<img src="<?php echo base_url("assets/img/email.png")?>" class="img-responsive" id="monitoes">
				<h5>info@nmgresources.ph </h5>
			</center>
		</div>
	</div>
</div></div>

	<!--	<div style="float:right;" class="col-lg-6">
			<input type="text" value="NAME" class="name">
			<input type="email" value="EMAIL" class="email">
			<select>
				<option>Reason for Contacting NMG Resources</option>
					<option> General Inquiry </option>
					<option> Request a Proposal </option>
					<option> Internship </option>
					<option> Job Application </option>
			</select>
					<textarea>
						Your message here.
					</textarea>
		      <button type="button" class="btna btn-primary btn-login"><b>SUBMIT</b></button>
				

		  </div> -->

		  <center>

		  	<div class="mapouter"><div class="gmap_canvas"><iframe width="1334" height="585" id="gmap_canvas" src="https://maps.google.com/maps?q=136%20yakal%20st.%20makati%2Cphilippines&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div><style>.mapouter{text-align:right;height:585px;width:1334px;}.gmap_canvas {overflow:hidden;background:none!important;height:585px;width:1334px;}</style><small><a href="http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=28532&url=42158&tid1=google3" rel="nofollow"></a></small></div></center>
		  </div>

		</div>
	</div>
</center></div>
</div>

