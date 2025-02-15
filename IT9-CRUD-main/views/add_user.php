<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
                background-color:rgb(0, 0, 0);
                color:white;
            }
    </style>

</head>

<body>
    <div class="container p-5">
        <div id="successMessage" class="alert alert-success mt-3" style="display:none;">
            Account created successfully!
        </div>
        
        <h1>Create Account <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i></h1>
        <form id="createAccountForm" method="post" action="../handlers/add_user_handler.php">
            <div class="mb-3">
                <label for="Fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="Fname" name="Fname" required>
            </div>
            <div class="mb-3">
                <label for="Mname" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="Mname" name="Mname">
            </div>
            <div class="mb-3">
                <label for="Lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="Lname" name="Lname" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" required>
                    <button class="btn btn-light btn-outline-success" type="button" id="togglePassword">Show <i class="fa-regular fa-eye"></i></button>
                </div>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    <button class="btn btn-light btn-outline-success" type="button" id="toggleConfirmPassword">Show <i class="fa-regular fa-eye"></i></button>
                </div>
                <div id="passwordError" class="alert alert-danger mt-2" style="display:none;">
                    Password does not match
                </div>
            </div>
            <button type="submit" class="btn btn-light btn-outline-success">Create Account <i class="fa-solid fa-check" style="color: #00ff11;"></i></button>
            <a href="../index.php" class="btn btn-info btn-outline-dark">Back to Login <i class="fa-solid fa-backward-step"></i></a>
        </form>
    </div>
    <script src="../bootstrap/js/bootstrap.js"></script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.textContent = type === 'password' ? 'Show ' : 'Hide';
        });

        const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
        const confirmPassword = document.querySelector('#confirm_password');

        toggleConfirmPassword.addEventListener('click', function (e) {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            this.textContent = type === 'password' ? 'Show' : 'Hide';
        });

        document.getElementById('createAccountForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

            const currentPassword = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            if (currentPassword !== confirmPassword) {
                document.getElementById('passwordError').style.display = 'block';
            } else {
                document.getElementById('passwordError').style.display = 'none'; 

                const formData = new FormData(this);

                fetch('../handlers/add_user_handler.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        return response.text();
                    } else {
                        throw new Error('Network response was not ok.');
                    }
                })
                .then(data => {
                    console.log(data);
                    document.getElementById('successMessage').style.display = 'block';
                    document.getElementById('createAccountForm').reset();   
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                    
                });
            }
        });
    </script>
</body>
</html>