<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}
class Person {
    private $firstname;
    private $lastname;
    private $phone;
    private $address;

    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = $firstname;
        $this->lastname  = $lastname;
        $this->phone     = $phone;
        $this->address   = $address;
    }

    public function display() {
        echo "<p>Hi, my name is {$this->firstname} {$this->lastname}</p>";
        echo "<p>Phone Number : {$this->phone}</p>";
        echo "<p>Address : {$this->address}</p>";
    }

    public function getFullname() {
        return $this->firstname . ' ' . $this->lastname;
    }
}

$firstname = htmlspecialchars($_POST['firstname']);
$lastname  = htmlspecialchars($_POST['lastname']);
$phone     = htmlspecialchars($_POST['phone']);
$address   = htmlspecialchars($_POST['address']);

$person = new Person($firstname, $lastname, $phone, $address);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Input</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <form method="POST" action="process.php">
        <input type="text" name="firstname"
               value="<?= htmlspecialchars($firstname) ?>">
        <input type="text" name="lastname"
               value="<?= htmlspecialchars($lastname) ?>">
        <input type="text" name="phone"
               value="<?= htmlspecialchars($phone) ?>">
        <textarea name="address"><?= htmlspecialchars($address) ?></textarea>
        <button type="submit" class="btn-submit">Submit</button>
    </form>
    <div class="result">
        <?php $person->display(); ?>
        <a href="index.php">Reset</a>
    </div>

</div>
</body>
</html>