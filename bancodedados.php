<pre><?php

     $db = new mysqli("localhost", "root", "root", "alphacode");

     print_r($db);

     $result = $db->query("select * from register");

     while($register = $result->fetch_assoc()){
          
          
          $listregister = '<tr>
          <td>'.$register['nome'].'</td>
          <td>'.$register['data'].'</td>
          <td>'.$register['email'].'</td>
          <td>'.$register['celular'].'</td>
     </tr>';
     }

     

?>

<!DOCTYPE html>
     <html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
     </head>
     <body>
          <table border="1">
               <tr>
                    <td>nome</td>
                    <td>data</td>
                    <td>email</td>
                    <td>celular</td>
               </tr>
               <?php echo $listregister; ?>
          </table>
     </body>
     </html>