<?php
$mailer = new AttachMailer("mariluz@solvam.net", "server@sadf.ss", "mail sender class", "hello <b>content</b>");
$mailer->attachFile("a.pdf");
$mailer->attachFile("a.pdf");
$mailer->send() ? "envoye": "probleme envoi";