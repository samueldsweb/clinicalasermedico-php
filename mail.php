<?php

    // POST Request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $num = trim($_POST["phone"]);
        //$zip = trim($_POST["zip"]);
        //$city = trim($_POST["city"]);
        //$address = trim($_POST["address"]);
        //$website = trim($_POST["website"]);
        //$subject = trim($_POST["subject"]);
        //$password = trim($_POST["password"]);
		//$select_opt = trim($_POST["select_opt"]);
        $comment = trim($_POST["comment"]);

        // Check sent to the mailer.
        if ( empty($name) OR empty($comment) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Por favor complete el formulario y vuelva a intentarlo.";
            exit;
        }

        // Set the recipient email address.
        $recipient = "bruix.io@gmail.com";

        // Set the email sub.
        $sub = "Mensaje enviado desde sitio web por: $name";

        // Build the email content.
        $email_content = "Nombre: $name\n";
        $email_content .= "Correo: $email\n";
        //$email_content .= "subject: $subject\n\n";
        //$email_content .= "password: $password\n\n";
        //$email_content .= "Number: $zip\n\n";
        //$email_content .= "Celular: $phone\n\n";
        //$email_content .= "Number: $city\n\n";
        //$email_content .= "Number: $website\n\n";
        //$email_content .= "address: $address\n\n";
        $email_content .= "Celular: $num\n";
		//$email_content .= "select_opt: $select_opt\n\n";
        $email_content .= "Mensaje:\n$comment\n";

        // Build the email headers.
        $email_headers = "Mensaje enviado desde sitio web por: $name <$email>";

        // Send the email.
		$okk = mail($recipient, $email_headers, $email_content);
        if ( $okk ) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "¡Gracias! Tu mensaje ha sido enviado.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "¡UPS! Algo salió mal y no pudimos enviar tu comentario.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Hubo un problema con su envío. Vuelva a intentarlo.";
    }

?>
