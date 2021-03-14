<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="icon" href="data:image/jpeg;base64,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">

    <style type="text/css">
    body {
        background-color:gray;
        color: gainsboro;
      }
      h2{
        color:black;
      }
     
    </style>
</head>

<body>
<?php
    include 'db_connection.php';
    $sql = "SELECT * FROM view_customer";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="color:black;">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['ID'] ?></td>
                        <td class="py-2"><?php echo $rows['NAME']?></td>
                        <td class="py-2"><?php echo $rows['EMAIL']?></td>
                        <td class="py-2"><?php echo $rows['BALANCE']?></td>
                        <td><a href="userdetail.php?id= <?php echo $rows['ID'] ;?>"> <button type="button" class="btn">Transaction</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
