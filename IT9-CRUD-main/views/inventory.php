<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEGARA_CRUD</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background-color: rgb(0, 0, 0);
            color: #fff;
            font-family: sans-serif;
        }

        .table-container {
            overflow-x: auto;
        }

        th,
        td {
            text-align: center;
            vertical-align: middle;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .table-bordered {
            min-height: 200px;
        }

        .table-bordered>:not(caption)>*>* {
            padding: 1rem 5rem;
            border: 1px solid #dee2e6;
        }

        .table-bordered>:not(caption)>*>* {
            background-color: white;
            color: black;
        }

        .logout-btn {
            position: absolute;
            top: 10px;
            right: 80px;
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid content">
        <a href="../handlers/logout_handler.php" class="btn btn-outline-danger fw-bold btn-light logout-btn" type="button">Logout <i class="fa-solid fa-right-from-bracket"></i></a>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <p class="display-5 fw-bold text-center"> <i class="fa-solid fa-warehouse"></i> Inventory System </p>
                </div>
                <div class="table-container">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Prices</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            session_start();
                            include '../database/database.php'; 

                            if (!isset($_SESSION['user_id'])) {
                                header("Location: ../index.php"); 
                                exit();
                            }

                            $res = $conn->query("SELECT * FROM todo");
                            if ($res->num_rows > 0) :
                                while ($row = $res->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['productName']); ?></td>
                                        <td><?= htmlspecialchars($row['quantity']); ?></td>
                                        <td>₱ <?= htmlspecialchars($row['price']); ?></td>
                                        <td>
                                            <div class="btn-container">
                                                <a href="update_todo.php?id=<?= htmlspecialchars($row['id']); ?>" class="btn btn-sm btn-light btn-outline-warning">Edit <i class="fa-regular fa-pen-to-square"></i></a>
                                                <a href="../handlers/delete_todo_handler.php?id=<?= htmlspecialchars($row['id']); ?>" class="btn btn-sm btn-lgiht btn-outline-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete <i class="fa-solid fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile;
                            else : ?>
                                <tr>
                                    <td colspan="4" class="text-center py-3">🎉 No products available!</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto">
                    <a href="add_todo.php" class="btn btn-outline-success fw-bold btn-light" type="button">Add Product <i class="fa-solid fa-cart-plus"></i></a>
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>