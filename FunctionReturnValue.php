<?php
function sum(int $first, int $last): int
{
    return $first + $last;
}

$total = sum(10, 10);
var_dump($total);

$total = sum("10", "5");
var_dump($total);

function test(int $first, int $second)
{
    $total = $first * $second;
    return $total;
}

$result = test(10, 3);
var_dump($result);

function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "B";
    } elseif ($value >= 70) {
        return "C";
    } elseif ($value >= 60) {
        return "D";
    } elseif ($value >= 50) {
        return "E";
    } else {
        return "F";
    }
}

$score = getFinalValue(90);
var_dump($score);

function coba()
{
    try {
        throw new Exception('foo');
    } catch (Exception $e) {
        return 'catch';
    } finally {
        return 'finally';
    }
}

echo coba() . PHP_EOL;


class customException extends Exception
{
    public function errorMessage()
    {
        //error message
        $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
            . ': <b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

$email = "test@yahoo.com";

try {
    //check if
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //throw exception if email is not valid
        throw new customException($email);
    }
    //check for "example" in mail address
    if (strpos($email, "yahoo") !== FALSE) {
        throw new Exception("$email is an example e-mail");
    }
} catch (customException $e) {
    echo $e->errorMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
