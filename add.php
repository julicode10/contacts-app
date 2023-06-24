<?php
  require "database.php";
  $error = null;

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"]) || empty($_POST["phone_number"])){
      $error = "Please fill all the fields";
    }else if(strlen($_POST["phone_number"]) < 9){
      $error = "Phone number must be at least 9 characters";
    }else{
      $name = $_POST["name"];
      $phoneNumber = $_POST["phone_number"];
      $statement = $conn->prepare("INSERT INTO contacts (name, phone_number) values(:name, :phone_number)");
      $statement->bindParam(":name", $_POST["name"]);
      $statement->bindParam(":phone_number", $_POST["phone_number"]);
      $statement->execute();
      header("Location: index.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacts App</title>
    <!--Bootstrap-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.0/darkly/bootstrap.min.css"
      integrity="sha512-3xynESL0QF3ERUl9se1VJk043nWT+UzWJveifBw7kLtC226vyGINZFtmyK015F83KBSNW+67alYSY2cCj1LHOQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- static content -->
    <link rel="stylesheet" href="./static/css/index.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand font-weigth-bold" href="#">
            <img class="mr-2" src="./static/img/logo.png" alt="logo">
            ContactsApp
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Add Conctact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="container pt-5">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">Add new Contact</div>
              <div class="card-body">
                <?php if($error != null): ?>
                  <p class="text-danger">
                    <?= $error ?>
                  </p>
                <?php endif ?>
                <form method="POST" action="add.php">
                  <div class="form-group row mt-2">
                    <label for="name" class="col-md-4 col-form-label text-md-rigth">Name</label>
                    <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="name" autocomplete="name">
                    </div>
                  </div>
                  <div class="form-group row mt-2">
                    <label for="phone_number" class="col-md-4 col-form-label text-md-rigth">Phone Number</label>
                    <div class="col-md-6">
                      <input id="phone_number" type="text" class="form-control" name="phone_number" autocomplete="phone_number">
                    </div>
                  </div>
                  <div class="form-group row mt-2">
                    <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                        Submit
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
