

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
  output_ng.innerHTML = '';
});

// Character Count
const character_count = document.querySelector('#character_count');
const input_cc = character_count.querySelector('input');
const output_cc = character_count.querySelector('#output');

character_count.addEventListener('submit', function(event) {
  event.preventDefault();
  if (input_cc.value !== '') {
    const message = `The string "${input_cc.value}" has ${input_cc.value.length} characters in it.`;
    output_cc.innerHTML = `<p>${message}</p>`;
  } else {
    output_cc.innerHTML = `<p>Please enter a string</p>`;
  }
});

input_cc.addEventListener('input', () => {
  output_cc.innerHTML = '';
});

// Madlib
const madlib = document.querySelector('#madlib');
const inputType = madlib.querySelectorAll('input[type="text"]');
const output_ml = madlib.querySelector('#output');

madlib.addEventListener('submit', (event) => {
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
    output_ml.innerHTML = `Do you ${verb} your ${adjective} ${noun} ${adverb}? That's hilarious!`;
  } else {
    output_ml.innerHTML = `One or more of the input fields have not been filled.`;
  }
});

inputType.forEach((input) => {
  input.addEventListener("input", () => {
    output_ml.innerHTML = "";
  });
});

const simple_math = document.querySelector('#simple_math');
const first = simple_math.querySelector('#first');
const second = simple_math.querySelector('#second');
const output_sm = simple_math.querySelector('#output');

simple_math.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent form submission
  const first_val = parseFloat(first.value);
  const second_val = parseFloat(second.value);
  if (!isNaN(first_val) && !isNaN(second_val)) {
    const plus = first_val + second_val;
    const minus = first_val - second_val;
    const multi = first_val * second_val;
    const div = first_val / second_val;
    output_sm.innerHTML = `
      ${first_val} + ${second_val} = ${plus}<br>
      ${first_val} - ${second_val} = ${minus}<br>
      ${first_val} * ${second_val} = ${multi}<br>
      ${first_val} / ${second_val} = ${div}<br>`;
  } else {
    output_sm.innerHTML = 'Please enter valid numbers';
  }
});


// Retirement Calc
var retirement_calculator = document.querySelector('#retirement_calculator');
var age = retirement_calculator.querySelector('#age');
var year = retirement_calculator.querySelector('#year');
var output_rc = retirement_calculator.querySelector('#output');

retirement_calculator.addEventListener('submit', (event) => {
  event.preventDefault();                          
  var ageVal = retirement_calculator.querySelector('#age').value;
  var yearVal = retirement_calculator.querySelector('#year').value;
  var diff = yearVal - ageVal;
  var currentTime = new Date();
  var currentYear =  currentTime.getFullYear();
  var retireYear = currentYear + diff;
  
  if (ageVal && yearVal !== '') {
    output_rc.innerHTML = `You have ${diff} years left to retire. <br> Its ${currentYear}, so you can retire in ${retireYear}`;
  }
});

// Area of a Rectangular Room
const area_room = document.querySelector("#area_room");
const input_ar = area_room.querySelectorAll("input");
const output_ar = area_room.querySelector("#output");
const length = area_room.querySelector("#length");
const width = area_room.querySelector("#width");

area_room.addEventListener("submit", (event) => {
  event.preventDefault();

  const length_val = parseFloat(length.value);
  const width_val = parseFloat(width.value);
  const feet = length_val * width_val;
  const meters = feet * 0.09290304;
  const meters_rounded = meters.toFixed(2);
  if (length_val && width_val) {
    output_ar.innerHTML = `The area is ${feet} square feet <br> ${meters_rounded} square meters`;
  }
});

input_ar.forEach((input) => {
  input.addEventListener("input", () => {
    output_ar.innerHTML = "";
  });
});



// Pizza Party
const pizza_party = document.querySelector("#pizza_party");
const people = pizza_party.querySelector("#people");
const pizza = pizza_party.querySelector("#pizza");
const output_pp = pizza_party.querySelector("#output");
const input_pp = pizza_party.querySelector("input");

pizza_party.addEventListener("submit", (event) => {
  event.preventDefault();

  const people_val = parseInt(people.value);
  const pizza_val = parseInt(pizza.value);

  if (people_val && pizza_val) {
    const slices = pizza_val * 8;
    const pp_ratio = Math.floor(slices / people_val);
    const leftover = slices % people_val;

    output_pp.innerHTML = `${people_val} people with ${pizza_val} pizzas<br>Each person gets ${pp_ratio} pieces of pizza.<br>There are ${leftover} leftover pieces.`;
  }
});

[pizza, people].forEach((input) => {
  input_pp.addEventListener("input", () => {
    output_pp.innerHTML = "";
  });
});



// Paint Calculator
const paint_calculator = document.querySelector("#paint_calculator");
var paint_length = paint_calculator.querySelector("#paint_length");
var paint_width = paint_calculator.querySelector("#paint_width ");
const input_pc = paint_calculator.querySelector("input");
const output_pc = paint_calculator.querySelector("#output");


paint_calculator.addEventListener("submit", (event) => {
  event.preventDefault();
  
  const paint_length_val = parseFloat(paint_length.value);
  const paint_width_val = parseFloat(paint_width.value);
  const paint_area = paint_length_val * paint_width_val;
  const gallons_needed = Math.ceil(paint_area / 350);
  
  if (paint_width_val && paint_length_val) {
    output_pc.innerHTML = `You will need to purchase ${gallons_needed} gallons of paint to cover ${paint_area} square feet.`;
  }
  
  input_pc.addEventListener('input', () => {
    output_pc.innerHTML = '';
  });
});



// Self-Checkout
const self_checkout = document.querySelector("#self_checkout");
const output_sc = self_checkout.querySelector("#output");
const input_sc = self_checkout.querySelector("input");
const price_one = self_checkout.querySelector("#price_one");
const quantity_one = self_checkout.querySelector("#quantity_one");

const price_two = self_checkout.querySelector("#price_two");
const quantity_two = self_checkout.querySelector("#quantity_two");

const price_three = self_checkout.querySelector("#price_three");
const quantity_three = self_checkout.querySelector("#quantity_three");

self_checkout.addEventListener("submit", (event) => {
  event.preventDefault();

  // price 1 value || quantity 1 value
  const p1v = parseFloat(price_one.value);
  const q1v = parseFloat(quantity_one.value);

  const p2v = parseFloat(price_two.value);
  const q2v = parseFloat(quantity_two.value);

  const p3v = parseFloat(price_three.value);
  const q3v = parseFloat(quantity_three.value);
  // item 1 value
  const i1t = p1v * q1v;
  const i2t = p2v * q2v;
  const i3t = p3v * q3v;

  if (!isNaN(p1v) && !isNaN(q1v) && !isNaN(p2v) && !isNaN(q2v) && !isNaN(p3v) && !isNaN(q3v)) {
    var subtotal = i1t + i2t + i3t;
    var subtotal = subtotal.toFixed(2);
    var sc_tax = subtotal * 0.055;
    var sc_tax = sc_tax.toFixed(2);
    
    var sc_total = parseFloat(sc_tax) + parseFloat(subtotal);
    var sc_total = sc_total.toFixed(2);
    

    output_sc.innerHTML = `Subtotal: $${subtotal} <br>Tax: $${sc_tax} <br>Total: $${sc_total}`;
  }
});

input_sc.addEventListener("input", () => {
  output_sc.innerHTML = "";
});

