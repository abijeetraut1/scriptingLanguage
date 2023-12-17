// factorial
function factorial(number){
    let storeOutput = 1;
    
    for(let i = 1; i <= number; i++){
        storeOutput  *= i;    
    }
    return storeOutput;
}

const storeFactorialOutput = factorial(10);
console.log(storeFactorialOutput)
