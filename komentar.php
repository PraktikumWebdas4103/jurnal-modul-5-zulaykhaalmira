<form method="POST">
	Komentar <input type="textbox" name="komen" minlength="5"><br>
	<input type="submit" name="submit" value="Kirim">
</form>

<?php
	if (isset($_POST['submit'])) {
		$komen = $_POST['komen'];
		$hasil = str_word_count($komen);

		echo "Jumlah Kata : $hasil";
	}
?>
