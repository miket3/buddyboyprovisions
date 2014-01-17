<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-11 08:52:36 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Cookie.php:67
2014-01-11 08:52:36 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /opt/lampp/htdocs/buddyboyprovisions/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Cookie.php:67
2014-01-11 12:16:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:16:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:20:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:20:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:20:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:20:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:20:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:20:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:20:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:20:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:20:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:20:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:21:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:21:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:21:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:21:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:21:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:21:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:21:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:21:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:21:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:21:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:21:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kostache' not found ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2014-01-11 12:21:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-11 12:23:51 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:23:51 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:24:27 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:24:27 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:45 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:45 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:45 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:45 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:46 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:46 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:46 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:46 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:46 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:46 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:47 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:47 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:48 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:26:48 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:26 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:26 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:27 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:27 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:27 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:27 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:27 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:27 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:27 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:27 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:27 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:27 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:28 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:29 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:29 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:29 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:29 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:29 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:29 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:29:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kostache' at 'MODPATH/KOstache' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php:134
2014-01-11 12:29:52 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#2 {main} in /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php:134
2014-01-11 12:30:26 --- EMERGENCY: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/kostache/init.php [ 4 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:30:26 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/opt/lampp/htdo...', 4, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php(4): include()
#2 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Core.php(602): require_once('/opt/lampp/htdo...')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/bootstrap.php(134): Kohana_Core::modules(Array)
#4 /opt/lampp/htdocs/buddyboyprovisions/index.php(102): require('/opt/lampp/htdo...')
#5 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/init.php:4
2014-01-11 12:34:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Test" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 12:34:43 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Test')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Test')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Test')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Test))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 14:28:04 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Example" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 14:28:04 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Example')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Example')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Example')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Example))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 16:12:17 --- EMERGENCY: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/Kohana/View.php [ 344 ] in /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/View.php:228
2014-01-11 16:12:17 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/View.php(228): Kohana_View->render()
#1 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/HTML.php(71): Kohana_View->__toString()
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(24): Kohana_HTML::chars(Object(View_Head))
#3 [internal function]: Kohana_Kostache::{closure}(Object(View_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/application/cache/mustache/__Mustache_458b3624cef89219a22ffd98d31a16f6.php(45): call_user_func(Object(Closure), Object(View_Head))
#5 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Template.php(62): __Mustache_458b3624cef89219a22ffd98d31a16f6->renderInternal(Object(Mustache_Context))
#6 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Template->render(Object(View_Base))
#7 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(12): Kohana_Kostache->render(Object(View_Base))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#14 {main} in /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/View.php:228
2014-01-11 16:13:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: response ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php:10
2014-01-11 16:13:32 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/opt/lampp/htdo...', 10, Array)
#1 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#7 {main} in /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php:10
2014-01-11 16:18:30 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates/partials" "head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 16:18:30 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(443): Mustache_Loader_Kohana->load('head')
#2 /opt/lampp/htdocs/buddyboyprovisions/application/cache/mustache/__Mustache_fb12f5f06a76d772094a67001e421a58.php(38): Mustache_Engine->loadPartial('head')
#3 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Template.php(62): __Mustache_fb12f5f06a76d772094a67001e421a58->renderInternal(Object(Mustache_Context))
#4 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Template->render(Object(View_Base))
#5 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(12): Kohana_Kostache->render(Object(View_Base))
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 16:19:57 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 16:19:57 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:43:51 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:43:51 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:46:31 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:46:31 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:47:31 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates/partials" "head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:47:31 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(443): Mustache_Loader_Kohana->load('head')
#2 /opt/lampp/htdocs/buddyboyprovisions/application/cache/mustache/__Mustache_fb12f5f06a76d772094a67001e421a58.php(38): Mustache_Engine->loadPartial('head')
#3 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Template.php(62): __Mustache_fb12f5f06a76d772094a67001e421a58->renderInternal(Object(Mustache_Context))
#4 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Template->render(Object(View_Base))
#5 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(12): Kohana_Kostache->render(Object(View_Base))
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:50:22 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:50:22 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:51:18 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:51:18 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:53:48 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates/partials" "head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:53:48 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(443): Mustache_Loader_Kohana->load('head')
#2 /opt/lampp/htdocs/buddyboyprovisions/application/cache/mustache/__Mustache_fb12f5f06a76d772094a67001e421a58.php(38): Mustache_Engine->loadPartial('head')
#3 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Template.php(62): __Mustache_fb12f5f06a76d772094a67001e421a58->renderInternal(Object(Mustache_Context))
#4 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Template->render(Object(View_Base))
#5 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(12): Kohana_Kostache->render(Object(View_Base))
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:54:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 20:54:01 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:01:09 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:01:09 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:01:10 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:01:10 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:01:10 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:01:10 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:01:11 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:01:11 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:02:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:02:32 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:02:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:02:32 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:03:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates/partials" "Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:03:54 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(443): Mustache_Loader_Kohana->load('Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/application/cache/mustache/__Mustache_78493206a75af3e749df4a5ac18fe62a.php(38): Mustache_Engine->loadPartial('Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Template.php(62): __Mustache_78493206a75af3e749df4a5ac18fe62a->renderInternal(Object(Mustache_Context))
#4 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Template->render(Object(View_Base))
#5 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(12): Kohana_Kostache->render(Object(View_Base))
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:03:56 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache template "templates/partials" "Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:03:56 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(443): Mustache_Loader_Kohana->load('Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/application/cache/mustache/__Mustache_78493206a75af3e749df4a5ac18fe62a.php(38): Mustache_Engine->loadPartial('Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Template.php(62): __Mustache_78493206a75af3e749df4a5ac18fe62a->renderInternal(Object(Mustache_Context))
#4 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Template->render(Object(View_Base))
#5 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(12): Kohana_Kostache->render(Object(View_Base))
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:07:48 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates/partials" "Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:07:48 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(443): Mustache_Loader_Kohana->load('Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/application/cache/mustache/__Mustache_78493206a75af3e749df4a5ac18fe62a.php(38): Mustache_Engine->loadPartial('Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Template.php(62): __Mustache_78493206a75af3e749df4a5ac18fe62a->renderInternal(Object(Mustache_Context))
#4 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Template->render(Object(View_Base))
#5 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(12): Kohana_Kostache->render(Object(View_Base))
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:14:40 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:14:40 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:21:46 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:21:46 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:21:47 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:21:47 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:21:47 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:21:47 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:21:48 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:21:48 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:21:49 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:21:49 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:13 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:13 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:15 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:15 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:15 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:15 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:15 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:15 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:15 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:15 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:16 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:16 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:16 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:16 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:16 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:17 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Partials/Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:17 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Partials/Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(427): Mustache_Loader_Kohana->load('Partials/Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Engine->loadTemplate('Partials/Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(10): Kohana_Kostache->render(Object(View_Partials_Head))
#4 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#10 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:51 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates" "Head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:23:51 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('Head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(443): Mustache_Loader_Kohana->load('Head')
#2 /opt/lampp/htdocs/buddyboyprovisions/application/cache/mustache/__Mustache_78493206a75af3e749df4a5ac18fe62a.php(38): Mustache_Engine->loadPartial('Head')
#3 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Template.php(62): __Mustache_78493206a75af3e749df4a5ac18fe62a->renderInternal(Object(Mustache_Context))
#4 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Template->render(Object(View_Base))
#5 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(12): Kohana_Kostache->render(Object(View_Base))
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:34:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Mustache MY template "templates/Partials" "head" "mustache" not found ~ MODPATH/kostache/classes/Mustache/Loader/Kohana.php [ 36 ] in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24
2014-01-11 21:34:54 --- DEBUG: #0 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php(24): Mustache_Loader_Kohana->_load_file('head')
#1 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Engine.php(443): Mustache_Loader_Kohana->load('head')
#2 /opt/lampp/htdocs/buddyboyprovisions/application/cache/mustache/__Mustache_fb12f5f06a76d772094a67001e421a58.php(38): Mustache_Engine->loadPartial('head')
#3 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/vendor/mustache/src/Mustache/Template.php(62): __Mustache_fb12f5f06a76d772094a67001e421a58->renderInternal(Object(Mustache_Context))
#4 /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Kohana/Kostache.php(48): Mustache_Template->render(Object(View_Base))
#5 /opt/lampp/htdocs/buddyboyprovisions/application/classes/Controller/Welcome.php(12): Kohana_Kostache->render(Object(View_Base))
#6 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /opt/lampp/htdocs/buddyboyprovisions/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /opt/lampp/htdocs/buddyboyprovisions/index.php(118): Kohana_Request->execute()
#12 {main} in /opt/lampp/htdocs/buddyboyprovisions/modules/kostache/classes/Mustache/Loader/Kohana.php:24