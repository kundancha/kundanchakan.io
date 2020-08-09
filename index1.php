<?php include "header.php"; ?>
<style type="text/css">

    .hori{ 
    font-size:30px; margin-top:87px; margin-left:-310px;font-family: Lucida Calligraphy;
    /*font-weight: bold;*/
    background: linear-gradient(to top, #1c87c9 50%, #ffffff 50%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
/*113155*/

    .h{     
      /*font-family: 'Viga';font-size: 30px;*//*color: #0059ad;*/ text-align: center; margin-left: 20px;font-family: Lucida Calligraphy;

      animation: h 7s ease-out infinite normal;
      text-transform: uppercase;
  }
  @keyframes h{
      /*0%{transform: scale(0.6);}

      25%{transform: scale(2);}

      60%{transform: scale(0.6);}

      0%{transform: scale(0.6);}*/
      0%{transform: scale(0.9);}

      50%{transform: scale(0.6);}

      /*60%{transform: scale(0.6);}
*/
      100%{transform: scale(0.9);}
    }


    * {
  box-sizing: border-box;
}

/*body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}*/

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: skyblue;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

    <!-- Home Section
    ================================================== -->
    <section id="home">
        <div class="overlay"> <!-- Overlay Color -->
            <div class="container"> <!-- container -->
                <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                    <h1 class="h hori">Hi, I am Kanchan Chaudhari</br>
                    A Website Designer and Development </h1>
                    <p class="lead">I Love to create beautiful and amazing Websites.</p>
                    <a href="#works" class="scroll goto-btn">Download Resume</a> <!-- Link to your portfolio section -->
                </div><!-- End Input Your Home Content Here -->
            </div> <!-- end container -->
        </div><!-- End Overlay Color -->
    </div>

    <!-- Intro Section
    ================================================== -->
    <section id="intro">
        <div class="container"> <!-- container -->
            <div class="row"> <!-- row -->

                <div class="col-md-8 col-md-offset-2"> 
                     <h1 class="h">I Love to create beautiful Websites.</h1>
                    <p class="lead">Please go through my Profile.</p>
                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <!-- Service Section
    ================================================== -->
    <section id="whatIdo">
        <div class="container"> <!-- container -->

            <div class="section-header">
                <h2>What I <span class="highlight"><strong>Do</strong></span></h2>
                <h5><em><!-- Lorem Ipsum is simply dummy text of the printing and typesetting. -->New Things Learner</em></h5>
                <div class="fancy"><span></span></div>
            </div>

            <div class="row"> <!-- row -->
                
                <div class="col-md-6 text-right">  <!-- Left Content Col 6 -->
                    <img src="img/d.jpg" class="intro-logo img-responsive" alt="free-template">
                </div> <!-- End Left Content Col 6 -->

                <div class="col-md-6"> <!-- Right Content Col 6 -->
				  
                    <div class="media service"> <!-- Service #4 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Web Design</h4>
                            <p><!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry et magnis dis parturient montes, nascetur ridiculus mus. --></p>
                        </div>
                    </div><!-- end Service #4 -->

                    <div class="media service"> <!-- Service #5 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-android"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Web Development</h4>
                            <p><!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry et magnis dis parturient montes, nascetur ridiculus mus. --></p>
                        </div>
                    </div> <!-- end Service #5 -->

                    <div class="media service"> <!-- Service #6 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-apple"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">PHP Developer</h4>
                            <p><!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry et magnis dis parturient montes, nascetur ridiculus mus. --></p>
                        </div>
                    </div> <!-- end Service #6 -->
                </div><!-- end Right Content Col 6 -->
                
            </div><!-- end row -->

        </div><!-- end container -->
    </section>

    <!-- About Us Section
    ================================================== -->
	
	<section id="about">
 <div class="container"> <!-- container -->
            <div class="section-header">
                <h2 style="text-align: center; margin-left: 130px;">Who Am I <span class="highlight"><strong>Kanchan</strong></span></h2>
                <h5 style="margin-left: -20px;"><em><!-- Lorem Ipsum is simply dummy text of the printing and typesetting. -->I am PHP Developer</em></h5>
                <div class="fancy"><span></span></div>
            </div>
        </div><!-- end container -->	
	<div class="container">
	
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1 scrollimation fade-right in">
				<img class="img-responsive img-circle img-center" src="img/5.jpg" alt="">
			</div>
			<div class="col-sm-6 col-sm-offset-1 scrollimation fade-left in">
				<h1>Hello, I am Kanchan...</h1>
				<p>I am Kanchan Chaudhari, a 24 year old Web designer/developer from Nashik. I have graduated with a Bachelor degree of Computer Engineering, from the University of Jalgaon. I have a passion for creating beautiful designs for a websites. <!-- I have been awareded for the best designer in March 2015. --></p>
				
			</div>
		</div><!--End row -->
		
	</div><!--End container -->
	
            <div id="counter" class="text-center">
                <div class="container">
                    <div class="row"> <!-- Row -->
                      <div class="col-md-6">
					     <div class="row">
						      <div class="counter"> 

                          <div class="col-xs-6 facts"><!-- counter #1 -->
                            <div class="count-box"> 
                                <i class="fa fa-download"></i>
                                <h4 class="count">03</h4>
                                <p class="small">Student projects</p>
                            </div> 
                          </div><!-- end counter #1 -->

                          <div class="col-xs-6 facts"><!-- counter #2 -->
                            <div class="count-box">
                              <i class="fa fa-user"></i>
                              <h4 class="count">03</h4>
                              <p class="small">Student Websites</p>
                            </div>
                          </div>
						  </div>
						  </div>
						  <div class="row">	
							<div class="counter">
                            <div class="col-xs-6 facts"> <!-- counter #4 -->
                            <div class="count-box">
                              <i class="fa fa-download"></i>
                              <h4 class="count">03</h4>
                              <p class="small">Projects</p>
                            </div>
                          </div>

                          <div class="col-xs-6 facts"> <!-- counter #3 -->
                            <div class="count-box">
                              <i class="fa fa-arrows"></i>
                              <h4 class="count">03</h4>
                              <p class="small">Websites</p>
                            </div>
                          </div>

                          
 
                          </div>

                        </div>

						 </div> 
					    <div class="col-md-6"><!-- right content col 6 -->
                        <div> <!-- right content wrapper -->
 
                            
                            <div class="skills"> <!-- skills progress bar -->
                                <div class="skillset"> <!-- skill #1 -->
                                    <p><!-- UI/UX Design -->HTML, CSS, BOOTSTRAP</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            <span class="sr-only">95% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #1 -->

                                <div class="skillset"> <!-- skill #2 -->
                                    <p>JQ, JS, PHP</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                            <span class="sr-only">90% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #2 -->

                                <div class="skillset"> <!-- skill #3 -->
                                    <p>MYSQL</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                                            <span class="sr-only">92% Complete</span>
                                        </div>
                                    </div>
                                </div> <!-- end skill #3 -->

                                <div class="skillset"> <!-- skill #4 -->
                                    <p>Web Design</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div> <!-- end skill #4 -->

                                <div class="skillset"> <!-- skill #5 -->
                                    <p>Development</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                            <span class="sr-only">85% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #4 -->
                            </div> <!-- end skills progress bar -->

                        </div><!-- end right content wrapper -->
                    </div><!-- end right content col 6 -->
                       
                      </div> <!-- End Row -->
                </div>
            </div>

</section>
	 
    <!-- Works Section
    ================================================== -->
    <section id="works">
        <div class="container">
            <div class="section-header">
                <h2>Portfolio</h2>
                <h5><em><!-- Lorem Ipsum is simply dummy text of the printing and typesetting industry --></em></h5>
                <div class="fancy"><span></span></div>
            </div>

            <div id="myBtnContainer">
  <button class="btn active list-inline cat" onclick="filterSelection('all')">All</button>
  <button class="btn" onclick="filterSelection('cars')">Design</button>
  <button class="btn" onclick="filterSelection('nature')">Website</button>
  <button class="btn" onclick="filterSelection('people')">Other</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="img/portfolio/1.png" alt="Little Explorers" style="width:100%">
     <!--  <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="img/portfolio/7.png" alt="GURUKUL EDUCATION SOCIETY'S" style="width:100%">
     <!--  <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="img/portfolio/2.png" alt="Affinity Farm" style="width:100%">
     <!--  <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="img/portfolio/3.png" alt="Edumark Website" style="width:100%">
     <!--  <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  
  <div class="column nature">
    <div class="content">
      <img src="img/portfolio/4.png" alt="Edusmile" style="width:100%">
      <!-- <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="img/portfolio/5.png" alt="Edusmart" style="width:100%">
     <!--  <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="img/portfolio/6.png" alt="Grunetech" style="width:100%">
     <!--  <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d1.png" alt="Design" style="width:100%">
     <!--  <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>

  <div class="column cars">
    <div class="content">
      <img src="img/portfolio/d2.png" alt="Design" style="width:100%">
     <!--  <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d3.png" alt="Design" style="width:100%">
      <!-- <h4>Man</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d4.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>

  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d5.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d6.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d7.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d8.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d9.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d10.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d11.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d12.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d13.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d14.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="img/portfolio/d15.png" alt="Design" style="width:100%">
      <!-- <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>

  <div class="column people">
    <div class="content">
    <img src="img/portfolio/o1.png" alt="Admin" style="width:100%">
     <!--  <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>

  <div class="column people">
    <div class="content">
    <img src="img/portfolio/o2.png" alt="Admin" style="width:100%">
     <!--  <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>

<div class="column people">
    <div class="content">
    <img src="img/portfolio/o3.png" alt="Admin" style="width:100%">
     <!--  <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>

<div class="column people">
    <div class="content">
    <img src="img/portfolio/o4.png" alt="Admin" style="width:100%">
     <!--  <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
<div class="column people">
    <div class="content">
    <img src="img/portfolio/o5.png" alt="Admin" style="width:100%">
     <!--  <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
<div class="column people">
    <div class="content">
    <img src="img/portfolio/o6.png" alt="Admin" style="width:100%">
     <!--  <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
<div class="column people">
    <div class="content">
    <img src="img/portfolio/o7.png" alt="Admin" style="width:100%">
     <!--  <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
<div class="column people">
    <div class="content">
    <img src="img/portfolio/o8.png" alt="Admin" style="width:100%">
     <!--  <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>
<div class="column people">
    <div class="content">
    <img src="img/portfolio/o9.png" alt="Admin" style="width:100%">
     <!--  <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p> -->
    </div>
  </div>


<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

            


            <!-- <div class="resp-tabs-container">
                            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                    <div class="col-md-3 team-gd ">
                                    <div class="thumb">
                                        <a class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="img/portfolio/1.png" alt="">
                                        <div class="team_pos">
                                            
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd ">
                                    <div class="thumb">
                                        <a class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="img/portfolio/2.png" alt="">
                                        <div class="team_pos">
                                            
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <div class="thumb">
                                        <a class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="img/portfolio/3.png" alt="">
                                        <div class="team_pos">
                                            
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <div class="thumb">
                                        <a class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="img/portfolio/4.png" alt="">
                                        <div class="team_pos">
                                            
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd ">
                                    <div class="thumb">
                                        <a class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="img/portfolio/5.png" alt="">
                                        <div class="team_pos">
                                            
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd yes_marg ">
                                    <div class="thumb">
                                        <a class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="img/portfolio/d1.png" alt="">
                                        <div class="team_pos">
                                            
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd ">
                                    <div class="thumb">
                                        <a class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="img/portfolio/d2.png" alt="">
                                        <div class="team_pos">
                                            
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 team-gd ">
                                    <div class="thumb">
                                        <a class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="img/portfolio/d3.png" alt="">
                                        <div class="team_pos">
                                            
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="clearfix"></div>
                            </div> -->

        </div><!-- End Container -->

        

        </div> <!-- End Container-Fluid -->
    </section>

    <!-- experience Section
    ================================================== -->
    <section id="experience">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>My Experience</h2>
                <h5><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry</em></h5>
                <div class="fancy"><span></span></div>
            </div>
        </div><!-- end container -->

        <div class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container --> 
                <div id="experience" class="row"> <!-- row -->

                    <div class="col-md-10 col-md-offset-1">

                        <div class="media experience"> <!-- experience #1 -->
                            <div class="media-right media-middle">
                                <i class="fa fa-facebook"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Facebook</h4>
								<h5>2011 to Present</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent, pede etiam. Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.</p>
                            </div>
                        </div><!-- experience #1 -->

                        <div class="media experience"> <!-- experience #2 -->
                            <div class="media-right media-middle">
                                <i class="fa fa-google-plus"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Google Dev</h4>
								<h5>2007 to 2011</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent, pede etiam. Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.</p>
                            </div>
                        </div><!-- experience #2 -->

                        <div class="media experience"> <!-- experience #3 -->
                            <div class="media-right media-middle">
                                <i class="fa fa-yahoo"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Yahoo Inc</h4>
								<h5>2004 to 2007</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent, pede etiam. Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.</p>
                            </div>
                        </div><!-- experience #3 -->

                        <div class="media experience"> <!-- experience #4 -->
                            <div class="media-right media-middle">
                                <i class="fa fa-linkedin"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">LinkedIn</h4>
								<h5>2001 to 2004</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent, pede etiam. Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.</p>
                            </div>
                        </div><!-- experience #4 -->
                        
                    </div>

                </div> <!-- end row -->
            </div><!-- end container -->
        </div>  <!-- end fullwidth gray background -->
    </section>

    
    <!-- Contact Section
    ================================================== -->
    <section id="contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Keep In Touch With ME</h2>
                <h5><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry</em></h5>
                <div class="fancy"><span></span></div>
            </div>
        </div><!-- end container -->
 
        <div class="container"><!-- container -->
            <div class="row"> <!-- outer row -->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <div class="row"> <!-- nested row -->

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">  
                            <div class="contact-detail">
                                <i class="fa fa-map-marker"></i>
                                <h4>#150-25, James Street, NewYork</h4> <!-- address -->
                            </div>
                        </div>
                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-envelope-o"></i>
                                <h4>johndoe@gmail.com</h4><!-- email add -->
                            </div>
                        </div>

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-phone"></i>
                                <h4>+123 4567 8912</h4> <!-- phone no. -->
                            </div>
                        </div>

                    </div> <!-- end nested row -->
                </div> <!-- end col 10 with offset 1 to centered -->
            </div><!-- end outer row -->

            <div class="row text-center"> <!-- contact form outer row with centered text-->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <form id="contact-form" class="form" name="sentMessage" novalidate> <!-- form wrapper -->

                        <div class="row"> <!-- nested inner row -->

                            <!-- Input your name -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your name input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your email -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your Phone no. -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Phone No. *" id="phone" required data-validation-required-message="Please enter your phone no.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                        </div><!-- end nested inner row -->

                        <!-- Message Text area -->
                        <div class="form-group"> <!-- Your email input -->
                            <textarea class="form-control" rows="7" placeholder="Tell Us Something..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                            <div id="success"></div>
                        </div>
                        <button type="submit" class="btn btn-primary btn color">Send Message</button> <!-- Send button -->

                    </form><!-- end form wrapper -->
                </div><!-- end col 10 with offset 1 to centered -->
            </div> <!-- end contact form outer row with centered text-->

        </div><!-- end container -->

    </section>

    <!-- Footer 
    ================================================== -->
   <?php include "footer.php"; ?> 