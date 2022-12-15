
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var a1 = "<p>" + $(".summaryDescCompact-E1_1").html() + "</p>";
    var a2 = "" + $(".summaryTemperatureCompact-E1_1").html() + "</p>";
    var a3 = "<p>" + $(".location_name_main_container-E1_1").html() + "</p>";
    var a4 = "<p> Độ ẩm : " + $("#CurrentDetailLineHumidityValue").html();
    var a5 = " | Gió :" + $("#CurrentDetailLineWindValue").html() + "</p>";
    var a6 = "<p class='doC'><img src='" + $("#OverviewCurrentTemperature img").attr('src') + "'>";
    //alert(a1 + "<br>" +a2);
    $("#getContent").html(a3 + a6 + a2 + a1 + a4 + a5 );
});
</script>
</head>
<body>
    
<style>

  body {
    overflow: hidden;
       color: #Fff;
  }
* {
    padding: 0;
    margin: 0;    
}
 #getContent {
    font-size: 13px;
   background-image: linear-gradient(#2a97cb, #6aa7ca);
       height: 145px;
}
.doC {
    display: flex;
    font-size: 32px;
    line-height: 1.4;
    margin: 0;
}
.doC img {
    width: 40px;
    margin-right: 10px;
}
#data_html {
    display: none;
}
.contentContainer-E1_1, .fifthLayerContainer-E1_1 {
    display: none !important;
}
#root {
    display: none;
    border: 1px solid #000;
}
  .icon_indicator-E1_1 {
    display: none;
  }
</style>
<div id="data_html">
    <?php
        $html = file_get_contents('https://www.msn.com/vi-vn/weather/forecast?loc=eyJ4IjoiMTA4LjIyMDgzIiwieSI6IjE2LjA2Nzc4In0%3D&weadegreetype=C&cvid=930596766be447f7a1e6a7970eec4513');
        echo $html;
    ?>
</div>

<div id="getContent"></div>

</body>
</html>
