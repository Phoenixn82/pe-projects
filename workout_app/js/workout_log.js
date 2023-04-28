// Add Row functionality
const addRowBtn = document.getElementById("add-row");
addRowBtn.addEventListener("click", function () {
  const tableHeader = document.getElementById("table-header");
  const newRow = table.insertRow();
  const cell1 = newRow.insertCell();
  const cell2 = newRow.insertCell();
  const cell3 = newRow.insertCell();
  const cell4 = newRow.insertCell();
  cell1.innerHTML = `
    <a href="#" class="remove-row">
      <svg class="remove-row-svg" width="100%" height="100%" viewBox="0 0 185 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
        <g>
          <path d="M173.484,73.314l-162.026,0" style="fill:none;stroke:#fff;stroke-width:18px;"/>
        </g>
      </svg>
    </a>`;
  cell1.style.border = "none"; // Add this line to set the style of cell1
  cell2.contentEditable = true;
  cell3.contentEditable = true;
  cell4.contentEditable = true;

  // Show table headings if there is at least one row
  tableHeader.classList.remove("hidden");
});



// Remove Row functionality
const table = document.getElementById("myTable");
table.addEventListener("click", function (e) {
  if (e.target.parentNode.classList.contains("remove-row")) {
    const row = e.target.parentNode.parentNode.parentNode;
    row.parentNode.removeChild(row);

    // Hide table headings if there are no rows
    if (table.rows.length === 0) {
      tableHeader.classList.add("hidden");
    }
  }
});

// Add Table functionality
const addTableBtn = document.getElementById("plus-svg-button");
addTableBtn.addEventListener("click", function () {
  const editTable = document.getElementById("edit-table");
  const newTable = document.createElement("table");
  newTable.id = "myTable";
  newTable.innerHTML = `
    <thead id="table-header">
      <tr>
  <th id='table-headings remove-row-cell'></th>
  <th id='table-headings workout'>Workout</th>
  <th id='table-headings weight'>Weight</th>
  <th id='table-headings inc'>Inc</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <a href="#" class="remove-row">
            <svg class="remove-row-svg" width="100%" height="100%" viewBox="0 0 185 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
              <g>
                <path d="M173.484,73.314l-162.026,0" style="fill:none;stroke:#fff;stroke-width:18px;"/>
              </g>
            </svg>
          </a>
        </td>
        <td contentEditable="true"></td>
        <td contentEditable="true"></td>
        <td contentEditable="true"></td>
      </tr>
    </div>`;
  
  editTable.parentNode.insertBefore(newTable, editTable.nextSibling);

  // Add Row functionality to the new table
  const addRowBtn = newTable.previousElementSibling.querySelector("#add-row");
  addRowBtn.addEventListener("click", function () {
    const table = newTable;
    const newRow = table.insertRow();
    const cell1 = newRow.insertCell();
    const cell2 = newRow.insertCell();
    const cell3 = newRow.insertCell();
    const cell4 = newRow.insertCell();
    cell1.innerHTML = `
      <a href="#" class="remove-row">
        <svg class="remove-row-svg" width="100%" height="100%" viewBox="0 0 185 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
          <g>
            <path d="M173.484,73.314l-162.026,0" style="fill:none;stroke:#fff;stroke-width:18px;"/>
          </g>
        </svg>
      </a>`;
    cell1.style.border = "none";
    cell2.contentEditable = true;
    cell3.contentEditable = true;
    cell4.contentEditable = true;
  });

  // Remove Row functionality for the new table
  newTable.addEventListener("click", function (e) {
    if (e.target.parentNode.classList.contains("remove-row")) {
      const row = e.target.parentNode.parentNode.parentNode;
      row.parentNode.removeChild(row);
    }
  });
});
