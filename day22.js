const name = "Alice";
const age = 25;
console.log(`My name is ${name} and I am ${age} years old.`);

const a = 10, b = 5;
console.log(`Sum of ${a} and ${b} is ${a + b}`);
console.log(`Product: ${a * b}, Power: ${a ** 2}`);

const multiLine = `Line 1: Hello
Line 2: World
Line 3: Template Literals are awesome!`;
console.log(multiLine);


const fruits = ["Apple", "Banana", "Cherry", "Date"];

const [first, second, third] = fruits;
console.log(first, second, third);

const [, , , fourth] = fruits;
console.log(fourth);

const [head, ...rest] = fruits;
console.log(head);
console.log(rest);


let x = 100;
let y = 200;
console.log(`Before swap → x: ${x}, y: ${y}`);

[x, y] = [y, x];
console.log(`After swap  → x: ${x}, y: ${y}`);


const person = {
    fullName: "Bob Smith",
    city: "New York",
    country: "USA",
    address: {
        street: "5th Avenue",
        zip: "10001"
    }
};

const { fullName, city } = person;
console.log(fullName, city);

const { country: nation } = person;
console.log(nation);

const { score = 0 } = person;
console.log(score);

const { address: { street, zip } } = person;
console.log(street, zip);


const brand = "Tesla";
const model = "Model S";
const car = { brand, model };
console.log(car);

const calculator = {
    value: 0,
    add(n) {
        this.value += n;
        return this;
    },
    result() {
        return this.value;
    }
};
calculator.add(5).add(3);
console.log(`Calculator result: ${calculator.result()}`);

const key = "dynamicKey";
const obj = {
    [key]: "Hello!",
    [`${key}_extra`]: "World!"
};
console.log(obj.dynamicKey);
console.log(obj.dynamicKey_extra);
