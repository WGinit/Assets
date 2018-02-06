<?php

$APPID = 'wx9c1e10e5c25e5a8d';
$SECRET = 'ca1ebf7fc1234846e40aad0e527458ab';
$JSCODE = $_POST['code'];
$url = 'https://api.weixin.qq.com/sns/jscode2session?appid='+$APPID+'&secret='+$SECRET+'&js_code='+$JSCODE+'&grant_type=authorization_code';
$content= file_get_contents($url);
echo json_encode($content, JSON_UNESCAPED_UNICODE);//将json字符串转化成php数组