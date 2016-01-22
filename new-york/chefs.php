<?php 
	$title 			 = 'The Chefs | Chefs Club New York'; 
	$description = 'Chefs Club restaurant has selected talents from Food & Wine\'s Best New Chefs, to create exclusive dishes for this Manhattan menu.';
?>

<?php include 'header.php'; ?>




<div class="[ grid-element ] [ magicBox magicBox--s magicBox--xs ] [ page-intro ]">
  <div class="cover" style="background-image: url('x-images/3chefs/chefs1.jpg')"></div>
  
  <div class="magicBox__black center-parent">
    <div class="lotOfCopy center-child">
      <h1 class="u-textUpperCase u-margin-t-flush">VISITING CHEFS</h1>
      <p>Chefs Club by Food &amp; Wine welcomes the talented chefs below to offer a unique experience in the Chefs Club Studio.</p> 

      <p>Each chef will visit for a series of exclusive dinners for 16 guests at a time.</p>
      
      <p>FOR RESERVATIONS CALL 212 941 1100</p>
    </div>
  </div>
</div>



<div class="[ grid-element ] [ magicBox magicBox--xs ] [ Hide-On-One-Column ]">
  <div class="cover" style="background-image: url('x-images/3chefs/chefs2.jpg')"></div>
</div>




<div class="[ grid-element ] [ magicBox magicBox--xm ] [ Hide-On-One-Column ]">
  <div class="u-cl">
    <div class="cover [ grid-element__cell grid-element__cell--half ]" style="background-image: url('x-images/3chefs/chefs3--1.jpg')"></div>
    <div class="cover [ grid-element__cell grid-element__cell--half ]" style="background-image: url('x-images/3chefs/chefs3--2.jpg')"></div> 
  </div>
</div>




