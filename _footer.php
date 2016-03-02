    <?php include '_app.php'; ?>


</div>
<!-- end main container -->

<div class="footer">
    <div class="footer_ele">
        <p>Stay Connected</p>
        <div id="soc_media">
            <a href="https://www.facebook.com/pages/The-Dayspring-Center-for-Laser-Dentistry/56963027218" target="_blank">
        <img src="img/dsd_nav_fb.png" alt="Dayspring Facebook"></a>

            <a href="https://plus.google.com/101419935376583771841/about?hl=en" target="_blank"><img src="img/dsd_nav_gp.png" alt="Dayspring Google Plus"></a>
            
            <a href="https://21centurydentistry.wordpress.com/" target="_blank"><img src="img/dsd_nav_blog.jpg" alt="21 century dentistry blog"></a>
        </div>
    </div>
    <div class="footer_add"><a href="dir.php">
        <div itemscope itemtype="http://schema.org/Dentist">
        <span itemprop="name">Dayspring Laser Dentistry</span>
            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">188 Fries Mill Rd E2</span>
            <span itemprop="addressLocality">Turnersville</span>,
            <span itemprop="addressRegion">NJ</span>
            <span itemprop="postalCode">08012</span>
            </div>
        Phone: <span itemprop="telephone">(856) 875-8400</span><br>
            Emergency: (609) 221-2964<br>
        <a href="https://www.google.com/maps/place/Dayspring+Laser+Dentistry/@39.737041,-75.046868,17z/data=!3m1!4b1!4m2!3m1!1s0x89c6d40f28b3711b:0xde0df57cc19a75db?hl=en" itemprop="maps">View on Maps</a> 
        </div>
    
    </div>

</div>
<!-- end of footer container -->
<div id="copyright"><p>©2016 Day Spring Laser Dentistry</p></div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/smileslider.js"></script>
<script src="js/ss.js"></script>
<script src="//bestlocalreviews.com/widget/script.js?type=basic;user=5273;style=basic;count=0;target=0;employee=0" type="text/javascript" ></script>
    

<!-- responsive nav -->
<script>
	(function() {

		// Create mobile element
		var mobile = document.createElement('div');
		mobile.className = 'nav-mobile';
		document.querySelector('.nav').appendChild(mobile);

		// hasClass
		function hasClass(elem, className) {
			return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
		}

		// toggleClass
		function toggleClass(elem, className) {
			var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
			if (hasClass(elem, className)) {
				while (newClass.indexOf(' ' + className + ' ') >= 0) {
					newClass = newClass.replace(' ' + className + ' ', ' ');
				}
				elem.className = newClass.replace(/^\s+|\s+$/g, '');
			} else {
				elem.className += ' ' + className;
			}
		}

		// Mobile nav function
		var mobileNav = document.querySelector('.nav-mobile');
		var toggle = document.querySelector('.nav-list');
		mobileNav.onclick = function() {
			toggleClass(this, 'nav-mobile-open');
			toggleClass(toggle, 'nav-active');
		};
	})();
</script>

<!-- form info -->
<script>
	$(document).ready(function() {
		$(".req").hide();
	});
</script>

<!-- google analitics -->
<script>
	(function(i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function() {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
		m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-57604714-1', 'auto');
	ga('send', 'pageview');
</script>


</body>
</html>