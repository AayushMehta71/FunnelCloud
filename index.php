<!DOCTYPE html>
<?include('connectToDB.inc.php'); 
  include('gallery.php');
?>

<html>
<head>
<title>Funnel Cloud</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/styles.css" type="text/css">

<!-- Fonts & Icons -->
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
<link rel="shortcut icon" href="css/images/favicon.ico" type="image/x-icon" />

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<!-- Navbar -->
<div class="top hide-small hide-medium">
  <div class="bar xlarge maincolour" id="myNavbar">
    <a href="#home" class="bar-item button">HOME</a>
    <a href="#menu" class="bar-item button">MENU</a>
  <!--   <a href="#about" class="bar-item button">ABOUT</a> -->
    <a onclick="document.getElementById('planevent-modal').style.display='block'" class="bar-item button">BOOK AN EVENT</a>
    <a href="#location" class="bar-item button">SCHEDULE & LOCATIONS</a>
    <a href="#gallery" class="bar-item button">GALLERY</a>
    <a href="https://www.facebook.com/TheFunnelCloud/" target="_blank" class='right'><img style='border-radius:15px; margin-right:12px; padding:5px; width:50px;' src='css/images/facebook-icon.png'></a>
  </div>
</div>
  
<!-- Header with image -->
<header class="display-container" id="home">

  <div class=" center col l12 m12">
  <img style='width:75vw; float:center; margin-top:80px' src='css/images/FunnelCloud_Colour.svg'>
    <p><a onclick="document.getElementById('planevent-modal').style.display='block'" class="display-bottommiddle button xxlarge maincolour hide-small">Book An Event</a>
  </div>
</header>

<!-- Menu Container -->

<section class='maincolour'>
<div style='position:relative' class="container  padding-32 large" id="menu">
  <div class="content">
  
    <h1 class="center jumbo margin-top">THE MENU</h1>
    <div class="row center border border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'cakes');" id="myLink">
        <div class="col s6 tablink padding-large hover-secondarycolour">the CAKES</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event,'fritters');">
        <div class="col s6 tablink padding-large hover-secondarycolour">the FRITTERS</div>
      </a>
  
    </div>

    <div id="cakes" class="container menu padding-32 white">
      <h1><b>Funnel Cloud</b> <!-- <span class="right tag secondarycolour round">$5</span> --></h1>
      <p class="text-grey">A Classic Funnel Cake; Icing Sugar paired with Cinnamon</p>
      <hr>
   
      <h1><b>Cloud 9</b> <!-- <span class="right tag secondarycolour round">$7.50</span> --></h1>
      <p class="text-grey">A classic Funnel Cake topped with; Icing Sugar, Cinnamon, Chocolate or Caramel syrup, Berries and Whipped Cream to top it all off.</p>
      <hr>

      <h1><b>Funnel Kebob</b> <!-- <span class="right tag secondarycolour round">$4</span>  -->
      </h1>
      <p class="text-grey">Funnel on a Stick served fresh with; Icing Sugar, Cinnamon, Chocolate or Caramel syrup
      <!-- <span class="right tag orange round">2 for $7</span> -->
      </p>
      <hr>
      
      <h1><b>Funnel Fries</b> <!-- <span class="right tag secondarycolour round">$5</span> --></h1>
      <p class="text-grey">Funnel Fries made to share served with; Icing Sugar, Cinnamon, Chocolate or Caramel syrup</p>

    </div>


    <div id="fritters" class="container menu padding-32 white">
      <h1><b>Apple Fritter</b><!-- <span class="right tag secondarycolour round">$1.50</span> -->
      </h1>
      <p class="text-grey">A Slice of Apple wrapped in our signature Funnel Cake batter and fried to crisp perfection
      <!-- <span class="right tag orange round">6 for $6</span> -->
      </p>
      <hr>

    <h1><b>Banana Fritter</b><!-- <span class="right tag secondarycolour round">$1.50</span> -->
      </h1>
      <p class="text-grey">A Slice of Banana wrapped in our signature Funnel Cake batter and fried to crisp perfection
      <!-- <span class="right tag orange round">6 for $6</span> -->
      </p>
      <hr>

      <h1><b>Strawberry Fritter</b> <!-- <span class="right tag secondarycolour round">$6</span> --></h1>
      <p class="text-grey">Fresh Strawberries on a stick, wrapped in our signature batter and fried fresh to order</p>
    </div><br>

  </div>
</div>
</section>

<!-- About Container -->

