

<?php get_header(); // call on header.php file?>



<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                
              
                   <!-- <h1 class="cover-heading">Location: Boston</h1> -->
                    <img id="sample"  onclick="winAlert()" src="/wordpress-homepage/wp-content/themes/fuck-master-blaster/images/Gabi-Payano.jpg" />
                    <section id="hidden-section">
                        <button id="exit-button" onclick="exitWindows()">EXIT</button>
                        <a href="something" class="button1 bouncy">Facebark</a>
                        <div class="project-container">
							<div class="project-block">Project One</div>
							<div class="project-block">Project Two</div>
							<div class="project-block">Project Three</div>
							<div class="project-block">Projejct Four</div>
							<div class="project-block">Project Five</div>
							<div class="project-block">Project Six</div>
							<div class="project-block">Project Seven</div> 
							<div class="project-block">Project Eight</div>   
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>  
    <script src="assets/main.js"></script>
</body>


	<?php get_footer();
	// call on footer.php file

?>