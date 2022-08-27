<?php

namespace contents;

use libraries\korn\client\KornForm;
use libraries\korn\client\KornAlert;
use libraries\korn\utils\KornNetwork;
use libraries\korn\client\KornRequest;
use libraries\kornyellow\utils\KYHeader;
use libraries\korn\client\KornComponent;
use libraries\kornyellow\instances\methods\KYAuth;

KYHeader::constructHeader(
	'เข้าสู่ระบบ - KORNYELLOW',
	'พื้นที่เข้าสู่ระบบเว็บไซต์ kornyellow.com',
	'พื้นที่เข้าสู่ระบบเว็บไซต์ kornyellow.com'
);

// Already logged-in
if (KYAuth::getLoggedInUser())
	KornNetwork::redirectPage('/profile');

// Login
if (KornRequest::post('submit')->isValid()) {
	$username   = KornRequest::post('username')->toString();
	$password   = KornRequest::post('password')->toString();
	$isRemember = KornRequest::post('remember')->isValid();

	$isLoginSuccess = KYAuth::login($username, $password, $isRemember);
	if ($isLoginSuccess)
		KornNetwork::redirectPage('/profile');
	else
		KornAlert::alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!');
}

// Remebered Username
$rememberUsername = KYAuth::getRememberUsername();
$isCheckRemember  = empty($rememberUsername);

echo '
<article>
	<h1>เข้าสู่ระบบ</h1>
	<p>ในการใช้งานระบบอื่น ๆ เช่นระบบ <a href="/courses" title="คอร์สเรียน">คอร์สเรียน</a> คุณจะต้องเข้าสู่ระบบก่อนใช้งาน</p>

	<form class="form" method="post" action="" spellcheck="false">
		<div class="form-control">
			<label for="username">ชื่อผู้ใช้ (Username)</label>
			<input required type="text" id="username" name="username" minlength="8" autocomplete="username" value="'.$rememberUsername.'"/>
		</div>
		<div class="form-control">
			<label for="password">รหัสผ่าน (Password)</label>
			<input required type="password" id="password" name="password" minlength="8" autocomplete="current-password"/>
		</div>
		
		<div class="form-check">
			<input type="checkbox" id="remember" name="remember" '.KornForm::isChecked($isCheckRemember).'/>
			<label for="remember">จดจำชื่อผู้ใช้เอาไว้</label>
			หรือยังไม่ได้เป็นสมาชิก? '.KornComponent::internalLink('/register', 'สมัครสมาชิก').'
		</div>
		
		<button type="submit" name="submit" title="เข้าสู่ระบบ">[เข้าสู่ระบบ]</button>
	</form>
</article>
';
