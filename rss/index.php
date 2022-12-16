<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="ドーミーイン北見,北見,ホテル,北海道,ビジネスホテル,温泉,天然温泉,宿泊,予約,常呂川の湯,ところがわの湯">
	<meta name="description" content="【天然温泉 常呂川の湯 ドーミーイン北見】のご予約は公式サイトホテスパがお得！北海道、JR「北見」駅より徒歩3分。露天風呂付き天然温泉でリゾート気分を満喫。疲れが癒せると同時に、ツルツルお肌もゲット！">
	<title>【公式】天然温泉 常呂川の湯 ドーミーイン北見 / 北見 ホテル｜ホテスパ - HOTESPA.net</title>
  
<style>
    * {
        padding: 0; margin: 0;
    }
   /* width */
        ::-webkit-scrollbar {
            width: 4px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: gray;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    body {
        font-size: 14px;
        /* padding: 10px; */
    }
    article {
        border-bottom: 1px solid #333;
        display: block;
        padding: 7px 10px;
        position: relative;
    }
    article span {
        position: absolute;
        bottom: 4px;
        right: 10px;
        font-size: 12px;
        font-style: italic;
        display: none;
    }
    .left {
        width: 60px;
        height: 60px;
        border-radius: 14px;
        overflow: hidden;
    }
    .left img {
        width: 100%;
    }
    .right {
        width: 100%;
    }
    article ul {
        list-style: none;
        margin-bottom: 5px;
    }
    article .link {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        opacity: 0;
    }
    article .title {
        font-size: 16px;
        font-weight: bold;
        margin-top: 3px;
    }
    article .des {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 80%;
        padding-left: 0;
        padding-right: 20px;
        display: none;
    }
    .source {
        padding-left: 0;
    }
    .col {
        display: flex;
        justify-content: space-between;
        position: absolute;
        right: 80px;
        top: 7px;
        font-size: 11px;
    }
    .col h3 {
        margin: 0 0 8px 0;
    }
    a {
        text-decoration: none;
        color: #333;
    }
    .row {
        display: flex;
        align-items: flex-start;
        flex-direction: row-reverse;
        position: relative;
    }
    article strong {
        display: none;
    }
    .hide1 {
        display: none;
    }
    .right ul:last-child{
        display: none;
    }
    .right ul:first-child{
        display: flex;
        flex-direction: column-reverse;
    }
    .col h3 {
        display: none;
    }
</style>
</head>
<body>
  
<?php
  
    $rss_url = 'https://trends.google.com.vn/trends/trendingsearches/daily/rss?geo=VN';
    $api_endpoint = 'https://api.rss2json.com/v1/api.json?rss_url=';
    $data = file_get_contents($rss_url);
    // $data = json_decode( file_get_contents($api_endpoint . urlencode($rss_url)) , true );
    
    $search = ["</rss>","<?xml version='1.0' encoding='UTF-8' standalone='yes'?>","<rss xmlns:atom='http://www.w3.org/2005/Atom' xmlns:ht='https://trends.google.com.vn/trends/trendingsearches/daily' version='2.0'>",'&','#39;','<title>Daily Search Trends</title>','<description>','</description>','<channel>','</channel>','<item>','</item>','<title>','</title>','<ht:approx_traffic>','</ht:approx_traffic>','<link>','</link>','<ht:picture>','</ht:picture>','<pubDate>','</pubDate>','<ht:picture_source>','</ht:picture_source>','<ht:news_item>','</ht:news_item>','<ht:news_item_title>','</ht:news_item_title>','<ht:news_item_snippet>','</ht:news_item_snippet>','<ht:news_item_url>','</ht:news_item_url>','<ht:news_item_source>','</ht:news_item_source>', '+0700'];
    $replace   = ["","","",' ',"'",'','<p class="hide1">','</p>','<div>','</div>','<article>','</div></div></article>','<div class="col"><h3>','</h3>','<b>','</b></div><div class="row"><div class="left">','<a href="','" target="_blank">','<img src="','">','<span>','</span>','<strong>','</strong></a></div><div class="right">','<ul>','</ul>','<li class="title">','</li>','<li class="des">','</li>','<a class="link" href="','" target="_blank">Link</a>','<li class="source">','</li>',''];
    $result = str_replace($search, $replace, $data);
  	$keys = ['amp;','middot;','quot;'];
  	$box = ['','',''];
    $result = str_replace($keys, $box, $result);
    echo $result;

    // if($data['status'] == 'ok'){
    //     foreach ($data['items'] as $item) {
    //         echo "{$item['title']}\n";
    //         echo "{$item['description']}\n<br>";
    //     }
    // } 
  
?>
    </body>
    </html>
