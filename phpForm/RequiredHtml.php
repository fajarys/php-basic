<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Required Value</title>
</head>
<style>
    span {
        color: red;
    }
</style>

<body>
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = $commentErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])) {
            $websiteErr = "website is required";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $commentErr = "Comment is required";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span>* required field</span></p>
    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <span class="error">* <?= $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?= $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"><?= $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <span><?= $commentErr; ?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?= $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <h2>Your Output</h2>

    <?php
    echo "<h4>$name</h4>";
    echo "<h4>$email</h4>";
    echo "<h4>$website</h4>";
    echo "<h4>$comment</h4>";
    echo "<h4>$gender</h4>";
    ?>
</body>

</html>