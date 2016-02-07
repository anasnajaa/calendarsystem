<?php
$db = new PDO('mysql:host=localhost;dbname=paaet_as;charset=utf8', 'xxx', 'xxx');
//$start = $_REQUEST['from'] / 1000;
//$end   = $_REQUEST['to'] / 1000;
$sql = sprintf("SELECT * FROM events");
//`datetime` BETWEEN %s and %s',
//    $db->quote(date('Y-m-d', $start)), $db->quote(date('Y-m-d', $end))
$out = array();
foreach($db->query($sql) as $row) {
    $out[] = array(
        'id' => $row['id'],
        'title' => $row['title'],
        'url' => $row['url'],
        'start' => strtotime($row['datetime']) . '000',
        'end' => strtotime($row['datetime_end']) .'000'
    );
}
$flipped_out = array_reverse($out);
echo json_encode(array('success' => 1, 'result' => $flipped_out));
exit;
