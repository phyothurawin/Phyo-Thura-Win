

const PI = 3.14

function add (a,b) {
    return a + b 
}

function div (a,b) {
    if (b === 0) return "Cannot divided by zero"
    else return a/b
}

module.exports = { PI, add, div }

const test = require("./test")

const{PI, add} = require("./test")

console.log(test.PI)

console.log(test.div(2,3))

console.log(add(1,2))

console.log(1+2)  

