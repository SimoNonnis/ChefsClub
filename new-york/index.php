<?php 
  $title       = 'Chefs Club | New Restaurant In New York'; 
  $description = 'Best New Chefs from around the world showcase their favorite dishes in NYC\'s historic Puck Building.';
?>

<?php include 'header.php'; ?>




<div class="[ grid-element ] [ magicBox magicBox--s magicBox--xs ] [ page-intro ]">
  <div class="cover" style="background-image: url('x-images/1home/home1.jpg')"></div>
  
  <div class="magicBox__black center-parent">
    <div class="lotOfCopy center-child">
      <h1 class="u-textUpperCase u-margin-t-flush">Chefs Club New York</h1>
      <p>Best New Chefs from around the world showcase their favorite dishes in NYC's historic Puck Building.</p> 
      
    </div>
  </div>
</div>





<div class="[ grid-element ] [ magicBox magicBox--xs ]">
  <div class="cover" style="background-image: url('x-images/1home/home2.jpg')"></div>
</div>





<div class="[ grid-element ] magicBox">
  <div class="u-cl">
    <div class="grid-element__cell grid-element__cell--half">
      <div class="cover [ grid-element__cell--cube ] " style="background-image: url('x-images/1home/home3--1.jpg')"></div>
      <div class="cover [ grid-element__cell--cube ] " style="background-image: url('x-images/1home/home3--2.jpg')"></div>
    </div>

    <a href="chefs" >
      <div class="[ grid-element__cell grid-element__cell--half cell--cube--button ]">
        <div class="magicBox--gold center-parent u-textCenter small-promo">
          <div class="center-child lotOfCopy">
            <h2 class="u-textUpperCase u-margin-t-flush">JOIN JOWETT YU</h2>
            <p>Since opening last June, Chef Jowett Yu's Ho Lee Fook has been the hottest restaurant 
            in Hong Kong. For three nights, Yu brings his modern Chinese cooking to NYC and two lucky
             guests will win a free trip to Hong Kong courtesy of the Hong Kong Tourism Board!</p>
            <span class="btn u-textUpperCase btn-border btn-m-top btn--boxes">Find Out More</span>
          </div>
        </div>
      </div>
    </a>
    
  </div>
</div>
  




<div class="[ grid-element ] magicBox ">
  <div class="cover " style="background-image: url('x-images/1home/home4.jpg')"></div>
</div>


<!-- Home Pop Up -->
<div class="[ popUpModal ]" id="js-popUpModal">
  <div class="popUpModalContainer-outer">
    <div class="popUpModalContainer [ arrange ]">
    
      
      <button title="Close (ESC)" type="button" class="popUpModal__close">X</button>
      
      <div class="[ popUpModal__img-cell ] [ arrange-cell cover ]" style="background-image: url('x-images/pop-up-img.jpg')"></div>

      <div class="[ popUpModal__copy-cell ] [ arrange-cell ]">
        <div class="popUpModal__copy-cell-inner">
          <h2 class="popUpModal__title [ u-textUpperCase u-margin-t-flush ]" style="font-size: 1.1rem;">News at Chefs Club by Food and Wine</h2>

          



          <h2 class="popUpModal__title [ u-textUpperCase  ]">OUR NEXT GUEST CHEF IS JOWETT YU <span class="[ u-inlineBlock ]">September 14th - 16th</span></h2>
          <p class="[ u-textUpperCase ]">RESERVATIONS AVAILABLE BY PHONE ONLY AT
          <span><a href="tel://2129411100" class="[ popUpModal__link ] [ contact-active-tel ]">212 941 1100</a></span> 
          <span class="pop-up-contact-tel">212 941 1100</span>
          </p>


          <p><a class="popUpModal__link" href="http://www.chefsclub.com/new-york/chefs">Find Out More</a> about the visiting chefs.</p>
          
          <h2 class="popUpModal__title [ u-textUpperCase u-margin-t-flush ]" style="margin-top: 1.5em;margin-bottom: 0;">BRUNCH</h2>
          <p class="popUpModal__subtext">Every Sunday from 11.00am – 5.30pm</p>

          <h2 class="popUpModal__title [ u-textUpperCase u-margin-t-flush ]" style="margin-top: 1.5em;margin-bottom: 0;">PRIX FIXE</h2>
          <p class="popUpModal__subtext">Join us for a special three-course prix fixe on Sundays and Mondays from 5:30 - 6:30pm for <a href="http://www.chefsclub.com/new-york/menus" class="[ popUpModal__link ]">only $38!</a></p>
          
          <h2 class="popUpModal__title [ u-textUpperCase u-margin-t-flush ]" style="margin-top: 1.5em;margin-bottom: 0;">INDUSTRY NIGHT</h2>
          <p class="popUpModal__subtext">Join us for Industry Night every Tuesday from 10pm-1:00am for music, entertainment and $8 specialty craft cocktails!</p>

          <!-- <h2 class="popUpModal__title [ u-textUpperCase ]">WINE CLASS MAY 30TH</h2>
          <p>Introduction to red Burgundy. From 3 - 5pm, $75 per person.</p> -->

          

          <!-- Air France Logo -->
          <!-- <img src="x-images/air-france-logo.png" alt="air-france-logo"> -->

        </div>
      </div>
      
    
    </div>
  </div>
</div>
<!-- End Home Pop Up -->
  

<?php include 'footer.php'; ?>