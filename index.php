<?php

$contacts =  [
  ["name" => "Pepe", "phone_number" => "543543533"],
  ["name" => "Antonio", "phone_number" => "43252322"],
  ["name" => "Nate", "phone_number" => "1342422"],
]  

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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./add.html">Add Conctact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
        <div class="container pt-4 p-3">
            <div class="row">
              <?php foreach($contacts as $contact): ?>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title text-capitalize"><?= $contact["name"] ?></h3>
                            <p class="m-2"><?= $contact["phone_number"] ?></p>
                            <a href="#" class="btn btn-secondary mb-2">Edit Contact</a>
                            <a href="#" class="btn btn-danger mb-2">Delete Contact</a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
  </body>
</html>
