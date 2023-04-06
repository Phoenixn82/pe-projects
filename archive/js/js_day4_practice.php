<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JS Day 5</title>
</head>
<body>

<h1>Js Day 5</h1>
<p>im the first paragraph</p>
<p>this is another paragraph</p>

<script>
	var list = ["a", "b", "c", "d"];
	var instruments = [
		{
			name: "Guitar",
		 	ownedBy: "friend",
		},

		{
			name: "drums",
		 	ownedBy: "me",
		},

		{
			name: "vocals",
		 	ownedBy: "friend",
		},

		{
			name: "bass",
		 	ownedBy: "me",
		},

		{
			name: "claranet",
		 	ownedBy: "me",
		},

		{
			name: "piano",
		 	ownedBy: "friend",
		},

	];

function printItem(item, index) {
	console.log(item.name);
	console.log(item.ownedBy);
	console.log(" ");

 };

instruments.forEach( function(item) {

	if (item.ownedBy == "me") {
		console.log(item.name);
	}

});

var me = instruments.filter(function (item) {
	return item.ownedBy == "me";
});

var friend = instruments.filter(function (item) {
	return item.ownedBy == "friend";
});

console.log(me);
console.log(friend);

function buildListSection (items, heading) {
	//create an h2 element from a document 
	var h2 = document.createElement("h2");
	h2.textContent = heading;
	// append h2 to document body
	document.body.appendChild(h2);

	//create an ol element from a document 
	var ol = document.createElement('ol');
	// for each item in the list, create an element from a document and append to the ordered list (ol)
	items.forEach( function(item) {
		var li = document.createElement("li");
		li.textContent = item.name;
		ol.appendChild(li);
	});
	// append ol to document body
	document.body.appendChild(ol);
}

</script>
</body>
</html>