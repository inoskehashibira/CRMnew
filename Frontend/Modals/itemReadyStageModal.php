<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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





    <div class=" modal fade" id="itemStageDeliveryInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <div class="row mt-3 ">
                                        <!-- Form 2 col 1 -->
                                        <div class="text-center">
                                            <h5>Booked Information</h5>
                                        </div>
                                        <div class="col-sm border   ">
                                            <label class="form-label ">
                                                <b>VIN Number:</b> JFSK7DKEL20300
                                            </label>

                                            <label class="form-label ">
                                                <b>Engine Number:</b> YJ16688
                                            </label>



                                        </div>




                                    </div>


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
                                                <td>White</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Piece Per Unit </td>
                                                <td>65,00,000 Tk</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Quantity </td>
                                                <td>01</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Sub total price </td>
                                                <td>65,00,000 Tk</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Discount Amount </td>
                                                <td>100,000 Tk</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Total Invoice Price </td>
                                                <td>65,00,000 Tk</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Payment Terms </td>
                                                <td>Payment to be made to "REL Motors Limited" by A/C Payee Cheque or Pay Order.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Delivery Terms </td>
                                                <td>Delivery within 3 days from receiving Work Order and 100%.</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"></th>
                                                <td>Warrenty Terms </td>
                                                <td>1 year or 20,000 km whichever comes first, under the terms and conditions defined by the Manufacturer.</td>
                                            </tr>

                                        </tbody>
                                    </table>






                                    <div class="">
                                        <div class="text-center">
                                            <h5> Provided With Vehicle</h5>
                                        </div>

                                        <div class="form-check ">

                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label">
                                                Car Key
                                            </label>

                                        </div>
                                        <div class="form-check ">

                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label">
                                                Floor Mat
                                            </label>

                                        </div>
                                        <div class="form-check ">

                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label">
                                                Registration Paper
                                            </label>

                                        </div>
                                        <div class="form-check ">

                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label">
                                                Others
                                            </label>

                                        </div>


                                    </div>

                                </div>


                            </div>


                            <div class="text-center mt-2 ">


                                <button type="button" class="btn btn-primary m-2 " style="width: 30%;">
                                    Delivered
                                </button>
                            </div>

                        </div>
                        <!-- Form 2 -->

                    </div>


                </div>



            </div>
        </div>
    </div>



</body>

</html>