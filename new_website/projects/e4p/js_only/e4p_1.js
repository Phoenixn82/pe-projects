

// name generator
const name_generator = document.querySelector('#name_generator');
const input_ng = name_generator.querySelector('input');
const output_ng = name_generator.querySelector('#output');

name_generator.addEventListener('submit', (event) => {
  event.preventDefault();
  if (input_ng.value !== '') {
    const name = input_ng.value;
    const message = `Hello, ${name}, nice to meet you!`;
    output_ng.innerHTML = message;
  } else {
    output_ng.innerHTML = 'Please enter a name';
  }
});

input_ng.addEventListener('input', () => {
  output.innerHTML = '';
});









// // Character Count
// form.addEventListener('submit', function(event) {
//   event.preventDefault();
//   if (input.value !== '') {
//     const message = `The string "${input.value}" has ${input.value.length} characters in it.`;
//     output.innerHTML = `<p>${message}</p>`;
//   } else {
//     output.innerHTML = `<p>Please enter a string</p>`;
//   }
//   input.addEventListener('input', () => {
//     output.innerHTML = '';
//   });
// });

// // Madlib
// const inputType = document.querySelectorAll('input[type="text"]');
// form.addEventListener('submit', (event) => {
//   event.preventDefault();
//   let inputsFilled = true;
//   inputType.forEach((input) => {
//     if (input.value.trim() == "") {
//       inputsFilled = false;
//     }
//   });
//   if (inputsFilled) {
//     const noun = document.querySelector("#noun").value;
//     const verb = document.querySelector("#verb").value;
//     const adjective = document.querySelector("#adjective").value;
//     const adverb = document.querySelector("#adverb").value;
//     output.innerHTML = `Do you ${verb} your ${adjective} ${noun} ${adverb}? That's hilarious!`;
//   } else {
//     output.innerHTML = `One or more of the input fields have not been filled.`;
//   }
// });

// inputType.forEach((input) => {
//   input.addEventListener("input", () => {
//     output.innerHTML = "";
//   });
// });

// // Simple Math
// const first = document.querySelector('#first');
// const second = document.querySelector('#second');
// form.addEventListener('submit', (event) => {
//   event.preventDefault();
//   const first_val = parseFloat(first.value);
//   const second_val = parseFloat(second.value);
//   if (!isNaN(first_val) && !isNaN(second_val)) {
//     const plus = first_val + second_val;
//     const minus = first_val - second_val;
//     const multi = first_val * second_val;
//     const div = first_val / second_val;
//     output.innerHTML = `
//       ${first_val} + ${second_val} = ${plus}<br>
//       ${first_val} - ${second_val} = ${minus}<br>
//       ${first_val} * ${second_val} = ${multi}<br>
//       ${first_val} / ${second_val} = ${div}<br>`;
//   } else {
//     output.innerHTML = 'Please enter valid numbers';
//   }
// });




