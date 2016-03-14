<div>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="sponsor col-md-10">
      <!-- <div class="col-md-2">
        <h4>Didukung oleh :</h4>
        <a href="http://its.ac.id/" target="_blank">
            <img src="<?php echo URL_STATIC;?>/img/logo-its.jpg" style="width:150px;" alt="ITS"/>
        </a>
      </div>
		-->
      <!--<div class="col-md-8">
        <a href="http://www.telkom.co.id" target="_blank" class="padding5" ><img src="<?php echo URL_STATIC;?>/img/logo-telkom.jpg"></a>
        <a href="#" class="padding5" ><img src="<?php echo URL_STATIC;?>/img/logo-hitech.png"></a>
        <a href="http://www.rad.net.id" target="_blank" class="padding5" ><img src="<?php echo URL_STATIC;?>/img/logo-radnet.png"></a>
        <a href="http://www.telkomflexi.com" target="_blank" class="padding5" ><img src="<?php echo URL_STATIC;?>/img/logo-flexi.jpg"></a>
        <a href="http://www.telkomsel.com" target="_blank" class="padding5" ><img src="<?php echo URL_STATIC;?>/img/logo-telkomsel.jpg"></a>
      </div>-->
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
<div class="footer" style="padding-left: 15px; padding-right: 15px;  margin-right: -15px; margin-left: -15px;">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
       <div style="color: white;">
            <center>&copy; Sahabat UNBK Surabaya 2016 | <a style="color: white;" href='http://dispendik.surabaya.go.id/' target='_blank'>Dinas Pendidikan Kota Surabaya</a></center>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
</div>
<!--[if lt IE 9]>
  <script type='text/javascript' src="<?php echo URL_STATIC;?>/js/html5.js"></script>
  <script type='text/javascript' src="<?php echo URL_STATIC;?>/js/respond.js"></script>
<![endif]-->


<script type="text/javascript" src="<?php echo URL_STATIC;?>/js/css3-mediaqueries.js"></script>
<script src="<?php echo URL_STATIC;?>/js/countdown2.js"></script>

<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo URL_STATIC;?>/js/jquery.min.js"%3E%3C/script%3E'))</script>
<!--<script type="text/javascript" src="<?php echo URL_STATIC;?>/js/blueppdb-date.js"></script>-->
<?php
if (isset($jsCodes) && is_array($jsCodes)){
    foreach ($jsCodes as $js) { ?>
        <script type="text/javascript" src="<?php echo URL_STATIC;?>/js/<?php echo $js ?>.js"></script>
    <?php }
}
?>

<script type="text/javascript">
var bulan = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");function jam(){var tanggal = new Date(new Date()-jarak);document.getElementById("clock-widget").innerHTML = ("0" + tanggal.getHours()).slice(-2)+":"+("0" + tanggal.getMinutes()).slice(-2)+":"+("0" + tanggal.getSeconds()).slice(-2);document.getElementById("date-widget").innerHTML = tanggal.getDate()+" "+bulan[tanggal.getMonth()]+" "+tanggal.getFullYear();setTimeout(function() {jam();},1000);}window.setTimeout(function(){jam();},1000);
</script>
<?php if (isset($counterdown) && is_array($counterdown)){
    foreach ($counterdown as $js) { ?>
        <script type="text/javascript" src="<?php echo URL_STATIC;?>/js/<?php echo $js ?>.js"></script>
    <?php }
}?>

<script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22367884-1']);
      _gaq.push(['_setDomainName', 'ppdbsurabaya.net']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

</script>
    </body>
</html>