const form = document.querySelector('form');
const input = document.querySelector('input');
const output = document.querySelector('#output');

// name generator// name generator// name generator
		form.addEventListener('submit', (event) => {
			event.preventDefault();
			if (input.value !== '') {
				const name = input.value;
				const message = `Hello, ${name}, nice to meet you!`;
				output.innerHTML = message;
      } else {
				output.innerHTML = 'Please enter a name';
			} if (!isNaN(input.value)) {
        output.innerHTML = 'Please enter a name';
      } 
		});

		input.addEventListener('input', () => {
			output.innerHTML = '';
		});



// Character Count// Character Count// Character Count
form.addEventListener('submit', function(event) {
	event.preventDefault();
  
	if (input.value !== '') {
		var message = `The string "${input.value}" has ${input.value.length} characters in it.`;
		output.innerHTML = `<p>${message}</p>`;
   
	} else {
		output.innerHTML = `<p>Please enter a string</p>`;
	}
  
  		input.addEventListener('input', () => {
			output.innerHTML = '';
      })
});



// Madlib// Madlib// Madlib
const inputType = document.querySelectorAll('input[type="text"]');

form.addEventListener("submit", (event) => {
  event.preventDefault();
  let inputsFilled = true;
  inputType.forEach((input) => {
    if (input.value.trim() == "") {
      inputsFilled = false;
    }
  });
  if (inputsFilled) {
    const noun = document.querySelector("#noun").value;
    const verb = document.querySelector("#verb").value;
    const adjective = document.querySelector("#adjective").value;
    const adverb = document.querySelector("#adverb").value;
    output.innerHTML = `Do you ${verb} your ${adjective} ${noun} ${adverb}? That's hilarious!`;
  } else {
    output.innerHTML = `One or more of the input fields have not been filled.`;
  } if (!isNaN(input.value)) {
        output.innerHTML = 'Please enter a name';
      } 
});

inputType.forEach((input) => {
  input.addEventListener("input", () => {
    mloutput.innerHTML = "";
  });
});



// Simple // Simple Math// Simple Math
const first = document.querySelector('#first');
const second = document.querySelector('#second');


form.addEventListener('submit', (event) => {
  event.preventDefault();
  const first_val = parseFloat(first.value);
  const second_val = parseFloat(second.value);

  if (!isNaN(first_val) && !isNaN(second_val)) {
    const plus = first_val + second_val;
    const minus = first_val - second_val;
    const multi = first_val * second_val;
    const div = first_val / second_val;
    output.innerHTML = `
      ${first_val} + ${second_val} = ${plus}<br>
      ${first_val} - ${second_val} = ${minus}<br>
      ${first_val} * ${second_val} = ${multi}<br>
      ${first_val} / ${second_val} = ${div}<br>`;
  } else {
    output.innerHTML = 'Please enter valid numbers';
  }
});



// Retirement Calculator// Retirement Calculator
var age = document.querySelector('#age');
var year = document.querySelector('#year');


form.addEventListener('submit', (event) => {
  event.preventDefault();                          
  var age_val = document.querySelector('#age').value;
  var year_val = document.querySelector('#year').value;
  var diff = year_val - age_val;
  var current_time = new Date();
  var current_year =  current_time.getFullYear();
  var retire_year = current_year + diff;
  
  if (age_val && year_val !== '') {
    output.innerHTML = `You have ${diff} years left to retire. <br> Its ${current_year}, so you can retire in ${retire_year}`;
  }
});




































