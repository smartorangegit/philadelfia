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
              <h1 class="main_name">3 кімнатні</h1>
              <p class="main_text wow fadeInUp">
                Різниця у вартості 3-кімнатних та 2-кімнатних квартир незначна. Саме тому трикімнатна квартира в PHILADELPHIA Concept House − це розумний та вигідний вибір.
  						</p>
  							<p class="main_text wow fadeInUp">
                Трикімнатні квартири PHILADELPHIA Concept House мають лоджії й тераси. Однією з додаткових переваг є вільне планування такого житла. Тільки вам вирішувати, де розміститься спальня, а де кухня з вітальнею.
  						</p>
  						<p class="main_text wow fadeInUp">
                Якщо у вас велика сім′я і ви хочете жити комфортно, PHILADELPHIA Concept House є що вам запропонувати. 3-кімнатна квартира в новому комплексі − це передусім зручне житло, яке може стати вашим уже сьогодні.
  						</p>
              <a id="call_price" href="0" class="button20">Дізнатися ціну</a>
            </div>
            <div class="kim__center kim__center__3">
            </div>
            <div class="kim__right">
              <?php  /**Таблиця квартир*/
          			TableFlats($REZULT, 3);
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
