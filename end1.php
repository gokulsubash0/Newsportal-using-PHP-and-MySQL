<?php

include('simple_html_dom.php');
$html = file_get_html('https://www.indiatoday.in/');
echo $html->find('table.widget-wrapper top_stories_ordering', 0)->innertext;
