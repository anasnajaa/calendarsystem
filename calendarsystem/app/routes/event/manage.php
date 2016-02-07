<?php
$app->get('/event-manage', $authinticated(),function() use ($app) {
  $events = $app->event->where('active', true)->orderBy('datetime', 'desc')->get();

  $app->render('event/manage.php', [
    'events' => $events,
  ]);
})->name('event.manage');



$app->post('/event-manage', $authinticated(), function() use($app) {

})->name('event.manage.post');

$app->get('/event-manage-:number', $authinticated(),function ($number) use ($app) {
  $event = $app->event->where('id', $number)->delete();

$app->response->redirect($app->urlFor('event.manage'));

})->name('event.manage.delete');
