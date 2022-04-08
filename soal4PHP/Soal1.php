<?php
$tags = get_meta_tags('https://tekno.kompas.com/read/2021/03/04/12380077/ini-rekaman-pertandingan-online-pecatur-indonesia-yang-diblokir-karena-dituduh');

echo json_encode($tags['content_tags']);

?>