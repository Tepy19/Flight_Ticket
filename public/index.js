function updateDestinationOptions() {
  var originSelect = document.getElementById("origin");
  var destinationSelect = document.getElementById("destination");
  var selectedOrigin = originSelect.value;

  destinationSelect.innerHTML = "";

  var defaultOption = document.createElement("option");
  defaultOption.value = "";
  defaultOption.text = "Select destination";
  defaultOption.disabled = true;
  defaultOption.selected = true;
  destinationSelect.appendChild(defaultOption);

  var originOptions = originSelect.options;
  for (var i = 0; i < originOptions.length; i++) {
    if (originOptions[i].value !== selectedOrigin && originOptions[i].value !== "") {
      var option = document.createElement("option");
      option.value = originOptions[i].value;
      option.text = originOptions[i].text;
      destinationSelect.appendChild(option);
    }
  }

  // Additional code to handle content display based on origin and destination selection
  var content = document.querySelector(".content");
  if (selectedOrigin !== "" && destinationSelect.value !== "") {
    content.style.display = "block";
  } else {
    content.style.display = "none";
  }
}