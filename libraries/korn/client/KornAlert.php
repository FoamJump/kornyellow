<?php

namespace libraries\korn\client;

class KornAlert {
	public static function alert(string $text): void {
		echo '
			<dialog open>
				<p>'.$text.'</p>
				<form method="dialog">
					<button>[ปิด]</button>
				</form>
			</dialog>
		';
	}
}
