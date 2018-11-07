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


        <div class="main_values">
            <div class="content_name develop_name"><h1><?H1page()?></h1></div>
          <div class="developer_box wow fadeInUp" data-wow-duration="1.6s">
            <div class="riverside">
              <div class="proj_deveopers">
                <a class="river_link" href="http://saga-development.com.ua/">
                  <img width="200" src="/img/saga-development-logo.svg" alt="Saga">
                </a>
                <a class="river_link" href="https://perfect-group.ua/">
                  <img src="/img/perfect-logo.png" alt="Лого девелопера проекту Perfect Group" title="Лого девелопера проекту Perfect Group" >
                </a>
              </div>
              
              <p><?=$mes['Девелопери  PHILADELPHIA Concept House – SAGA Development та Perfect Group']?></p>
            </div>
            <!-- <div class="projects"> -->
              <h3 class="proj_owner"><?=$mes['Проекти <span>SAGA Development</span>']?></h3>
              <ul class="proj_slider">
  							<li class="logo_proj">
  								<a href="https://rybalsky.com.ua/" target="_blank">
  										<img src="/img/logo/rybalsky_logo_white.svg" alt="Жилой район RYBALSKY" title="Жилой район RYBALSKY" />
  								</a>
  							</li>
                <li class="logo_proj">
                  <a href="http://sanfrancisco.com.ua/" target="_blank">
                    <img src="/img/logo/sanfran_white.svg" alt="SanFrancisco Concept House" title="SanFrancisck Concept House" />
                  </a>
                </li>
  							<li class="logo_proj">
  								<a href="http://new-york.com.ua/" target="_blank">
  									<img src="/img/logo/new_york_logo_white.svg" alt="NEW YORK Concept House" title="NEW YORK Concept House" />
  								</a>
  							</li>
                <li class="logo_proj">
                  <a href="https://bristol.house/" target="_blank">
                    <img src="/img/logo/bristol_logo_white.svg" alt="BRISTOL Comfort House" title="BRISTOL Comfort House" />
                  </a>
                </li>
                <li class="logo_proj">
                  <a href="https://einstein.house/" target="_blank">
                    <img src="/img/logo/EINSTEIN-logo_white.svg" alt="EINSTEIN Concept House" title="EINSTEIN Concept House" />
                  </a>
                </li>
                <li class="logo_proj">
                  <a href="https://chicago.kiev.ua/" target="_blank">
                    <img src="/img/logo/chicago_logo_white.svg" alt="CHICAGO Central House" title="CHICAGO Central House"/>
                  </a>
                </li>
                <li class="logo_proj">
                  <a href="http://resident.house/" target="_blank">
                    <img src="/img/logo/resident_logo_white.svg" alt="RESIDENT Concept House" title="RESIDENT Concept House" />
                  </a>
                </li>
                <li class="logo_proj">
                  <a href="http://kandinsky-residence.com.ua/" target="_blank">
                    <img src="/img/logo/kandinsky_logo_white.svg" alt="KANDINSKY Odessa Residence" title="KANDINSKY Odessa Residence" />
                  </a>
                </li>
  						</ul>

                <h3 class="proj_owner"><?=$mes['Проекти <span>Perfect Group</span>']?></h3>
                <ul class="proj_slider">
                  <li class="logo_proj">
                    <a href="https://woodstoria.com.ua/" target="_blank">
                        <img src="/img/other-projects-logos/Woodstoriya_logo_refurbished_white.svg" alt="Woodstoriya" title="Woodstoriya" />
                    </a>
                  </li>
                  <li class="logo_proj">
                    <a href="https://perfect-group.ua/ru/projects/v-kvartal/" target="_blank">
                      <img src="/img/other-projects-logos/5_kvartal_white.svg" alt="5_kvartal" title="5_kvartal" />
                    </a>
                  </li>
                  <li class="logo_proj">
                    <a href="https://lebedinyiy.com.ua/" target="_blank">
                      <img src="/img/other-projects-logos/Lebediniy_Dark logo_for_site_white.svg" alt="Lebediniy" title="Lebediniy" />
                    </a>
                  </li>
                  <li class="logo_proj">
                    <a href="https://perfect-group.ua/ru/projects/bereginya/" target="_blank">
                      <img src="/img/other-projects-logos/Logo_vect_white.svg" alt="Beregynya" title="Beregynya" />
                    </a>
                  </li>
                  <li class="logo_proj">
                    <a href="https://www.the-garden.com.ua/" target="_blank">
                      <img src="/img/other-projects-logos/Logotype_Final_text_gold_white.svg" alt="EINSTEIN Concept House" title="EINSTEIN Concept House" />
                    </a>
                  </li>
                </ul>

            <!-- </div> -->
          </div>
        </div>
      </div>

      <style media="screen">
      .proj_deveopers {
        display: flex;
        align-items: center;
        justify-content: space-around;
      }
      .proj_owner {
        font-size: 30px;
        text-align: center;
        margin-top: 20px;
      }
      .proj_owner span {
        font-weight: 600;
      }
      .main_values{
        min-height: calc(100vh - 82px);
      }
        .bx-wrapper .bx-controls-direction a{text-indent: 0!important;}
        .bx-wrapper .bx-prev {left: -40px;}
        .bx-wrapper .bx-next {right: -40px;}
        .bx-prev:before, .bx-next:before{color: white; line-height: normal;
        }
        @media only screen and (max-width:768px) {
          .main_values{
            padding-top: 80px;
            min-height: calc(100vh - 150px);
          }
        }
      </style>

      <!-- pause: 3000, -->
      <!-- moveSlides: 1, -->

	     <?php	 FooterAdd(array('html'=>'
       <link rel="stylesheet" href="/css/bxslider.css">
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
      var defaultSliderConfiguration = {
        slideWidth: 180,
        minSlides: 1,
        maxSlides: 5,
        moveSlides: 1,
        auto: true,
        speed: 1000,
        pause: 3000,
        slideMargin: 20,
        infiniteLoop: true,
        easing: "ease-in-out",
        responsive: true,
        touchEnabled: true,
        pager: false,
        controls: true,
        nextText: "",
        prevText: "",
        onSliderResize: function() {
          var sliderConfiguration = getScreenSize();
          bxSlider.reloadSlider(sliderConfiguration)
        }
      };


      function getScreenSize() {
        var width = window.innerWidth;
        if(width > 1260) {
          return defaultSliderConfiguration;
          } else if(width > 1060 && width < 1260) {
            return Object.assign({}, defaultSliderConfiguration, {maxSlides: 4 });
            } else if(width > 850 && width < 1060) {
              return Object.assign({}, defaultSliderConfiguration, {maxSlides: 3 });
              } else if(width > 440 && width < 850) {
                return Object.assign({}, defaultSliderConfiguration, {maxSlides: 2 });
                } else {
                  return Object.assign({}, defaultSliderConfiguration, {maxSlides: 1 });
                  }
                  }

                  var sliderConfiguration = getScreenSize();

                  var bxSlider = $(".proj_slider").bxSlider(sliderConfiguration);
      </script>


	'));	?>
