<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie iec7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Julio Montas | Interactive Designer</title>
  <meta name="description" content="Interactive designer. Live and work in New York City.">
  <meta name="keywords" content="design,code,hellocode,programming,ui,ux,web">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  <!-- Stylesheets
  ================================================== -->
  <link rel="stylesheet" href="css/grid.css" />
  <link rel="stylesheet" href="css/style.css" />
  <!-- Stylesheets For Slick
  ================================================== -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>
  <!-- JavaScript
  ================================================== -->
  <script src="js/processing-1.4.1.min.js"</script>
  <!-- Processing
  ================================================== -->
    <script type="text/javascript">
      // convenience function to get the id attribute of generated sketch html element
      function getProcessingSketchId () { return 'the_brain'; }
      });
    </script>
    <script type="application/processing">
      void setup() {
        size($("canvas").width(),$("canvas").height());
      }
      void draw() {
        background(random(255));
      }
    </script>
    <!-- One Page Style
    ================================================== -->
