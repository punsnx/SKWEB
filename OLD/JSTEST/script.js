//if else statement

const age = 15;
const isOldEnough = age >= 18;

if (isOldEnough) {
  console.log(`That person can start driving license, AGE : ${age}`);
} else {
  const yearLeft = 18 - age;
  console.log(`That person is too young!, Wait another ${yearLeft} Year(s) :)`);
}

const birthYear = 1991;
let century;
if (birthYear <= 2000) {
  century = 20;
} else {
  century = 21;
}
console.log(century);

console.log(`WHAT WOW`);
