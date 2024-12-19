<?php
    include('header.php')
    ?>
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
        $problem_category = $_POST['problem_category'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name']; // Get the name of the uploaded image
        $image_tmp = $_FILES['image']['tmp_name']; // Get the temporary location of the uploaded image

        // Move the uploaded image to the desired location
        move_uploaded_file($image_tmp, "uploads/$image");

        // Prepare and execute the SQL query to insert report into the database
        $sql = "INSERT INTO report_problem (pro_id, problem_description, status, date, image1) VALUES ('$problem_category', '$description', 'NO', NOW(), '$image')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
<section>
    <section id="upload-report" class="upload-report">
        <div class="container">
            <?php
                // Start the session


                // Check if the user is logged in
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                   
                    echo "Your reports help improve our community and ensure problems get addressed promptly.";
                } else {
                    echo "You are not logged in.";
                }
                ?>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form method="post" enctype="multipart/form-data" class="p-4 bg-light rounded shadow-sm">
                        <div class="form-group mb-3">
                            <label for="problem-category" class="form-label">Problem Category:</label>
                            <select name="problem_category" id="problem-category" class="form-select" required>
                                <option value="">Select Problem Category</option>
                                <?php
                // Query to fetch problem categories
                $sql = "SELECT * FROM problem_category";
                $result = $conn->query($sql);

                // Loop through query result and generate options
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["pro_id"] . '">' . $row["problem_name"] . '</option>';
                    }
                }
            ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea name="description" id="description" class="form-control" rows="4"
                                required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Image:</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Upload Report</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
</section>



<section id="reports" class="reports">
    <div class="container">
        <div class="section-title">
            <h2>Reports</h2>
            <p>Explore the latest reports submitted by citizens:</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Report ID</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Images</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // Fetch reports from the database
                                // Database connection settings
                                $servername = "localhost"; // Change this to your database server name
                                $username = "root"; // Change this to your database username
                                $password = ""; // Change this to your database password
                                $dbname = "fixmystreet"; // Change this to your database name

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $sql = "SELECT rp_id, problem_description, status, image1 FROM report_problem";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["rp_id"] . "</td>";
                                        echo "<td>" . $row["problem_description"] . "</td>";
                                        echo "<td>" . ($row["status"] == 'NO' ? "Not Worked On" : "Worked On") . "</td>";
                                        // Echo the image with the src attribute set to the image path retrieved from the database
                                        echo "<td><img src='uploads/" . $row["image1"] . "' class='img-fluid' style='max-width: 200px; height: auto;' alt='Report Image'></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>No reports found.</td></tr>";
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======= Hero Section ======= -->

<!-- End #main -->

<!-- ======= Footer ======= -->
<?php
    include('footer.php')
    ?>