<?php 
/*include 'client.php';
$client = new SinHttpClient(); // create a client 
$client->get('http://www.kuaidi100.com/query?type=1&postid=1');  // get 
echo "result==".$client->response->body; // echo 
*/
require_once('httpclient.php');
$http = new HttpClient("http://localhost:8080/spirngmvc/test/getTest?num=1");
$http->get();
echo "result===========".$http->getBody(); // Just print the response body
?>