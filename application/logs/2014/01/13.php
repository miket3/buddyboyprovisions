<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-13 20:05:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates/Partials" "Content" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-13 20:05:59 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Content')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(443): Mustache_Loader_Kohana->load('Content')
#2 /opt/lampp/htdocs/buddyboyprovisions/application/cache/mustache/__Mustache_9896e934a9093d636dad02c33e012adc.php(53): Mustache_Engine->loadPartial('Content')
#3 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Template.php(62): __Mustache_9896e934a9093d636dad02c33e012adc->renderInternal(Object(Mustache_Context))
#4 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Template->render(Object(View_Base))
#5 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(12): Kohana_Kostache->render(Object(View_Base))
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-13 20:20:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Contact" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-13 20:20:52 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Contact')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Contact')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Contact')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Contact))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24