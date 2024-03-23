

// 11111
// 246810
// 3691215
// 48121620
// 510152025  
// *****************  1st this is the answer *****************
// let n = 5;
// let str = "";
// let count = 1;

// for (let i = 1; i <= n; i++) {
//   for (let j = 1; j <= n; j++) {
//     if (i == 1) {
//       str += `${i}`
//     }
//     else (
//       str += `${i * j}`
//     )
//   }
//   str += "\n";
// }
// console.log(str);



// *****************  2nd this is the answer *****************


// 1
// 0 1
// 1 0 1
// 0 1 0 1
// 1 0 1 0 1
let n = 5;
let str = "";
let count = 1;

for (let i = 1; i <= n; i++) {
  for (let j = 1; j <= i; j++) {
    if ((i + j) % 2 == 0) {
      str += `${" 1"}`

    }

    else (
      str += `${" 0"}`
    )
  }
  str += "\n";
}
console.log(str);


