 <?php session_start();
    include '../administrator/administrator/connection.php';
    include '../administrator/administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt); 
    $pdo_auth = authenticate_backoffice();
    //print_r($pdo_auth);
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | Bingo</title>
    <meta name="description" content="Bingo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../administrator/css/neat.minc619.css?v=1.0">
    <style type="text/css">
      .tabler {
        font-family: 'Poppins',Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        font-size: 13px;
        color: #888
      }

      .tabler td, .tabler th {
        border: 1px solid #f5f5f5;
        padding: 11px;
      }

      .tabler tr:nth-child(even){background-color: #fafafa;}

      .tabler tr:hover {background-color: #f4f4f4;}

      .tabler th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #f5f5f5;
        color: #333;
      }

      .badge {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
      </style>
  </head>
  <body>

    <div class="o-page">
     <?php include 'header.php'; ?>
      <div class="container-fluid" style="padding-left:40px;">
        <div class="row">
          <div class="col-lg-7 col-md-12 ">
            <h4>Dashboard <?php echo $pdo_auth['type']; ?></h4>
            <p class="u-mb-small">Administrator Sections</p>
            <div class="">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                 
                    <div class="c-card" style="background-color: #1e7ff7;color: #fff;">
                      Total Retailers     
                      <div style="font-size: 30px">123</div>           
                    </div>
                  
                </div>

                <div class="col-lg-4 col-md-6">
                   
                    <div class="c-card" style="background-color: #2ac66b;color: #fff;">
                      Total Wholesalers     
                      <div style="font-size: 30px">45</div>           
                    </div>
                 
                </div>

                <div class="col-lg-4 col-md-6">
                  
                    <div class="c-card" style="background-color: #f3991d;color: #fff;">
                      Total FIE     
                      <div style="font-size: 30px">89</div>           
                    </div>
                  
                </div>
             
                <div class="col-lg-4 col-md-6">
                   
                      <div class="c-card" style="background:linear-gradient(180deg,#4f5ef5,#6a77ff);color: #fff;">
                        Total Orders     
                        <div style="font-size: 30px">13</div>           
                      </div>
                  
                </div>

                <div class="col-lg-4 col-md-6">
                 
                    <div class="c-card" style="background-color: #00bcd4;color: #fff;">
                      Total Invoices     
                      <div style="font-size: 30px">45</div>           
                    </div>
                  
                </div>

                <div class="col-lg-4 col-md-6">
                  
                     <div class="c-card" style="background-color: #8bc34a;color: #fff;">
                      In Process Credit Lines 
                      <div style="font-size: 30px">512</div>           
                    </div>
                   
                </div>
              </div>
              
              <div class="c-card">
                 <h4>Retailers</h4>
                 <hr style="margin: 10px 0px;opacity: .2" />
                 <table class="tabler">
                   <thead>
                     <th>S.No.</th>
                     <th>Store Name</th>
                     <th>IRN No.</th>
                     <th>KYC Documents</th>
                     <th>Status</th>
                   </thead>

                   <tbody>
                     <tr>
                       <td>1.</td>
                       <td style="font-weight: bold;">Assochain Stores</td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                     </tr>

                     <tr>
                       <td>2.</td>
                       <td style="color:#333;font-size:12px"><b>Stress Montaronic</b><br/>
                            <b>Tx : </b> 0xGVKLSDL678756546454900076545454UUJHG<br/>
                            <b>Approv date : 23-12-1990</b>
                       </td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><label class="badge" style="background-color: #f44336;color:#fff;padding: 5px;">Rejected</label></td>
                     </tr>

                     <tr>
                       <td>3.</td>
                       <td  style="font-weight: bold;">Rajendra Galla</td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                     </tr>

                     <tr>
                       <td>4.</td>
                       <td  style="font-weight: bold;">Super Bazar </td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                     </tr>

                     <tr>
                       <td>5.</td>
                       <td  style="font-weight: bold;">Wallmart</td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                     </tr>

                     <tr>
                       <td>6.</td>
                       <td  style="font-weight: bold;">Vishal Mega Mart</td>
                       <td>ARB676567#G</td>
                       <td>8 Documents</td>
                       <td><label class="badge" style="background-color: #ff9800;color:#fff;padding: 5px;">Pending</label></td>
                     </tr>
                   </tbody>
                 </table>

                 <div style="padding: 10px;"></div>

                 <a href="view_all_retaillers.php">Show All</a>
              </div>
            </div>
          </div><!-- // .col-sm-6 -->

          <div class="col-lg-5 col-md-12">
            <div style="padding: 32px;"></div>
             <div class="c-card" style="min-height: 810px">
                 <h4>Wholesaler</h4>
                 <hr style="margin: 10px 0px;opacity: .2" />
                 <table class="tabler">
                     <thead>
                       <th>S.No.</th>
                       <th>Wholesaler Name</th>
                       <th>Category</th>
                       <th>Status</th>
                       <th>Country</th>
                       
                     </thead>

                     <tbody>

                      <?php 
                        $i=1;
                        try {
                              $stmt = $pdo->prepare('SELECT * FROM `business_partners` WHERE `partner_type`="Wholesaler" AND `status`="Pending" ORDER BY creation_date DESC');
                                  //echo 'SELECT * FROM franchisie_details WHERE email = :user';
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll();

                              foreach ($user as $key => $value) {
                                $ratay = '<label class="badge" style="background-color: #03a9f4;color:#fff;padding: 5px;">Wholesaler</label>';
                                if ($value['partner_type']!="Wholesaler") {
                                  $ratay = '<label class="badge" style="background-color: green;color:#fff;padding: 5px;">FIE Bank</label>';
                                }
                                $rand1 = rand(100000,900000);
                                $rand2 = rand(100000,700000);

                                 $status = '<label class="badge" style="background-color: orange;color:#fff;padding: 5px;">Pending</label>';
                                if ($value['status']=="Approved") {
                                  $status = '<label class="badge" style="background-color: green;color:#fff;padding: 5px;">Approved</label>';
                                }
                               // print_r($value);
                                echo '<tr>
                                       <td>'.$i.'.</td>
                                       <td style="font-weight: bold;color:#333"><b>'.$value['name'].'</b></td>
                                       <td >'.$value['business_type'].'</td>
                                       <td>'.$status.'</td>
                                       <td >'.$value['address'].'</td>
                                       
                                     </tr>';
                                     $i++;
                              }
                       ?>
                     </tbody>
                 </table>
                 <div style="padding: 10px;"></div>

                 <a href="view_all_wholesalers.php">Show All</a>

              </div>
          </div>
        </div>
         <?php include 'footer.php'; ?>

      </div>
    </div>

    <!-- Main JavaScript -->
    <script src="../administrator/js/neat.minc619.js?v=1.0"></script>

   
  </body>
</html>