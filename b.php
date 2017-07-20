<?php
session_start();
//$_SESSION['a'] = 1;

var_dump($_SESSION);die;

var_dump("oWnft5mbftXK8VuyqkdZBeJMNh4R0e99GHFmgSWpygou2UN%2Fj7X%2FuKw2GZWtHmeBCcVbL6IOfbCqEA%2FDPENI77N8S9MDt%2Fh9efl%2Fh7g4mlPngzT3Epp2b%2Fq1UbVuk19ZsYM390YU%2FuJ5Q7PXyyabOmXypffKSvEqIfNa%2FoNh2Sk%3D" == "oWnft5mbftXK8VuyqkdZBeJMNh4R0e99GHFmgSWpygou2UN%2Fj7X%2FuKw2GZWtHmeBCcVbL6IOfbCqEA%2FDPENI77N8S9MDt%2Fh9efl%2Fh7g4mlPngzT3Epp2b%2Fq1UbVuk19ZsYM390YU%2FuJ5Q7PXyyabOmXypffKSvEqIfNa%2FoNh2Sk%3D");die;

$dn = array(  
        "countryName" => 'CN', //所在国家名称  
        "stateOrProvinceName" => 'Beijing', //所在省份名称  
        "localityName" => 'Beijing', //所在城市名称  
        "organizationName" => 'Lili',   //注册人姓名  
        "organizationalUnitName" => 'yunniao', //组织名称  
        "commonName" => 'Lili', //公共名称  
        "emailAddress" => 'lili2010@163.com' //邮箱  
);  
    $privkeypass = '111111'; //私钥密码  
    $numberofdays = 1000;     //有效时长  
    $cerpath = "/Users/lili/test.cer"; //生成证书路径  
    $pfxpath = "/Users/lili/test.pfx"; //密钥文件路径  
    
    //生成证书  
    $privkey = openssl_pkey_new(); 
    $csr = openssl_csr_new($dn, $privkey);  
    $sscert = openssl_csr_sign($csr, null, $privkey, $numberofdays);  
    openssl_x509_export_to_file($sscert, $cerpath); //导出证书到文件
    openssl_pkcs12_export_to_file($sscert, $pfxpath, $privkey, $privkeypass); //生成密钥文件