<!DOCTYPE html>
<?php
if($_SESSION['statut'] !== "intervenant"){
	header('Location:index.php');
}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Accordion table</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, width=device-width, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/ticketstyle.css">
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url("https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
@import url(https://fonts.googleapis.com/css?family=Oswald:700);
@import url(https://fonts.googleapis.com/css?family=Droid+Serif);
.pcs,
.cur,
.per {
  white-space: nowrap;
}

.pcs:after {
  content: " pcs";
}

.cur:before {
  content: "$";
}

.per:after {
  content: "%";
}

* {
  box-sizing: border-box;
}

body {
  position: relative;
  padding: .2em 2em;
  color: #555;
}

table {
  position: relative;
  width: 100%;
}
table th {
  text-align: left;
  vertical-align: bottom;
  border-bottom: 1px solid #ccc;
  text-transform: uppercase;
  font: 0.8em "Oswald", sans-serif;
}
table th, table td {
  padding: .4em;
}

table.fold-table {
  background: white;
  color: #555;
}
table.fold-table > tbody > tr.view {
  font-family: "Droid Serif", serif;
  transition: all .3s ease;
}
table.fold-table > tbody > tr.view td, table.fold-table > tbody > tr.view th {
  cursor: pointer;
}
table.fold-table > tbody > tr.view td:first-child,
table.fold-table > tbody > tr.view th:first-child {
  position: relative;
  padding-left: 20px;
}
table.fold-table > tbody > tr.view td:first-child:before,
table.fold-table > tbody > tr.view th:first-child:before {
  position: absolute;
  top: 50%;
  left: 5px;
  width: 9px;
  height: 16px;
  margin-top: -8px;
  font: 16px fontawesome;
  content: "\f0d7";
  transition: all .3s ease;
}
table.fold-table > tbody > tr.view:nth-child(4n-1) {
  background: #eee;
}
table.fold-table > tbody > tr.view:hover {
  background: #ddd;
}
table.fold-table > tbody > tr.view.open {
  background: tomato;
  color: white;
}
table.fold-table > tbody > tr.view.open td:first-child:before, table.fold-table > tbody > tr.view.open th:first-child:before {
  transform: rotate(-180deg);
  color: white;
}
table.fold-table > tbody > tr.fold {
  display: none;
}
table.fold-table > tbody > tr.fold.open {
  display: table-row;
}

.fold-content {
  padding: .5em;
}
.fold-content h3 {
  margin-top: 0;
}
.fold-content > table {
  background: white;
  color: #555;
  box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
}
.fold-content > table > tbody > tr {
  font-family: "Droid Serif", serif;
  cursor: pointer;
}
.fold-content > table > tbody > tr:nth-child(even) {
  background: #eee;
}
.fold-content > table > tbody > tr:hover {
  background: #ddd;
}

.visible-small {
  display: none;
}

.visible-big {
  display: block;
}

@media (max-width: 700px) {
  body {
    font-size: .8em;
    padding: 0 10px;
  }

  table th, table td {
    padding: 1em .2em;
  }
  table th {
    vertical-align: bottom;
    padding-bottom: 0;
  }

  table.small-friendly > thead {
    display: none;
  }
  table.small-friendly > tbody > tr > td,
  table.small-friendly > tbody > tr > th {
    position: relative;
    padding: 0;
    padding-left: 50%;
    display: block;
    vertical-align: top;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  }
  table.small-friendly > tbody > tr > td:before,
  table.small-friendly > tbody > tr > th:before {
    position: absolute;
    top: 0;
    left: .5em;
    max-width: 50%;
    content: attr(data-th) ": ";
    display: block;
    font-weight: bold;
  }
  table.small-friendly > tbody > tr > td:first-child,
  table.small-friendly > tbody > tr > th:first-child {
    margin-top: 1em;
  }
  table.small-friendly > tbody > tr > td:last-child,
  table.small-friendly > tbody > tr > th:last-child {
    margin-bottom: 1em;
    border: 0;
  }

  .visible-small {
    display: block;
  }

  .visible-big {
    display: none;
  }
}

    </style>

</head>

<body>
  <table class="fold-table">
  <thead>
    <tr>
      <th>Company</th>
      <th>Amount</th>
      <th>Value</th>
      <th><span class="visible-small" title="Premiumns">Prem.</span><span class="visible-big">Premiums</span></th>
      <th><span class="visible-small" title="Strategy A">Str. A</span><span class="visible-big">Strategy A</span></th>
      <th><span class="visible-small" title="Strategy B">Str. B</span><span class="visible-big">Strategy B</span></th>
      <th><span class="visible-small" title="Strategy C">Str. C</span><span class="visible-big">Strategy C</span></th>
    </tr>
  </thead>
  <tbody>
    <tr class="view">
      <td>Company Name</td>
      <td class="pcs">457</td>
      <td class="cur">6 535 178</td>
      <td>-</td>
      <td class="per">50,71</td>
      <td class="per">49,21</td>
      <td class="per">0</td>
    </tr>
    <tr class="fold">
      <td colspan="7">
        <div class="fold-content">
          <h3>Company Name</h3>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <table class="small-friendly">
            <thead>
              <tr>
                <th><span class="visible-small" title="Company name">Comp. name</span><span class="visible-big">Company name</span></th>
                <th><span class="visible-small" title="Customer number">Cust.#</span><span class="visible-big">Customer no</span></th>
                <th><span class="visible-small" title="Customer name">Cust. name</span><span class="visible-big">Customer name</span></th>
                <th><span class="visible-small" title="Insurance number">Ins.#</span><span class="visible-big">Insurance no</span></th>
                <th><span class="visible-small" title="Strategy">Str.</span><span class="visible-big">Strategy</span></th>
                <th>Start</th>
                <th><span class="visible-small" title="Current">Cur.</span><span class="visible-big">Current</span></th>
                <th>Diff</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-th="Company name">Sony</td>
                <td data-th="Customer no">13245</td>
                <td data-th="Customer name">John Doe</td>
                <td data-th="Insurance no">064578</td>
                <td data-th="Strategy">A, 100%</td>
                <td data-th="Start"><span class="cur">20 000</span></td>
                <td data-th="Current"><span class="cur">33 000</span></td>
                <td data-th="Diff"><span class="cur">13 000</span></td>
              </tr>
              <tr>
                <td data-th="Company name">Packard Bell</td>
                <td data-th="Customer no">12457</td>
                <td data-th="Customer name">Howard Steel</td>
                <td data-th="Insurance no">064353</td>
                <td data-th="Strategy">A, 100%</td>
                <td data-th="Start"><span class="cur">52 000</span></td>
                <td data-th="Current"><span class="cur">82 000</span></td>
                <td data-th="Diff"><span class="cur">40 000</span></td>
              </tr>
              <tr>
                <td data-th="Company name">Apple</td>
                <td data-th="Customer no">23885</td>
                <td data-th="Customer name">Jack Blue</td>
                <td data-th="Insurance no">068874</td>
                <td data-th="Strategy">B, 100%</td>
                <td data-th="Start"><span class="cur">30 500</span></td>
                <td data-th="Current"><span class="cur">42 000</span></td>
                <td data-th="Diff"><span class="cur">11 500</span></td>
              </tr>
              <tr>
                <td data-th="Company name">Samsung</td>
                <td data-th="Customer no">13981</td>
                <td data-th="Customer name">Chung Pi Kah</td>
                <td data-th="Insurance no">068112</td>
                <td data-th="Strategy">C, 100%</td>
                <td data-th="Start"><span class="cur">100 000</span></td>
                <td data-th="Current"><span class="cur">133 000</span></td>
                <td data-th="Diff"><span class="cur">33 000</span></td>
              </tr>
            </tbody>
          </table>          
        </div>
      </td>
    </tr>
 
  </tbody>
</table>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script>
	$(function(){
  $(".fold-table tr.view").on("click", function(){
    if($(this).hasClass("open")) {
      $(this).removeClass("open").next(".fold").removeClass("open");
    } else {
      $(".fold-table tr.view").removeClass("open").next(".fold").removeClass("open");
      $(this).addClass("open").next(".fold").addClass("open");
    }
  });
});
</script>

</body>
</html>
