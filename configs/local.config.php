<?php

require __DIR__ . '/../lib/Config.php';

// DB Config
\lib\Config::write('db.host', 'localhost');
\lib\Config::write('db.port', '');
\lib\Config::write('db.basename', 'Test');
\lib\Config::write('db.user', 'root');
\lib\Config::write('db.password', 'password');

// Project Config
\lib\Config::write('path', 'http://localhost/SlimRestfulServices');