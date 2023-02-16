<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bundle min -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="Css/style.css"> -->

    <title>Subaru CRM</title>

    <script>
        $(document).ready(function() {
            $("#myBtn").click(function() {
                $.ajax({
                    url: "Modals/dealFormModal.php",
                    cache: false,
                    success: function(html) {
                        $("#modalContainer").html(html);
                        $("#dealFormModal").modal('show');
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#openModal").click(function() {
                $.ajax({
                    url: "testBox/t_modal.php",

                    cache: false,
                    success: function(html) {
                        $("#modalContainer").html(html);
                        $("#myModal").modal('show');
                    }
                });
            });
        });
    </script>


</head>



<body>

    <?php

    include "NavBar.php";


    ?>

    <!-- Add a link to open the modal -->
    <a href="#" id="openModal">Open Modal</a>

    <!-- Add a div to hold the modal -->
    <div id="modalContainer"></div>

    <!-- Include jQuery library and Bootstrap JavaScript library -->


    <!-- Add a script to handle the click event and open the modal -->














</body>

</html>