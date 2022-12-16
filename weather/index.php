
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
a {
	text-decoration: none;
  	color:#fff;
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
<?php
$ip = $_SERVER['REMOTE_ADDR'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
$ip = $_SERVER['HTTP_CLIENT_IP'];
} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}

$url = "https://ipinfo.io/" . $ip . "?token=25ead6c37daae4";
$location = json_decode(file_get_contents($url), true);
  $rep = str_replace(' ', '-', $location["city"]);
  $val = 'in-'.$rep.',Vi%E1%BB%87t-Nam'; 
  $local = 'https://www.msn.com/vi-vn/weather/forecast/' . $val;
//print_r($location);
/*
switch ($location["city"]) {
  case "Da Nang":
    $val = 'in-%C4%90%C3%A0-N%E1%BA%B5ng,Vi%E1%BB%87t-Nam';
    break;
  case "Hanoi":
    $val = 'in-H%C3%A0-N%E1%BB%99i,Vi%E1%BB%87t-Nam';
    break;
  case "Ho Chi Minh":
    $val = 'in-Th%C3%A0nh-Ph%E1%BB%91-H%E1%BB%93-Ch%C3%AD-Minh,Vi%E1%BB%87t-Nam';
    break;
  case "Lâm Đồng":
    $val = 'in-%C4%90%C3%A0-L%E1%BA%A1t,Vi%E1%BB%87t-Nam';
    break;
  case "An Giang":
    $val = 'in-An-Giang,Vi%E1%BB%87t-Nam';
    break;
  case "Bà Rịa-Vũng Tàu":
    $val = 'in-B%C3%A0-R%E1%BB%8Ba,B%C3%A0-R%E1%BB%8Ba-V%C5%A9ng-T%C3%A0u';
    break;
  case "Bạc Liêu":
    $val = 'in-B%E1%BA%A1c-Li%C3%AAu,Vi%E1%BB%87t-Nam';
    break;
  case "Bắc Giang":
    $val = 'in-B%E1%BA%AFc-Giang,Vi%E1%BB%87t-Nam';
    break;
  case "Hải Dương":
    $val = 'in-H%E1%BA%A3i-D%C6%B0%C6%A1ng,Vi%E1%BB%87t-Nam';
    break;
  case "Thái Bình":
    $val = 'in-Th%C3%A1i-B%C3%ACnh,Vi%E1%BB%87t-Nam';
    break;
  case "Quảng Nam":
    $val = 'in-Qu%E1%BA%A3ng-Nam,Vi%E1%BB%87t-Nam';
    break;
  case "An Giang":
    $val = 'in-An-Giang,Vi%E1%BB%87t-Nam';
    break;
  case "An Giang":
    $val = 'in-An-Giang,Vi%E1%BB%87t-Nam';
    break;
  case "An Giang":
    $val = 'in-An-Giang,Vi%E1%BB%87t-Nam';
    break;
  case "An Giang":
    $val = 'in-An-Giang,Vi%E1%BB%87t-Nam';
    break;
  case "An Giang":
    $val = 'in-An-Giang,Vi%E1%BB%87t-Nam';
    break;
  default:
   $val = 'Việt-Nam';
}
*/
//Nghệ An, Haiphong, Thanh Hóa, Bắc Ninh, Bình Định, Gia Lai, Hải Dương, Đồng Nai, Tiền Giang, Đắk Lắk, Bình Dương, Thái Nguyên, Bắc Giang, Yên Bái, Quảng Ninh, Phú Thọ, Can Tho, 

// Kết quả


  
//http://incardgiare.vn/tin-tuc/cau-hoi-thuong-gap/danh-sach-64-tinh-thanh-viet-nam-va-ma-vung-dien-thoai
//https://myip.ms/browse/states/1/countryID/VNM/countryID_A/1
//https://ipinfo.io/account/search
  
?>

<div id="data_html">
    <?php
        $html = file_get_contents($local);
        echo $html;
    ?>
</div>
<a href="<?php echo $local ?>" target="_blank">
<div id="getContent"></div>
</a>


</body>
</html>
