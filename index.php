<!doctype html>
<html>
<head>
<?php include("templates/include-meta-data.php") ?>
<title>Portfolio of Cait Cuthbert</title>
<?php include("templates/include-css-js.php") ?>
<?php include_once("templates/analyticstracking.php") ?>
<script src="js/jquery.isotope.min.js"></script>

<script>
    $(document).ready(function(){
		
		$('h1, nav').addClass('hide-navs');
		$('h1, nav').delay(100).animate({'margin-top': '0px'}, 1000);
		$("#container div img").addClass("thumb"); 
		var $container = $('#container');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        
        $('#filters a').click(function(){
	        //Cait's filter title switchout
			$("h1 span").fadeOut();
	 	    var className = $(this).attr('class');
	 		var newClass = className + '1';
	 		$('.'+newClass).delay(800).fadeIn();
			
			//isotope
            var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
						duration: 750,
						easing: 'linear',
						queue: false,
                    }
                });
            return false;
        });
    });
</script>
</head>

<body>
<?php include("templates/header-navigation.php"); ?>
<div id="wrapper">


    <section>

        <div id="side-work">
            <ul id="filters">
                <li><a href="#" data-filter="*" class="all">All</a></li>
                <li><a href="#" data-filter=".web" class="web">Web & Devices</a></li>
                <li><a href="#" data-filter=".print" class="concept">Branding</a></li>
                <li><a href="#" data-filter=".illustration" class="illustration">Illustration</a></li>
            </ul>
        </div>
       
        <article id="portfolio-filters">
             <!--Project Thumbnails-->
            <div id="container">
                <div class="web illustration">
                         <a href="world-lit-canada"><img src="images/slides/WLC-screenshot-girl.png" alt="World Lit Canada Banners">
                         <p>World Literacy Canada
                         <span class="thumb-list">
                             <span class="list-item">
                                 <span class="thumbs illustration">&nbsp;</span>
                             </span>
                            
                             <span class="list-item">
                                 <span class="thumbs web">&nbsp;</span>
                             </span>
                         </span>
                         </p>
                        
                        </a>
                 </div>
               <div class="print illustration">
                        <a href="clay-glass-gala"><img src="images/slides/Gala-ticket.png" alt="Gallery Gala Ticket Design">
                        <p>Clay &amp; Glass Gala
                        <span class="thumb-list">
                            <span class="list-item">
                                <span class="thumbs illustration">&nbsp;</span>
                            </span>
                            
                            <span class="list-item">
                                <span class="thumbs concept">&nbsp;</span>
                            </span>
                        </span>
                        </p>
                        
                       </a>
                </div>
               <div class="print illustration">
                        <a href="bike-rides-society"><img src="images/slides/BRS-Logo-1.jpg" alt="Bike Rides Society">
                        <p>Bike Rides Society
                        <span class="thumb-list">
                            <span class="list-item">
                            	<span class="thumbs illustration">&nbsp;</span>
                            </span>
                            
                            <span class="list-item">
                            	<span class="thumbs concept">&nbsp;</span>
                            </span>
                        </span>
                        </p>
                       	
                       </a>
                </div>
                <div class="print illustration">
                        <a href="win-shantz"><img src="images/slides/Win-Shantz-eblast.png" alt="Award Design">
                  <p>Award Invitation
                  		<span class="thumb-list">
                            
                            <span class="list-item">
                            	<span class="thumbs concept">&nbsp;</span>
                            </span>
                            <span class="list-item">
                            	<span class="thumbs illustration">&nbsp;</span>
                            </span>
                        </span>
                  </p></a>
                </div>
                <div class="print illustration">
                        <a href="derby-stance-editorial"><img src="images/slides/Derby-Stance2.jpg" alt="Award Design">
                  <p>Derby Stance Magazine
                  		<span class="thumb-list">
                            
                            <span class="list-item">
                            	<span class="thumbs concept">&nbsp;</span>
                            </span>
                            <span class="list-item">
                            	<span class="thumbs illustration">&nbsp;</span>
                            </span>
                        </span>
                  </p></a>
                </div>
                <div class="print">
                        <a href="earth-week"><img src="images/slides/Earth-week-9.jpg" alt="Earth Week">
                        <p>Earth Week Campaign
                        <span class="thumb-list">
                            <span class="list-item">
                            	<span class="thumbs illustration">&nbsp;</span>
                            </span>
                            
                            <span class="list-item">
                            	<span class="thumbs concept">&nbsp;</span>
                            </span>
                        </span>
                        </p>
                       	
                       </a>
                </div>
                <div class="print web illustration">
                        <a href="dinosaur-pharmacy.php"><img src="images/slides/Dp-website.png" alt="Dinosaur Pharmacy Album Art">
                        <p>Band Album Art & Website
                        <span class="thumb-list">
                            <span class="list-item">
                            	<span class="thumbs web">&nbsp;</span>
                            </span>
                            <span class="list-item">
                            	<span class="thumbs illustration">&nbsp;</span>
                            </span>
                            <span class="list-item">
                            	<span class="thumbs concept">&nbsp;</span>
                            </span>
                        </span>
                        
                        
                        </p></a>
                </div>
                <div class="print">
                        <a href="foodland-ontario"><img src="images/slides/Foodland-1.jpg" alt="Foodland Ontario">
                  		<p>Foodland Ontario Ads
                            <span class="thumb-list">
                                <span class="list-item">
                                    <span class="thumbs illustration">&nbsp;</span>
                                </span>
                                <span class="list-item">
                                    <span class="thumbs concept">&nbsp;</span>
                                </span>
                            </span>
                        
                        </p></a>
                </div>
				<!-- 
                <div class="web illustration">
                        <a href="zen-garden.php"><img src="images/slides/Zen-garden-1.png" alt="Zen Garden Website">
                  <p>Zen Garden Website
                    <span class="thumb-list">
                        <span class="list-item">
                            <span class="thumbs web">&nbsp;</span>
                        </span>
                        <span class="list-item">
                            <span class="thumbs illustration">&nbsp;</span>
                        </span>
                    </span>
                  
                  </p></a>
                </div>
               -->
                <div class="web print">
                        <a href="derby-stance-dps"><img src="images/slides/Derby-stance-2.png" alt="Derby Stance DPS">
                  <p>Derby Stance Interactive Magazine
                  <span class="thumb-list">
                            <span class="list-item">
                            	<span class="thumbs web">&nbsp;</span>
                            </span>
                            <span class="list-item">
                            	<span class="thumbs concept">&nbsp;</span>
                            </span>
                        </span>
                  </p></a>
                </div>
                <div class="web">
                        <a href="calendar.php"><img src="images/calendar-mock.png" alt="Calendar">
                  <p>Interactive Calendar
                  		<span class="thumb-list">
                            <span class="list-item">
                            	<span class="thumbs web">&nbsp;</span>
                            </span>
                        </span>
                  </p></a>
                </div>
                <div class="web print illustration">
                        <a href="logo"><img class="static-img" src="images/slides/Logo-redesign-logos.jpg" alt="Logo Redesign">
                  <p>Logo Redesign
                  		<span class="thumb-list">
                            <span class="list-item">
                            	<span class="thumbs web">&nbsp;</span>
                            </span>
                            <span class="list-item">
                            	<span class="thumbs concept">&nbsp;</span>
                            </span>
                            <span class="list-item">
                            	<span class="thumbs illustration">&nbsp;</span>
                            </span>
                        </span>
                  </p></a>
                </div>
                
                
                
            </div>
            
        </article>
    
    </section>

</div><!-- end wrapper -->


<?php include("templates/footer.php"); ?>


</body>
</html>
