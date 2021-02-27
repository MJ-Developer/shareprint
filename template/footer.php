<!-- [ Start ] Footer -->
    <footer id="dk-footer" class="dk-footer mt-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="dk-footer-box-info">
                            <p class="footer-info-text">
                            Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
                            </p>
                            <div class="footer-social-link">
                                <h3>Follow us</h3>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Social link -->
                        </div>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-us">
                                    <div class="contact-icon">
                                        <i class="fa fa-map-o" aria-hidden="true"></i>
                                    </div>
                                    <!-- End contact Icon -->
                                    <div class="contact-info">
                                        <h3>Madura</h3>
                                        <p>Jalan raya bogor selatan belok kanan</p>
                                    </div>
                                    <!-- End Contact Info -->
                                </div>
                                <!-- End Contact Us -->
                            </div>
                            <!-- End Col -->
                            <div class="col-md-6">
                                <div class="contact-us contact-us-last">
                                    <div class="contact-icon">
                                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                    </div>
                                    <!-- End contact Icon -->
                                    <div class="contact-info">
                                        <h3>+6289</h3>
                                        <p>Give us a call</p>
                                    </div>
                                    <!-- End Contact Info -->
                                </div>
                                <!-- End Contact Us -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Contact Row -->
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="footer-widget footer-left-widget">
                                    <div id="googleMap" style="width:280px; height:200px;"></div>
                                </div>
                                <!-- End Footer Widget -->
                            </div>
                            <!-- End col -->
                            <div class="col-md-12 col-lg-6">
                                <div class="footer-widget">
                                    <p><!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                                    Reference site about Lorem Ipsum, giving information on its origins, as well.</p>
                                </div>
                                <!-- End footer widget -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Widget Row -->
            </div>
            <!-- End Contact Container -->


            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span>Copyright © 2021, By FreeDownload Developer</span>
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="copyright-menu">
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Copyright Container -->
            </div>
            <!-- End Copyright -->
            <!-- Back to top -->
            <div id="back-to-top" class="back-to-top">
                <button class="btn btn-dark" title="Back to Top" style="display: block;">
                    <i class="fa fa-angle-up"></i>
                </button>
            </div>
            <!-- End Back to top -->
    </footer>


    <!-- [ End ] Information -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.4.1.slim.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/source.js"></script>

    <!-- Show Your Maps -->

    <!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</body>

</html>