<?php 
// Start session 
session_start(); 
 
// Include and initialize DB class 
require_once 'Json.class.php'; 
$db = new Json(); 
 
// Set default redirect url 
$redirectURL = '../view/package_details.php'; 
 
if(isset($_POST['userSubmit'])){ 
    // Get form fields value 
    $id = $_POST['id']; 
    $pname = trim(strip_tags($_POST['pname'])); 
    $photoN = trim(strip_tags($_POST['photoN'])); 
    $cineN = trim(strip_tags($_POST['cineN'])); 
    $price = trim(strip_tags($_POST['price']));
    $id_str = ''; 
    if(!empty($id)){ 
        $id_str = '?id='.$id; 
    } 
     
    // Fields validation 
    $errorMsg = ''; 
    if(empty($pname)){ 
        $errorMsg .= '<p>Please enter Package name.</p>'; 
    } 
    if(empty($photoN)){ 
        $errorMsg .= '<p>Please enter Photographer No.</p>'; 
    } 
    if(empty($cineN)){ 
        $errorMsg .= '<p>Please enter Cinematography No.</p>'; 
    } 
    if(empty($price)){ 
        $errorMsg .= '<p>Add Price</p>'; 
    } 

    // Submitted form data 
    $userData = array( 
        'pname' => $pname, 
        'photoN' => $photoN, 
        'cineN' => $cineN,
        'price' => $price 
    ); 
     
    // Store the submitted field value in the session 
    $sessData['userData'] = $userData; 
     
    // Submit the form data 
    if(empty($errorMsg)){ 
        if(!empty($_POST['id'])){ 
            // Update user data 
            $update = $db->update($userData, $_POST['id']); 
             
            if($update){ 
                $sessData['status']['type'] = 'success'; 
                $sessData['status']['msg'] = 'Package data has been updated successfully.'; 
                 
                // Remove submitted fields value from session 
                unset($sessData['userData']); 
            }else{ 
                $sessData['status']['type'] = 'error'; 
                $sessData['status']['msg'] = 'Some problem occurred, please try again.'; 
                 
                // Set redirect url 
                $redirectURL = '../view/addEdit.php'.$id_str; 
            } 
        }else{ 
            // Insert user data 
            $insert = $db->insert($userData); 
             
            if($insert){ 
                $sessData['status']['type'] = 'success'; 
                $sessData['status']['msg'] = 'Package data has been added successfully.'; 
                 
                // Remove submitted fields value from session 
                unset($sessData['userData']); 
            }else{ 
                $sessData['status']['type'] = 'error'; 
                $sessData['status']['msg'] = 'Some problem occurred, please try again.'; 
                 
                // Set redirect url 
                $redirectURL = '../view/addEdit.php'.$id_str; 
            } 
        } 
    }else{ 
        $sessData['status']['type'] = 'error'; 
        $sessData['status']['msg'] = '<p>Please fill all the mandatory fields.</p>'.$errorMsg; 
         
        // Set redirect url 
        $redirectURL = '../view/addEdit.php'.$id_str; 
    } 
     
    // Store status into the session 
    $_SESSION['sessData'] = $sessData; 
}elseif(($_REQUEST['action_type'] == 'delete') && !empty($_GET['id'])){ 
    // Delete data 
    $delete = $db->delete($_GET['id']); 
     
    if($delete){ 
        $sessData['status']['type'] = 'success'; 
        $sessData['status']['msg'] = 'Package data has been deleted successfully.'; 
    }else{ 
        $sessData['status']['type'] = 'error'; 
        $sessData['status']['msg'] = 'Some problem occurred, please try again.'; 
    } 
     
    // Store status into the session 
    $_SESSION['sessData'] = $sessData; 
} 
 
// Redirect to the respective page 
header("Location:".$redirectURL); 
exit(); 
?>