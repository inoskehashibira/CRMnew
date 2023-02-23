<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> -->
    <!-- JQuery -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- Popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bundle min -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .modal-lg {}

        td {
            width: 200px;
            border-bottom: 1px solid lightgray;

            /* border: 1px solid black; */

        }
    </style>
    <title>Subaru CRM</title>
</head>


<body>





    <div class=" modal fade" id="quotationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <div class="modal-title text-center">Deal Form</div>
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
                        <div class="col   shadow ">


                            <div class="row   ">

                                <!-- Form 1 col 1 -->
                                <div class="col-sm ">
                                    <div class="text-center">
                                        <h5> Lead Information </h5>
                                    </div>
                                    <table class="table-responsive ">

                                        <tbody>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Name </td>
                                                <td>Irfan</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Phone </td>
                                                <td>017XXXXXXXXX</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Email </td>
                                                <td>Irfanulkalam@azneo.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Address </td>
                                                <td>5. jublee road, chittagongyjweyjwyjwj ruewrtuy wryw wrywry wryqet5rywery46urhrghrwghwqyq3 q35yqe5yqyr5y qery qeryq4eyw45tyw</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Interested </td>
                                                <td>Subaru XV</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Referenced By </td>
                                                <td>Sanaullah Chy</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Location </td>
                                                <td>Chittagong</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Created By </td>
                                                <td>Irfanul Kalam chy</td>
                                            </tr>
                                            <!-- Repeat 8 more times -->
                                        </tbody>
                                    </table>


                                </div>
                                <!-- Form 1 col 2-->
                                <div class="col-sm border-start">
                                    <div class="text-center">
                                        <h5> Deal Information</h5>
                                    </div>
                                    <table class="table-responsive">

                                        <tbody>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Inventory Status </td>
                                                <td>Irfan</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Deal Vehicle </td>
                                                <td>017XXXXXXXXX</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Model Year </td>
                                                <td>Irfanulkalam@azneo.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Colored </td>
                                                <td>5. jublee road</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Piece Per Unit </td>
                                                <td>Subaru XV</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Quantity </td>
                                                <td>Sanaullah Chy</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Sub total price </td>
                                                <td>Chittagong</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Discount Amount </td>
                                                <td>Irfanul Kalam chy</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Total Invoice Price </td>
                                                <td>Irfanul Kalam chy</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="text-center mt-2 ">
                                <div class="container  d-flex flex-column justify-content-center " style="width: 30%;">
                                    <h5> Offer validity days
                                    </h5>
                                    <input type="number" class="form-control " name="  " id="  " required></input>

                                </div>

                                <button type="button" class="btn btn-primary m-2 " style="width: 30%;">
                                    Approved
                                </button>
                            </div>

                        </div>
                        <!-- Form 2 -->

                    </div>


                </div>



            </div>
        </div>
    </div>

    <div class=" modal fade" id="quotationModalWithValidity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <div class="modal-title text-center">Deal Form</div>
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
                        <div class="col   shadow ">


                            <div class="row   ">

                                <!-- Form 1 col 1 -->
                                <div class="col-sm ">
                                    <div class="text-center">
                                        <h5> Lead Information </h5>
                                    </div>
                                    <table class="table-responsive ">

                                        <tbody>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Name </td>
                                                <td>Irfan</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Phone </td>
                                                <td>017XXXXXXXXX</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Email </td>
                                                <td>Irfanulkalam@azneo.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Address </td>
                                                <td>5. jublee road, chittagongyjweyjwyjwj ruewrtuy wryw wrywry wryqet5rywery46urhrghrwghwqyq3 q35yqe5yqyr5y qery qeryq4eyw45tyw</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Interested </td>
                                                <td>Subaru XV</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Referenced By </td>
                                                <td>Sanaullah Chy</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Location </td>
                                                <td>Chittagong</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Created By </td>
                                                <td>Irfanul Kalam chy</td>
                                            </tr>
                                            <!-- Repeat 8 more times -->
                                        </tbody>
                                    </table>


                                </div>
                                <!-- Form 1 col 2-->
                                <div class="col-sm border-start">
                                    <div class="text-center">
                                        <h5> Deal Information</h5>
                                    </div>
                                    <table class="table-responsive">

                                        <tbody>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Inventory Status </td>
                                                <td>Irfan</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Deal Vehicle </td>
                                                <td>017XXXXXXXXX</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Model Year </td>
                                                <td>Irfanulkalam@azneo.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Colored </td>
                                                <td>5. jublee road</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Piece Per Unit </td>
                                                <td>Subaru XV</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Quantity </td>
                                                <td>Sanaullah Chy</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Sub total price </td>
                                                <td>Chittagong</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Discount Amount </td>
                                                <td>Irfanul Kalam chy</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Total Invoice Price </td>
                                                <td>Irfanul Kalam chy</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="text-center mt-2 ">
                                <div class="container  d-flex flex-column justify-content-center " style="width: 30%;">
                                    <h5> Offer validity days: 15 days
                                    </h5>


                                </div>

                                <button type="button" class="btn btn-primary m-2 " style="width: 30%;">
                                    Approved
                                </button>
                            </div>

                        </div>
                        <!-- Form 2 -->

                    </div>


                </div>



            </div>
        </div>
    </div>
    <div class=" modal fade" id="quotationCustomerFeedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <div class="modal-title text-center">Quotation Customer Feedback</div>
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
                    <div class="row mx-5">
                        <div class="container d-flex flex-column justify-content-center">
                            <h3 class="text-center">Quotation Customer Feedback</h3>
                            <textarea class="form-control mx-auto" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>


                    <div class="row mt-5 mx-3 ">
                        <div class="col ">
                            <button type="button" class="btn btn-danger">
                                Lost
                            </button>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <button type="button" class="btn btn-primary">
                                Accepted
                            </button>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-primary">
                                Rejected
                            </button>
                        </div>


                    </div>
                </div>



            </div>
        </div>
    </div>
</body>

</html>