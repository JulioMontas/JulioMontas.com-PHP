<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Julio Montas | Interactive Designer</title>
    <meta name="description" content="Interactive designer. Live and work in New York City.">
    <meta name="keywords" content="designer,creative coding,code,programming,ui design,ux design,web design">

    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/indexStyle.css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/tools/animate.min.css">

    <!--[if IE]>
    <script type="text/javascript">
    var console = { log: function() {} };
  </script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.lazy.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#fullpage').fullpage({
          anchors: ['Home', 'Personal_Projects_AND_Netart', 'Acengy_Work_AND_Freelance', 'Experimental', 'Skills', 'Tools', 'Contact'],
          menu: '#menu',
          continuousVertical: true,
          //Design
          sectionsColor: ['#F6F6F6', '#EEF1F2', '#F6F6F6', '#EEF1F2', '#FFCF01', '#2e3642', '#FFCF01'],
          controlArrows: false,
          slidesNavigation: true,
          afterRender: function(){
            //playing the video
            $('video').get(0).play();
          }
        });
      });
    </script>
     <script>
    $(document).ready(function() {
        $(".lazy").lazy({
            combined: true,
            delay: 5000
        });
    });
  </script>

  <style type="text/css">
  #fp-nav ul li a.active span,
  .fp-slidesNav ul li a.active span,
  #fp-nav ul li:hover a.active span,
  .fp-slidesNav ul li:hover a.active span {background: #FFCF01;}
  </style>

    <!-- Processing
    ================================================== -->
    <script src="js/processing-1.4.1.min.js"</script>
      <script type="text/javascript">
        // convenience function to get the id attribute of generated sketch html element
        function getProcessingSketchId () { return 'the_brain'; }
        });
      </script>
