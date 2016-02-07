<?php

require INC_ROOT . '/app/routes/home.php';

require INC_ROOT . '/app/routes/auth/register.php';
require INC_ROOT . '/app/routes/auth/login.php';
require INC_ROOT . '/app/routes/auth/activate.php';
require INC_ROOT . '/app/routes/auth/logout.php';
require INC_ROOT . '/app/routes/auth/password/change.php';
require INC_ROOT . '/app/routes/auth/password/recover.php';

require INC_ROOT . '/app/routes/user/profile.php';
require INC_ROOT . '/app/routes/user/all.php';

require INC_ROOT . '/app/routes/event/add.php';
require INC_ROOT . '/app/routes/event/manage.php';
require INC_ROOT . '/app/routes/event/details.php';
require INC_ROOT . '/app/routes/event/preview.php';

require INC_ROOT . '/app/routes/admin/databaseeditor.php';
require INC_ROOT . '/app/routes/errors/404.php';