<div class="[ grid-element ] [ magicBox magicBox--s magicBox--xm ] ">
  <div class="magicBox--gold chefs-slider">
    <div class="lotOfCopy">
      <h2 class="chefs-slider__main-title [ u-textUpperCase u-margin-t-flush ]">
        <?php
          $this_year = date("Y");
          $next_year = (date("Y")+1);
          $sub_next_year = substr($next_year, -2)
        ?>
        Visiting Chefs In <?php echo $this_year; ?><?php //echo $sub_next_year;  ?>
      </h2>

      <div class="flexslider">
        <ul class="slides">

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/jowett_yu.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">JOWETT YU</h3>
            <h4 class="chefs-slider__now">In The Studio September 14th - 16th</h4>
            <p>Since opening last June, Chef Jowett Yu's Ho Lee Fook has been the hottest restaurant 
            in Hong Kong. For three nights, Yu brings his modern Chinese cooking to NYC and two lucky
             guests will win a free trip to Hong Kong courtesy of the Hong Kong Tourism Board! Reservations are limited and available by phone only 
              at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/bagale-small.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF MIKE BAGALE</h3>
            <h4 class="chefs-slider__now">In The Studio September 19th - 20th</h4>
            <p>Kitchen wizard Grant Achatz’ secret weapon, Chef Mike Bagale, has been running 
            the kitchen of Alinea for more than two years now. Since the Michelin Guide 
            first came to Chicago the restaurant has held its top rating. 
            For two special nights, guests will get to see the Alinea magic firsthand. 
            Reservations are limited and available by phone only at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/kunk-small.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF TREVOR KUNK</h3>
            <h4 class="chefs-slider__now">In The Studio September 28th - 29th</h4>
            <p>Former Chef de Cuisine of Dan Barber’s famous Blue Hill here in New York, Trevor 
            Kunk has since moved to California where he is totally rethinking the modern steakhouse at 
            PRESS in St. Helena. For two nights, he brings the Napa Valley bounty to NYC. Reservations are limited and available by phone only 
              at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/cuevas-small.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">JUAN JOSÉ CUEVAS & DIDIER ELENA: PUERTO RICO MEETS NYC</h3>
            <h4 class="chefs-slider__now">In The Studio October 2nd</h4>
            
            <h4 class="calendar-subtitle">SPECIAL PRICE OF $200 ALL INCLUDED / <a href="https://www.eventbrite.com/e/prmnyc-pairing-dinner-didier-elena-juan-jose-cuevas-tickets-17913868864" target="_blank">TICKETS ONLY AVAILABLE ONLINE</a></h4>

            <p>Celebrate the bounty and beauty of this Caribbean island’s culinary legacy 
            with a collaborative dinner featuring Juan José Cuevas of 1919 and Chefs Club’s 
            own Didier Elena, who was once Cuevas’ chef at Alain Ducasse’s Essex House 
            restaurant here in New York.
            <a style="font-weight:bold;text-decoration: underline;" href="https://www.eventbrite.com/e/prmnyc-pairing-dinner-didier-elena-juan-jose-cuevas-tickets-17913868864" target="_blank">TICKETS ONLY AVAILABLE ONLINE </a>
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/bennet.png" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF WILO BENET</h3>
            <h4 class="chefs-slider__now">In The Studio October 3rd</h4>
            
            <h4 class="calendar-subtitle">SPECIAL PRICE OF $200 ALL INCLUDED / <a href="https://www.eventbrite.com/e/prmnyc-presents-wilo-benet-of-pikayo-one-night-only-tickets-17914212893" target="_blank">TICKETS ONLY AVAILABLE ONLINE</a></h4>

            <p>Chef Wilo Benet of Pikayo combines traditional Puerto Rican 
            ingredients with Japanese, Chinese, Thai, Spanish, Italian, French and Arab influences.
             This fusion of flavors, together with Wilo’s artistic emphasis on style, creates
              a totally unique cuisine. A veteran of Eric Ripert’s famous Le Bernardin, Wilo returns to 
               New York for one night only.
              <a style="font-weight:bold;text-decoration: underline;" href="https://www.eventbrite.com/e/prmnyc-presents-wilo-benet-of-pikayo-one-night-only-tickets-17914212893" target="_blank">TICKETS ONLY AVAILABLE ONLINE </a>
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/gras.png" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF LAURENT GRAS</h3>
            <h4 class="chefs-slider__now">October 18-24</h4>
            
            <h4 class="calendar-subtitle">MAIN DINING ROOM TAKEOVER</h4>

            <p>His résumé reads like a constellation of Michelin stars. From Côte d’Azur, 
            Chef Laurent Gras has run kitchens in 
            Paris, Monaco, New York, San Francisco and Chicago and was Food & Wine Best 
            New Chef in 2002. He brings his incredible precision and creativity 
            to Chefs Club. Reservations are limited and available by phone only 
            at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/williams.png" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF BRADY WILLIAMS</h3>
            <h4 class="chefs-slider__now">In The Studio October 29-30</h4>

            <p>This past April, Chef Brady Williams took over the kitchen at Canlis in Seattle. 
            A veteran of FT33 in Dallas and Carlo Mirarchi’s Roberta’s 
            Blanca in Brooklyn, Williams will showcase the flavors of the Pacific Northwest and 
            the unique culture of Canlis for two nights. Reservations are limited and available by phone only 
            at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/sulpice.png" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF JEAN SULPICE</h3>
            <h4 class="chefs-slider__now">In The Studio November 4th</h4>

            <h4 class="calendar-subtitle">2 SEATINGS</h4>

            <p>A disciple of French greats like Marc Veyrat, Jean Sulpice was the youngest 
            chef ever to receive a Michelin star. Now he proudly holds two of them at his 
            eponymous gastronomic restaurant in Val Thorens, high up in the French Alps.  
            Reservations are limited and available by phone only 
            at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/poilane.png" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF APOLLONIA POÎLANE & LIOR LEV SERCARZ</h3>
            <h4 class="chefs-slider__now">In The Studio November 8th</h4>

            <h4 class="calendar-subtitle">BRUNCH</h4>

            <p>Wander down the Rue de Cherche-Midi in Paris, and you’re sure to run into 
            one of the most storied bakeries in France; Poîlane. For one special 
            brunch, Apollonia Poîlane will collaborate with Chef 
            Lior Lev Sercarz of La Boîte, a specialty spice shop in New York. Reservations are 
            limited and available by phone only at <a href="tel:212.941.1100">212.941.1100</a>. 
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/anderer.png" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF NICK ANDERER & GABRIELE BONCI</h3>
            <h4 class="chefs-slider__now">November 13-14</h4>

            <h4 class="calendar-subtitle">MAIN DINING ROOM TAKEOVER</h4>

            <p>Gabriele Bonci is the baddest baker in Italy, the force behind the incredible Pizzarium and 
            Panificio Bonci in Rome. Nick Anderer runs the kitchens at Maialino and the red-hot Marta here 
            in New York. Let’s see what happens when they get together at Chefs Club for a Roman pizza party 
            of epic proportions! Reservations are limited and available by phone only at 
            <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/tanaka.png" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF ATSUSHI TANAKA</h3>
            <h4 class="chefs-slider__now">In The Studio November 16-17</h4>

            <p>Atsushi Tanaka has cooked with Michelin-starred 
            titans like Pierre Gagnaire and Quique Dacosta. In 2014, he opened 
            Restaurant A.T. in Paris, where he distills all of those diverse experiences into a distinctly 
            personal cuisine. For two nights he brings his cooking style to Chefs Club.
             Reservations are limited and available by phone only at 
            <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/toups.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF ISAAC TOUPS</h3>
            <h4 class="chefs-slider__now">In The Studio December 15-16</h4>

            <p>Chef Isaac Toups is part of the new guard of 
            Cajun chefs taking an updated approach to a cuisine traditionally known 
            for rustic flavors. He spent a decade in Emeril 
            Lagasse’s fine dining kitchens before setting out on his own. For 
            two nights, he brings a little bit of Cajun country to NYC. Reservations are 
            available by phone only at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/coullion.png" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">CHEF ALEXANDRE COUILLON</h3>
            <h4 class="chefs-slider__now">In The Studio December 21-22</h4>

            <p>Chef Alexandre Couillon is the genius behind the 2 Michelin-starred La Marine, on 
            the island of Nourmoutier in western France. For two nights, he brings his unique, 
            seaside cuisine to the #ChefsClubStudio.Reservations are limited and 
            available by phone only at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>


          

          

          



          <!-- 

          <li class="chefs-slider__slide">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/paolo_casagrande.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">PAOLO CASAGRANDE</h3>
            <h4 class="chefs-slider__now">In The Studio September 9th - 10th</h4>
            <p>Legendary Basque chef Martín Berasetegui's right-hand man, Chef Paolo Casagrande of
             the 2 Michelin-starred Lasarte in Barcelona, is joining us for three nights in the
              #ChefsClubStudio. Reservations are limited and available by phone only 
              at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/matt-jennings.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">MATTHEW JENNINGS</h3>
            <h4 class="chefs-slider__now">In The Studio August 26th</h4>
            <p>Matthew Jennings has been widely recognized for his bold cooking and dedication to 
            New England locality through artisan and seasonal ingredients. In 2015 he opened Townsman ​
            and overnight it became the hottest restaurant in Boston. Join us for one special night 
            at Chefs Club as he brings his creative New England cuisine to New York. Reservations are limited and available by phone only 
              at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/didier-small.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">Didier Elena and Chef Cedric Vongerichten </h3>
            <h4 class="chefs-slider__now">In The Studio August 21 & 28th</h4>
            <p>For two nights only, Chefs Club's Culinary Director Didier Elena and Chef Cedric Vongerichten of 
              Perry Street will prepare an incredible prix fixe dinner on the lawn and cabana area of The Montauk Beach House. 
              These all inclusive events will feature music by DJ Spiky Phil.
              Tickets are limited, to book email: <a href="mailto:chefsclub@thembh.com">chefsclub@thembh.com</a> or phone: <a href="tel:631-668-2112">631-668-2112</a>.
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/matt_accarrino.png" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">MATTHEW ACCARRINO</h3>
            <h4 class="chefs-slider__now">In The Studio, July 28th and 29th</h4>
            <p>Yet another Food & Wine Best New Chef from 2014, Matthew Accarrino will give guests 
            a taste of his distinctly Californian take on regional Italian cuisine. Reservations are limited and available by phone only 
              at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/esben.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">ESBEN HOLMBOE BANG</h3>
            <h4 class="chefs-slider__now">In The Studio August 5th</h4>
            <p>Nordic superstar Esben Holmboe Bang from 2 Michelin-starred Maaemo in Oslo, 
            Norway joins us for one special night in the #ChefsClubStudio. Bang has catapulted 
            Maaemo to #64 on the prestigious San Pellegrino list of the best restaurants in 
            the world. Now he brings his Norwegian pantry to Chefs Club. Tickets to this 
            limited event are $200pp (ex. beverages, tax and gratuity), available by phone
            only: <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/erik_anderson.jpg" alt="">
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/jamie_malone.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">ERIK ANDERSON & JAMIE MALONE</h3>
            <h4 class="chefs-slider__now">In The Studio August 7th & 8th</h4>
            <p>Food & Wine Best New Chefs Erik Anderson & Jamie Malone will be joining forces 
            at Brut in Minneapolis for one of the most exciting restaurant openings in the country.
             For just 2 nights, they'll give guests in the Chef's Club Studio a peek of their menu.
             Reservations are limited and available by phone only 
              at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/paul_qui.png" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">PAUL QUI</h3>
            <h4 class="chefs-slider__now">In The Studio, July 23rd</h4>
            <p>Austin-based Chef Paul Qui (Food & Wine BNC ’14) gives us an exclusive preview of the
             omakase dinner he will serve at his new sushi counter, Otoko. Reservations are limited and available by phone only 
              at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/matt-mccallister.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">MATT McCALLISTER</h3>
            <h4 class="chefs-slider__now">In The Studio, July 16th to 17th</h4>
            <p>We are proud to welcome 2014 Food & Wine Best New Chef Matt McCallister of FT33 
            and the soon-to-open Filament in Dallas, TX. McCallister blends classic and modern 
            techniques and is continually updating and redefining regional Texas cuisine. Reservations 
            are limited and available by phone only at <a href="tel:212.941.1100">212.941.1100</a>.
            </p>  
          </li>

           <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/scottanderson.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">Scott Anderson</h3>
            <h4 class="chefs-slider__now">In The Studio, June 4th to 5th</h4>
            <p>
              Visiting from Elements restaurant, Princeton, NJ, Chef Anderson will be in the Studio
              for two evenings this June 2015.  
            </p>  
          </li>


          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/will_gilson.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">Will Gilson</h3>
            <h4 class="chefs-slider__now">In The Studio, June 1st to 2nd</h4>
            <p>
              From Restaurant Puritan & Company in Cambridge, MA
              Will Gilson’s farm-to-table cooking is second nature. Experience his fresh and seasonal 
              dishes for two evenings this June 2015.  
            </p>  
          </li>
          



          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/jerusha.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">Jerusha Frost</h3>
            <h4 class="chefs-slider__now">Wine Class May 30th</h4>
            <p>
              Sommelier Jerusha Frost will lead guests on a journey of white Burgundy, 
              starting up north in Chablis and traveling south through the Cote d'Or and ending in the 
              Maconnais. From 3-5 pm $75 per person. 
            </p>  
          </li>
          
          

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/erik.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">ERIK ANDERSON</h3>
            <h4 class="chefs-slider__now">In The Studio, January 9th to 11th</h4>
            <p>Chicago-born Anderson spent years cooking in Napa and then turning Southern cuisine on 
            its head at The Catbird Seat in Nashville. 
            Next year he and fiancée Jamie Malone will team up to open Brut in Minneapolis.
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/lachlan.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">Lachlan mackinnon-patterson</h3>
            <h4 class="chefs-slider__now">In The Studio, January 28th to 29th</h4>
            <p>Originally from Toronto, Lachlan pursued culinary school and early internships in Paris. 
            It took a stint in California for him to discover his real passion: Italy.
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/gabriel.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">GABRIEL RUCKER</h3>
            <h4 class="chefs-slider__now">In The Studio, February 24th to 25th</h4>
            <p>
              A lover of offal and ‘little birds with bones’, 
              Rucker was named one of Food &amp; Wine Magazine’s Best New Chefs 2007.
            </p>  
          </li> 

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/grae-michael.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">JOHN TESAR</h3>
            <h4 class="chefs-slider__now">In The Studio, March 24th to 25th</h4>
            <p>
              Chef partner of Knife at The Highland Dallas, Tesar was recently 
              nominated a third time as a James Beard “Best Chef: Southwest” semifinalist.  
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/gilles.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">GILLES EPIÉ</h3>
            <h4 class="chefs-slider__now">In The Studio, March 27th to 28th</h4>
            <p>
              Visiting from Paris, France, from Citrus Etoile, Chef Gilles will be in the Studio for two 
              evenings this March 2015.  
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/linton.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">LINTON HOPKINS</h3>
            <h4 class="chefs-slider__now">In The Studio, April 1st</h4>
            <p>Hopkins opened Restaurant Eugene in his native Atlanta in 2004, naming it after his grandfather. 
            Showcasing the best Georgia produce, he quickly garnered national attention.
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/aranud.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">ARNAUD FAYE</h3>
            <h4 class="chefs-slider__now">In The Studio, April 10th to 11th</h4>
            <p>
              Visiting from Chantilly, France, from Auberge du Jeu de Paume, 
              Chef Arnaud will be in the Studio for two evenings this April 2015.  
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/helene.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">MATTHEW GAUDET</h3>
            <h4 class="chefs-slider__now">In The Studio, April 3rd to 4th</h4>
            <p>
              A Massachusetts boy through and through, Best New Chef 2013 Gaudet opened West Bridge in Cambridge in 2012, 
              applying the rigor of classical French cuisine to the New England bounty he knows so well.  
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/jenn-louis-thumbnail.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">Jenn Louis</h3>
            <h4 class="chefs-slider__now">In The Studio April 27th</h4>
            <p>
              Visiting from Lincoln restaurant in Portland, Oregon, Chef Jenn will be in the Studio for one 
              evening this April 2015.  
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/jenkins-oleary-mazaite.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">Allison Jenkins, Janina O’Leary & Vilma Mazaite</h3>
            <h4 class="chefs-slider__now">In The Studio May 5th to 6th</h4>
            <p>
              Allison Jenkins and award-winning sommelier Vilma Mazaite and pastry chef Janina O'Leary 
              from <a href="http://lavaustin.com/" style="text-decoration:underline">La V</a> bring their rustic 
              yet refined Mediterranean cuisine and masterful wine pairings to New York for a two-night, 
              truly special dinner series.  
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/akrame.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">AKRAME</h3>
            <h4 class="chefs-slider__now">In The Studio, May 15th to 16th</h4>
            <p>
              It took only three months for Chef Akrame Benallal to earn his first Michelin star, 
              working with giants like Pierre Gagnaire and Ferran Adrià before opening his own place, 
              <a href="http://www.akrame.com/" style="text-decoration:underline">Restaurant Akrame</a>, 
              in Paris in 2011. For just two nights guests can experience the wonder of his cuisine in
              the Chefs Club Studio.  
            </p>  
          </li>

          <li>
            <img class="chefs-slider__avatar" src="x-images/3chefs/avatars/silverman_couple.jpg" alt="">
            <h3 class="chefs-slider__title [ u-textUpperCase ]">Aaron Silverman, Stuart Brioza &amp; Nicole Krasinski</h3>
            <h4 class="chefs-slider__now">In The Studio, June 12th to 14th</h4>
            <p>
              Aaron Silverman from DC, and Stuart Brioza and Nicole Krasinski 
              from San Francisco will be in the Studio for two evenings this June 2015.  
            </p>  
          </li>

          
          
          -->


        </ul>
      </div>
        
        
    </div>
  </div>
</div>





<?php include 'footer.php'; ?>