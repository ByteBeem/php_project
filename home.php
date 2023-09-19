
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./homeStyles.css">
    <title>Profile Page</title>
</head>
<body>
    <div class="profile-container">
        <h1>Your Profile</h1>
        <h2>Personal Information</h2>
        <p>Name: <?php echo isset($_GET['name']) ? $_GET['name'] : 'N/A'; ?></p>
        <p>Email: <?php echo isset($_GET['email']) ? $_GET['email'] : 'N/A'; ?></p>
        <p>StudentNo: <?php echo isset($_GET['student']) ? $_GET['student'] : 'N/A'; ?></p>

        <h2>Upload Profile Picture</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data" class="upload-form">
    <!-- Add an input element for the email -->
    <input type="hidden" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>">
    
    <label for="profile_picture" class="upload-label">Choose a file</label>
    <input type="file" name="profile_picture" id="profile_picture" class="upload-input" accept=".jpg, .jpeg, .png" required>
    <input type="submit" name="upload" value="Upload" class="submit-button">
</form>

    </div>
</body>
</html>
