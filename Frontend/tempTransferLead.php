<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />



    <!-- <link rel="stylesheet" href="Css/style.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Subaru CRM</title>



</head>



<body>

    <?php

    include "NavBar.php";


    ?>

    <!-- Lead generation form contents -->
    <div class="col-md-6   rounded shadow p-2 mx-auto">
        <!--------------------Form container-------------------->
        <div class="container mt-5">

            <form action="" method="post" class="row g-3">



                <!--------------------Temp transfer list-------------------->

                <div class="col   ">
                    <label class="form-label">Transfer To</label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Sales Person</option>
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                    </select>
                    <!--------------------Temp transfer Deal Description-------------------->

                    <label class="form-label mt-3">Deal Description</label>

                    <textarea class="form-control " id="exampleFormControlTextarea1" cols="5" rows="5"></textarea>

                </div>






                <!--------------------Temp transfer Button-------------------->
                <div class="row  justify-content-center align-items-center g-2">
                    <div class="col-auto my-5">
                        <button class="btn btn-danger" type="submit" name="submit">
                            Transfer
                            <a href="../index.php"></a>
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>














</body>

</html>