<!-- <section class="container padding-32 xlarge" id="about">
  <div class='contentplus'>

    <div class='row padding-32'>
      <div class='col s12 m12 l12'>
        <h1 class='center about' style='font-weight:bold; text-decoration:underline; font-size:2.5em;'>About Us</h1>
      </div>  
    </div>

    <div class='row-padding'>
      <div class='col s12 m12 l12 center' >
      <p class='nomarginpadding'>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi metus leo, porta eu est sit amet, faucibus faucibus urna. In a nisl eros. Quisque varius tortor tellus, at rutrum odio egestas semper. Ut tristique lectus porta metus ornare scelerisque. Nullam sodales venenatis leo, a semper diam. Maecenas quis ipsum id justo condimentum sollicitudin. Aenean fermentum sapien at metus pretium, sed cursus leo faucibus. Sed consectetur lectus urna, id tempus nibh congue at. Mauris eget turpis elementum, tincidunt urna eget, fermentum nibh.
      </p>
      <p>
        In hac habitasse platea dictumst. Nullam ut ex ac felis porttitor bibendum. Quisque cursus nisl eu velit egestas euismod. Ut sit amet tortor at nulla egestas luctus. Curabitur pharetra lorem fermentum aliquet accumsan. Integer et condimentum massa, vitae bibendum sem. Etiam eleifend urna sit amet quam semper, quis varius lorem maximus. Duis ornare, ligula eu mattis consequat, mi odio molestie urna, faucibus iaculis sem velit ac ipsum. In hac habitasse platea dictumst. In sagittis sem orci, ut lobortis dui condimentum id. Etiam consectetur mauris consectetur congue aliquet.
       </p>
      </div> 
    </div>
  </div>
</section> -->

<!-- Location/Schedule Container -->

<section class="maincolour" id="location">
  <div class='row padding-32 '>
    <div class='col s1'>&nbsp</div>
    <div class='col s5 regular'>
      <h1><u>Regular Locations</u></h1>
        <ul class='tabs'>
          <li>
            <h5><a href='#tab1'>Acton Farmer's Market</a></h5>
          </li>
          <li>
            <h5><a href='#tab2'>Brampton Farmer's Market</a></h5>
          </li>
          <li>
            <h5><a href='#tab3'>Andrews' Scenic Acres</a></h5>
          </li>
          <li>
            <h5><a href='#tab4'>St Jacobs Farmers' Market</a></h5>
          </li>
        </ul>
      <div id='tab1'>
        <div class='google-maps'>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d360.9825010689899!2d-80.04084793201224!3d43.630272556697996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b74f0f0afb5cf%3A0x2c2c0c1cc9faa420!2s2+Willow+St+S%2C+Acton%2C+ON+L7J!5e0!3m2!1sen!2sca!4v1494730353561" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        <h4><i>
          Where - Acton BIA, Acton ON<br>
          When - Every Thursday from June 1st-October 27th
        </i></h4>
      </div>
      <div id='tab2'>
        <div class='google-maps'>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11540.054599647858!2d-79.7667713623993!3d43.68947961675958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b15c876061b07%3A0xbbf31cfdaca6fed!2sMain+St+N%2C+Brampton%2C+ON!5e0!3m2!1sen!2sca!4v1495591996605" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        <h4><i>
          Where - Downtown Brampton, Brampton ON<br>
          When - Every Saturday from June 17th – October 7th
        </i></h4>
      </div>
      <div id='tab3'> 
        <div class='google-maps'>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.5708825797897!2d-79.93619768450483!3d43.57382397912408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b71f6ff152a33%3A0x482be286d487a4fa!2sAndrews+Scenic+Acres!5e0!3m2!1sen!2sca!4v1495592115726" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        <h4><i>
          Where - 9365 10 Side Rd, Milton ON<br>
          When - Every weekend May 28th-October 31st
        </i></h4>
      </div>
      <div id='tab4'> 
        <div class='google-maps'>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11574.116494182868!2d-80.5560757!3d43.5121577!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8591dde29c821a93!2sSt.+Jacobs+Farmers&#39;+Market+%26+Flea+Market!5e0!3m2!1sen!2sca!4v1514153765411" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        <h4><i>
          Where - 878 Weber St N, Woolwich, ON<br>
          When - Every Thursday and Saturday
        </i></h4>
      </div>


    </div>
    <div class='col s5 right-align event-container'>
      <h1><u>Scheduled Events</u></h1>
      </br>
       <div>
          <h3>CBC Music Festival</h3>
          Where - Echo Beach, Toronto ON</br>
          When - May 27th, 2017
      </div>
       <div>
          <h3>Orangeville Blues and Jazz Festival</h3>
          Where - Downtown Orangeville, Orangeville ON</br>
          When - June 1st-4th, 2017
      </div>
      <div>
          <h3>Classics Against Cancer</h3>
          Where - Cedarvale Park, Georgetown</br>
          When - June 18th, 2017
      </div>
      <div>
         <h3>Acton Canada Day Celebrations</h3>
          Where - Prospect Park, Acton ON</br>
          When - July 1st, 2017
      </div>
        <div>
          <h3>The Urban Slide</h3>
          Where - 201 Broadway, Orangeville ON</br>
          When - July 23rd, 2017
      </div>
      <div>
          <h3>Acton Leathertown Festival</h3>
          Where - 45 Mill St. E, Acton ON</br>
          When - August 13th, 2017
      </div>
    </div>
    <div class='col s1'>&nbsp</div>
  </div>

  <div class='row'>
    <div class='col s1'>&nbsp</div>
    <div class='col s5'>
    
    </div>
    <div class='col s5 right-align'>
      &nbsp
    </div>
    <div class='col s1'>&nbsp</div>
  </div>
