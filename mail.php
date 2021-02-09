	<?php 
		if(isset($_POST['sendmail'])) {
			require 'PHPMailerAutoload.php';
			require 'credential.php';

			$mail = new PHPMailer;

			//$mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'mail.speedaerospace.com.sg';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'enquiry@speedaerospace.com.sg';                 // SMTP username
			$mail->Password = 'Mar1neonE';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 2525;      // TCP port to connect to
			
			// $mail->SMTPOptions = array(
			// 	'ssl' => array(
			// 		'verify_peer' => false,
			// 		'verify_peer_name' => false,
			// 		'allow_self_signed' => true
			// 	)
			// );

			$mail->setFrom('enquiry@speedaerospace.com.sg', 'SpeedAeroSpace');
			$mail->addAddress($_POST['email']);     // Add a recipient

			$mail->addReplyTo('enquiry@speedaerospace.com.sg');
			// print_r($_FILES['file']); exit;
			// for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
			// 	$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			// }
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $_POST['subject'];
			$mail->Body    = '<table>
			<tr>
			<td style="padding: 0.5em 1em; font-weight: bold;">Name</td>
			<td>-</td>
			<td style="padding: 0.5em 1em; color: #444444;">'.$_POST['name'].'</td>
			</tr>
			<tr>
			<td style="padding: 0.5em 1em; font-weight: bold;">Email</td>
			<td>-</td>
			<td style="padding: 0.5em 1em; color: #444444;">'.$_POST['email'].'</td>
			</tr>
			<tr>
			<td style="padding: 0.5em 1em; font-weight: bold;">Subject</td>
			<td>-</td>
			<td style="padding: 0.5em 1em; color: #444444;">'.$_POST['subject'].'</td>
			</tr>
			<tr>
			<td style="padding: 0.5em 1em; font-weight: bold;">Message</td>
			<td>-</td>
			<td style="padding: 0.5em 1em; color: #444444;">'.$_POST['message'].'</td>
			</tr>
			</table>';

			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    header('location: index.php?error');
			} else {
				echo "<script>window.location.href='http://www.speedaerospace.com.sg/';</script>";
			} 
		}
		
	 ?>