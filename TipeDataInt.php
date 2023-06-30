<?php
echo "Decimal :";
var_dump(1234);

echo "Octal :";
var_dump(01234);

echo "Hexadecimal :";
var_dump(0x1A);

echo "Binary :";
var_dump(0b1111111);

echo "Underscore in number :";
var_dump(12_3456_789);

echo "Floating point :";
var_dump(1.234);

echo "Floating point dengan E notation : (1.7 x 1000) :";
var_dump(1.7e3);

echo "Floating point dengan E notation minus : (1.7 x 0.001) :";
var_dump(1.7e-3);

echo "underscore di floating point :";
var_dump(1_123.123);

echo "Integer Overflow in 32 bit :";
var_dump(2147483648);

echo "Integer Overflow in 64 bit :";
var_dump(9223372036854775807);
