<?php

$name = "";
$name_err = "";

$gender = "";
$gender_err = "";

$email = "";
$email_err = "";

$phone = "";
$phone_err = "";

$dob = "";
$dob_err = "";

$address = "";
$address_err = "";

if (isset($_POST["submit"])) {
    if(empty($_POST['name'])) {
        $name_err = "Name can't be empty";
    } else if(strlen($_POST['name']) < 2) {
        $name_err = "Invalid Name";
    } else {
        $name = validate_input($_POST['name']);
    }

    if(empty($_POST['gender'])) {
        $gender_err = "Select Gender";
    } else {
        $gender = validate_input($_POST['gender']);
    }

    if(empty($_POST['email'])) {
        $email_err = "Email is required";
    } else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Email is not valid";
    } else {
        $email = validate_input($_POST['email']);
    }

    if(empty($_POST['phone'])) {
        $phone_err = "Phone Number can't be empty";
    } else {
        $phone = validate_input($_POST['phone']);
    }

    if(empty($_POST['dob'])) {
        $dob_err = "Date of birth is required";
    } else if (preg_match("/^\d{4}-\d{2}-\d{2}$/", $_POST['dob']) != 1) {
        $dob_err = "Date of birth is not valid";
    } else {
        $dob = validate_input($_POST['dob']);
    }

    if(empty($_POST['address'])) {
        $address_err = "Address can't be empty";
    } else {
        $address = $_POST['address'];
    }
}

function validate_input($str) {
    return htmlspecialchars(trim($str));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP validation</title>

    <style>
        .err {
            color: red;
        }
    </style>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend>
                <label for="name">Name</label>
            </legend>
            <input type="text" name="name" id="name" value="<?php echo $name; ?>">
            <span class="err"><?php echo $name_err; ?></span>
        </fieldset>

        <fieldset>
            <legend>
                <label for="gender">Gender</label>
            </legend>
            <input type="radio" name="gender" value="male" id="male"<?php echo ($gender == "male") ? " checked": ""; ?>><label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female"<?php echo ($gender == "female") ? " checked": ""; ?>><label for="female">Female</label>
            <input type="radio" name="gender" value="other" id="other"<?php echo ($gender == "other") ? " checked": ""; ?>><label for="other">Other</label>
            <span class="err"><?php echo $gender_err ?></span>
        </fieldset>

        <fieldset>
            <legend>
                <label for="email">Email</label>
            </legend>
            <input type="text" name="email" id="email" value="<?php echo $email; ?>">
            <span class="err"><?php echo $email_err ?></span>
        </fieldset>

        <fieldset>
            <legend>
                <label for="phone">Phone Number</label>
            </legend>
            <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
            <span class="err"><?php echo $phone_err ?></span>
        </fieldset>

        <fieldset>
            <legend>
                <label for="dob">Date Of Birth</label>
            </legend>
            <input type="date" name="dob" id="dob">
            <span class="err"><?php echo $dob_err ?></span>
        </fieldset>

        <fieldset>
            <legend>
                <label for="address">Address</label>
            </legend>
            <input type="text" name="address" id="address" value="<?php echo $address; ?>">
            <span class="err"><?php echo $address_err; ?></span>
        </fieldset>

        <fieldset>
            <input type="submit" name="submit" value="submit">
        </fieldset>

    </form>

</body>

</html>