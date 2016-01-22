<?php 
	$title 			 = 'Restaurant Reservations | Chefs Club New York'; 
	$description = 'Make an online reservation at Chefs Club, New York. Whether a large group or intimate dinner with friends, join the party in the heart of Manhattan.';
?>

<?php include 'header.php'; ?>





<div class="[ grid-element ] [ magicBox magicBox--s magicBox--xs ] [ page-intro ]">
  <div class="cover" style="background-image: url('x-images/5reservations/reservations1.jpg')"></div>
  
  <div class="magicBox__black center-parent">
    <div class="lotOfCopy center-child">
      <h1 class="u-textUpperCase u-margin-t-flush">Reservations</h1>
      <!-- <p class="accent">res-err-va-shon n. the act or an instance of reserving something i.e. a seat at a restaurant</p> -->
      <p>Use the booking widget below to make an online 
      reservation at Chefs Club for an intimate dinner with family or friends.</p>
      <p>Large groups and unique requests are also accepted. Please contact us: <?php echo $telephone_visible; ?></p>
        
    </div>
  </div>
</div>




<div class="[ grid-element ] [ magicBox magicBox--xs ] [ Hide-On-One-Column ]">
  <div class="cover" style="background-image: url('x-images/5reservations/reservations2.jpg')"></div>
</div>


<div class="[ grid-element ] [ magicBox magicBox--s magicBox--xs ]" style="overflow: visible">
  <div class="magicBox--gold">
    <div class="lotOfCopy">
      <h2 class="u-textUpperCase u-margin-t-flush">Book a table</h2>

      <?php include 'x-partials/booking-form.php'; ?>
        
    </div>
  </div>
</div>


<div class="[ grid-element ] [ magicBox magicBox--s magicBox--xs ]">
  <div class="magicBox--black">
    <div class="lotOfCopy">
      <h2 class="u-textUpperCase u-margin-t-flush">Contact</h2>
      <p>Large groups and unique requests are also accepted.<br>Please contact us:</p>

      <div class="buttonGroup dark u-textUpperCase u-cf">
        <a href="tel://<?php echo $telephone; ?>" class="button__a contact-active-tel u-cf">
          <span class="button__name"><?php echo $telephone_visible; ?></span>
        </a>
        <span class="button__a contact-tel u-cf">
          <span class="button__name"><?php echo $telephone_visible; ?></span>
        </span>

        <a href="https://goo.gl/maps/L1DcU" target="_blank" class="button__a u-cf">
          <span class="u-textTruncate button__name button__address"><?php echo $address1; ?><br><?php echo $address2; ?></span>
          <span class="u-textRight button__map">View map<i class="icon-map"></i></span>  
        </a>
      </div>
      
      <p class="opening-hours">Monday - Saturday: 5:30pm - 12:30am <br> Sunday: 11am - 4pm brunch, 4pm - 5:30pm late afternoon menu, 5:30pm - 11:00pm dinner</p> 
      <p class="contact-email">For press, contact: <a href="mailto:press@chefsclub.com?subject=Chefs Club New York - Website Enquiry">press@chefsclub.com</a></p> 
        
    </div>
  </div>
</div>





<?php include 'footer.php'; ?>