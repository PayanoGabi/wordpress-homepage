

<?php get_header(); // call on header.php file?>



<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                
                <div class="inner cover">
                   <!-- <h1 class="cover-heading">Location: Boston</h1> -->
                    <img id="sample"  onclick="winAlert()" src="/wordpress-homepage/wp-content/themes/fuck-master-blaster/images/Gabi-Payano.jpg" />
                    <section id="hidden-section">
                        <button id="exit-button" onclick="exitWindows()">EXIT</button>
                        <a href="something" class="button1 bouncy">Facebark</a>

                        <div class="shape-container">
                            <a href="#">
                                <div class="shape-top">
                                    <h1 class="test-txt">Welcome<br />to<br /></h1>
                                </div>

                            </a>
                            <div class="shape-top-outer"></div>
                            <div class="shape-left-container">


                            </div>
                            <a href="#">
                                <div class="shape-left"></div>
                            </a>
                            <div class="shape-left-outer"></div>

                            <a href="#">
                                <div class="shape-left-far"></div>
                            </a>
                            <div class="shape-left-far-outer"></div>

                            <a href="#">
                                <div class="shape-right"></div>
                            </a>
                            <div class="shape-right-outer"></div>

                            <a href="#">
                                <div class="shape-right-far"></div>
                            </a>
                            <div class="shape-right-far-outer"></div>



                        </div>

                    </section>
                    <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
                    <p class="lead">
                        <button href="#" class="btn btn-lg btn-default"  onclick="myFunction()">Projects</button>
                    </p>
                </div>

                <div class="mastfoot">
                    <div class="inner">

                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="assets/main.js"></script>
</body>


	<?php get_footer();
	// call on footer.php file

?>