<?
include('connectToDB.inc.php'); 

$sql="SELECT * from gallery";
$result=mysql_query($sql,$db);
while($myrow=mysql_fetch_array($result)){
	$image_output.="<li><a href='css/images/gallery/food/".$myrow['image']."' data-fancybox='images'><img style='border:0' src='css/images/gallery/food/".$myrow['image']."'></a></li>";
}
$gallery_output =
	"<div class='gallery'>
    	<div class='gallery-row'>
	    	<ul>
	    		".$image_output."
	    	</ul>
    	</div>
    </div>";
?>

