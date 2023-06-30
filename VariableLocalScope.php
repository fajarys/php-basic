<?php
function createName()
{
    $name = "Fajar"; // local scope
    echo $name;
}
createName();
echo $name;
