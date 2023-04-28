<?php include("partials/header.php"); ?>

  <section class="inner-column">
    <main>

      <div class="eltitle">
        <h1>Exercise Log</h1>
      </div>

      <form id="setup-form">
  <label for="lbs">Lbs</label>
  <input type="radio" id="lbs" name="weight-unit">
  <label for="kg">Kg</label>
  <input type="radio" id="kg" name="weight-unit">
</form>
      <form id="lop">
        <label for="lop">Length of Program: <input type="number" id="lop"> Weeks</label>

      </form>

      <div class="h-line"></div>

      <section id="edit">
        <div id="edit-table">
          <table id="myTable">
            <thead id="table-header">
              <tr>
                <th id='table-headings remove-row-cell'></th>
                <th id='table-headings workout'>Workout</th>
                <th id='table-headings weight'>Weight</th>
                <th id='table-headings inc'>Inc</th>
              </tr>
            </thead>
            <tbody id="table-body" >
              <tr>
                <td class='remove-row-cell'>
                  <a href="#" class="remove-row">
                    <svg class='remove-row-svg' width="100%" height="100%" viewBox="0 0 185 147" version="1.1" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                      <g>
                        <path d="M173.484,73.314l-162.026,0" style="fill:none;stroke:#fff;stroke-width:18px;" />
                      </g>
                    </svg>
                  </a>
                </td>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
                <td contenteditable="true"></td>
              </tr>
            </tbody>
          </table>
          <button id="add-row"><svg id='plus-svg' width="100%" height="100%" viewBox="0 0 185 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
              <g>
                <path d="M92.471,11.458l0,123.712" style="fill:none;stroke:#fff;stroke-width:18px;" />
                <path d="M173.484,73.314l-162.026,0" style="fill:none;stroke:#fff;stroke-width:18px;" />
              </g>
            </svg></button>
        </div>

        <button id='plus-svg-button'><svg id='plus-svg' width="100%" height="100%" viewBox="0 0 185 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
            <g>
              <path d="M92.471,11.458l0,123.712" style="fill:none;stroke:#fff;stroke-width:18px;" />
              <path d="M173.484,73.314l-162.026,0" style="fill:none;stroke:#fff;stroke-width:18px;" />
            </g>
          </svg></button>

        <button class="submit-button">
          <h2>Submit</h2>
        </button>
      </section>

<?php include("partials/footer.php"); ?>