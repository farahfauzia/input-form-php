<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">

    <form method="POST" action="process.php">
        <input
            type="text"
            name="firstname"
            placeholder="Firstname"
            value="<?= isset($_POST['firstname'])
                ? htmlspecialchars($_POST['firstname']) : '' ?>"
        >
        <input
            type="text"
            name="lastname"
            placeholder="Lastname"
            value="<?= isset($_POST['lastname'])
                ? htmlspecialchars($_POST['lastname']) : '' ?>"
        >
        <input
            type="text"
            name="phone"
            placeholder="Phone Number"
            value="<?= isset($_POST['phone'])
                ? htmlspecialchars($_POST['phone']) : '' ?>"
        >
        <textarea
            name="address"
            placeholder="Address"
        ></textarea>

        <button type="submit" class="btn-submit">Submit</button>
    </form>

</div>
</body>
</html>