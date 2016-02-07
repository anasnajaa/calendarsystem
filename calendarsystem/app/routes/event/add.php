<?php

$app->get('/events-add', $authinticated(),function() use ($app) {

  $app->render('event/add.php', [
  ]);

})->name('event.add');

$app->post('/events-add', $authinticated(), function() use($app) {
	//Grab post request entries
	$request = $app->request;
	$title = $request->post('title');
  $datetime = $request->post('datetime');
  $datetime_end = $request->post('datetime');
  $status = $request->post('status');
  $issuedate = $request->post('issuedate');
	$valid = $app->validation;
  $errors= array();

	$valid->validate([

	]);

	if ($valid->passes()) {
  }

  if(isset($_FILES['fileToUpload'])){
    //File Parameters
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size =$_FILES['fileToUpload']['size'];
    $file_tmp =$_FILES['fileToUpload']['tmp_name'];
    $file_type=$_FILES['fileToUpload']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));

    //Allowed Extensions
    $expensions= array("jpeg","jpg","png","pdf");

    //Error Checking
    if(in_array($file_ext,$expensions)=== false){
      $errors[]="الامتدادات المتاحة: JPEG, PNG, PDF";
    }

    if($file_size > 6097152){
      $errors[]='يجب ألا يتخطى حجم الملف 6MB';
    }

    //Add to DB or Display Errors
    if(empty($errors)==true){

      move_uploaded_file($file_tmp, INC_ROOT . '//uploads/'.$file_name);
      $target_file = INC_ROOT . '//uploads/'. $file_name;
      $event = $app->event->create([
        'title' => $title,
        'datetime' => $datetime,
        'datetime_end' => $datetime_end,
        'issuedate' => $issuedate,
        'url' => "https://pay.paaet.edu.kw/cbe/calendarsystem/uploads/". $file_name,
      ]);
      $status = "success";

      $app->render('event/add.php', [
        'request' => $request,
        'upload_status' => true,
        'upload_message' => $file_name,
      ]);
    }
    else {
      $status = "failed";
      //implode(" ",$errors);
      $app->render('event/add.php', [
        'request' => $request,
        'upload_status' => false,
        'upload_message' => implode(" ",$errors),
      ]);
    }
  }
})->name('event.add.post');
