<?php
echo '
<footer id="footer">

	<!-- .footer start -->
	<!-- ================ -->
	<div class="footer section">
		<div class="container">
			<h1 class="title text-center" id="contact">Hubungi Kami</h1>
			<div class="space"></div>
			<div class="row">
				<div class="col-sm-6">
					<div class="footer-content">
						<p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nam magnam natus tempora cumque, aliquam deleniti voluptatibus voluptas. Repellat vel, et itaque commodi iste ab, laudantium voluptas deserunt nobis.</p>
						<ul class="list-icons">
							<li><i class="fa fa-map-marker pr-10"></i> One infinity loop, 54100</li>
							<li><i class="fa fa-phone pr-10"></i> +00 1234567890</li>
							<li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li>
							<li><i class="fa fa-envelope-o pr-10"></i> your@email.com</li>
						</ul>
						<ul class="social-links">
							<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
							<li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
							<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
							<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
							<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
							<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
							<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
							<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="footer-content">
						<form role="form" id="footer-form">
							<div class="form-group has-feedback">
								<label class="sr-only" for="name2">Name</label>
								<input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label class="sr-only" for="email2">Email address</label>
								<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
								<i class="fa fa-envelope form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label class="sr-only" for="message2">Message</label>
								<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
								<i class="fa fa-pencil form-control-feedback"></i>
							</div>
							<input type="submit" value="Send" class="btn btn-default">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .footer end -->

	<!-- .subfooter start -->
	<!-- ================ -->
	<div class="subfooter">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center">Copyright © 2014 Worthy by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- .subfooter end -->

</footer>
<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="'.root.'assets/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="'.root.'assets/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="'.root.'assets/plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="'.root.'assets/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="'.root.'assets/plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="'.root.'assets/plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="'.root.'assets/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="'.root.'assets/js/custom.js"></script>

	</body>
	</html>
';
?>