// The function will be inside of other functions for visual feedback to the user depending on what function the programmers decide to write.
// note = '' makes it so that '' is the default
function update(note = '') {
// concatenating the --- with the data inputed into the function
	console.log(`--- ${note}`);
// adding a helpful bit of text to the front of a variable
	console.log(`todos:` todos);
}
// todos is a box that you throw things into. Its nothing but a shell for the todo array
var todos = [];
// starting the count for the id at 0
var count = 0;
// This function will add content to the todo list
function add(content) {
//Creating an array that will go inside of the todo variable
	var todo = {
// adding ++ to the count variable makes the id tick up once every time a new todo is added
		id: count++,
// adding a helpful bit of text to the front of a variable
		content: content,
	};
	// Pushing the todo array into the todos variable      todo[todos{id/content}]
	todos.push(todo);
	// visual feedback letting you know that the content has been added to the list
	update(`Added ${content}`);
}
// This function will remove a todo with visual feedback
function remove(id) {
	// When the correct id is entered. The todo array will be overwritten and replaced with a blank array
	var todo = {};
	// This digd into the correct id and finds its content and provides visual feedback that the todo has been removed
	update(`removed ${todos[id].content}`);
	// This finds the index and removes 1 thing from it i think?
	todos.splice(id,1);

}
// function will provide visual feedback for when the user has completed something on the todo list
function complete(id) {
// if the todo in question has been plugged into the function, ring true
	todos[id].complete = true
// If the id has a value of true, add a helpful bit of text to the front of a variable 
// to let the user gain satisfaction from completing the task
	update(`Completed ${todos[id].content }`)
}




// This whole todo app has now been encapsulated into its own scoped function
const todoApp = {

	todos: [],
	count: 0,
// something to note here is that you dont need to write the word "function" to make a function, you just have to write the name of the function
	 update(note = '') {
		console.log(`--- ${note}`);
		// the functions arent able to talk to eachother so the "this." parameter is what will take the given value and make it seen by the rest of the function
		console.log(`this.ttodos:`, this.todos);
	},

	add(content) {
		const todo = {
			id: this.count++,
			content: content,
		}
		this.todos = [...this.todos, todo];
		this.update(`added ${content}`);
	},

	remove(id) {
		this.update(`Removed ${this.todos[id].content}`);
		this.todos.splice(id,1);
	},
	
	complete(id) {
		this.todos[id].complete = true;
		this.update(`Completed ${this.todos[id].content}`);
	},

};




































































