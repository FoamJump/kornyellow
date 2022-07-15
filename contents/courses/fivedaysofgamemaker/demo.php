<?php

namespace contents\courses\fivedaysofgamemaker;

use libraries\kornyellow\utils\KYHeader;
use libraries\korn\client\KornComponent;

KYHeader::constructHeader(
	'คอร์สเรียน Five days of Gamemaker - KORNYELLOW',
	'คอร์สที่คุณสามารถที่จะได้เรียนรู้พื้นฐานเกี่ยวกับการสร้างเกม และได้สร้างเกมไปพร้อมกับผมด้วยโปรแกรม GameMaker',
	'คอร์สสอนสร้างเกมด้วย GameMaker'
);

echo '
<article>
	'.KornComponent::video('https://youtube.com/embed/i1IPq1n_xSk', 'คุณเคยอยากสร้างเกมเป็นของตัวเองมั้ยครับ?').'
	<h1>Five days of GameMaker</h1>
	<p>คุณเคยอยาก<mark>สร้างเกม</mark>เป็นของตัวเองมั้ยครับ? ผมขอเสนอคอร์สสร้างเกมด้วยโปรแกรม '.KornComponent::externalLink('https://gamemaker.io', 'GameMaker').' ไม่ใช่แค่โปรแกรมนี้จะใช้งานง่ายอย่างเดียว แต่โปรแกรมนี้ยังสามารถสร้างเกมคุณภาพระดับ<mark>อุตสาหกรรมเกม</mark>ได้อย่างง่ายดาย และใช้เวลาอันสั้น ๆ สามารถเปลี่ยนไอเดียในหัวของคุณให้ออกมาเป็นเกมที่สามารถเล่นได้ แล้วคุณรออะไรอยู่ <mark>มาสานต่อความฝันของคุณกัน</mark></p>
</article>
';
