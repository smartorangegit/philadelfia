<?php  HeadAdd(array('pageType'=>'class="otherpages"','head'=>true));?>
  	<?php// HeaderInclude(array('pageTypeMobileAll'=>2));?>


    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/preloader.php')?>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/form/apartments_form.php')?>
    <div id="perspective" class="perspective effect-laydown">
<?//if (!$detectMob) :?>
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->

	<?//endif;?>
      <div class="container">
        <div class="wrapper">
          <section class="kimnatni">
            <div class="kim__left">
              <h1 class="main_name">1 кімнатні</h1>
              <p class="main_text wow fadeInUp">
  							Однокімнатні квартири в PHILADELPHIA Concept House відповідають всім ключовим характеристикам комфортного житла і при цьому мають прийнятну ціну.
  							Якщо ж додати сюди вдале розташування комплексу, можна впевнено стверджувати, що 1-кімнатні квартири є максимально вигідною пропозицією.
  						</p>
  							<p class="main_text wow fadeInUp">
  							Між іншим, придбання такої нерухомості є ідеальним варіантом для однієї людини або пари без дітей.
  						</p>
  						<p class="main_text wow fadeInUp">
  							Купівля нерухомості в новобудові на ранніх стадіях будівництва та її подальший продаж дуже вигідний: квадратні метри щороку дорожчають, або таке житло можна здавати в оренду й отримувати непоганий прибуток.
  						</p>
              <a id="call_price" href="0" class="button20">Дізнатися ціну</a>


            </div>
            <div class="kim__center">
              <!-- <img class="poster__img" src="/img/img1a.jpg" alt="Будинок"/> -->
            </div>
            <div class="kim__right">
              <?php  /**Таблиця квартир*/
          			TableFlats($REZULT, 1);
          		?>

            </div>

          </section>



          <style media="screen">
            .fixed_menu{  display: block;}
          </style>

        </div>
        <!-- $("tbody tr[data-href]").addClass("clickable").click( function() {
          window.location = $(this).attr("data-href");
        }); -->

        <?php	 FooterAdd(array('index'=>true,'html'=>'

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
          <script type="text/javascript">
          $("tbody tr[data-href]").mouseenter(function(){
            $(this).addClass("clickable").click(function(){
              window.location = $(this).attr("data-href");
              })
            });
            $("tbody tr[data-href]").mouseleave(function(){
              $(this).removeClass("clickable")
              });

          </script>
          <script>

          $("tbody tr").mouseenter(function(){
            $(this).find(".box-img").fadeIn(100);
            $(this).find(".box-img img").attr("src", $(this).attr("data-img"));
            })

          $("tbody tr").mouseleave(function(){
            $(this).find(".box-img").fadeOut(100);
          })
        </script>


      	', 'head'=>true));	?>
