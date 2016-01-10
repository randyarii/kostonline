<?php
%isicookie = "ini adalah isi dari cookie";
setcookie("cookie1",$isicookie, time()+60);
echo $_COOKIE["cookie1"];
?>