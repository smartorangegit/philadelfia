<?
session_start();
/*Utm 01.02.2018*/
if ($_GET)
{
    $utm=array(
        'utm_source' ,
        'utm_medium',
        'utm_campaign' ,
        'utm_term',
        'utm_content'
    );
    foreach($_GET as $key=>$t)
    {
        $metka= array_search($key,$utm);
        if ($metka!==FALSE)
        {
            $_SESSION[$utm[$metka]]=$t;
        }
    }
}
/*Utm End*/
?>
<div class="header">
  <div class="logo wow fadeInDown" data-wow-duration="2s">
    <svg  id="snap" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 308.3 254.4" enable-background="new 0 0 308.3 254.4" xml:space="preserve">
    <g>
      <polygon "linear" opacity="0.5" points="281.8,128.2 273.8,128.2 273.8,128.2 281.8,128.2">
        <animate begin="3s" fill="freeze" attributeName="points" dur="1s" to="281.8,128.2 273.8,128.2 154.5,246.6 154.5,254.4" />
      </polygon>
      <polygon "linear" opacity="0.3" points="27.3,128.2 35.3,128.2 35.3,128.2 27.3,128.2">
        <animate begin="3s" fill="freeze" attributeName="points" dur="1s" to="27.3,128.2 35.3,128.2 154.5,246.6 154.5,254.4"/>
      </polygon>
      <polygon "linear" opacity="0.5" points="154.5,0 154.5,8  154.5,8 154.5,0 ">
        <animate begin="1s" fill="freeze" attributeName="points" dur="1.6s" to="154.5,0 154.5,8 35.3,126.2 27.3,126.3"/>
      </polygon>
      <polygon "linear" opacity="0.3" points="154.5,8 154.5,0 154.5,0 154.5,8">
        <animate begin="1s" fill="freeze" attributeName="points" dur="1.6s" to="154.5,8 154.5,0 281.8,126.3 273.8,126.2"/>
      </polygon>
    </g>
    <g>
      <g>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M58.5,158.5c-2,0-3.6,0.7-4.8,2c-1.2,1.3-1.7,3.2-1.7,5.5c0,2.4,0.6,4.3,1.7,5.6c1.1,1.3,2.7,2,4.8,2c1.3,0,2.7-0.2,4.4-0.7v1.9c-1.3,0.5-2.8,0.7-4.7,0.7c-2.7,0-4.8-0.8-6.2-2.5s-2.2-4-2.2-7c0-1.9,0.4-3.5,1.1-5c0.7-1.4,1.7-2.5,3.1-3.3c1.3-0.8,2.9-1.2,4.7-1.2c1.9,0,3.6,0.4,5,1.1l-0.9,1.8C61.3,158.9,59.9,158.5,58.5,158.5z">
          <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze"  calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M82.7,166c0,2.9-0.7,5.2-2.2,6.9c-1.5,1.7-3.5,2.5-6.2,2.5c-2.7,0-4.8-0.8-6.2-2.5c-1.5-1.6-2.2-4-2.2-7c0-3,0.7-5.3,2.2-6.9c1.5-1.6,3.6-2.5,6.3-2.5c2.6,0,4.7,0.8,6.2,2.5C82,160.8,82.7,163.1,82.7,166z M68.1,166c0,2.5,0.5,4.4,1.6,5.6c1.1,1.3,2.6,1.9,4.6,1.9c2,0,3.6-0.6,4.6-1.9c1-1.3,1.6-3.2,1.6-5.7c0-2.5-0.5-4.3-1.5-5.6c-1-1.3-2.6-1.9-4.6-1.9c-2,0-3.6,0.6-4.6,1.9C68.7,161.7,68.1,163.6,68.1,166z">
 <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze" calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M101.1,175.2h-2.4l-10-15.4h-0.1c0.1,1.8,0.2,3.5,0.2,5v10.4h-2v-18.3h2.4l10,15.3h0.1c0-0.2-0.1-1-0.1-2.2c-0.1-1.2-0.1-2.1-0.1-2.6v-10.5h2V175.2z">
 <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze" calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M114,158.5c-2,0-3.6,0.7-4.8,2c-1.2,1.3-1.7,3.2-1.7,5.5c0,2.4,0.6,4.3,1.7,5.6c1.1,1.3,2.7,2,4.8,2c1.3,0,2.7-0.2,4.4-0.7v1.9c-1.3,0.5-2.8,0.7-4.7,0.7c-2.7,0-4.8-0.8-6.2-2.5c-1.5-1.6-2.2-4-2.2-7c0-1.9,0.4-3.5,1.1-5c0.7-1.4,1.7-2.5,3.1-3.3c1.3-0.8,2.9-1.2,4.7-1.2c1.9,0,3.6,0.4,5,1.1l-0.9,1.8C116.8,158.9,115.4,158.5,114,158.5z">
 <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze" calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M132.6,175.2h-10.2v-18.3h10.2v1.9h-8.1v5.9h7.6v1.9h-7.6v6.7h8.1V175.2z">
 <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze" calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M148.3,162.2c0,1.9-0.6,3.3-1.9,4.3c-1.3,1-3.1,1.5-5.4,1.5h-2.2v7.2h-2.1v-18.3h4.7C146,156.9,148.3,158.7,148.3,162.2z M138.8,166.2h1.9c1.9,0,3.3-0.3,4.1-0.9c0.8-0.6,1.3-1.6,1.3-2.9c0-1.2-0.4-2.1-1.2-2.7c-0.8-0.6-2-0.9-3.7-0.9h-2.4V166.2z">
 <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze" calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M157.7,175.2h-2.1v-16.4h-5.8v-1.9h13.7v1.9h-5.8V175.2z">
 <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze" calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M186.9,175.2h-2.1v-8.6h-9.6v8.6H173v-18.3h2.1v7.8h9.6v-7.8h2.1V175.2z">
 <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze"  calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M207.8,166c0,2.9-0.7,5.2-2.2,6.9c-1.5,1.7-3.5,2.5-6.2,2.5c-2.7,0-4.8-0.8-6.2-2.5c-1.5-1.6-2.2-4-2.2-7c0-3,0.7-5.3,2.2-6.9c1.5-1.6,3.6-2.5,6.3-2.5c2.6,0,4.7,0.8,6.2,2.5C207.1,160.8,207.8,163.1,207.8,166z M193.2,166c0,2.5,0.5,4.4,1.6,5.6c1.1,1.3,2.6,1.9,4.6,1.9c2,0,3.6-0.6,4.6-1.9c1-1.3,1.6-3.2,1.6-5.7c0-2.5-0.5-4.3-1.5-5.6s-2.6-1.9-4.6-1.9c-2,0-3.6,0.6-4.6,1.9C193.7,161.7,193.2,163.6,193.2,166z">
 <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze"  calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M225.7,156.9v11.9c0,2.1-0.6,3.7-1.9,4.9c-1.3,1.2-3,1.8-5.2,1.8c-2.2,0-3.9-0.6-5.1-1.8c-1.2-1.2-1.8-2.9-1.8-5v-11.8h2.1v12c0,1.5,0.4,2.7,1.3,3.5c0.8,0.8,2.1,1.2,3.7,1.2c1.5,0,2.7-0.4,3.6-1.2c0.8-0.8,1.3-2,1.3-3.5v-11.9H225.7z">
 <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze"  calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600"
        d="M240.9,170.3c0,1.6-0.6,2.9-1.8,3.8c-1.2,0.9-2.8,1.4-4.8,1.4c-2.2,0-3.8-0.3-5-0.8v-2.1c0.8,0.3,1.6,0.6,2.5,0.8c0.9,0.2,1.8,0.3,2.6,0.3c1.4,0,2.5-0.3,3.2-0.8c0.7-0.5,1.1-1.3,1.1-2.2c0-0.6-0.1-1.2-0.4-1.6c-0.3-0.4-0.7-0.8-1.3-1.1c-0.6-0.3-1.5-0.7-2.7-1.2c-1.7-0.6-2.9-1.3-3.7-2.2c-0.7-0.8-1.1-1.9-1.1-3.3c0-1.4,0.5-2.5,1.6-3.4c1.1-0.8,2.5-1.3,4.2-1.3c1.8,0,3.5,0.3,5,1l-0.7,1.9c-1.5-0.6-3-1-4.4-1c-1.1,0-2,0.2-2.6,0.7c-0.6,0.5-1,1.2-1,2c0,0.6,0.1,1.2,0.4,1.6c0.2,0.4,0.6,0.8,1.2,1.1c0.6,0.3,1.4,0.7,2.5,1.1c1.9,0.7,3.2,1.4,4,2.2C240.6,168.1,240.9,169.1,240.9,170.3z">
          <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze"  calcMode="linear"/></path>
        <path fill="none" stroke ="white" stroke-dasharray= "600" stroke-dashoffset="600" d="M254.9,175.2h-10.2v-18.3h10.2v1.9h-8.1v5.9h7.6v1.9h-7.6v6.7h8.1V175.2z">
          <animate id="p1" attributeName="stroke-dashoffset" begin="2s"  values="600; 0" dur="10s" repeatCount="1"  fill="freeze"  calcMode="linear"/></path>
      </g>
    </g>
    <path fill="#FFFFFF" d="M74.7,128.2V77.7h7.7v44.4"/>
    <path fill="#FFFFFF" d="M184.5,128.2V77.7h7.7v44.4"/>
    <g>
      <path fill="#ffffff" id="check" d="M0,77.7h7.7c1,0,2,0,3.2,0.1c1.2,0.1,2.3,0.3,3.5,0.6c1.2,0.3,2.3,0.8,3.3,1.5c1.1,0.7,2,1.6,2.9,2.7c0.8,1.2,1.5,2.6,2,4.3c0.5,1.7,0.8,3.8,0.8,6.3v1.8c0,2.7-0.2,5-0.7,6.9c-0.5,1.9-1.1,3.5-1.8,4.8c-0.8,1.3-1.7,2.4-2.7,3.1c-1,0.8-2.1,1.4-3.2,1.8c-1.1,0.4-2.2,0.7-3.3,0.8c-1.1,0.1-2.2,0.2-3.1,0.2H7.7v15.4H0V77.7zM8,107.2c1.4,0,2.5-0.2,3.5-0.6c0.9-0.4,1.7-1,2.3-1.9c0.6-0.9,1-2,1.2-3.3c0.2-1.3,0.4-3,0.4-4.9V92c0-1.5-0.1-2.8-0.3-3.9c-0.2-1.1-0.6-2-1.2-2.7c-0.6-0.7-1.3-1.2-2.3-1.6c-0.9-0.3-2.1-0.5-3.6-0.5H7.7v23.9H8z"/>
      <path fill="#FFFFFF" d="M27.8,77.7h7.7v21.1h9.1V77.7h7.7v50.5h-7.7v-23.3h-9.1v23.3h-7.7V77.7z"/>
      <path fill="#FFFFFF" d="M59.7,77.7h7.7v50.5h-7.7V77.7z"/>
      <path fill="#FFFFFF" d="M106.8,77.7h8.8l9.3,50.5h-7.7l-1.4-9h-9.2l-1.3,9h-7.8L106.8,77.7z M115,113.4l-3.5-25.1h-0.3l-3.6,25.1H115z"/>
      <path fill="#FFFFFF" d="M129.9,77.7h7.9c1.2,0,2.4,0,3.7,0.1c1.3,0.1,2.6,0.3,3.8,0.6c1.2,0.4,2.4,0.9,3.5,1.6s2.1,1.8,2.9,3.1c0.8,1.3,1.5,3,2,5c0.5,2,0.7,4.5,0.7,7.4v14.7c0,2.9-0.2,5.4-0.7,7.4c-0.5,2-1.1,3.7-2,5c-0.8,1.3-1.8,2.3-2.9,3.1c-1.1,0.7-2.3,1.3-3.5,1.6c-1.2,0.4-2.5,0.6-3.8,0.6c-1.3,0.1-2.5,0.1-3.7,0.1h-7.9V77.7zM139.5,122.8c1.4,0,2.5-0.2,3.4-0.5c0.9-0.4,1.6-1,2.1-1.9c0.5-0.9,0.9-2.1,1.1-3.7s0.3-3.5,0.3-5.9V95.2c0-2.4-0.1-4.3-0.3-5.9s-0.6-2.8-1.1-3.7c-0.5-0.9-1.2-1.5-2.1-1.9c-0.9-0.4-2-0.5-3.4-0.5h-2v39.5H139.5z"/> <path fill="#FFFFFF" d="M160,77.7h18.7v6h-11.1v15.1h8.5v6h-8.5v17.3H179v6h-19V77.7z"/> <path fill="#FFFFFF" d="M207.5,77.7h7.7c1,0,2,0,3.2,0.1c1.2,0.1,2.3,0.3,3.5,0.6c1.2,0.3,2.3,0.8,3.3,1.5c1.1,0.7,2,1.6,2.9,2.7c0.8,1.2,1.5,2.6,2,4.3c0.5,1.7,0.8,3.8,0.8,6.3v1.8c0,2.7-0.2,5-0.7,6.9c-0.5,1.9-1.1,3.5-1.8,4.8c-0.8,1.3-1.7,2.4-2.7,3.1c-1,0.8-2.1,1.4-3.2,1.8c-1.1,0.4-2.2,0.7-3.3,0.8c-1.1,0.1-2.2,0.2-3.1,0.2h-0.7v15.4h-7.7V77.7zM215.5,107.2c1.4,0,2.5-0.2,3.5-0.6c0.9-0.4,1.7-1,2.3-1.9c0.6-0.9,1-2,1.2-3.3c0.2-1.3,0.4-3,0.4-4.9V92c0-1.5-0.1-2.8-0.3-3.9c-0.2-1.1-0.6-2-1.2-2.7c-0.6-0.7-1.3-1.2-2.3-1.6c-0.9-0.3-2.1-0.5-3.6-0.5h-0.4v23.9H215.5z"/>
      <path fill="#FFFFFF" d="M235.3,77.7h7.7v21.1h9.1V77.7h7.7v50.5H252v-23.3h-9.1v23.3h-7.7V77.7z"/><path fill="#FFFFFF" d="M267.1,77.7h7.7v50.5h-7.7V77.7z"/><path fill="#FFFFFF" d="M290.2,77.7h8.8l9.3,50.5h-7.7l-1.4-9H290l-1.3,9h-7.8L290.2,77.7z M298.3,113.4l-3.5-25.1h-0.3l-3.6,25.1H298.3z"/></g><polyline fill="#6E6E74" points="192.2,122.2 202.6,122.2 202.6,128.2 184.5,128.2 "/><polyline fill="#6E6E74" points="82.4,122.2 92.8,122.2 92.8,128.2 74.7,128.2 "/>
    </svg>
  </div>
</div>
