var regionSelect = document.getElementById("dropdown");
  var countrySelect = document.getElementById("selected-option-field");
  
  // Define an object with African countries grouped by region
  var countriesByRegion = {
    "WESTERN AFRICA": ["Nigeria", "Ghana", "Senegal", "Mali", "Ivory Coast"],
    "CENTRAL AFRICA": ["Cameroon", "Democratic Republic of Congo", "Chad", "Congo", "Central African Republic"],
    "NOTHERN AFRICA": ["Egypt", "Algeria", "Sudan", "Morocco", "Tunisia"],
    "SOUTHERN AFRICA": ["South Africa", "Zimbabwe", "Namibia", "Botswana", "Lesotho"],
    "EASTERN AFRICA": ["Kenya", "Tanzania", "Uganda", "Rwanda", "Burundi"]
  };

  // When a region is selected, populate the country select box with its countries
  regionSelect.addEventListener("change", function() {
    var region = this.value;
    var countries = countriesByRegion[region];
    countrySelect.innerHTML = "<option value=''>Select an option</option>";
    countries.forEach(function(country) {
      var option = document.createElement("option");
      option.value = country;
      option.text = country;
      countrySelect.add(option);
    });
    document.getElementById("selected-option-fields").style.display = "block";
  });