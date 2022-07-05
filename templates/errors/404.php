<?php

namespace templates\errors;

use libraries\kornyellow\utils\KYHeader;

KYHeader::constructHeader(
	'ไม่พบหน้าดังกล่าว - KORNYELLOW',
);

echo '
<article>
	<h1>เกิดข้อผิดพลาด</h1>
	<p>เราไม่สามารถหาหน้าดังกล่าวได้ <a class="link" href="/home">กลับสู่หน้าหลัก</a></p>
</article>
';
