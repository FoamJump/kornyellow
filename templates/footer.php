<?php

namespace templates;

use libraries\korn\KornVisitCount;

$visitCount = KornVisitCount::getVisitCount();

?>

</main>

<footer>
	<div class="wrapper">
		<p class="copyright">©2022 <mark>kornyellow.com</mark> <span>All rights reserved.</span></p>
		<p class="stat">ผู้เยี่ยมชม <?php echo number_format($visitCount) ?> คน</p>
	</div>
</footer>

<script src="/static/js/navbar.js"></script>

</body>

</html>
