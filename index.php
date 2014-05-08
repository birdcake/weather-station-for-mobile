<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- <meta name = "viewport" content="width=device-width"> -->
<title>Jimmy的气象台</title>
<meta name = "viewport" content ="initial-scale=1.0,maximum-scale=1,user-scalable=no">
<meta name="description" content="小小气象台一枚，专业忽悠外加不靠谱若干">
<meta name="keywords" content="江门天气,蓬江,气象">
<!-- for wider screen -->
<link href="/css/styleall.css" rel="stylesheet" type="text/css" media="(min-width:768px)"/>
<!-- END for this session -->
<!-- for cellphone except iPhone nor iPad -->
<link href="/css/style767.css" rel="stylesheet" type="text/css" media="(max-width: 767px)"/>
<!-- END for this session -->
<!-- for iPhone including Retina sreies -->
<link href="/css/style383.css" rel="stylesheet" type="text/css" media="(max-width: 383px)" />
<!-- END for this session -->
<!-- Thank you Miaomiao -->

<!-- END for this session -->
<!-- GA -->
<?php include_once("analyticstracking.php") ?>
</head>

<body>

<div class="container" >
  <div class="header">
  <table>
  	<tr>
  		<td class="titleheader">
	  		蓬江区自动站 <div class="research">Realtime & for Research Use Only</div>
  		</td>
  		<!--
<td class="feedback">
  			报告问题
  		</td>
-->
  	</tr>
  </table>
  	 
    <!-- end .header --></div>
  <div class="content">

	<table  class="maintable"  >
		<tr class="temp_sum0" >
		
			<td>
				温湿度
			</td>
		</tr>
    <tr class="temp_detail" >
    <td>温度</td>
    <td><?php
  $doc = new DOMDocument();
  $doc->load( 'betterreal.xml' );
  
  $xmls = $doc->getElementsByTagName( "xml" );
  foreach( $xmls as $xml )
  {
  $temps = $xml->getElementsByTagName( "temp" );
  $temp = $temps->item(0)->nodeValue;
  
    echo "$temp";
  }
  ?>C
  </td>
    <td>体感温度 </td>
    <td><?php
  {
  $apptemps = $xml->getElementsByTagName( "apptemp" );
  $apptemp = $apptemps->item(0)->nodeValue;
  
    echo "$apptemp";
  }
  ?>C
  </td>
  </tr>
    
  <tr class="td_temperature_data">
    <td>露点</td>
    <td><?php
  {
  $dews = $xml->getElementsByTagName( "dew" );
  $dew = $dews->item(0)->nodeValue;
  
    echo "$dew";
  }
  ?>C
  </td>
  <td>相对湿度 </td>
    <td><?php
  {
  $hums = $xml->getElementsByTagName( "hum" );
  $hum = $hums->item(0)->nodeValue;
  
    echo "$hum";
  }
  ?>
  </td>
  </tr>
  <tr class="test22">
  	<td>风寒 </td>
  	<td><?php
  {
  $wchills = $xml->getElementsByTagName( "wchill" );
  $wchill = $wchills->item(0)->nodeValue;
  
    echo "$wchill";
  }
  ?>C
  	</td>
  	<td>酷热指数</td>
  	<td><?php
  {
  $heatindexs = $xml->getElementsByTagName( "heatindex" );
  $heatindex = $heatindexs->item(0)->nodeValue;
  
    echo "$heatindex";
  }
  ?>C
  	</td>
  </tr>

	
  
  <tr class="temp_sum" ><td>风速风向
			</td>
		</tr>
  <tr class="td_temperature_data">
    <td>阵风</td>
    <td><?php
  {
  $high_windgusts = $xml->getElementsByTagName( "high_windgust" );
  $high_windgust = $high_windgusts->item(0)->nodeValue;
  
    echo "$high_windgust";
  }
  ?> km/h
  </td>
  
  <td>平均风速 </td>
    <td><?php
  {
  $avg_windspeeds = $xml->getElementsByTagName( "avg_windspeed" );
  $avg_windspeed = $avg_windspeeds->item(0)->nodeValue;
  
    echo "$avg_windspeed";
  }
  ?> km/h
  </td>
  </tr>
  <tr>
  <td>风向</td>
  <td><?php
  {
  $avg_dirs = $xml->getElementsByTagName( "avg_dir" );
  $avg_dir = $avg_dirs->item(0)->nodeValue;
  
    echo "$avg_dir";
  }
  ?>
  </td>
  <td>蒲福风力</td>
  <td><?php
  {
  $beauforts = $xml->getElementsByTagName( "beaufort" );
  $beaufort = $beauforts->item(0)->nodeValue;
  
    echo "$beaufort";
  }
  ?>
  </td>
  </tr>
  
  
  <tr class="temp_sum" > 
			<td>
				降雨量
			</td>
		</tr>
  <tr class="td_temperature_data">
  <td>今天 </td>
    <td><?php
  {
  $today_hour_rainfalls = $xml->getElementsByTagName( "today_hour_rainfall" );
  $today_hour_rainfall = $today_hour_rainfalls->item(0)->nodeValue;
  
    echo "$today_hour_rainfall";
  }
  ?>
  </td>
  <td>前一小时</td>
  <td><?php
  {
  $last_hour_rainfalls = $xml->getElementsByTagName( "last_hour_rainfall" );
  $last_hour_rainfall = $last_hour_rainfalls->item(0)->nodeValue;
  
    echo "$last_hour_rainfall";
  }
  ?>
  </td>
  </tr>
  
  
	<tr class="temp_sum" > 
			<td>
				气压相关
			</td>
		</tr> 
  <tr class="td_temperature_data">
  <td>气压 </td>
    <td><?php
  {
  $presss = $xml->getElementsByTagName( "press" );
  $press = $presss->item(0)->nodeValue;
  
    echo "$press";
  }
  ?>
  </td>
  
  <td>当前趋势</td>
  <td><?php
  {
  $presstrendvals = $xml->getElementsByTagName( "presstrendval" );
  $presstrendval = $presstrendvals->item(0)->nodeValue;
  
    echo "$presstrendval";
  }
  ?>/hr
  </td>
	
	
  <tr><tr></tr>
  <td class="update">最后更新 </td>
    <td class="update"><?php
  {
  $refresh_times = $xml->getElementsByTagName( "refresh_time" );
  $refresh_time = $refresh_times->item(0)->nodeValue;
  
    echo "$refresh_time";
  }
  ?>
  </td>
  </tr>   
  </table> <!-- end MainTable -->
    <!-- end .content --></div>
  <div class="footer">
    Copyleft 2013-<?php
echo date("Y");?> <a href="http://weather.jimy.me">Jimmy的气象台</a>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>