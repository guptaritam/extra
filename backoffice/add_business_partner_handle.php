 <?php session_start();
    include '../administrator/administrator/connection.php';
    include '../administrator/administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt); 
    $pdo_auth = authenticate_backoffice();  
    // error_reporting(E_ALL & ~E_NOTICE);
    // if ($pdo_auth['kyc_approved']=="Pending") {
    //   header('Location:kyc.php?choice=error&value=Your KYC is Pending, You can Trade once KYC Is Approved');
    // }
    $table = "business_partners";
    $key_list = "`name`, `internal_id`, `tax_id`, `status`, `business_type`, `city`, `address`, `contact_info`, `email`, `partner_type`, `tx_address`";
    $value_list = "'".$_REQUEST['name']."',";
    $value_list.="'".$_REQUEST['internal_id']."',";
    $value_list.="'".$_REQUEST['tax_id']."',";
    $value_list.="'".$_REQUEST['status']."',";
    $value_list.="'".$_REQUEST['business_type']."',";
    $value_list.="'".$_REQUEST['city']."',";
    $value_list.="'".$_REQUEST['country']."',";
    $value_list.="'".$_REQUEST['address']."',";
     $value_list.="'".$_REQUEST['contact_information']."',";
    $value_list.="'".$_REQUEST['business_partner_type']."',";
    $value_list.="'0x".getToken(43)."'";
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:view_business_partner.php?choice=success&value=Business Partner Added Successfully. ');
    exit();
?>