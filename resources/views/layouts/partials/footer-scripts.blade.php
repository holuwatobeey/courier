
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script>
        $(document).ready(function() {
            // Check if element is scrolled into view
            function isScrolledIntoView(elem) {
              var docViewTop = $(window).scrollTop();
              var docViewBottom = docViewTop + $(window).height();
          
              var elemTop = $(elem).offset().top;
              var elemBottom = elemTop + $(elem).height();
          
              return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
            }
            // If element is scrolled into view, fade it in
            $(window).scroll(function() {
              $('.scroll-animations .animated').each(function() {
                if (isScrolledIntoView(this) === true) {
                //   $(this).addClass('fadeInLeft');
                alert('hello')
                }
              });
            });
          });
            });

            $(window).scroll(function () {
    var offset = $(".scroll-animations").offset().top;

    if ($(window).scrollTop() >= offset) {
        alert("Scrolled!");
    }
});
            </script>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('js/meanmenu.min.js')}}"></script>
        <!-- Owl carousel JS -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- Magnific JS -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Odometer JS -->
        <script src="{{asset('js/odometer.min.js')}}"></script>
        <script src="{{asset('js/jquery.appear.js')}}"></script>
        <!-- Form Validator JS -->
		<script src="{{asset('js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('js/contact-form-script.js')}}"></script>
		<!-- Ajaxchimp JS -->
		<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
        <!--Animate JS -->
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script>
              new WOW().init();
              </script>
        <!-- Custom JS -->
        <script src="{{asset('js/custom.js')}}"></script>
    </body>

<!-- Mirrored from templates.hibootstrap.com/ferry/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Sep 2020 16:30:44 GMT -->
</html>