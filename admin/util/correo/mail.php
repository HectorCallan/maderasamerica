<?php require_once("../mail/Mail2.php"); ?>
<?php require_once('../mail/mime.php'); ?>
<?php 
$from = "From: " . $_POST["txtNombre"] . " <" . $_POST["txtEmail"] . ">";
$to = "ventas@maderasamerica.com"; // your email address
$redirectURL = "http://www.maderasamerica.com"; // the URL of the thank you page.
$subject = utf8_decode($_POST["txtAsunto"]);
$crlf = "\n";
$cot = "";
if( isset($_POST["chkCot"]) ){
	$cot = "<p>Solicita una cotización</p>";
}
$body = '
	<body>
		<h2>!Hola! Hay un nuevo aviso desde la web de maderasamerica.com</h2>
		<p><small>El servidor de correos a recibido un nuevo mensaje.</small></p>
	  	<p><b>De: </b>' . $_POST["txtNombre"] . ' <' . $_POST["txtEmail"] . '></p>
	  	<p><b>Respoder a: </b>' . $_POST["txtEmail"] . '</p>
		<p>Asunto: ' . $_POST["txtAsunto"] . '</p>
	  	<p><b>Envio el siguiente mensaje:</b></p>
	  	<p>' . $_POST['txtConsulta'] . '</p>' .
	  	$cot .
	  	'<p><b>Número para contactarlo: </b>' . $_POST['txtTelefono'] .'</p>
	  	<p>Te seguiremos informando si hay nuevos mensajes.</p>
	</body>
	</html>
	';
$mime = new Mail_mime($crlf);
$mime->setHTMLBody($body);
$bodyhtml = $mime->get();
 
$host = "ssl://zarumilla.yachay.pe";
$port = "465"; 
$username = "ventas@maderasamerica.com";
$password = "";

$headers = array ('From' => $from,
    'To' => $to,
    'Subject' => $subject,
    'MIME-Version' => 1,
	'Content-type' => 'text/html;charset=utf-8');
$headers = $mime->headers($headers);
$smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
$mail = $smtp->send($to, $headers, $bodyhtml);
 
if (PEAR::isError($mail)) {
   echo("" . $mail->getMessage() . "");  
} else {   
	echo("Message successfully sent!");  
	header("Location: ".$redirectURL);
} 
?>
?>
