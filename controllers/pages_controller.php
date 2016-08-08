<?php
	class PagesController {
		public function home() {
			$first_name = 'Tom';
			$last_name = 'Bosmans';
			require_once('views/pages/home.php');
		}

		public function erro() {
			require_once('views/pages/error.php');
		}
	}
?>