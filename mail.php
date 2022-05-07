<?php

$to ="vrushabhkale4005@gmail.com";
$sub ="test mail";
$body = "hello there";
$header="From:vrushabhkale4005@gmail.com";



if (mail($to, $sub, $body, $header)) {
	echo "mail send";
}else{echo "failled";}

?>