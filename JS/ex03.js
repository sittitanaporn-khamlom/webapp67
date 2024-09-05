const digitize = n=>[...`${Math.abs(n)}`].map(i=>parseInt(i));
const digits1 = digitize(123);
const digits2 = digitize(1230);
  
console.log(digits1);
console.log(digits2);