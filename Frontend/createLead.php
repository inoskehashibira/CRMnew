<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />

  <title>Template</title>
</head>

<body>

  <div class="col-md-6 m-5 border border-success rounded shadow p-2 mx-auto">
    <div class="container mt-5">
      <h1 class="text-center">Lead Generation</h1>

      <form class="row g-3">



        <div class="col-md-6">
          <label htmlFor="firstName" class="form-label">
            Customer Name
          </label>
          <input type="text" class="form-control" id="Customer_Name" required onChange={handleChange} value="abc"></input>
        </div>

        <div class="col-md-6">
          <label htmlFor="firstName" class="form-label">
            Organization
          </label>
          <input type="text" class="form-control" id="Organization" required onChange={handleChange}></input>
        </div>

        <div class="col-md-6">
          <label htmlFor="emailinfo" class="form-label">
            E-mail
          </label>
          <input type="email" class="form-control" id="emailinfo" required onChange={handleChange}></input>
        </div>

        <div class="col-md-6 my-3">
          <label htmlFor="firstName" class="form-label">
            Possibility :
          </label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">High</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Medium</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            <label class="form-check-label" for="inlineRadio3">Low </label>
          </div>
        </div>


        <div class="row-cols-4  justify-content-center align-items-center g-2">



          <div class="col-4 ">





            <label htmlFor="firstName" class="form-label my-3">
              Tag :
            </label>
            <select class="form-select" aria-label="Default select example">
              <option selected>select lead source</option>
              <option value="1">Facebook</option>
              <option value="2">twitter</option>
              <option value="3">Instagram</option>
            </select>

            <label htmlFor="firstName" class="form-label my-3">
              schedule Activity :
            </label>
            <select class="form-select" aria-label="Default select example">
              <option selected>select Alarm Time</option>
              <option value="1">Alert before 10 mins</option>
              <option value="2">Alert before 30 mins</option>
              <option value="3">Alert before 60 mins</option>
            </select>


          </div>

          <div class="col-8 mt-3 my-3">
            <div class="row  ">
              <div class="col  mx-">
                <input class="m" type="time" required></input>
              </div>

              <div class="col ">
                <input id="date" type="date" required />
              </div>
            </div>

          </div>

          <div class="col-4">

          </div>



        </div>


        <div class="col-md-6">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Notes</span>
            </div>
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
        </div>






















      </form>

      <div class="row  justify-content-center align-items-center g-2">
        <div class="col-auto my-5">
          <button class="btn btn-primary" type="submit">
            Next
          </button>
        </div>
      </div>


    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>


\