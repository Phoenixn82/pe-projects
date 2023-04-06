// // This whole todo app has now been encapsulated into its own scoped function
// const gymTracker = {

// 	exercises: [],
// 	week: 1,
// // something to note here is that you dont need to write the word "function" to make a function, you just have to write the name of the function
// 	 update(note = '') {
// 		console.log(`--- ${note}`);
// 		// the functions arent able to talk to eachother so the "this." parameter is what will take the given value and make it seen by the rest of the function
// 		console.log(`exercises:`, this.exercises);
// 	},

// 	add(content) {
// 		const todo = {
// 			week: this.week++,
// 			content,
// 		}
// 		this.exercises = [...this.exercises, todo];
// 		this.update(`added ${content}`);
// 	},

// 	remove(id) {
// 		this.update(`Removed ${this.exercises[id].content}`);
// 		this.exercises.splice(id,1);
// 	},
	
// 	complete(id) {
// 		this.exercises[id].complete = true;
// 		this.update(`Completed ${this.exercises[id].content}`);
// 	},

// };





function GymTracker(workout, weight, inc, repRange) {
	this.workout = workout;
	this.weight = weight; 
	this.inc = inc;
	this.repRange;

	this.result = function () {
			console.log(`workout: ${this.workout}`);
			console.log(`weight: ${this.weight}`);
			console.log(`increments of weight per month: ${this.inc}`);

	}
}


const workout1 = new GymTracker("Calf raises", 45, 10, `${this.repRange}`);
workout1.result();



GymTracker.prototype.repRange = function () {
	console.log(`yooooooo ${this.weight} is a lot of weight!`);
}

workout1.repRange();




function TodoApp() {
	this.todos = [];
	this.count = 0;
}


TodoApp.prototype.update = function(note = '') {
		console.log(`--- ${note}`);
		console.log(`this.todos:`, this.todos);
	}

TodoApp.prototype.add = function(content) {
	const todo = {
			id: this.count++,
			content: content,
		}
	this.todos = [...this.todos, todo];
	this.update(`added ${content}`);
}

TodoApp.prototype.remove = function(id) {
	this.update(`Removed ${this.todos[id].content}`);
	this.todos.splice(id,1);
	}

TodoApp.prototype.complete = function(id) {
	this.todos[id].complete = true;
	this.update(`Completed ${this.todos[id].content}`);
	}



const todo1 = new TodoApp(`go to the store`);

todo1.add();
