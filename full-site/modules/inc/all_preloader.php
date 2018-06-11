<!-- Preload-->
<style type="text/css">
#all_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;
background: url('/img/patt_pre.png'), -webkit-radial-gradient(center, ellipse cover, rgba(143,161,171,1) 0%, rgba(47,68,89,1) 100%);}
.svg_preload{ width: 100%; text-align: -webkit-center;  margin-top: 50vh;}
.svg_preload svg{width: auto;}
</style>
<div id="hellopreloader"><div id="all_preload">
  <div class="svg_preload">
    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="30" viewBox="0 0 120 30" fill="#fff">
        <circle cx="15" cy="15" r="12.6121">
            <animate attributeName="r" from="12" to="12" begin="0s" dur="1s" values="12;8;12" calcMode="linear" repeatCount="indefinite"/>
            <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="1.2s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"/>
        </circle>
        <circle cx="60" cy="15" r="11.3879">
            <animate attributeName="r" from="12" to="12" begin=".3s" dur="1s" values="12;8;12" calcMode="linear" repeatCount="indefinite"/>
            <animate attributeName="fill-opacity" from="1" to="1" begin="0.4s" dur="1.2s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"/>
        </circle>
        <circle cx="105" cy="15" r="12.6121">
            <animate attributeName="r" from="12" to="12" begin=".6s" dur="1s" values="12;8;12" calcMode="linear" repeatCount="indefinite"/>
            <animate attributeName="fill-opacity" from="1" to="1" begin=".8s" dur="1.2s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"/>
        </circle>
    </svg>
  </div>
</div></div>
<script type="text/javascript">var allpreloader = document.getElementById("all_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);allpreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(allpreloader);},1000);};</script>
<!-- Preload  -->
