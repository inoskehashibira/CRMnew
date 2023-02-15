<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Popper js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- bundle min -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <style>
        .modal-lg {
            max-width: 50rem;
        }
    </style>


    <title>Hello, world!</title>
</head>

<body>



    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <button type="button" class="btn btn-primary">
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
                            <div class="col-sm border">
                                <div class="text-center">
                                    <h5> Deal Information Form</h5>
                                </div>
                                <div class="row ">
                                    <!-- Form 1 col 1 -->
                                    <div class="col-sm">
                                        <label class="form-check-label">
                                            Inventory Status
                                        </label>
                                        <div class=" d-flex align-items-center">
                                            <div class="form-check">

                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label">
                                                    Option 1
                                                </label>

                                            </div>
                                            <div class="form-check mx-2">

                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label">
                                                    Option 1
                                                </label>

                                            </div>
                                        </div>
                                        <div class="col">
                                            <label htmlFor="firstName" class="form-label ">
                                                Interested Vehicle:
                                            </label>


                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Forester">
                                                <label class="form-check-label" for="Forester">
                                                    Forester
                                                </label>
                                            </div>


                                            <div class="form-check">

                                                <input class="form-check-input" type="checkbox" value="" id="Subaru XV">
                                                <label class="form-check-label" for="Subaru XV">
                                                    Subaru XV
                                                </label>

                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Impreza">
                                                <label class="form-check-label" for="Impreza">
                                                    Impreza
                                                </label>
                                            </div>
                                            <div class="col-8 ">
                                                <label for="exampleFormControlTextarea1" class="form-label"></span></label>

                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Model Year</option>
                                                    <option value="1">option 1</option>
                                                    <option value="2">option 2</option>
                                                    <option value="3">option 3</option>
                                                </select>
                                            </div>
                                            <div class="col-8 ">
                                                <label for="exampleFormControlTextarea1" class="form-label"></label>

                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Color</option>
                                                    <option value="1">option 1</option>
                                                    <option value="2">option 2</option>
                                                    <option value="3">option 3</option>
                                                </select>
                                            </div>
                                            <div class="col-8">
                                                <label htmlFor="firstName" class="form-label">
                                                    Price per unit
                                                </label>

                                                <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" required></input>
                                            </div>


                                        </div>








                                    </div>
                                    <!-- Form 1 col 2-->
                                    <div class="col-sm">
                                        <div class="col">
                                            <label htmlFor="firstName" class="form-label">
                                                Quantity
                                            </label>

                                            <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" required></input>
                                        </div>
                                        <div class="col">
                                            <label htmlFor="firstName" class="form-label">
                                                Sub-Total Price
                                            </label>

                                            <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" required></input>
                                        </div>
                                        <div class="col">
                                            <label htmlFor="firstName" class="form-label">
                                                Discount Amount
                                            </label>

                                            <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" required></input>
                                        </div>
                                        <div class="col">
                                            <label htmlFor="firstName" class="form-label">
                                                Total Invoice Price
                                            </label>

                                            <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" required></input>
                                        </div>
                                    </div>
                                    <!-- Form 1 col 3-->
                                    <!-- <div class="col">

                                    </div> -->
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary mt-2 " style="width: 30%;">
                                        Submit
                                    </button>
                                </div>

                            </div>
                            <!-- Form 2 -->
                            <div class="col   border ">
                                <div class="text-center">
                                    <h5> Next Schedule activity</h5>
                                </div>
                                <div class=" d-flex justify-content-center">

                                    <div class="row  w-50">
                                        <!-- Form 2 col 1 -->
                                        <div class="col-sm d-flex flex-column">
                                            <label htmlFor="firstName" class="form-label">
                                                DateTime
                                            </label>

                                            <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" required></input>
                                            <label htmlFor="firstName" class="form-label">
                                                Notify Before
                                            </label>

                                            <input type="text" class="form-control" name="Customer_Name" id="Customer_Name" required></input>
                                            <label htmlFor="firstName" class="form-label">
                                                Remarks
                                            </label>

                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary mt-2 " style="width: 50%;">
                                                    Submit
                                                </button>
                                            </div>


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





        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
</body>

</html>