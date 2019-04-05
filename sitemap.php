<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/

//Your Config File
require_once('config.ph');
header('Content-Type: text/xml');

echo '
<?xml version="1.0" encoding="UTF-8"?>
  <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
';
foreach($dbh->query("SELECT * FROM news WHERE news_status = 1 ORDER BY news_title ASC") as $dataRow){
echo '
<url><loc>https://yoursite.com/post/'.$dataRow['news_seo'].'</loc></url>
<changefreq></changefreq>
<lastmod>'.date("Y-m-d", strtotime($dataRow['news_date'])).'</lastmod>
<changefreq>weekly</changefreq>
<priority>0.5</priority>';
}
echo '</urlset>';
?>
