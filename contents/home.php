<?php

namespace contents;

use libraries\korn\KornComponent;
use libraries\kornyellow\KornYellowHeader;

KornYellowHeader::constructHeader();

echo '
<article>
	<h1>สวัสดีครับ!</h1>
	<p>ผม '.KornComponent::internalLink('/introduce', 'กร โรจน์รัตนปัญญา').' ยินดีต้อนรับเข้าสู่เว็บไซต์ของผม ผมคือชาวฟรีแลนซ์ในกรุงเทพฯ ที่รับทำงานหลายอย่างกับลูกค้ามาแล้วเกือบทั่วประเทศ</p>
	<p>ผมมีความรู้หลากหลาย ตั้งแต่การออกแบบเว็บไซต์ '.KornComponent::externalLink('https://html.com', 'HTML').' + '.KornComponent::externalLink('https://cssreference.io', 'CSS').' + '.KornComponent::externalLink('https://javascript.com', 'Javascript').' ไปถึงการใช้งาน '.KornComponent::externalLink('https://php.net', 'PHP').' กับฐานข้อมูล การดูแลเซิร์ฟเวอร์ผ่านระบบปฏิบัติการ '.KornComponent::externalLink('https://linux.org', 'Linux').' และอื่น ๆ '.KornComponent::internalLink('/introduce', 'อีกมากมาย').'</p>
</article>

<article>
	<h1>บริการของผม</h1>
	<p>'.KornComponent::internalLink('/contact', 'งานที่ผมรับทำ').' ก็จะมีงานหลากหลายมากมาย และคิดค่าบริการก็ราคาไม่แพง ไม่ว่าจะเป็น งานออกแบบเว็บไซต์ งานออกแบบโปสเตอร์ งานออกแบบอินโฟกราฟิกส์ งานตัดต่อเพลง งานสร้างเกม งานเขียนโปรแกรม งานดูแลเว็บไซต์ระยะยาว หากสนใจจริง ๆ ก็อย่าได้ลังเลที่จะ '.KornComponent::internalLink('/contact', 'ติดต่อ').' ผมเข้ามาได้เลย</p>
</article>

<article>
	<h1>เรียนกับผม</h1>
	<p>ทุกคนสามารถเรียนกับผมได้ทาง '.KornComponent::externalLink('https://youtube.com/kornyellow', 'YouTube').' หรือจะนั่งอ่าน '.KornComponent::internalLink('/blog', 'บทความ').' ที่ผมเขียนไว้ก็ได้ แต่ก็สามารถสนับสนุนผมผ่านการซื้อ '.KornComponent::internalLink('/courses', 'คอร์สเรียน').' ต่าง ๆ ได้เหมือนกัน</p>
</article>
';
