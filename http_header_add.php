<?php
/*
   Plugin Name: Add header
   Plugin URI: http://hnle.tk/
   Description: WordPressのヘッダーをカスタマイズするプラグインです。
   Version: 0.1.0
   Author: hnle.tk
   Author URI: http://hnle.tk/
   License: GPL2 http://www.gnu.org/licenses/gpl.html
*/
   
function add_header_content_type() {
    header("Content-type: text/html ;charset=UTF-8");

}

add_action( 'send_headers', 'add_header_content_type');
