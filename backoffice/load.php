<?php session_start();
    include '../administrator/administrator/connection.php';
    include '../administrator/administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt); 
    $fata = get_data_id_data("admin_backoffice", "id", $_REQUEST['id']);

?><table class="tabler">
    <tbody>
      <tr>
        <td style="font-weight: bold">Username</td>
        <td><?php echo $fata['username']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Admin Type</td>
        <td><?php echo $fata['type']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Password</td>
        <td><?php echo $fata['pass']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Country</td>
        <td><?php echo $fata['country']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Reg, Date</td>
        <td><?php echo $fata['date']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Status</td>
        <td><?php echo $fata['status']; ?></td>
      </tr>

      <tr>
        <td style="font-weight: bold">Tx Address</td>
        <td style="width: 300px"><div style="word-wrap: break-word;width: 300px;"><?php echo $fata['tx_address']; ?></div></td>
      </tr>

      <tr>
        <td style="font-weight: bold" colspan="2">Tx Address<br/>
          <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $fata['tx_address']; ?>&choe=UTF-8" style="width:200px;" title="<?php echo $fata['tx_address']; ?>" />

        </td>
      </tr>
    </tbody>
  </table>