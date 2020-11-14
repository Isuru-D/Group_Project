(function() {
  var fauxTable = document.getElementById("faux-table");
  var mainTable = document.getElementById("main-table");
  var clonedElement = mainTable.cloneNode(true);
  var clonedElement2 = mainTable.cloneNode(true);
  clonedElement.id = "";
  clonedElement2.id = "";
  fauxTable.appendChild(clonedElement);
  fauxTable.appendChild(clonedElement2);
})();