<!--
      <script type="application/processing">
        void setup() {
          size($("canvas").width(),$("canvas").height());
        }
        void draw() {
          background(random(255));
        }
      </script> -->
    </head>
      <body>

        <div id="fullpage">

          <div class="section" id="section0">

            <div class="col-xs-12 col-sm-12 col-md-6">
              <div class="splashContainer-01">
                <h1>Julio Montás</h1>
                <p>I’m a UI/UX Designer and Front-end Developer with experience working at design agencies and early stage startups.</p>
                <ul class="list-inline">
                  <li><a href="https://www.linkedin.com/pub/julio-mont%C3%A1s/6a/789/3a5"><i class="fa fa-linkedin fa-2x circle-icon"></i></a></li>
                  <li><a href="http://codepen.io/JulioMontas/"><i class="fa fa-codepen fa-2x circle-icon"></i></a></li>
                  <li><a href="https://twitter.com/juliomontas"><i class="fa fa-twitter fa-2x circle-icon"></i></a></li>
                  <li><a href="https://instagram.com/juliomontas/"><i class="fa fa-instagram fa-2x circle-icon"></i></a></li>
                  <li><a class="blankLink" href="mailto:hello@juliomontas.com?subject=Mail from JulioMontas.com"><i class="fa fa-envelope fa-2x circle-icon "></i></a></li>
                  <li data-menuanchor="Personal_Projects_AND_Netart"><a href="#Personal_Projects_AND_Netart"><i id="goingDown" class="fa fa-arrow-down fa-2x circle-icon animated infinite bounce" ></i></a></li>
                </ul>
              </div>
            </div>

            <canvas id="the_brain" data-processing-sources="js/the_brain.pde" resize>
              <p>Your browser does not support the canvas tag. Try <a href="http://www.mozilla.org/en-US/firefox/new/" target="_self">Firefox</a> or <a href="http://www.google.com/chrome/" target="_self">Google Chrome</a></p>
              <!-- Note: you can put any alternative content here. -->
            </canvas>
            <noscript>
              <p>JavaScript is required to view the contents of this page.</p>
            </noscript>

          </div> <!-- Section 0 -->

          <div class="section" id="section1">
            <h3>PERSONAL PROJECTS / NET ART</h3>

            <div class="slide" id="slide1">
              <div class="container" id="helloCode">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="helloCode.php"><img class="indexThumnails lazy" data-src="img/projects/hc01.gif"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><h2>Helloco.de</h2></div>
                  <div class="col-xs-12 col-sm-8 col-md-8"><p>Is an archive of the expansive list of programming languages that have been developed from 1950 to present.</p></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><ul class="pull-right"><li>Branding</li><li>UX/UI Design</li><li>HTML5/CSS3</li><li>Processing (JS)</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 1 -->

            <div class="slide" id="slide2">
              <div class="container" id="catchSuperman">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="catchSuperman.php"><img class="indexThumnails lazy" data-src="img/projects/catchSuperman01.gif"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-3 col-md-3"><h2>Catch Superman</h2></div>
                  <div class="col-xs-12 col-sm-7 col-md-7"><p>A web art piece. Catch Superman is a game with a very simple, but very impossible goal.</p></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><ul class="pull-right"><li>HTML5/CSS3</li><li>Processing (JS)</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 2 -->

            <div class="slide" id="slide3">
              <div class="container" id="pixelxpixel">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="pixelxpixel.php"><img class="indexThumnails lazy" data-src="img/projects/pixelXPixel01.gif"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><h2>Pixel X Pixel</h2></div>
                  <div class="col-xs-12 col-sm-8 col-md-8"><p>Pixelxpixel.net is a mock-phishing website to promote awareness to internet security.</p></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><ul class="pull-right"><li>HTML5/CSS3</li><li>Javascript</li><li>Awareness</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 3 -->
          </div><!-- Section 1 -->

          <div class="section" id="section2">
            <h3>AGENCY WORK / FREELANCE</h3>

            <div class="slide" id="slide1">
              <div class="container" id="nike">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="nike.php"><img class="indexThumnails lazy" data-src="img/projects/nike03.jpg"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><h2>Nike</h2></div>
                  <div class="col-xs-12 col-sm-8 col-md-8"><p>Retail iPad App re-skinning an in-store app to match the look and feel of Nike branding.</p></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><ul class="pull-right"><li>Adobe Photoshop</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 1 -->

            <div class="slide" id="slide2">
              <div class="container" id="sebastianfaena">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="sebastianfaena.php"><img class="indexThumnails lazy" data-src="img/projects/sebastianFaena.gif"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-3 col-md-3"><h2>Sebastianfaena.com</h2></div>
                  <div class="col-xs-12 col-sm-7 col-md-7"><p>A micro-site for fashion photographer Sebastian Faena. The landing page image changes to a shuffled image each time it is refreshed.</p></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><ul class="pull-right"><li>HTML5/CSS3</li><li>Javascript</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 2 -->

            <div class="slide" id="slide3">
              <div class="container" id="kateSpade">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="kateSpade.php"><img class="indexThumnails lazy" data-src="img/projects/katespade.gif"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><h2>Kate Spade</h2></div>
                  <div class="col-xs-12 col-sm-8 col-md-8"><p>Shoppable web video. Visual design of interactive video player and navigation.</p></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><ul class="pull-right"><li>Adobe Photoshop</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 3 -->

            <div class="slide" id="slide4">
              <div class="container" id="homeMade">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="homeMade.php"><img class="indexThumnails lazy" data-src="img/projects/homemade.jpg"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-3 col-md-2"><h2>Homemade</h2></div>
                  <div class="col-xs-12 col-sm-7 col-md-8"><p>Homemade is a start-up food delivery website that connects home cooks to customers. Mock-up to HTML5 & CSS3 using Node.js, Jade Template.</p></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><ul class="pull-right"><li>HTML5/CSS3</li><li>Jade Template</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 4 -->

            <div class="slide" id="slide5">
              <div class="container" id="lancome">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="lancome.php"><img class="indexThumnails lazy" data-src="img/projects/lancome.gif"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><h2>Lancome</h2></div>
                  <div class="col-xs-12 col-sm-8 col-md-8"><p>visual design of interactive video player including icons, buttons, sliders, and video player bar.</p></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><ul class="pull-right"><li>Adobe Photoshop</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 5 -->

          </div><!-- Section 2 -->

          <div class="section" id="section3">
            <h3>EXPERIMENTAL</h3>

            <div class="slide" id="slide1">
              <div class="container" id="recyclingCode">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="recyclingCode.php"><img class="indexThumnails lazy" data-src="img/projects/processing_01.gif"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><h2>Recycling Code</h2></div>
                  <div class="col-xs-12 col-sm-8 col-md-8"><p>A collection of visual experiments that explore different types of behaviors achieved by using the same creative codes with small variations</p></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><ul class="pull-right"><li>Processing.js</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 1 -->

            <div class="slide" id="slide2">
              <div class="container" id="VirtualRelaxation">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="VirtualRelaxation.php"><img class="indexThumnails lazy" data-src="img/projects/happyCaribbean.gif"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-3 col-md-3"><h2>Virtual Relaxation</h2></div>
                  <div class="col-xs-12 col-sm-6 col-md-6"><p>Happy Caribbean explores the transportive quality of media art in connection with human emotion by creating a feeling of relaxation in a virtual space.</p></div>
                  <div class="col-xs-12 col-sm-3 col-md-3"><ul class="pull-right"><li>Javascript 3D library</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 2 -->

            <div class="slide" id="slide3">
              <div class="container" id="slitScan">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12"><a href="slitScan.php"><img class="indexThumnails lazy" data-src="img/projects/Mix00.jpg"><div class="caption"><i class="fa fa-link fa-4x"></i></div></a></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><h2>Slit-scan</h2></div>
                  <div class="col-xs-12 col-sm-8 col-md-8"><p>Creating glitch art with only a scanner to achieve an authentic glitch pattern without the use of a computer.</p></div>
                  <div class="col-xs-12 col-sm-2 col-md-2"><ul ul class="pull-right"><li>Scanner</li></ul></div>
                </div><!-- row -->
              </div><!-- container -->
            </div> <!-- slide 3 -->
          </div><!-- Section 3 -->

          <div class="section" id="section4">
            <div class="slide" id="slide1">
              <div class="splashContainer-skills">
                <h1>Skills</h1>
                <p>I create clean and responsive web design.</p>

                <ul class="list-inline">
                  <li><a href=""><i class="fa fa-random fa-3x circle-icon"></i></a></li>
                  <p>UX/UI Design</p>
                </ul>
                <ul class="list-inline">
                  <li><a href=""><i class="fa fa-code fa-3x circle-icon"></i></a></li>
                  <p>HTML5/CSS3</p>
                </ul>
                <ul class="list-inline">
                  <li><a href=""><i class="fa fa-arrows-h fa-3x circle-icon"></i></a></li>
                  <p>Responsive Design</p>
                </ul>
                <ul class="list-inline">
                  <li><a href=""><i class="fa fa-sitemap fa-3x circle-icon"></i></a></li>
                  <p>Wireframe</p>
                </ul>
                <ul class="list-inline">
                  <li><a href=""><i class="fa fa-search fa-3x circle-icon"></i></a></li>
                  <p>Research</p>
                </ul>
                <ul class="list-inline">
                  <li><a href=""><i class="fa fa-picture-o fa-3x circle-icon"></i></a></li>
                  <p>Presentation</p>
                </ul>
                <ul class="list-inline">
                  <li><a href=""><i class="fa fa-eye fa-3x circle-icon"></i></a></li>
                  <p>Visual Consultant</p>
                </ul>
                <ul class="list-inline">
                  <li><a href=""><i class="fa fa-arrows fa-3x circle-icon"></i></a></li>
                  <p>Art Direction</p>
                </ul>
                <ul class="list-inline">
                  <li><a href=""><i class="fa fa-puzzle-piece fa-3x circle-icon"></i></a></li>
                  <p>Internet Safety</p>
                </ul>
                <ul class="list-inline">
                  <li><a href=""><i class="fa fa-heart fa-3x circle-icon"></i></a></li>
                  <p>Staying Calm</p>
                </ul>

              </div>
            </div> <!-- slide 1 -->
          </div><!-- Section 4 -->

          <div class="section" id="section5">
            <video autoplay loop muted controls="false" id="myVideo" webkit-playsinline>
              <source src="video/flowers.mp4" type="video/mp4">
                <source src="video/flowers.webm" type="video/webm">
                  <source src="video/flowers.ogv" type="video/ogg">
                  </video>
                    <div class="layer">
                      <h1>Tools / Toys</h1>
                      <p>Things that I use to explore my curiosity and fuel my imagination. </p>
                      <ul>
                        <li><p>MacBook Pro Mid 2010</p></li>
                        <li><p>Android Nexus 5</p></li>
                        <li><p>Apple Iphone 6</p></li>
                        <li><p>Apple Ipad Mini</p></li>
                        <li><p>Pebble Smartwatch</p></li>
                        <li><p>Google Glass</p></li>
                        <li><p>Google Cardboard (VR)</p></li>
                        <li><p>Kinect 2.0</p></li>
                        <li><p>Leap Motion</p></li>
                        <li><p>Arduino</p></li>
                      </ul>
                    </div>
                  </div><!-- Section 5 -->

                  <div class="section" id="section6">
                    <div class="layer text-center">
                      <a href="mailto:hello@juliomontas.com?subject=Mail from JulioMontas.com"><img src="img/me.jpeg" id="image-me" class="img-circle" alt="Me"></a>
                      <ul>
                        <li><a href="mailto:hello@juliomontas.com?subject=JulioMontas.com">hello @ juliomontas.com</a></li>
                      </ul>
                    </div>
                  </div><!-- Section 6 -->

                </div><!-- Fullpage -->
              </body>
              </html>
