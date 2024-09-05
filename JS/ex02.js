const random_Number_in_Range =
     (min,max)=>Math.random()*(max-min)+min;

const randomNum1 = random_Number_in_Range(2, 10);
const randomNum2 = random_Number_in_Range(1, 5);

console.log(randomNum1); 
console.log(randomNum2); 