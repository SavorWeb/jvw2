<div id="newsHead">
    <h2 style="color: #fff">News</h2>
</div>

<div id="newsBody">	
    <?php
    $XMLFILE = "http://clergyabuse.wordpress.com/feed/";
    $TEMPLATE = "files/template.html";
    $MAXITEMS = "5";
    include("rss2html.php");
    ?>

</div>