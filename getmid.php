<?php
$postdata = file_get_contents("php://input");
@file_get_contents('https://'.$_SERVER['SERVER_NAME'].'/LINE/' . json_encode($postdata));
