<?php
if(isset($_GET)){
	foreach($_GET as $key => $v){
		echo $key." : ".$v."<br>";
	}
}