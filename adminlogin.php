<?php
    include('header.php')
    ?>



<main id="main">

    <!-- ======= Breadcrumbs ======= -->


    <?php
        // Start a session

        // Database connection settings
        $servername = "localhost"; // Change this to your database server name
        $username = "root"; // Change this to your database username
        $password = ""; // Change this to your database password
        $dbname = "citizen"; // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Initialize variables with form data
            $username = $_POST['username'];
            $password = $_POST['password']; // Encrypt password using MD5 (not recommended, use more secure hashing)

            // Prepare and execute the SQL query to check user credentials
            $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                // Login successful, store username in session variable
                $_SESSION['username'] = $username;

                // Redirect to dashboard
                header("Location: admindashboard.php");
                exit(); // Stop further execution
            } else {
                // Login failed
                echo "Invalid username or password.";
            }
        }

        // Close the database connection
        $conn->close();
        ?>


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <section id="login" class="login">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6">
                                <form id="register-form" method="post">
                                    <h1>Admin login</h1>
                                    <div class="form-group">
                                        <label for="username-input">Username:</label>
                                        <input type="text" id="username-input" name="username" class="form-control"
                                            placeholder="Enter username..." required />
                                    </div>
                                    <div class="form-group">
                                        <label for="password-input">Password:</label>
                                        <input type="password" id="password-input" name="password" class="form-control"
                                            placeholder="Enter password..." required />
                                    </div>

                                    <button type="submit" class="btn btn-primary">login</button>
                                </form>
                                <div class="text-center mt-3"><a href="register.php">Register</a></div>
                                <!-- Register Button -->
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>


</footer><!-- End Footer -->
<?php
    include('footer.php')
    ?>