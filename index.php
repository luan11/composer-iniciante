<?php
require 'vendor/autoload.php';

// require 'functions/helpers.php';

$mail = new app\classes\Mail();

dd($mail->send());