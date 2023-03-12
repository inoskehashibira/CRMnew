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


    <div class="container">
        <div class="text-center">
            <h3> Booking Transaction</h3>
        </div>

        <!-- Buttons -->
        <div class="row mb-2 ">
            <div class="col ">
                <button type="button" class="btn btn-danger">
                    Predelivery Inspection
                </button>
            </div>
            <div class="col d-flex justify-content-end">
                <button type="button" class="btn btn-primary">
                    Details Log
                </button>
            </div>

        </div>

        <!-- Forms -->
        <div class="row mt-3  ">
            <!-- Form 1 -->
            <div class="col-md-8 ms-lg-2  custom-shadow ">
                <div class="text-center">
                    <h5> Transaction Insert Form</h5>
                </div>
                <div class="row ">
                    <!-- Form 1 col 1 -->
                    <div class="col-sm ">
                        <div class="col">

                            <div class="col-sm">
                                <label class="form-label mb-2">
                                    Deposit No
                                </label>

                                <input type="text" class="form-control" name="  " id="  " required></input>
                            </div>

                            <div class="col-sm ">
                                <label class="form-label"></label>

                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Payment Type</option>
                                    <option value="1">option 1</option>
                                    <option value="2">option 2</option>
                                    <option value="3">option 3</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label class="form-label mb-2 mt-2">
                                    Amount
                                </label>

                                <input type="text" class="form-control" name="  " id="  " required></input>
                            </div>


                        </div>








                    </div>
                    <!-- Form 1 col 2-->
                    <div class="col-sm border-start">
                        <div class="col">
                            <label class="form-label">
                                Instrument No
                            </label>

                            <input type="text" class="form-control" name="  " id="  " required></input>
                        </div>
                        <div class="col">
                            <label class="form-label">
                                Deposit To
                            </label>

                            <input type="text" class="form-control" name="  " id="  " required></input>
                        </div>
                        <div class="col">
                            <label class="form-label">
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

                <div class="row  ">
                    <!-- Form 2 col 1 -->
                    <div class="col-sm border custom-shadow  ">

                        <table class="table table-border">
                            <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td>Subaru XV 1.6i-s</td>
                                </tr>
                                <tr>
                                    <td>Model Year:</td>
                                    <td>2022</td>
                                </tr>
                                <tr>
                                    <td>Colour:</td>
                                    <td>Crystal Black Silica</td>
                                </tr>
                                <tr>
                                    <td>VIN Number:</td>
                                    <td>JFSK7DKEL20300</td>
                                </tr>
                                <tr>
                                    <td>Engine Number:</td>
                                    <td>YJ16688</td>
                                </tr>
                                <tr>
                                    <td>Inventory Status:</td>
                                    <td><span class="badge bg-info text-white">Available</span> </td>
                                </tr>
                                <tr>
                                    <td>Invoice Price:</td>
                                    <td>6000000 BDT</td>
                                </tr>
                                <tr>
                                    <td>Expected Delivery:</td>
                                    <td style="color: blue;">April 02, 2023</td>
                                </tr>
                            </tbody>
                        </table>


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

            <div class="text-center">
                <h5> Booking Summary </h5>
            </div>


            <table class="table-responsive table-bordered text-center mt-2 ">
                <thead class="table-light">
                    <tr>

                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        <th scope="col">Vehicle</th>
                        <th scope="col">Color</th>
                        <th scope="col">MY</th>
                        <th scope="col">VIN</th>
                        <th scope="col">Price</th>
                        <th scope="col">Deposited</th>
                        <th scope="col">Balance</th>
                    </tr>
                </thead>
                <tbody>





                    <tr>
                        <th scope="row">1</th>
                        <td>Sahab Uddin</td>
                        <td>SUBARU FORESTER 2.0i-S</td>
                        <td>Crystal Black Silica</td>
                        <td>2022</td>
                        <td>JFSK7DKEL20300</td>
                        <td>69,00,000</td>
                        <td>29,00,000</td>
                        <td>40,00,000</td>


                    </tr>



                </tbody>
            </table>

            <div class="text-center mt-3">
                <h5> Booking Transaction List</h5>
            </div>

            <table class="table-responsive table-bordered text-center">
                <thead class="table-light">
                    <tr>

                        <th scope="col">Serial</th>
                        <th scope="col">Deposit Date</th>
                        <th scope="col">Payment Type</th>
                        <th scope="col">Taka</th>
                        <th scope="col">Instrument No</th>
                        <th scope="col">Deposited to</th>
                        <th scope="col">Attachment</th>
                        <th scope="col">Verify Status</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td>01-Jan-2023</td>
                        <td>Cheque</td>
                        <td>300,000</td>
                        <td>UBL 2003456</td>
                        <td>Jamuna Bank A/C# 200010010</td>
                        <td>Attachment</td>
                        <td><span class="badge bg-info text-white">Verified</span> </td>

                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td>01-Jan-2023</td>
                        <td>Cash</td>
                        <td>300,000</td>
                        <td>UBL 2003456</td>
                        <td>Jamuna Bank A/C# 200010010</td>
                        <td>Attachment</td>
                        <td><span class="badge bg-info text-white">Verified</span> </td>
                    </tr>

                </tbody>
            </table>

        </div>







    </div>


















</body>

</html>