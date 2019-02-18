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
              <figure class="effect-sadie wow fadeIn" data-name="<?=$mes['commerce-3']?>" data-square="320.78" data-img="/img/commerce/rest.png">
                <img src="/img/commerce/com-1.jpg" alt=""/>
                <figcaption>
                  <div class="main_project__logo">
				    <p class="button6"><?=$mes['commerce-button6']?></p>
                    <p><?=$mes['commerce-3']?></p>
                    <p>320.78м<sup>2</sup></p>
                  </div>
                </figcaption>
              </figure>
              <figure class="effect-sadie wow fadeIn" data-name="<?=$mes['commerce-4']?> №1" data-square="101.66" data-img="/img/commerce/of101.png">
                <img src="/img/commerce/com-2.jpg" alt=""/>
                <figcaption>
                  <div class="main_project__logo">
				    <p class="button6"><?=$mes['commerce-button6']?></p>
                    <p><?=$mes['commerce-4']?></p>
                    <p>101,66м<sup>2</sup></p>
                  </div>
                </figcaption>
              </figure>
              <figure class="effect-sadie wow fadeIn" data-name="<?=$mes['commerce-4']?> №2" data-square="463.27" data-img="/img/commerce/of463.png">
                <img src="/img/commerce/com-3.jpg" alt=""/>
                <figcaption>
                  <div class="main_project__logo">
				    <p class="button6"><?=$mes['commerce-button6']?></p>
                    <p><?=$mes['commerce-4']?></p>
                    <p>463.27м<sup>2</sup></p>
                  </div>
                </figcaption>
              </figure>
              <figure class="effect-sadie wow fadeIn" data-name="<?=$mes['commerce-4']?> №3" data-square="673.44" data-img="/img/commerce/of673.png">
                <img src="/img/commerce/com-4.jpg" alt=""/>
                <figcaption>
                  <div class="main_project__logo">
				    <p class="button6"><?=$mes['commerce-button6']?></p>
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
	      <? FormInclude('callback_commercial_form')  ?>
       <div class="modalbox_flatplan modal_for_commerc">
         <div class="modalbox_close">
           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="M7.05 32.85l-.684-.687 6.154-6.154 6.154-6.155-6.136-6.135-6.135-6.135.686-.686.685-.687 6.135 6.135 6.136 6.135 6.135-6.135 6.137-6.135.686.686.686.685-6.137 6.135-6.135 6.135 6.154 6.154 6.153 6.153-.684.688-.683.688-6.156-6.155-6.154-6.156-6.156 6.156-6.155 6.155z" fill="#fff"></path></svg>
         </div>
         <div class="modalbox_inner">
 
           <div class="main_appart_img">
             <img id="commerceImg" src="" alt="<?=$mes['commerce-h1']?>" title="<?=$mes['commerce-h1']?>">
           </div>
		             <div class="content_name"><h2 id="commerceName"></h2>
           <div class="main_text" >
		   <span><?=$mes['commerce-square']?>:</span>
		   
             <span id="commerceSquere"></span>
             м<sup>2</sup>
			 <span class="span_line"><?=$mes['commerce-floor']?>:1</span>
			 <a id="call_on_commerce_plan" class="button6"><?=$mes['commerce-залишити заявку']?><i class="icon-long-arrow-right"></i></a>
           </div>
		   </div>
         </div>
       </div>
	
	   <style>
	  /*  .modalbox_flatplan .modalbox_inner {
		   display: flex;
	   }
	   
	   .modalbox_flatplan .main_appart_img {

			width: 50%;
	   }
	   .content_name h2 {
		    text-align: left;
	   }
	   .modal_for_commerc h2, .modal_for_commerc .main_text, .modal_for_commerc .content_name {
			width: 43%;
			margin-top: 4%;
			margin-left: 40px;
			flex-wrap: wrap;
	   }
	   .span_line {
		   line-height: 60px;
	   }
	   .content_name .button6 {
		   margin-top: 53%;
	   }
	   @media only screen and (max-width: 767px) {
		.modalbox_flatplan .modalbox_inner {
			display: block;
		}
		.modalbox_flatplan {
			height: auto;
		}
		.modalbox_flatplan .main_appart_img {
			width: 100%;
			height: auto;
		}
		.modalbox_flatplan .main_appart_img img {
			height: auto;
		}
		.modal_for_commerc h2, .modal_for_commerc .main_text, .modal_for_commerc .content_name {
			width: auto;
			margin-top: 0;
			margin-left: 0;
		}
		.content_name h2 {
			font-size: 24px;
		}
		.span_line {
			line-height: 40px;
		}
		.content_name .button6 {
			margin-top: 0;
		}

	   } */
	  
	   .main_text a {
		   cursor: pointer; 
	   }
	   </style>
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

$('#call_on_commerce_plan').click(function(e){
  e.preventDefault(),
  $('.overlay').fadeIn(300),
    
  $('#callback_commercial').css('display','block').animate({opacity: 1,top: '46%'}, 200)
  
  $('#kv')[0].value = $('#commerceName')[0].innerHTML;  
});

$(document).on('click', '#callback_commercial_close2', function(){
  $('#callback_commercial').css('display','none'),
  $('.overlay').fadeOut(300)
});


     </script>
