<?php
    include('header.php');

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
    <section id="reports" class="reports">
        <div class="container">
            <div class="section-title">
                <h2>Citizen Reports</h2>
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
                                    <th>Action</th> <!-- New column for the action button -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Fetch reports from the database
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
                                        echo "<td>"; // Start new column for action button
                                        if ($row["status"] == 'NO') {
                                            // Display update button only if status is 'NO'
                                            echo "<form method='post' action='update_status.php'>"; // Form to submit the update action
                                            echo "<input type='hidden' name='report_id' value='" . $row["rp_id"] . "'>"; // Hidden input to send the report ID to the update script
                                            echo "<button type='submit' class='btn btn-primary'>Update Status</button>"; // Update button
                                            echo "</form>";
                                        }
                                        echo "</td>"; // End action column
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No reports found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<!-- ======= Footer ======= -->
<?php
    include('footer.php');
    $conn->close(); // Close the database connection
?>
<!-- End Footer -->