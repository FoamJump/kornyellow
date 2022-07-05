<?php

namespace contents;

use libraries\korn\client\KornComponent;
use libraries\kornyellow\utils\KYHeader;

KYHeader::constructHeader(
	'ผลงาน - KORNYELLOW',
	'สวัสดีครับ ผมชื่อ กร และนีคือผลงานของผม ไม่ว่าจะเป็นด้านการเขียนโปรแกรม ด้านกราฟิก ด้านเว็บไซต์ ด้านการออกแบบ และอื่น ๆ สามารถเข้ามาดูได้ เพื่อเป็นการพิจารณาสำหรับการร่วมงานกับผม',
	'พื้นที่สำหรับการแสดงผลงาน ด้านการเขียนโปรแกรม ด้านกราฟิก ด้านเว็บไซต์ ด้านการออกแบบ'
);

echo '
<article>
	<h1>ผลงานด้านการเขียนโปรแกรม</h1>

	<article>
		<h2>ภาษา C++</h2>
		<div class="portfolio-grid">
			<article>
				'.KornComponent::image('/static/images/portfolio/cpp/tetris.jpg', 'Tetris').'
				<h3>Tetris</h3>
				<p>นี่คือเกม Tetris ที่เขียนด้วยภาษา '.KornComponent::externalLink('https://cppreference.com/w/cpp', 'C++').' และ '.KornComponent::externalLink('https://www.sfml-dev.org', 'SFML').' ในการแสดงผลภาพและเสียง เป็นโปรเจคแรก เพราะผมชอบเล่นเกม Tetris มาก ผมจึงเริ่มทำเกมนี้ตอนเริ่มเขียนภาษา '.KornComponent::externalLink('https://cppreference.com/w/cpp', 'C++').' ครั้งแรก</p>
				<p>'.KornComponent::externalLink('https://github.com/kornyellow/tetris-sfml', 'GitHub').' '.KornComponent::externalLink('https://www.youtube.com/watch?v=PFpgrfR-LXM', 'YouTube').'</p>
			</article>
			<article>
				'.KornComponent::image('/static/images/portfolio/cpp/double_pendulum.jpg', 'Double Pendulum').'
				<h3>Double Pendulum</h3>
				<p>นี่คือโปรแกรมจำลองลูกตุ้มสองลูก อันนี้เป็นโปรเจคเล็ก ๆ ที่ผมอยากฝึกใช้ '.KornComponent::externalLink('https://www.sfml-dev.org', 'SFML').' และการเขียนสมการคณิตศาสตร์ ผมไปเจอวีดีโอเกี่ยวกับลูกตุ้มมา เลยอยากลองทำโปรแกรมจำลองบ้าง ผมจึงหาสมการสำหรับคำนวณ แล้วนำมาเขียนเป็นโปรแกรมจำลองลูกตุ้ม ด้วยภาษา '.KornComponent::externalLink('https://cppreference.com/w/cpp', 'C++').' และ '.KornComponent::externalLink('https://www.sfml-dev.org', 'SFML').' ในการแสดงผลภาพ</p>
				<p>'.KornComponent::externalLink('https://github.com/kornyellow/double-pendulum-sfml', 'GitHub').' '.KornComponent::externalLink('https://www.youtube.com/watch?v=Vr-KDdfFPlc', 'YouTube').'</p>
			</article>
			<article>
				'.KornComponent::image('/static/images/portfolio/cpp/fireworks_simulation.jpg', 'Fireworks Simulation').'
				<h3>Fireworks Simulation</h3>
				<p>นี่คือโปรแกรมจำลองพลุ เนื่องจากผมเนี่ย เป็นคนที่ชอบดูพลุมาก ๆ ช่วงปีใหม่ พ.ศ.2565 ผมอินกับพลุมาก ๆ และอยากจะทำโปรแกรมจำลองพลุ ผมจึงได้นั่งดูวีดีโอเกี่ยวกับพลุ แล้วนำมาเขียนเป็นโปรแกรมจำลองพลุ ด้วยภาษา '.KornComponent::externalLink('https://cppreference.com/w/cpp', 'C++').' และ '.KornComponent::externalLink('https://www.sfml-dev.org', 'SFML').' ในการแสดงผลภาพ</p>
				<p>'.KornComponent::externalLink('https://github.com/kornyellow/fireworks-sfml', 'GitHub').' '.KornComponent::externalLink('https://www.youtube.com/watch?v=UeSxmJPl3eM', 'YouTube').'</p>
			</article>
		</div>
	</article>
	<article>
		<h2>ภาษา Java</h2>
		<div class="portfolio-grid">
			<article>
				'.KornComponent::image('/static/images/portfolio/java/covid_desktop_application.jpg', 'Covid Desktop Application').'
				<h3>Covid Desktop Application</h3>
				<p>นี่คือแอปพลิเคชั่นจำลองการจองวัคซีน COVID-19 ที่เขียนด้วยภาษา '.KornComponent::externalLink('https://java.com', 'Java').' และ '.KornComponent::externalLink('https://www.openjfx.io', 'JavaFX').' ในการแสดงผลภาพ เป็นโปรเจคที่ได้ทำช่วงปี 1 ในเทอมที่ 2 เพราะอาจารย์สั่งงานว่า ต้องการแอปพลิเคชั่นอะไรก็ได้เกี่ยวกับ COVID-19 ผมจึงเลือกการจองวัคซีน เพราะได้ใช้งานเกี่ยวกับวันที่ ปฏิทิน และการจองคิว ทำให้ผมได้ใช้ฐานข้อมูลได้อย่างคล่องแคล่วมากขึ้น ผมเลือกใช้ '.KornComponent::externalLink('https://mysql.com', 'MySQL').' เป็นฐานข้อมูลสำหรับโปรเจคนี้</p>
				<p>'.KornComponent::externalLink('https://github.com/kornyellow/covid-desktop-application', 'GitHub').' '.KornComponent::externalLink('https://www.youtube.com/watch?v=4iFdHrhlt8s', 'YouTube').'</p>
			</article>
		</div>
	</article>
	
	
	
</article>
';
