<?php  HeadAdd();?>
  	<?php //HeaderInclude(array('pageTypeMobileAll'=>true));?>

    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/all_preloader.php')?>
    <!-- <style media="screen"> body{ visibility: hidden; }</style> -->

    <div id="perspective" class="perspective effect-laydown">
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->
      <div class="container">
        <div class="wrapper">


          <section class="commerce_section">

            <h1 class="main_name wow fadeIn">
              <?=$mes['commerce-h1']?>
            </h1>
            <div class="main_text wow fadeIn">
              <?=$mes['commerce-1']?>
            </div>
            <h2 class="main_name wow fadeIn">
              <?=$mes['commerce-2']?>
            </h2>
            <div class="commerce__box">
              <figure class="effect-sadie wow fadeIn" data-name="Ресторан" data-square="320.78" data-img="/img/commerce/rest.png">
                <img src="/img/commerce/com-1.jpg" alt=""/>
                <figcaption>
                  <div class="main_project__logo">
                    <p><?=$mes['commerce-3']?></p>
                    <p>320.78м<sup>2</sup></p>
                  </div>
                </figcaption>
              </figure>
              <figure class="effect-sadie wow fadeIn" data-name="Офіс №1" data-square="101.66" data-img="/img/commerce/of101.png">
                <img src="/img/commerce/com-2.jpg" alt=""/>
                <figcaption>
                  <div class="main_project__logo">
                    <p><?=$mes['commerce-4']?></p>
                    <p>101,66м<sup>2</sup></p>
                  </div>
                </figcaption>
              </figure>
              <figure class="effect-sadie wow fadeIn" data-name="Офіс №2" data-square="463.27" data-img="/img/commerce/of463.png">
                <img src="/img/commerce/com-3.jpg" alt=""/>
                <figcaption>
                  <div class="main_project__logo">
                    <p><?=$mes['commerce-4']?></p>
                    <p>463.27м<sup>2</sup></p>
                  </div>
                </figcaption>
              </figure>
              <figure class="effect-sadie wow fadeIn" data-name="Офіс №3" data-square="673.44" data-img="/img/commerce/of673.png">
                <img src="/img/commerce/com-4.jpg" alt=""/>
                <figcaption>
                  <div class="main_project__logo">
                    <p><?=$mes['commerce-4']?></p>
                    <p>673.44м<sup>2</sup></p>
                  </div>
                </figcaption>
              </figure>

            </div>

            <h2 class="main_name wow fadeIn">
              <?=$mes['commerce-5']?>
            </h2>
            <div class="main_text wow fadeIn">
            <?=$mes['commerce-6']?>
            </div>
            <h2 class="main_name wow fadeIn">
              <?=$mes['commerce-7']?>
            </h2>
            <div class="main_text wow fadeIn">
              <?=$mes['commerce-8']?>
            </div>

          </section>
      </div>







	     <?php	 FooterAdd();	?>
       <!-- <div class="overlay_flatplan"></div> -->
       <div class="modalbox_flatplan modal_for_commerc">
         <div class="modalbox_close">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="M7.05 32.85l-.684-.687 6.154-6.154 6.154-6.155-6.136-6.135-6.135-6.135.686-.686.685-.687 6.135 6.135 6.136 6.135 6.135-6.135 6.137-6.135.686.686.686.685-6.137 6.135-6.135 6.135 6.154 6.154 6.153 6.153-.684.688-.683.688-6.156-6.155-6.154-6.156-6.156 6.156-6.155 6.155z" fill="#fff"></path></svg>
         </div>
         <div class="modalbox_inner">
           <div class="content_name"><h2 id="commerceName"></h2></div>
           <div class="main_text" >(
             <span id="commerceSquere"></span>
             м<sup>2</sup>)
           </div>
           <div class="main_appart_img">
             <img id="commerceImg" src="" alt="<?=$mes['commerce-h1']?>" title="<?=$mes['commerce-h1']?>">
           </div>
         </div>
       </div>
       <!--end  modalbox with flatplan-->
       <script type="text/javascript">

       var elems = document.getElementsByClassName('effect-sadie');
       var modalBox = document.querySelector('.modal_for_commerc');
       var closeBtn = document.querySelector('.modalbox_close');
       var i;


       function openModal() {
         modalBox.classList.add("opened");
       };
       function closeModal() {
         modalBox.classList.remove("opened");
       };


       for (i = elems.length - 1; i >= 0; --i) {
         elems[i].addEventListener('click', function (){

           var name = this.dataset.name;
           var square = this.dataset.square;
           var link = this.dataset.img;
           document.querySelector('#commerceName').innerHTML = name;
           document.querySelector('#commerceSquere').innerHTML = square;
           document.querySelector('#commerceImg').src = link;
           openModal();

         });
       };

       closeBtn.addEventListener('click', closeModal);


     </script>
