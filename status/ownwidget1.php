<div id="own_widget1">
<div class="grid-item">
<?php
$root=$_SERVER["DOCUMENT_ROOT"];
if ( 0 != filesize("$root/tmp/ownwidget1.php") )
{ ?>

    <div class="panel panel-default">
	<?php include("$root/tmp/ownwidget1.php"); ?>
    </div>


<?php 
} 
//else { echo "problem"; }
?>
</div>
</div>