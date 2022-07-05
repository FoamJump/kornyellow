<?php

namespace contents;

use libraries\korn\utils\KornNetwork;
use libraries\kornyellow\utils\KYHeader;
use libraries\kornyellow\instances\methods\KYUser;

$user = KYUser::loggedIn();
if (!$user)
	KornNetwork::redirectPage('/login');

KYHeader::constructHeader(
	'ยินดีต้อนรับคุณ '.$user->getUsername(),
);

echo '
<article>
	<h1>ยินดีต้อนรับ คุณ กร โรจน์รัตนปัญญา</h1>
</article>
';
