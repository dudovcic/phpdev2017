<?php
    
    $rss_url = 'http://www.pbs.org/wgbh/nova/rss/nova.xml';
    $api_endpoint = 'https://api.rss2json.com/v1/api.json?rss_url=';
    $data = json_decode( file_get_contents($api_endpoint . urlencode($rss_url)) , true );

    if($data['status'] == 'ok'){
        
        echo "<center>";
        echo "<h1>{$data['feed']['title']} </h1><br>";
        echo "</center>";

        foreach ($data['items'] as $item) {
            echo "Title: <strong>{$item['title']}</strong><br>";
            echo "Description: <u>{$item['description']}</u><br>";
            echo "<i><a href='{$item['link']}' target='blank'>Click here to read about article</a></i><br>";
            echo "Publish Date: <i>{$item['pubDate']}</i><br>";
            echo "<hr>";
        }
       }