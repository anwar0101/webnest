<?php
    /*php array example
    with html table */
    $students = array(
        array('name' => 'Rahim Mia', 'roll' => 1, 'total_mark'=> 945),
        array('name' => 'Karim Mia', 'roll' => 2, 'total_mark'=> 950),
        array('name' => 'Karim Mia', 'roll' => 2, 'total_mark'=> 950),
        array('name' => 'Karim Mia', 'roll' => 2, 'total_mark'=> 950),
        array('name' => 'Karim Mia', 'roll' => 2, 'total_mark'=> 950),
        array('name' => 'Karim Mia', 'roll' => 2, 'total_mark'=> 950),
        array('name' => 'Karim Mia', 'roll' => 2, 'total_mark'=> 950),
        array('name' => 'Karim Mia', 'roll' => 2, 'total_mark'=> 950),
        array('name' => 'Karim Mia', 'roll' => 2, 'total_mark'=> 950),
        array('name' => 'Karim Mia', 'roll' => 2, 'total_mark'=> 950),
    );
?>

<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Narayantola Mission High School</title>
    </head>
    <body class="" style="margin-top: 50px">
        <div class="container" style="">
            <h4>SSS Pretest result 2018</h4>
            <table class="table">
                <thead>
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Total Marks</th>
                </thead>
                <tbody>
                    <?php for ($i=0; $i < count($students); $i++) {  ?>
                        <tr>
                            <td><?php echo $students[$i]['roll']; ?></td>
                            <td><?php echo $students[$i]['name']; ?></td>
                            <td><?php echo $students[$i]['total_mark']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </body>
</html>