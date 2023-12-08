// Atithmetic
let a = 5;
let b = 2;

let sum = a + b;   // addition
let difference = a - b;   // subtraction
let product = a * b;   // multiplication
let quotient = a / b;   // division
let remainder = a % b;   // modulo

// Assaginment
let x = 10;
x += 5;   // x = x + 5

// Comparison Operators:
let num1 = 10;
let num2 = '10';

console.log(num1 == num2);   // loose equality (true)
console.log(num1 === num2);  // strict equality (false)
console.log(num1 !== num2);  // strict inequality (true)

// Logical Operators:
let condition1 = true;
let condition2 = false;

console.log(condition1 && condition2);   // logical AND (false)
console.log(condition1 || condition2);   // logical OR (true)
console.log(!condition1);   // logical NOT (false)


// unary Operators
let number = 5;

console.log(-number);   // unary minus
console.log(++number);  // increment
console.log(typeof number);   // typeof operator


// bitwise operators
let binaryA = 5; // binary representation: 0101
let binaryB = 3; // binary representation: 0011

console.log(binaryA & binaryB);  // bitwise AND (result: 0001)
console.log(binaryA | binaryB);  // bitwise OR (result: 0111)
console.log(~binaryA);           // bitwise NOT (result: 11111010)
