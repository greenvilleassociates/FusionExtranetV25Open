<?php
// Load array of users
$userList = json_decode(file_get_contents("localuser.json"), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="card shadow-sm mx-auto" style="max-width: 400px;">
        <div class="card-body">

            <h3 class="text-center mb-4">Login</h3>

            <form id="loginForm">

                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" id="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Password</label>
                    <input type="password" id="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Login
                </button>

            </form>

            <div id="error" class="text-danger mt-3 text-center" style="display:none;">
                Invalid email or password.
            </div>

        </div>
    </div>

</div>

<script>
// Load PHP JSON array into JS
const users = <?php echo json_encode($userList); ?>;

document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    let matchedUser = null;

    // Loop through all users
    for (let u of users) {
        if (u.email === email && u.password === password) {
            matchedUser = u;
            break;
        }
    }

    if (matchedUser) {
        // Store user info in localStorage
        localStorage.setItem("uid", matchedUser.uid);
        localStorage.setItem("firstname", matchedUser.firstname);
        localStorage.setItem("lastname", matchedUser.lastname);
        localStorage.setItem("fullname", matchedUser.fullname);
        localStorage.setItem("email", matchedUser.email);
        localStorage.setItem("activepictureurl", matchedUser.activepictureurl);

        // Redirect to profile page
        window.location.href = "profile.html";
    } else {
        document.getElementById("error").style.display = "block";
    }
});
</script>

</body>
</html>
