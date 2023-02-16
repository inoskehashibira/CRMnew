<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Subaru CRM</title>
</head>


<body>


    <div class="modal fade" id="my-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header border">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <h5 class=" text-center">New Lead Infomation</h5>
                        <div></div>
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




</body>

</html>