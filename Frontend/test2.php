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
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content ">
                    <div class="modal-header border">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <h5 class="modal-title text-center">New Lead Infomation</h5>
                        </h5>
                        <!--  -->

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <table class="table">
                            <!-- <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead> -->
                            <tbody>
                                <!-- Add 9 rows to the table -->
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
                        <div class="d-flex  mt-2 flex-column align-items-center">


                            <h6 class="">Assign TO </h6>

                            <select class="form-select mt-2 " style="width:50%;" name="category" onchange="document.getElementById('category-form').submit();">
                                <option value="new" <?php if (isset($_POST["category"]) && $_POST["category"] == "new") echo "selected"; ?>>Person 1</option>
                                <option value="intermediate" <?php if (isset($_POST["category"]) && $_POST["category"] == "intermediate") echo "selected"; ?>>Person 2</option>
                                <option value="qualified" <?php if (isset($_POST["category"]) && $_POST["category"] == "qualified") echo "selected"; ?>>Person 3</option>
                                <option value="delivered" <?php if (isset($_POST["category"]) && $_POST["category"] == "delivered") echo "selected"; ?>>Person 4</option>



                            </select>

                            <button type="button" class="btn btn-primary mt-2" style="width:fit-content;">Assigned</button>
                        </div>

                    </div>



                </div>
            </div>
        </div>





        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
</body>

</html>