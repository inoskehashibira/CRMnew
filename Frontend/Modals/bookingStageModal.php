<?php
$myObject = $_POST['myObject'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> -->
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bundle min -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .modal-lg {
            max-width: 50rem;
        }

        td {
            width: 200px;
            border-bottom: 1px solid lightgray;

            /* border: 1px solid black; */

        }
    </style>
    <title>Subaru CRM</title>

    <script>
        function printer() {
            var obj = '<?php echo $myObject; ?>';
            console.log(obj);
        }
    </script>
</head>


<body>




    <div class=" modal fade" id="bookingStageFormModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <div class="modal-title text-center">Booking Form</div>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Buttons -->
                    <div class="row mb-2 ">

                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-primary">
                                Details Log
                            </button>
                        </div>

                    </div>

                    <!-- Forms -->
                    <div class="row  ">
                        <!-- Form 1 -->
                        <div class="col-md-8 ms-lg-2  shadow ">
                            <div class="text-center">
                                <h5> Booking Transaction</h5>
                            </div>
                            <div class="row ">
                                <!-- Form 1 col 1 -->
                                <div class="col-sm ">
                                    <div class="col">

                                        <div class="col-sm">
                                            <label htmlFor="firstName" class="form-label mb-2">
                                                Deposit No
                                            </label>

                                            <input type="text" class="form-control" name="  " id="  " required></input>
                                        </div>

                                        <div class="col-sm ">
                                            <label for="exampleFormControlTextarea1" class="form-label"></label>

                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Payment Type</option>
                                                <option value="1">option 1</option>
                                                <option value="2">option 2</option>
                                                <option value="3">option 3</option>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                            <label htmlFor="firstName" class="form-label mb-2">
                                                Amount
                                            </label>

                                            <input type="text" class="form-control" name="  " id="  " required></input>
                                        </div>


                                    </div>








                                </div>
                                <!-- Form 1 col 2-->
                                <div class="col-sm border-start">
                                    <div class="col">
                                        <label htmlFor="firstName" class="form-label">
                                            Instrument No
                                        </label>

                                        <input type="text" class="form-control" name="  " id="  " required></input>
                                    </div>
                                    <div class="col">
                                        <label htmlFor="firstName" class="form-label">
                                            Deposit To
                                        </label>

                                        <input type="text" class="form-control" name="  " id="  " required></input>
                                    </div>
                                    <div class="col">
                                        <label htmlFor="firstName" class="form-label">
                                            Attachment
                                        </label>

                                        <input type="text" class="form-control" name="  " id="  " required></input>
                                    </div>

                                </div>
                                <!-- Form 1 col 3-->
                                <!-- <div class="col">

                                    </div> -->
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary m-2 " style="width: 30%;">
                                    Submit
                                </button>
                            </div>

                        </div>
                        <!-- Form 2 -->


                        <div class="col-md-3 ms-lg-5    ">

                            <div class="row mt-3 ">
                                <!-- Form 2 col 1 -->
                                <div class="col-sm border shadow  ">
                                    <label class="form-label ">
                                        <b>VIN Number:</b> JFSK7DKEL20300
                                    </label>

                                    <label class="form-label ">
                                        <b>Engine Number:</b> YJ16688
                                    </label>



                                </div>




                            </div>
                            <div class="row border shadow mt-3">
                                <!-- Form 2 col 1 -->
                                <div class="col-sm ">
                                    <label htmlFor="firstName" class="form-label">
                                        VIN Number
                                    </label>

                                    <input type="text" class="form-control" name="  " id="  " required></input>
                                    <label htmlFor="firstName" class="form-label">
                                        Engine Number
                                    </label>

                                    <input type="text" class="form-control" name="  " id="  " required></input>

                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary mt-2 mb-2">
                                            save
                                        </button>
                                    </div>


                                </div>




                            </div>

                        </div>

                    </div>

                    <div class="row m-2 ">
                        <div class="col ">
                            <button type="button" class="btn btn-danger">
                                Lost
                            </button>
                        </div>


                    </div>
                </div>



            </div>
        </div>
    </div>




</body>

</html>