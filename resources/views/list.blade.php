<head>
    <title>Dashboard</title>
</head>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Proprietors') }}
        </h2>

    </x-slot>

    <?php

    $hName='127.0.0.1';

    $uName='root';   

    $password='';  

    $dbName = "reb";

    $dbCon = mysqli_connect($hName,$uName,$password,"$dbName");

      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
      }
?>

<?php

$query="select * from proprietor"; // Fetch all the data from the table customers

$result=mysqli_query($dbCon,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Code to Retrieve Data from MySQL Database and Display in html Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <!--<h2>Proprietos Information</h2>-->
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Lot Number</th>
                  <th scope="col">Proprietor Name</th>
                  <th scope="col">Unit of Entitlement</th>
                  <th scope="col">Postal Information</th>
                  <th scope="col">Email Address</th>
                </tr>
              </thead>
              <tbody>
                

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                    <td><?php echo $array[4];?></td>
                    
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
        </div>
    </div>        
</div>

</body>
</html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>