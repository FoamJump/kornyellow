<?php

namespace contents;

use libraries\korn\utils\KornNetwork;
use libraries\korn\client\KornRequest;
use libraries\kornyellow\utils\KYHeader;
use libraries\kornyellow\instances\methods\KYUser;

KYHeader::constructHeader(
	'เข้าสู่ระบบ - KORNYELLOW',
	'พื้นที่เข้าสู่ระบบเว็บไซต์ kornyellow.com',
	'พื้นที่เข้าสู่ระบบเว็บไซต์ kornyellow.com'
);

if (KornRequest::post('submit')->isValid()) {
	$username = KornRequest::post('username');
	$password = KornRequest::post('password');

	$isLoginSuccess = KYUser::login($username, $password);
	if ($isLoginSuccess)
		KornNetwork::redirectPage('/profile');
}

echo '
<article>
	<h1>เข้าสู่ระบบ</h1>
	<p>ในการใช้งานระบบอื่น ๆ เช่นระบบ <a href="/courses" title="คอร์สเรียน">คอร์สเรียน</a> คุณจะต้องเข้าสู่ระบบก่อนใช้งาน</p>

	<form method="post" action="" spellcheck="false">
		<label for="username">ชื่อผู้ใช้</label>
		<input required type="text" id="username" name="username" autocomplete="username"/>
		<label for="password">รหัีสผ่าน</label>
		<input required type="password" id="password" name="password" autocomplete="current-password"/>
		
		<input type="checkbox" id="remember_me" name="remember_me"/>
		<label for="remember_me">จดจำข้อมูลการเข้าสู่ระบบ</label>
		<br/>
		
		<button type="submit" name="submit" title="เข้าสู่ระบบ">[เข้าสู่ระบบ]</button>
	</form>
</article>
';
