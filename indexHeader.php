<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Julio Montás</title>
  <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/indexStyle.css" />
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.5/slick-theme.css"/>

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
  
  <script src="js/processing-1.4.1.min.js"</script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#fullpage').fullpage({
        anchors: ['Home', 'Personal_Projects_AND_Netart', 'Acengy_Work_AND_Freelance', 'Experimental', 'Skills', 'Contact'],
        menu: '#menu',
        continuousVertical: true,
        //Design
        sectionsColor: ['#F6F6F6', '#EEF1F2', '#F6F6F6', '#EEF1F2', '#FFCF01', '#EEF1F2'],
        controlArrows: true,
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

  <!-- Processing
  ================================================== -->
  <script src="js/processing-1.4.1.min.js"</script>

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
    
    
<!-- JavaScript
================================================== -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-27325393-1', 'juliomontas.com');
  ga('send', 'pageview');
</script>

<script type="text/javascript" src="http://juliomontas.com/apps/clickheat/js/clickheat.js"></script><noscript><p><a href="http://www.dugwood.com/index.html">Heatmap plugin</a></p></noscript><script type="text/javascript"><!--
  clickHeatSite = 'JulioMontas_PxP';clickHeatGroup = encodeURIComponent(window.location.pathname+window.location.search);clickHeatServer = 'http://juliomontas.com/apps/clickheat/click.php';initClickHeat(); //-->
</script>
</body>
</html>    