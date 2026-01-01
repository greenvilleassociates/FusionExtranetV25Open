<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logging Out...</title>

    <script>
localStorage.removeItem("uid");
localStorage.removeItem("fullname");
localStorage.removeItem("firstname");
localStorage.removeItem("lastname");
localStorage.removeItem("email");
localStorage.removeItem("activepictureurl");

window.location.href = "homepage.html";
    </script>
</head>
<body>
Logging out...
</body>
</html>
