<?php

namespace contents;

use libraries\kornyellow\utils\KYHeader;
use libraries\korn\client\KornComponent;

KYHeader::constructHeader(
	'คอร์สเรียน - KORNYELLOW',
	'สวัสดีครับ ผมชื่อ กร และนี่คือคอร์สต่าง ๆ ของผม ผมรับสอนนอกสถานที่ เป็นวิทยากร และนี่ ผมก็เปิดคอร์สสอนเช่นกัน ถ้าสนใจคุณสามารถเข้ามาซื้อคอร์สและเรียนที่นี่ได้เลย ไม่ว่าจะเป็นการพัฒนาเว็บไซต์ การเขียนโปรแกรม การสร้างเกม และอื่น ๆ คุณสามารถมาเรียนกับผมได้ ในราคาที่ย่อมเยาว์ ติดต่อด่วนได้ที่เบอร์ 084-228-7850',
	'พื้นที่สำหรับการเรียนคอร์สเรียนต่าง ๆ การพัฒนาเว็บไซต์ การเขียนโปรแกรม การสร้างเกม และอื่น ๆ'
);

echo '
<article>
	<h1>คอร์สเรียน</h1>
	
	<h2>คอร์สเรียนที่จำหน่าย</h2>
	<div class="container-grid">
		<article>
			'.KornComponent::image('/static/images/portfolio/cpp/tetris.jpg', 'Tetris').'
			<h3>'.KornComponent::internalLink('/courses/fivedaysofgamemaker/demo', 'Five Days of GameMaker').KornComponent::priceBadge('599').'</h3>
			<p>เรียนการสร้างเกมพื้นฐานในเวลา 5 วันด้วยโปรแกรม '.KornComponent::externalLink('https://gamemaker.io', 'GameMaker').' ที่ใช้งานง่าย และสามารถสร้างเกมคุณภาพอุตสาหกรรมเกมได้อย่างง่ายดาย</p>
		</article>
		<article>
			'.KornComponent::image('/static/images/portfolio/cpp/tetris.jpg', 'Tetris').'
			<h3>'.KornComponent::internalLink('/courses/basic-python/demo', 'Basic Python').KornComponent::priceBadge('499').'</h3>
			<p>เรียนเขียนโปรแกรมเบื้องต้น ฝึกการคิดและแก้ไขปัญหาแบบวิทยาการคอมพิวเตอร์ ด้วยภาษา '.KornComponent::externalLink('https://python.org', 'Python').' พร้อมทำโปรเจคและทำโจทยที่ผมสร้างและเตรียมไว้ให้กว่า 100 ข้อ จะทำให้คุณมีความรู้ตั้งแต่พื้นฐานจนไปถึงขั้นสูง</p>
		</article>
	</div>
</article>
';
