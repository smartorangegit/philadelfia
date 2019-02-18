<?php  HeadAdd(array('pageType'=>'class="otherpages"','head'=>true));?>
  	<?php// HeaderInclude(array('pageTypeMobileAll'=>2));?>


    
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
              <h1 class="main_name"><?H1page()?></h1>
				<?=$mes['Площа 2-к квартир в PHILADELPHIA Concept House стартує з 63 м2']?>
				<div class="list_appart">		
				<ul class="select__list">
					<li><a href="<?UrlAdd('1-kimnatni')?>"><?=$mes['1-кімнатні квартири']?></a></li>
					<li><?=$mes['2-кімнатні квартири']?></li>
					<li><a href="<?UrlAdd('3-kimnatni')?>"><?=$mes['3-кімнатні квартири']?></a></li>
                </ul>
				<style>
				.list_appart .select__list li {
					display: block;
					max-width: 166px;
				}
			
				</style>
				</div>
              <div id="call_price" href="0" class="button20"><h2><?=$mes['Дізнатися ціну_1-kimnatni']?></h2></div>
            </div>
            <div class="kim__center kim__center__2">
            </div>
            <div class="kim__right">
              <?php  /**Таблиця квартир*/
          			TableFlats($REZULT, 2);
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
