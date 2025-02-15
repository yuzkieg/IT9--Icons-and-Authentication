<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Product</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    body {
      background-color: rgb(0, 0, 0);
      color: #fff;
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <div class="container d-flex justify-content-center mt-5">
    <div class="col-6">
      <div class="row">
        <p class="display-5 fw-bold">Add Product <i class="fa-solid fa-cart-plus"></i></p>
      </div>
      <div class="row">
        <form class="form" action="../handlers/add_todo_handler.php" method="POST" required>
          <div class="my-3">
            <label class="form-label">Product Name</label>
            <input class="form-control" type="text" name="productName" required>
          </div>
          <div class="my-3">
            <label class="form-label">Quantity</label>
            <input type="number" class="form-control" name="quantity" step="1" required>
          </div>
          <div class="my-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price" step="1" required>
          </div>
          <div class="d-grid gap-2 col-4 mx-auto">
            <button type="submit" class="btn btn-outline-success fw-bold btn-light">Add Product <i class="fa-solid fa-plus"></i></button>
          </div>
        </form>
        <form class="form" action="../index.php">
          <div class="col-4">
              <button type="submit" class="btn btn-info btn-outline-dark">Back <i class="fa-solid fa-backward-step"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>