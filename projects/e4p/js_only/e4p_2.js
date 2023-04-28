// const form = document.querySelector("form");
// const input = document.querySelector("input");
// const ar_output = document.querySelector("#output");

// // Area of a Rectangular Room// Area of a Rectangular Room
// const length = document.querySelector("#length");
// const width = document.querySelector("#width");

// form.addEventListener("submit", (event) => {
//   event.preventDefault();

//   const length_val = parseFloat(length.value);
//   const width_val = parseFloat(width.value);
//   const feet = length_val * width_val;
//   const meters = feet * 0.09290304;
//   const meters_rounded = meters.toFixed(2);
//   if (length_val && width_val) {
//     ar_output.innerHTML = `The area is ${feet} square feet ${meters_rounded} square meters`;
//   }
//   input.addEventListener('input', () => {
// 			output.innerHTML = '';
//     });
//   });



// // Pizza Party// Pizza Party// Pizza Party
// const form = document.querySelector("form");
// const people = document.querySelector("#people");
// const pizza = document.querySelector("#pizza");

// form.addEventListener("submit", (event) => {
//   event.preventDefault();

//   const people_val = parseFloat(people.value);
//   const pizza_val = parseFloat(pizza.value);

//   if (people_val && pizza_val) {
//     const slices = pizza_val * 8;
//     const pp_ratio = slices / people_val;
//     const pp_ratio_rounded = Math.floor(pp_ratio);
//     const x = pp_ratio_rounded * people_val;
//     const leftovers = slices - x;
//     const leftover_rounded = Math.round(leftovers);

//     output.innerHTML = `${people_val} people with ${pizza_val} pizzas <br>Each person gets ${pp_ratio_rounded} pieces of pizza.<br>There are ${leftover_rounded} leftover pieces.`;
//   }
//   input.addEventListener('input', () => {
// 			output.innerHTML = '';
//       })
// });



// // Paint Calculator// Paint Calculator// Paint Calculator
// var paint_length = document.querySelector("#paint_length");
// var paint_width = document.querySelector("#paint_width ");

// form.addEventListener("submit", (event) => {
//   event.preventDefault();
  
//   const paint_length_val = parseFloat(paint_length.value);
//   const paint_width_val = parseFloat(paint_width.value);
//   const paint_area = paint_length_val * paint_width_val;
//   const gallons_needed = Math.ceil(paint_area / 350);
  
//   if (paint_width_val && paint_length_val) {
//     output.innerHTML = `You will need to purchase ${gallons_needed} gallons of paint to cover ${paint_area} square feet.`;
//   }
  
//   input.addEventListener('input', () => {
//     output.innerHTML = '';
//   });
// });



// // Self-Checkout// Self-Checkout// Self-Checkout

// const price_one = document.querySelector("#price_one");
// const quantity_one = document.querySelector("#quantity_one");

// const price_two = document.querySelector("#price_two");
// const quantity_two = document.querySelector("#quantity_two");

// const price_three = document.querySelector("#price_three");
// const quantity_three = document.querySelector("#quantity_three");

// form.addEventListener("submit", (event) => {
//   event.preventDefault();

//   // price 1 value || quantity 1 value
//   const p1v = parseFloat(price_one.value);
//   const q1v = parseFloat(quantity_one.value);

//   const p2v = parseFloat(price_two.value);
//   const q2v = parseFloat(quantity_two.value);

//   const p3v = parseFloat(price_three.value);
//   const q3v = parseFloat(quantity_three.value);
//   // item 1 value
//   const i1t = p1v * q1v;
//   const i2t = p2v * q2v;
//   const i3t = p3v * q3v;

//   if (!isNaN(p1v) && !isNaN(q1v) && !isNaN(p2v) && !isNaN(q2v) && !isNaN(p3v) && !isNaN(q3v)) {
//     var subtotal = i1t + i2t + i3t;
//     var subtotal = subtotal.toFixed(2);
//     var sc_tax = subtotal * 0.055;
//     var sc_tax = sc_tax.toFixed(2);
    
//     var sc_total = parseFloat(sc_tax) + parseFloat(subtotal);
//     var sc_total = sc_total.toFixed(2);
    

//     output.innerHTML = `Subtotal: $${subtotal} <br>Tax: $${sc_tax} <br>Total: $${sc_total}`;
//   }
// });

// input.addEventListener("input", () => {
//   output.innerHTML = "";
// });