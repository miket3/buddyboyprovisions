<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-16 18:12:57 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Vsboarshead.php [ 15 ] in /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Vsboarshead.php:15
2014-01-16 18:12:57 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Vsboarshead.php(15): Kohana_Core::error_handler(2, 'Creating defaul...', '/opt/lampp/htdo...', 15, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Vsboarshead->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Vsboarshead))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Vsboarshead.php:15