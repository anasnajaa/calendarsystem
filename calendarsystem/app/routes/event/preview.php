<?php

$app->get('/events-preview', $authinticated(),function() use ($app) {

  $app->render('event/preview.php', [
  ]);

})->name('event.preview');
