<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <title>Template</title>
</head>

<body>


    <?php

    include "NavBar.php";
    ?>






    <div class="container-fluid mt-1">
        <div class="row   ">


            <div class="col-sm col-lg-5" align="center">

                <h3> Lead Information</h3>
                <div class="container" style="font-size: large;">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">Phone</th>
                                <td>Mr ABC</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>abc@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td>Null</td>
                            </tr>
                            <tr>
                                <th scope="row">Interested</th>
                                <td>Null</td>
                            </tr>
                            <tr>
                                <th scope="row">Lead Source</th>
                                <td>Null</td>
                            </tr>
                            <tr>
                                <th scope="row">Referenced By</th>
                                <td>Null</td>
                            </tr>
                            <tr>
                                <th scope="row"> Location</th>
                                <td>Null</td>
                            </tr>
                            <tr>
                                <th scope="row">Created By</th>
                                <td>Null</td>
                            </tr>
                            <tr>
                                <th scope="row">Assigned to</th>
                                <td>Null</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>





            <div class="col-sm  col-lg-7 border d-flex justify-content-end">
                <div class="d-flex flex-column  align-items-center border me-lg-5 mt-lg-5 bg-light" style="width: 30rem;">
                    <h4>Change Assign Person</h4>
                    <h6> Assign To</h6>

                    <select class="form-select mt-2 " style="width:50%;" name="category" onchange="document.getElementById('category-form').submit();">
                        <option value="new" <?php if (isset($_POST["category"]) && $_POST["category"] == "new") echo "selected"; ?>>Person 1</option>
                        <option value="intermediate" <?php if (isset($_POST["category"]) && $_POST["category"] == "intermediate") echo "selected"; ?>>Person 2</option>
                        <option value="qualified" <?php if (isset($_POST["category"]) && $_POST["category"] == "qualified") echo "selected"; ?>>Person 3</option>
                        <option value="delivered" <?php if (isset($_POST["category"]) && $_POST["category"] == "delivered") echo "selected"; ?>>Person 4</option>



                    </select>
                    <button type="button" class="btn btn-primary mt-3">
                        Assign
                    </button>



                </div>

            </div>

        </div>

        <div class="container mt-3  border d-flex flex-column justify-content-center">
                  
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">A</th>
                                <th scope="col">B</th>
                                <th scope="col">C</th>
                                <th scope="col">D</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>


                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>

                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>


                        </tbody>
                    </table>

                
            
        </div>

    </div>


</body>

</html>