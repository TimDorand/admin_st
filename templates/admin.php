<?php
include 'blocs/header-start.php';
include 'blocs/nav.php';


if (isset($_SESSION['pseudo'])){
	$acces=true;
	$pseudo=$_SESSION['pseudo'];

	
    if(isset($_GET['panel'])){
    	switch($_GET['panel']){
    		case 'edit-posts':
    			include 'forms/edit-article-v.php';
    			break;
    		default:
    			include 'blocs/default.php';
    			break;
    	}

    }else{
        include 'blocs/user-main.php';
    }

    
}
else{
    include 'blocs/default.php';
}
include 'blocs/footer.php';
?>
