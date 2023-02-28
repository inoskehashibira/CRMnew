<?php
$myObject = $_POST['myObject'];


?>

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
        .modal-lg {
            max-width: 70rem;
        }

        td {
            width: 200px;
            border-bottom: 1px solid lightgray;

            /* border: 1px solid black; */

        }

        .custom-shadow {
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 2px 2px rgba(0, 0, 0, 0.15),
                0 4px 4px rgba(0, 0, 0, 0.15), 0 8px 8px rgba(0, 0, 0, 0.15);
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); */

        }

        @media (max-width: 768px) {
            .custom-shadow {
                box-shadow: none;
            }
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




    <div class=" modal fade" id="dealFormModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <div class="col ">
                            <button type="button" class="btn btn-primary" onclick="printer()">
                                Transfer
                            </button>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button type="button" class="btn btn-primary">
                                Details Log
                            </button>
                        </div>

                    </div>

                    <!-- Forms -->
                    <div class="row  ">
                        <!-- Form 1 -->
                        <div class="col-md-8 ms-lg-3   custom-shadow ">
                            <div class="text-center">
                                <h5> Deal Information Form</h5>
                            </div>
                            <div class="row ">
                                <!-- Form 1 col 1 -->
                                <div class="col-sm ">
                                    <label class="form-check-label">
                                        Inventory Status
                                    </label>
                                    <div class=" d-flex flex-column ">
                                        <div class="form-check">

                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label">
                                                Available
                                            </label>

                                        </div>
                                        <div class="form-check ">

                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label">
                                                Not Available
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col">

                                        <div class="">
                                            <label class="form-label ">
                                                Interested Vehicle:
                                            </label>

                                            <div class="form-check ">

                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label">
                                                    subaru Forester 20-s
                                                </label>

                                            </div>
                                            <div class="form-check ">

                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label">
                                                    subaru Forester 20-s
                                                </label>

                                            </div>
                                            <div class="form-check ">

                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label">
                                                    subaru XV 16i-s
                                                </label>

                                            </div>
                                            <div class="form-check ">

                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label">
                                                    subaru XV 16i
                                                </label>

                                            </div>
                                            <div class="form-check ">

                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label">
                                                    subaru Impreza 16i-s
                                                </label>

                                            </div>
                                            <div class="form-check ">

                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label">
                                                    subaru Forester 16i

                                                </label>

                                            </div>

                                        </div>


                                        <div class="col-sm ">
                                            <label class="form-label"></span></label>

                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Model Year</option>
                                                <option value="1">option 1</option>
                                                <option value="2">30 mins</option>
                                                <option value="3">30 mins</option>
                                            </select>
                                        </div>
                                        <div class="col-sm ">
                                            <label class="form-label"></label>

                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Color</option>
                                                <option value="1">option 1</option>
                                                <option value="2">option 2</option>
                                                <option value="3">option 3</option>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                            <label class="form-label mb-2">
                                                Price per unit
                                            </label>

                                            <input type="text" class="form-control" name="  " id="  " required></input>
                                        </div>


                                    </div>








                                </div>
                                <!-- Form 1 col 2-->
                                <div class="col-sm border-start">
                                    <div class="col">
                                        <label class="form-label">
                                            Quantity
                                        </label>

                                        <input type="text" class="form-control" name="  " id="  " required></input>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">
                                            Sub-Total Price
                                        </label>

                                        <input type="text" class="form-control" name="  " id="  " required></input>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">
                                            Discount Amount
                                        </label>

                                        <input type="text" class="form-control" name="  " id="  " required></input>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">
                                            Total Invoice Price
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
                        <div class="col-md-3 ms-lg-5   custom-shadow border ">
                            <div class="text-center">
                                <h5> Next Schedule activity</h5>
                            </div>

                            <div class="row ">
                                <!-- Form 2 col 1 -->
                                <div class="col-sm ">
                                    <label class="form-label">
                                        DateTime
                                    </label>

                                    <input type="text" class="form-control" name="  " id="  " required></input>

                                    <div class="col-sm ">
                                        <label class="form-label"></label>

                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Notify Before</option>
                                            <option value="1">10 mins</option>
                                            <option value="2">20 mins</option>
                                            <option value="3">30 mins</option>
                                        </select>
                                    </div>

                                    <label class="form-label">
                                        Remarks
                                    </label>

                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary mt-2 ">
                                            save next schedule
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
    <div class=" modal fade" id="dealFormApprovalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <div class="col-md-8 ms-lg-3    custom-shadow">

                            <div class="row ">

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
                            <div class="text-center">
                                <button type="button" class="btn btn-primary m-2 " style="width: 30%;">
                                    Approved
                                </button>
                            </div>

                        </div>
                        <!-- Form 2 -->
                        <div class="col-md-3 ms-lg-5   custom-shadow border ">


                            <div class=" row ">
                                <!-- Form 2 col 1 -->
                                <div class="col-sm ">


                                    <label class="form-label">
                                        Remarks
                                    </label>

                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-danger mt-2 ">
                                            Rejected
                                        </button>
                                    </div>


                                </div>




                            </div>

                        </div>
                    </div>


                </div>



            </div>
        </div>
    </div>



</body>

</html>