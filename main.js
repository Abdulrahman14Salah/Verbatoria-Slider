// let dateNow = new Date();
// console.log(dateNow);

// console.log("#".repeat(66));

// console.log(Date.parse("10 25 1997"));

// const t0 = performance.now();
// for (let i = 0; i < 100000; i++) {
//   document.body.appendChild(document.createElement("div"));
// }
// const t1 = performance.now();
// console.log(`Call to doSomething took ${t1 - t0} milliseconds.`);

// Create a bunch of marks.
performance.mark("squirrel");
performance.mark("squirrel");
performance.mark("monkey");
performance.mark("monkey");
performance.mark("dog");
performance.mark("dog");

// Get all of the PerformanceMark entries.
const allEntries = performance.getEntriesByType("mark");
console.log(allEntries.length);
// 6

// Get all of the "monkey" PerformanceMark entries.
const monkeyEntries = performance.getEntriesByName("monkey");
console.log(monkeyEntries.length);
// 2

// Clear out all of the marks.
performance.clearMarks();