<?php session_start();
    include '../administrator/administrator/connection.php';
    include '../administrator/administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt); 
    $fata = get_row_without_order("business_partners", "id", $_REQUEST['id']);

?><table class="tabler">
    <tbody>
      <tr>
        <td style="font-weight: bold">Name</td>
        <td><?php echo $fata['name']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Internal Id </td>
        <td><?php echo $fata['internal_id']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Tax Id</td>
        <td><?php echo $fata['tax_id']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Country</td>
        <td><?php echo $fata['country']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Reg, Date</td>
        <td><?php echo $fata['creation_date']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Status</td>
        <td><?php echo $fata['status']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Business Type</td>
        <td style="width: 300px"><div style="word-wrap: break-word;"><?php echo $fata['business_type']; ?></div></td>
      </tr>

      <tr>
        <td style="font-weight: bold">City</td>
        <td style="width: 300px"><div style="word-wrap: break-word;"><?php echo $fata['city']; ?></div></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Country</td>
        <td style="width: 300px"><div style="word-wrap: break-word;"><?php echo $fata['address']; ?></div></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Address</td>
        <td style="width: 300px"><div style="word-wrap: break-word;"><?php echo $fata['contact_info']; ?></div></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Contact Info</td>
        <td style="width: 300px"><div style="word-wrap: break-word;"><?php echo $fata['email']; ?></div></td>
      </tr>

       <tr>
        <td style="font-weight: bold">Contact Info</td>
        <td style="width: 300px"><div style="word-wrap: break-word;"><?php echo $fata['email']; ?></div></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Partner Type</td>
        <td style="width: 300px"><div style="word-wrap: break-word;"><?php echo $fata['partner_type']; ?></div></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Tx Address</td>
        <td><div style="word-wrap: break-word;width: 300px;"><?php echo $fata['tx_address']; ?></div></td>
      </tr>

      <tr>
        <td style="font-weight: bold" colspan="2">Tx Address<br/>
          <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $fata['tx_address']; ?>&choe=UTF-8" style="width:200px;" title="<?php echo $fata['tx_address']; ?>" />

        </td>
      </tr>
    </tbody>
  </table>