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



</head>



<body>

    <?php

    include "NavBar.php";


    ?>

    <!-- Lead generation form contents -->
    <div class="col-md-6   rounded shadow p-2 mx-auto" >
        <h1 class="text-center">Lead Creation Form</h1>
        <!--------------------Form container-------------------->
        <div class="container mt-5">

            <form action="" method="post" class="row g-3">


                <!-------------------- Mobile input field-------------------->

                <div class="col-md-4">
                    <label  class="form-label">
                        Mobile<span class="text-danger mr-2">*</span>
                    </label>

                    <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" required></input>
                </div>
                <!--------------------Full name input field-------------------->

                <div class="col-md-4">
                    <label  class="form-label">
                        Full Name<span class="text-danger mr-2">*</span>
                    </label>
                    <input type="text" class="form-control" name="Organization" id="Organization" required></input>
                </div>
                <!--------------------Email input field-------------------->

                <div class="col-md-4 ">
                    <label  class="form-label">
                        E-mail<span class="text-danger mr-2">*</span>
                    </label>
                    <input type="email" class="form-control" id="emailinfo" name="Customer_Email" required></input>
                </div>
                <!--------------------Location input field-------------------->

                <div class="col-md-4">
                    <label  class="form-label">Location</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!--------------------Lead source input field-------------------->

                <div class="col-md-4 ">
                    <label  class="form-label">Lead Source<span class="text-danger mr-2">*</span></label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Lead Source</option>
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                    </select>
                </div>
                <!--------------------Lead location input field-------------------->

                <div class="col-md-4 ">
                    <label  class="form-label">Lead Location<span class="text-danger mr-2">*</span></label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select Lead Location</option>
                        <option value="1">option 1</option>
                        <option value="2">option 2</option>
                        <option value="3">option 3</option>
                    </select>
                </div>
                <!--------------------Referenced by input field-------------------->

                <div class="col-md-4">
                    <label  class="form-label">
                        Referenced By<span class="text-danger mr-2">*</span>
                    </label>
                    <input type="text" class="form-control" name="Organization" id="Organization" required></input>
                </div>
                <!--------------------interested vehicle input field-------------------->


                <div class="col-md-4 mx-5">
                    <label  class="form-label ">
                        Interested Vehicle:
                    </label>


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Forester">
                        <label class="form-check-label" >
                            Forester
                        </label>
                    </div>


                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="" id="Subaru XV">
                        <label class="form-check-label" >
                            Subaru XV
                        </label>

                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Impreza">
                        <label class="form-check-label" >
                            Impreza
                        </label>
                    </div>
                </div>




                <!--------------------Lead generation button -------------------->
                <div class="row  justify-content-center align-items-center g-2">
                    <div class="col-auto my-5">
                        <button class="btn btn-primary" type="submit" name="submit">
                            Create Lead
                            <a href="../index.php"></a>
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>














</body>

</html>