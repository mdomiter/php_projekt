<?php 

if (!$_SESSION['user']) { header("Location: index.php?menu=6"); }

	print '
	<center><h1>Kontakt obrazac</h1>
	<div id="contact">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2774.616342634564!2d15.797522415834074!3d45.93896730965835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765c4184fe39d11%3A0xcbb7acd05d0109e7!2zxaB1bXNraSBwdXQgOSwgMTAyOTQsIEhydcWhZXZlYyBQdcWhxIdhbnNraQ!5e0!3m2!1sen!2shr!4v1548443064813" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	<form action="http://work2.eburza.hr/pwa/responsive-page/html/send-contact.php" id="contact_form" name="contact_form" method="POST">
		<label for="fname">Ime *</label>
		<input type="text" id="fname" name="firstname" placeholder="Vaše ime.." required>
			
		<label for="lname">Prezime *</label>
		<input type="text" id="lname" name="lastname" placeholder="Vaše prezime..." required>
				
		<label for="email">Vaš email *</label>
		<input type="email" id="email" name="email" placeholder="Vaš email..." required>

		<label for="country">Država</label>
		<select id="country" name="country">';
		
		$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'].'"';
					
					if ($row['country_code']=="HR") print ' selected';
					
					print '>' . $row['country_name'] . '</option>';
				}
		print'
		</select>

		<label for="subject">Subjekt</label>
		<textarea id="subject" name="subject" placeholder="Upišite nešto..." style="height:200px"></textarea>
		<input type="submit" value="Pošalji">
		</form>
	</div></center>';
?>
