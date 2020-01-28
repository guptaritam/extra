 <?php session_start();
    include '../administrator/administrator/connection.php';
    include '../administrator/administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt); 
    $pdo_auth = authenticate_backoffice();
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Business Partner | Bingo</title>
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
      <div class="container" style="padding-left:40px;">
        <div class="row">
          <div class="col-lg-12 col-md-12 ">
            <h4>Add Business Partner</h4>
            <p class="u-mb-small">Administrator Sections</p>
           <form action="add_business_partner_handle.php" method="POST">
              <div class="">
             
              
              <div class="c-card">
                 <h4>Add Business Partner</h4>
                 <hr style="margin: 10px 0px;opacity: .2" />
                <div class="row">
                   <div class="col-lg-3">
                     <div class="c-field">
                      <label class="c-field__label" for="input1">Business Partner type</label>
                      <select class="c-input" type="text" id="input1" name="business_partner_type" >
                        <option>FIE</option>
                        <option>Wholesaler</option>
                      </select>
                    </div>
                   </div>


                   <div class="col-lg-3">
                     <div class="c-field">
                      <label class="c-field__label" for="input1">Mobile No.</label>
                      <input class="c-input" type="text" id="input1" name="mobile" placeholder="mobile">
                    </div>
                   </div>


                   <div class="col-lg-3">
                     <div class="c-field">
                      <label class="c-field__label" for="input1">Email</label>
                      <input class="c-input" type="text" id="input1" name="email" placeholder="email">
                    </div>
                   </div>
                 </div>
                 <div style="padding: 10px;"></div>

                 <div class="row">
                   <div class="col-lg-3">
                     <div class="c-field">
                      <label class="c-field__label" for="input1">Business Partner Name</label>
                      <input class="c-input" type="text" id="input1" name="name" placeholder="Business Partner Name">
                    </div>
                   </div>

                   <div class="col-lg-3">
                     <div class="c-field">
                      <label class="c-field__label" for="input1">Business Internal id</label>
                      <input class="c-input" type="text" id="input1" name="internal_id" placeholder="Business Internbal Id">
                    </div>
                  </div>

                     <div class="col-lg-3">
                       <div class="c-field">
                        <label class="c-field__label" for="input1">Tax id</label>
                        <input class="c-input" type="text" id="input1" name="tax_id" placeholder="Tax Id">
                      </div>
                     </div>

                   </div>
                   <div style="padding: 10px;"></div>
                   <div class="row">

                     <div class="col-lg-3">
                       <div class="c-field">
                        <label class="c-field__label" for="input1">Status </label>
                         <select class="c-input" type="text" id="input1" name="status" >
                        <option>Pending</option>
                        <option>Approved</option>
                      </select>
                      </div>
                     </div>

                     <div class="col-lg-3">
                       <div class="c-field">
                        <label class="c-field__label" for="input1">Business Type </label>
                        <input class="c-input" type="text" id="input1" name="business_type" placeholder="Business Type">
                      </div>
                     </div>

                     <div class="col-lg-3">
                       <div class="c-field">
                        <label class="c-field__label" for="input1">City </label>
                        <input class="c-input" type="text" id="input1" name="city" placeholder="City">
                      </div>
                     </div>

                      <div class="col-lg-3">
                       <div class="c-field">
                        <label class="c-field__label" for="input1">Country </label>
                        <select class="c-input" name="country">
                           <?php 
                            $fata = fetch_all_popo("country");
                            foreach ($fata as $key => $value) {
                              echo '<option>'.$value['country'].'</option>';
                            }
                         ?>
                        </select>
                      </div>
                     </div>
                 </div>

                 <div style="padding: 10px;"></div>
                 <div class="row">
                   <div class="col-lg-6">
                     <div class="c-field">
                        <label class="c-field__label" for="input1">Address </label>
                        <textarea class="c-input" id="input1" name="address" placeholder="address"></textarea>
                      </div>
                   </div>

                    <div class="col-lg-6">
                       <div class="c-field">
                        <label class="c-field__label" for="input1">contact_information </label>
                          <textarea class="c-input" id="input1" name="contact_information" placeholder="contact_information"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-6">
                      <div style="padding: 10px;"></div>
                      <button class="c-btn c-btn--info ">Add New Business Partner</button>
                    </div>

                 </div>
                 <div style="padding: 10px;"></div>

                
              </div>
            </div>
           </form>
          </div><!-- // .col-sm-6 -->

          
        </div>

         <?php include 'footer.php'; ?>
      </div>
    </div>

    <!-- Main JavaScript -->
    <script src="../administrator/js/neat.minc619.js?v=1.0"></script>

   
  </body>
</html>