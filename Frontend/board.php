<?php






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Template</title>
</head>

<body>



    <div class="container my-4 p-3">


        <button class="btn btn-warning mb-3">
            Create New Lead
        </button>
        <div class="row">
            <div class="col-sm">
                <h5 class="border-3 border-dark border-bottom p-2">New</h5>

                <?php
                include 'components/card.php'

                ?>

            </div>
            <div class="col-sm">
                <h5 class="border-3 border-dark border-bottom p-2">
                    Qualified
                </h5>
                <?php
                include 'components/card.php'

                ?>
            </div>
            <div class="col-sm">
                <h5 class="border-3 border-dark border-bottom p-2">
                    Intermediate
                </h5>
                <?php
                include 'components/card.php'
                ?>
            </div>
            <div class="col-sm">
                <h5 class="border-3 border-dark border-bottom p-2">Won</h5>
                <?php
                include 'components/card.php'

                ?>
            </div>
            <div class="col-sm">
                <h5 class="border-3 border-dark border-bottom p-2">
                    Delivered
                </h5>
                <?php
                include 'components/card.php'

                ?>
            </div>
            <div class="col-sm">
                <h5 class="border-3 border-dark border-bottom p-2">Lost</h5>
                <?php
                include 'components/card.php'

                ?>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>