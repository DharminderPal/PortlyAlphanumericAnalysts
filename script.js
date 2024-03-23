let n = 5;
let str = "";
let count = 1;

for (let i = 1; i <= n; i++) {
  for (let j = 1; j <= n; j++) {
    if (i == 1) {
      str += `${i}`
    }
    else (
      str += `${i * j}`
    )
  }
  str += "\n";
}
console.log(str);