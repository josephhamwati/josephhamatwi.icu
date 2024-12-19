<?php
    include('header.php')
    ?>



<main id="main">

    <!-- ======= Breadcrumbs ======= -->



    <?php
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
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Encrypt password using MD5 (not recommended, use more secure hashing)
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $nickname = $_POST['nickname'];
    $ward_id = $_POST['ward_id'];

    // Prepare and execute the SQL query to insert user data into the database
    $sql = "INSERT INTO users (fullname, username, password, email, gender, nickname, ward_id) VALUES ('$fullname', '$username', '$password', '$email', '$gender', '$nickname', '$ward_id')";

    if (mysqli_query($conn, $sql)) {
        // Registration successful, redirect to dashboard
        header("Location: login.php");
        exit(); // Stop further execution
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>



</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <section id="register" class="register">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6">

                                <form id="register-form" method="post">

                                    <div class="form-group">
                                        <label for="fullname-input">Full Name:</label>
                                        <input type="text" id="fullname-input" name="fullname" class="form-control"
                                            placeholder="Enter full name..." required />
                                    </div>

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

                                    <div class="form-group">
                                        <label for="email-input">Email:</label>
                                        <input type="email" id="email-input" name="email" class="form-control"
                                            placeholder="Enter email..." required />
                                    </div>

                                    <div class="form-group">
                                        <label for="gender-select">Gender:</label>
                                        <select id="gender-select" name="gender" class="form-control" required>
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="nickname-input">Nickname:</label>
                                        <input type="text" id="nickname-input" name="nickname" class="form-control"
                                            placeholder="Enter nickname..." required />
                                    </div>

                                    <div class="form-group ">
                                        <select name="ward_id" id="ward_id" class="form-control">
                                            <option value="">Select Ward</option>
                                            <?php
                                                // Query to fetch ward data
                                                $sql = "SELECT * FROM ward";
                                                $result = $conn->query($sql);

                                                // Loop through query result and generate options
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="' . $row["w_id"] . '">' . $row["w_name"] . '</option>';
                                                    }
                                                }
                                                ?>
                                        </select>

                                    </div>

                                    <button type="submit" class="btn btn-primary">Register</button>
                                </form>


                                <div class="text-center mt-3"><a href="login.php">login now</a></div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div><?php
    include('footer.php')
    ?>