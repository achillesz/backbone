<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-10-23
 * Time: ионГ9:02
 * To change this template use File | Settings | File Templates.
 */
header('Content-type:application/json');
$response = array();
if(isset($_GET['SUSPECT']) && $_GET['suspect'] === 'butler'){
    $response['guilty'] = 'YES';
    $response['comment'] = 'We are as shocked as you are';
}
else{
    $response['guilty'] = 'NO';
    $response['comment'] = 'Perhaps this murder will never be solved.';
}
echo json_encode($response);
?>