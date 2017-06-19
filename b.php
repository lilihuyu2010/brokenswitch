<?php


$a = '/^\!*?$/';
$b = '!asdasd';
if (preg_match($a, $b)) {
	echo 1;
} else {
	echo 2;
}
die;

$file = "/Users/lili/.ssh/id_rsa.pub";
$source = fopen($file, 'r');
$key = fread($source, filesize($file));

//$key = "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQC7dSLE2Yvx1/klfBZwGALPaJitfjTk86gXk8Sj5wS5i/TnqMhPDJksdkT8fXXlHGUiSiILZefWp+l90NG/gX/AwvuaJBtdtY/6MqvMd1wcV3gcpd1t1JHe9xB2LY+u9iYZ1TxlqcitjgEX8eK3h8UbW/hNNzpjG87JJsfihOyhKup0d1YuFaYiMdJQwQRpXTyFxsOyS+E/neZAA17dUvgaCQPOVTKGdLH/kTHPMoFKn+U/rXZuakpm+sY+dqiuYlVA4BB0ZGwRIiGGxxzMyAULR0bpBtjo/HolqnXUuSqDWTfDbpOe2R8OGJStovgpPvUp7r0YTCV7H32sznWgRSf3 lilihuyu2010@163.com";
function rsaEncrypt($str,$key)
{
    $result  = '';
    $length = 117;
    for($i = 0; $i < strlen($str)/$length; $i++  ) {
        $data = substr($str, $i * $length, $length);
        openssl_public_encrypt ($data, $encrypt, $key);
        $result .= $encrypt;
    }

    return base64_encode($result);
}

var_dump(rsaEncrypt('abc',$key));