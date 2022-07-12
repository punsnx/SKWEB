//Tutorial
let js = "amazing";
if (js === "amazing") alert("WOW");
console.log(30 + 45);

let age = 30;
age = 31;

const birthYear = 1991;
//birthYear 1990; cannot change const

// operator
const now = 2022;
const ageMe = now - 2004;
const ageBro = now - 1996;

console.log(ageBro > ageMe);

let x, y;
x = y = 25 - 10 - 5; //x = y = 10
console.log("X: " + x, y);

let a = 1;
let b = "1";
if (a == b) {
  console.log("True");
}

const averageAge = ageMe + ageBro / 2;
console.log(ageMe, ageBro, averageAge);

//string

const firstName = "jonas";
const job = "teacher";
const birthYearJonas = 1991;
const year = 2022;
const jonas =
  "I'm " + firstName + ", a " + (year - birthYearJonas) + " years old " + job;

console.log(jonas);

const jonasNew = `I'm ${firstName}, a ${
  year - birthYearJonas
} years old ${job}`;
console.log(jonasNew);

console.log(`a regular string..`);

console.log(`String with \n newline`);
