<?php
function sendEmail($to, $subject, $message, $cc = "", $attach = "") {
    $config = [
        "protocol" => "smtp",
        "smtp_host" => "smtp.hostinger.com",
        "smtp_port" => 465,
        "smtp_user" => "developers@keywordhike.com",
        "smtp_pass" => "DevelopersTeam@#2023",
        "smtp_crypto" => "ssl",
        "mailtype" => "html",
        "crlf" => "\r\n",
        "newline" => "\r\n",
        "charset" => "utf-8",
        "wordwrap" => true,
    ];

    $headers = [
        "From: " . $config["smtp_user"],
        "Content-Type: text/html; charset=UTF-8",
    ];

    if (!empty($cc)) {
        $headers[] = "Cc: " . $cc;
    }

    if (!empty($attach)) {
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-Type: multipart/mixed; boundary=\"{$mime_boundary}\"";

        $message = "This is a multi-part message in MIME format.\r\n\r\n" .
            "--{$mime_boundary}\r\n" .
            "Content-Type: text/html; charset=UTF-8\r\n" .
            "Content-Transfer-Encoding: 7bit\r\n\r\n" .
            $message . "\r\n\r\n" .
            "--{$mime_boundary}\r\n" .
            "Content-Type: application/octet-stream; name=\"" . basename($attach) . "\"\r\n" .
            "Content-Transfer-Encoding: base64\r\n" .
            "Content-Disposition: attachment;\r\n" .
            " filename=\"" . basename($attach) . "\"\r\n\r\n" .
            chunk_split(base64_encode(file_get_contents($attach))) . "\r\n\r\n" .
            "--{$mime_boundary}--";
    }

    $result = mail($to, $subject, $message, implode("\r\n", $headers));
    if ($result) {
        return true;
    } else {
        // Output detailed error information
        echo "Error: Unable to send the email.\n";
        return false;
    }
}  
?>