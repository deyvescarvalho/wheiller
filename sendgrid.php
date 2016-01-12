<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-9cf2cda2430949f1f3c06b280a5efaa1');
$domain = "sandbox52b074d349a24ac5bddb432c4bd024ea.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandbox52b074d349a24ac5bddb432c4bd024ea.mailgun.org>',
                        'to'      => 'Deyves carvalho <deyvescarvalho@gmail.com>',
                        'subject' => 'Hello Deyves carvalho',
                        'text'    => 'Congratulations Deyves carvalho, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'));
 ?>
