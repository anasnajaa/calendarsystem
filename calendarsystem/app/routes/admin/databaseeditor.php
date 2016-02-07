<?php

$app->get('/databaseeditor', $admin(), function() use($app) {

/*
if ($app->auth->hasPermission('can_post_topic')) {
  echo 'Post';
} */

  $app->render('admin/databaseeditor.php');
})->name('admin.databaseeditor');
