<?php
session_start();

// DEBUG ONLY
if (isset($_SESSION['pending_user'])) {
    echo "<script>console.log('✅ Pending session found');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="./assets//images//Shanazlogo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Shanaz CHS | Login</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <style>
        .contact-btn {
        background-color: #f66; /* Red background */
        color: white; /* White text */
        font-weight: bold;
        font-size: 16px;
        border: none;
        padding: 12px 30px;
        border-radius: 30px; /* Rounded edges */
        cursor: pointer;
        text-transform: uppercase;
        display: inline-block;
        text-align: center;
        transition: background 0.3s ease;
        margin-top: 20px;
      }

      .contact-btn:hover {
        background-color: #ff4d4d; /* Darker red on hover */
      }
    </style>
</head>
<body>
    <?php if (isset($_GET['timeout'])): ?>
    <div class="alert alert-warning text-center mt-3">
      Session expired due to inactivity. Please log in again.
    </div>
  <?php endif; ?>

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            <div class="text-center mb-4">
                <img src="./assets/images/Shanazlogo.png" alt="Logo" style="width: 80px;">
                <h4 class="mt-2">Login to Your Account</h4>
            </div>
            <form action="./PhpFiles/login.php" method="post">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <div class="text-center text-muted small" id="location-status"></div>
                
                <button type="submit" class="contact-btn">Login</button>
            </form>
            <?php if (isset($_GET['multiple']) && isset($_SESSION['pending_user'])): ?>
                <form method="POST" action="./PhpFiles/login.php">
                    <input type="hidden" name="email" value="<?= htmlspecialchars($_SESSION['pending_user']['email']) ?>">
                    <input type="hidden" name="password" value="<?= htmlspecialchars($_SESSION['pending_user']['password']) ?>">
                    <input type="hidden" name="latitude" value="<?= htmlspecialchars($_SESSION['pending_user']['latitude']) ?>">
                    <input type="hidden" name="longitude" value="<?= htmlspecialchars($_SESSION['pending_user']['longitude']) ?>">
                    <input type="hidden" name="override" value="1">
                    <div class="alert alert-warning text-center rounded-3 mt-3">
                    You're already logged in elsewhere. <br>
                    <button type="submit" class="btn btn-sm btn-danger mt-2">Click here to continue and logout previous session</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
    <script>
        window.addEventListener("load", () => {
        const latField = document.getElementById("latitude");
        const lonField = document.getElementById("longitude");
        const status = document.getElementById("location-status");
        const loginButton = document.querySelector('button[type="submit"]');

        // Disable login initially
        loginButton.disabled = true;
        status.textContent = "Fetching your location... please wait.";
        status.classList.add("text-warning");

        // Fallback: Enable login after 5 seconds if location not granted
        const fallbackTimeout = setTimeout(() => {
            loginButton.disabled = false;
            status.textContent = "Location access not granted. You can still log in.";
            status.classList.remove("text-warning");
            status.classList.add("text-danger");
        }, 5000);

        // Attempt to get location
        if (!navigator.geolocation) {
            status.textContent = "Geolocation is not supported by your browser.";
            status.classList.replace("text-warning", "text-danger");
            return;
        }

        navigator.geolocation.getCurrentPosition(
            (position) => {
            clearTimeout(fallbackTimeout); // cancel fallback
            latField.value = position.coords.latitude;
            lonField.value = position.coords.longitude;
            console.log("Latitude:", position.coords.latitude);
            console.log("Longitude:", position.coords.longitude);

            loginButton.disabled = false;
            status.textContent = "Location detected successfully.";
            status.classList.remove("text-warning");
            status.classList.add("text-success");
            },
            (error) => {
            // If denied or error, fallback will trigger after 5 seconds
            console.warn("Geolocation error:", error.message);
            status.textContent = "Waiting for location permission... or continue without it.";
            }
        );
        });
    </script>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>