</section>

<!-- Gallery Container -->

<section class="container xlarge" id="gallery">
  <?echo $gallery_output;?>
</section>

<!-- Footer -->
<footer class="right-align maincolour padding-small small">
  <p style="font-size: 1.5em">Developed by Sang, <a style="text-decoration: none" href="https://www.mrlt.ca">MRLT</a>, and Ayush</p>
</footer>

<!-- Modal -->

<div id="planevent-modal" class="modal">
  <div class="modal-content card-4 animate-zoom" style="max-width:600px">

      <div class="left container">
        <span onclick="document.getElementById('planevent-modal').style.display='none'" class="button xlarge ripple display-topright" title="Close Modal">&times;</span>
        <h4>Book an Event</h4>
      </div>

      <div class="container" id="bookcontent">
      <form method="post" id="bookform">
          <ul class="form-style-1">
              <li>
                <label>Full Name <span class="required">*</span></label>
                <input type="text" name="firstname" class="field-divided" placeholder="First" required/>&nbsp;<input type="text" name="lastname" class="field-divided" placeholder="Last" required/>
              </li>
              <li>
                  <label>Expected Number of People<span class="required">*</span></label>
                  <input type="number" name="people" class="field-divided" required/>
              </li>
              <li>
                  <label>Date<span class="required">*</span></label>
                  <input type="date" name="date" class="field-long" required/>
              </li>
              <li>
                  <label>Email <span class="required">*</span></label>
                  <input type="email" name="email" class="field-long" required/>
              </li>
              <li>
                  <label>Message <span class="required">*</span></label>
                  <textarea name="message" form='bookform' class="field-long field-textarea" required></textarea>
              </li>
                <div class="g-recaptcha" data-sitekey="6LcN5CEUAAAAAKAC50Jg_eY3zDTWfGwe7lnTMSWx"></div>
              <li>
                  <input type="submit" name='event_btn' value="Submit" />
                  <input type="hidden" name='event_hidden' value='go'/>
              </li>
              <li>
                <div id='bookingmessage'></div>
              </li>

          </ul>

        </form>

      </div>

</div>


<script type='text/javascript'>

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" secondarycolour", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " secondarycolour";
}
document.getElementById("myLink").click();

// Get the modal
var modal = document.getElementById('planevent-modal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//Form Ajax
$(document).ready(function(){

$("#bookform").submit(function(e){
        e.preventDefault();
        $.ajax({
          url:"book_event.php",
          method: "POST",
          data:$('#bookform').serialize(),
          dataType:'json',
          success: function(data){
            $('#bookingmessage').html(data.message);
            if(data.error=="false"){
              setTimeout(function(){              
                window.location.href='index.php';
              },200);
            }
          }
        });
      });
});

//Tabs
$('ul.tabs').each(function(){
  // For each set of tabs, we want to keep track of
  // which tab is active and its associated content
  var $active, $content, $links = $(this).find('a');

  // If the location.hash matches one of the links, use that as the active tab.
  // If no match is found, use the first link as the initial active tab.
  $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
  $active.addClass('active');

  $content = $($active[0].hash);

  // Hide the remaining content
  $links.not($active).each(function () {
    $(this.hash).hide();
  });

  // Bind the click event handler
  $(this).on('click', 'a', function(e){
    // Make the old tab inactive.
    $active.removeClass('active');
    $content.hide();

    // Update the variables with the new link and content
    $active = $(this);
    $content = $(this.hash);

    // Make the tab active.
    $active.addClass('active');
    $content.show();

    // Prevent the anchor's default click action
    e.preventDefault();
  });
});

</script>
</body>
</html>
