<?php

namespace templates\errors;

use libraries\korn\client\KornHeader;

KornHeader::constructHeader('ไม่พบหน้าที่ท่านต้องการ');

?>

<article class="text-center">
	<h1>404 Error</h1>
	<p>ไม่พบหน้าที่ท่านต้องการ</p>
	<a class="btn btn-primary" href="/">กลับสู่หน้าหลัก</a>
</article>
