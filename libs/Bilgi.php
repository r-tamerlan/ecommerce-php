<?php
class Bilgi {
		
		public function basarili($deger,$yol) {

		echo  '<div class="alert alert-success mt-5">'.$deger.'</div>';
            header("Refresh:3; url=".$yol);
		}

		public function hata($deger=false,$yol) {
		echo '<div class="alert alert-danger mt-5">'.$deger.'</div>'.
		header("Refresh:3; url=".$yol);
		}
}
?>