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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Subaru CRM</title>


    <style>
        .custom-shadow {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);

        }

        @media (max-width: 768px) {
            .custom-shadow {
                box-shadow: none;
            }
        }
    </style>

</head>



<body>

    <?php

    include "NavBar.php";


    ?>

    <!-- Lead generation form contents -->
    <div class="col-md-6   rounded  p-2 mx-auto custom-shadow">
        <h4 class="text-center">Inventory Vehicle Entry Form</h4>
        <!--------------------Form container-------------------->
        <div class="container mt-3">

            <form action="" method="post" class="row g-3">

                <!--------------------Vehicle input field-------------------->

                <div class="col-md-3 ">
                    <label class="form-label">Vehicle<span class="text-danger mr-2">*</span></label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Vehicle</option>
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                    </select>
                </div>
                <!--------------------Model year input field-------------------->

                <div class="col-md-3 ">
                    <label class="form-label">Model year<span class="text-danger mr-2">*</span></label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Model year</option>
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                    </select>
                </div>

                <!--------------------Color input field-------------------->

                <div class="col-md-3 ">
                    <label class="form-label">Color<span class="text-danger mr-2">*</span></label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Color</option>
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                    </select>
                </div>

                <!--------------------location input field-------------------->

                <div class="col-md-3 ">
                    <label class="form-label">Location<span class="text-danger mr-2">*</span></label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Location</option>
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                    </select>
                </div>


                <!--------------------Quantity by input field-------------------->

                <div class="col-md-3">
                    <label class="form-label">
                        Quantity<span class="text-danger mr-2">*</span>
                    </label>
                    <input type="number" class="form-control" name="Organization" id="Organization" required></input>
                </div>

                <!--------------------save info button -------------------->
                <div class="row  justify-content-center align-items-center g-2">
                    <div class="col-auto my-5">
                        <button class="btn btn-primary" type="submit" name="submit">
                            SAVE
                            <a href="../index.php"></a>
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>














</body>

</html>