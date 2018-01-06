<?php
session_start();
require_once('application/libraries/smarty/libs/Smarty.class.php'); 

$smarty = new Smarty();

include ("config.inc.php");
$data=[];

if(!empty($_GET['page'])){
    
    $currentPage = $_GET['page'];
    
    $bool = false;
    
    foreach($_PAGES as $key => $value){
        
        if($currentPage == $key){
            
            include($_PAGES[$currentPage]   );
            $bool = true;
            break;
        } else {
            $bool = false;
        }
    }
}
else{
    $currentPage="accueil";
    header('location:index.php?page=accueil');
}

$smarty->assign('data',$data);
$smarty->display('application/views/modules/'.$currentPage.'.tpl');
    
?>
