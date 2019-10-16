<?php








header("Content-Type:application/json");








if (isset($_GET['id']) && $_GET['id'] !=0){
    require ("db.php");
$id=$_GET['id'];

$sql="select * from tbl_color WHERE id= $id ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$r=$stmt->fetch(PDO::FETCH_ASSOC);



if ($r['id']==$id){

$t=$r['title'];


    respons($id,$t,'x plus 256g',"find shod");




}else{


    respons(null,null,200,"find errr");
}

}else{

    respons('n','n',400,"errr");

}

function respons($id,$samsung,$apple,$dec){
    $respose['id']=$id;
    $respose['title_color']=$samsung;
    $respose['apple']=$apple;
    $respose['dec']=$dec;


    $json_res=$respose;

  //  print_r($json_res);
  echo json_encode($json_res);

}
?>