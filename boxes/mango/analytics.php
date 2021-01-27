<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>Mango | Business Analytics</title>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<script src="https://cdn.flexmonster.com/flexmonster.js"></script>
<div id="pivot-container"></div>
<div id="pivot-container-charts"></div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script id="rendered-js">
      var pivot = new Flexmonster({
  container: "#pivot-container",
  componentFolder: "https://cdn.flexmonster.com/",
  licenseFilePath: "https://cdn.flexmonster.com/codepen.key",
  width: "100%",
  height: 430,
  toolbar: true,
  report: {
    dataSource: {
      data: getData() },

    "slice": {
      "rows": [{
        "uniqueName": "States",
        "filter": {
          "type": "top",
          "quantity": 10,
          "measure": {
            "uniqueName": "Startup Density",
            "aggregation": "average" } } },



      {
        "uniqueName": "City" }],

      "columns": [
      {
        "uniqueName": "Year" },

      {
        "uniqueName": "[Measures]" }],

      "measures": [{
        "uniqueName": "Startup Density",
        "aggregation": "average" }] } } });







var pivot_with_charts = new Flexmonster({
  container: "pivot-container-charts",
  componentFolder: "https://cdn.flexmonster.com/",
  licenseFilePath: "https://cdn.flexmonster.com/codepen.key",
  width: "100%",
  height: 430,
  report: {
    dataSource: {
      data: getData() },

    "slice": {
      "rows": [{
        "uniqueName": "States",
        "filter": {
          "type": "top",
          "quantity": 10,
          "measure": {
            "uniqueName": "Startup Density",
            "aggregation": "average" } } },



      {
        "uniqueName": "City" }],

      "columns": [
      {
        "uniqueName": "Year" },

      {
        "uniqueName": "[Measures]" }],

      "measures": [{
        "uniqueName": "Startup Density",
        "aggregation": "average" }] },



    "options": {
      "viewType": "charts",
      "chart": {
        "type": "pie" } } } });






function getData() {
  return [
  {
    "Code": { "type": "number" },
    "Name": { "type": "string" },
    "City": { "type": "string" },
    "States": { "type": "string" },
    "Year": { "type": "number" },
    "Rate of New Entrepreneurs": { "type": "string" },
    "Opportunity Share of New Entrepreneurs": { "type": "string" },
    "Startup Density": { "type": "number" } },


  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 294 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 344.1 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 196.4 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210.2 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 263.2 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.3 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203.5 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 222.3 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 331.2 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 374 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 193.4 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 323.5 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 226.6 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 285.4 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 253.9 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 341.8 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 319.2 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 199.9 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 241.8 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 291.1 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 254.1 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 322.2 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 208.7 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 339.7 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.3 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 344.9 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.4 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 310.7 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 346.6 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.4 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 247.1 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 336.2 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 323.7 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 334.7 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 344.6 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 311.5 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198.5 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1977,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.1 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 262.7 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 274.9 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.5 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 187.7 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 246.3 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.7 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.9 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165.8 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 182.8 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 264.9 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 293.5 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 172 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 258.3 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202.8 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 246.9 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 235.8 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 268.3 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 277.2 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 185.9 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.7 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 220 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 258.1 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.5 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 317.7 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.1 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 265.6 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 153.5 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 320 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.9 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 274.7 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 306.1 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 187.6 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 191.4 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 311.9 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 292.8 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 284.8 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 327.8 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 267.5 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 185.9 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1978,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202.3 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 241.8 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 320 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.1 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 181.5 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 230.8 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.9 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 160 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159.7 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 181 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 319.6 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 332.5 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.5 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 306.6 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.2 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217.7 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 226.6 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 335.1 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 278.4 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 184.2 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.1 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 211.4 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.9 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 288.6 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.9 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 313.5 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 147.2 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 290.2 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 186.5 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 276.2 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 310.9 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.8 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 218.5 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 301.8 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 287.4 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 285.2 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 305 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 265.5 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 160.5 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1979,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 193 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 230.2 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 31.4 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.8 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 174.2 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 204.5 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.7 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 148.5 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.5 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 303.4 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 315.2 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 150.7 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 24.5 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.2 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.7 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 193.5 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 303.7 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 265.5 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.6 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 155.9 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.9 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.9 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210.3 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 287.7 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.6 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 292.7 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 133.4 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 275.6 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.2 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 245.2 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 291.9 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.2 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 19.3 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 269.6 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 273.9 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 287.9 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 276.7 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 273.3 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 156.8 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1980,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 191.2 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.1 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 499.5 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 148.8 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 163.3 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.1 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.1 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 142.3 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 139.4 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 150.9 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 278.6 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 288.9 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 142.2 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 450.9 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.9 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 209.4 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.7 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 263.2 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 248.9 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.8 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 145.8 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 186.6 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 191.9 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 201 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 277.5 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 152 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 268.2 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 118.7 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 250.6 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.2 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216.6 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 256.6 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 344.2 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 247.6 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 256.5 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 254.5 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 248 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 251.3 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 147.5 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1981,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 180 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 226 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 319.5 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.5 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.3 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.7 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 138.4 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.8 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 281 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 300.6 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 142.9 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 291 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.9 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.7 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 187.2 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 255.6 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 237.3 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.5 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157.9 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 184.7 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 211.2 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 287.9 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 155.2 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 278.2 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 129.6 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 238.3 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 201.2 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 237.8 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157.1 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210.4 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239.2 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 251.4 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 251.4 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 249.3 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 265 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146.2 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1982,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.9 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.9 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 315.4 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157.3 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 177.7 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.5 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 145.8 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 135.3 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 133.1 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 156.8 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 269.5 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 276.1 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 142.7 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 237.7 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.6 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 218.2 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 188.9 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 224.8 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.2 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 150.1 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 184 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 209.2 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 211.5 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 280.6 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157.8 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 261.3 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 125.2 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 221.7 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 160.3 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.5 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 225.4 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.2 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.4 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 224.7 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 235.1 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 224.4 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 248.7 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 263.4 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 155.3 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1983,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.6 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 257.3 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 371.2 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 156.3 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 201.3 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 259.1 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.7 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.3 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159.1 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.1 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 314.5 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 314.5 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.7 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.6 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 193 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 248.2 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.3 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 262.4 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 225.5 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.2 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 180.4 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 250.5 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 223.4 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 313.9 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 172.9 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 301.8 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 149.1 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 269.2 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198.9 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 225.4 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 247.9 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 177.9 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 224.5 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 255.9 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 261.5 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 229.2 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 290.9 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 292 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1984,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 184.8 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 279.3 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 361.9 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.2 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 221.6 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 250.3 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 174.4 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.4 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 160.9 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 304.2 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 310 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.4 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 240.9 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.6 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 254.3 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 214.3 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 232.9 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 234 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.1 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.9 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 218.6 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 242.2 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 238.3 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 319.8 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 181.2 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 303.9 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 152.9 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 258.1 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.8 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 218.4 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 260.6 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 183.4 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 226.7 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 254 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 262.3 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 271.5 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 295.7 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.2 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1985,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.1 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 283 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 318.5 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 208.2 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 240.9 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 250.3 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 180.4 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.3 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.6 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.2 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 290.8 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 294.6 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 176.6 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 230.5 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.2 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 265.7 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.4 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 246.1 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 244.2 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 184.5 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159.6 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 220.6 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 254.6 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 250.4 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 325.9 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.5 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 300.7 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.4 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 268.8 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 223.7 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 257.8 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.2 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 220.9 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 261 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 274.6 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239.2 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 284.6 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 295.7 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 208.4 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1986,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 234.1 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 280.8 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 268.6 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.3 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 254.2 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 257.1 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 192.1 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 188 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 176.9 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 191.3 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 267.5 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 290.2 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 192.2 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.6 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 218.1 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 275.8 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 240.5 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 261 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 255.8 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 199.9 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202.6 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 221 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 271.2 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 260.4 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 326.6 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 292.1 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 173.2 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 279.7 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 259.6 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 234.5 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 263.3 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.5 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203.2 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 279.6 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 282.1 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 246 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 289.7 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 305.2 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210.9 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1987,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 235.9 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 253 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 224.7 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 199 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 228.7 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 241.9 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 176 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.1 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 174.8 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 221.1 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 260.1 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.2 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 201.8 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 196.3 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 235.7 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203.3 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.2 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 222.2 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 191.3 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198.1 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 235.5 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 240.9 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 295.4 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.5 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 247.5 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 152.4 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 243.7 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 233.5 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 201.1 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 229.8 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.7 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 163.7 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 233.6 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 247.8 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 233 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 257.6 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 262.1 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.3 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1988,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 221.7 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 243 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.2 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.1 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.5 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 242.4 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 177.4 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 156.8 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 163.2 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 160.2 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 214.9 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 254.8 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165.3 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 196.7 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 196.3 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 220.6 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 204.1 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 249.5 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216.4 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 172.5 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.5 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.7 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 229.8 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 286.7 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 186.3 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 228 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.9 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.2 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.1 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 186.1 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.4 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.3 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.2 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 232.8 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 218.5 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.6 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 242.3 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165.5 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1989,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210.3 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.4 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.6 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 182 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.5 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 234.7 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 177.1 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.9 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 160.7 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 223.2 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 251.6 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.8 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203.7 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.8 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 220.7 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.4 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 245.1 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.5 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 173.1 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.3 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.7 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216.7 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.1 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 274.9 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.2 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 218 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 148.8 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 261.8 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.1 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.4 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 228.3 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.8 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.3 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 236 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 243.4 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216.6 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 295.1 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 243.3 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.8 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1990,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.7 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.9 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 229 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.2 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.7 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216.1 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 174.8 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 150.2 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.4 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 163.1 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.8 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 267.9 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 153.9 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.1 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 199 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216.6 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.2 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.5 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 211.3 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.7 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.6 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 196.3 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.5 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 276.7 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 163.5 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 222.1 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 145.8 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 242.2 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.1 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 173.6 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 228.5 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.8 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.8 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.7 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 230.5 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 208.5 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 257 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 246.6 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 150 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1991,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 185 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 241 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 233 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.9 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.9 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.2 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.3 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 149.1 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 156.2 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 150.8 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 225.7 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 262.5 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 153.3 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.5 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.1 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217.9 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.3 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216.5 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.1 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.8 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.5 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 188 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 209.3 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 201.1 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 284.9 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157.5 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.9 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 135.4 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 235.3 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.7 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.6 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 171.9 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 172.1 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 193.7 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.9 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202.8 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 262.1 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 247.2 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 143.8 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1992,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 182.3 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 246.6 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 248.5 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 173.3 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.2 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.7 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 148.9 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157.4 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 155.5 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 226.8 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 272 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 152.5 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.7 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.8 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.4 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 221.6 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 182.7 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.9 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.5 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.6 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 226.3 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 208.8 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 286.4 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.1 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.7 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 133.8 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 245.3 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.3 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 138.3 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.2 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.4 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 173.6 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 181.1 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.9 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 199.2 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 256.2 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 241.7 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 152.5 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1993,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.2 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 256.2 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 259.2 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.6 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 188 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.1 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 172.7 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 153.3 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.6 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.7 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 230.2 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 289.9 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.6 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.4 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.9 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.1 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.7 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.1 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 208.8 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.4 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.2 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 223 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 212.1 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 284.9 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 156.9 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 223 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 132.7 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 272.2 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.9 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 133.5 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.6 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 181.1 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 183.3 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 188.9 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217.5 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.5 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 260.9 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239.7 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 145.2 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1994,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.3 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 258.2 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 257.5 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.6 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.6 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.6 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.7 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165.6 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.9 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 228.1 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 290.5 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.2 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.9 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.5 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.9 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 220.2 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 235.6 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.9 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.3 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.2 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 201.7 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 237.3 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 223.5 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 266.8 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 172.7 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 224.5 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 141 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 271.8 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.6 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 132.9 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.3 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 171 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.2 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.1 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.1 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.6 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 259.7 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.6 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 155.7 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1995,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.7 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 256.2 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 259.4 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 174.1 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.7 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 233 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.5 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 155.3 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165.6 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.6 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 229.4 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 272.4 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.9 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 204.4 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 196.1 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 214.8 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 204.2 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.4 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.8 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.9 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.4 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 212.8 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 229.4 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 228.1 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 257.3 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.3 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 138.1 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 262.3 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 176.4 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 136.4 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.2 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.4 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.2 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.5 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 221.9 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 225.2 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 259.9 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 225.4 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.7 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1996,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.9 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 251.7 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239.1 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.2 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198.1 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239.9 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 173.1 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165.1 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 173.1 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 221.2 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 280 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.9 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.9 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198.4 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.6 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.8 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 240.6 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.3 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159.3 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.2 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 218.3 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 234.9 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 255.7 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 171.8 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217.3 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 250.8 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 176.4 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 134.6 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 160.8 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.4 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.2 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.4 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 225.8 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 225.5 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 255.4 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 223.8 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.7 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1997,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.8 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 249.9 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 232.1 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 172.8 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.6 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239.2 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.9 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.6 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.6 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203.3 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 267.1 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.7 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 191.2 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.5 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203.9 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198.7 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 238.1 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202.3 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 208.4 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.4 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 211.6 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.8 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 230 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 242.7 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 171.5 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.7 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 136.7 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 247.4 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 176.5 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 137.8 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.7 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.6 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 160.7 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 199.4 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 218.6 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 226.8 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 250.6 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.8 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.8 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1998,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.4 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239.1 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217.9 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.3 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 183.2 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 233.6 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165.2 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 144.5 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 145.6 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157.4 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 192.5 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 251.5 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.4 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.2 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 177.7 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202.9 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.9 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 233.1 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.6 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210.8 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.6 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.6 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 193.7 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.9 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 245.1 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.2 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.8 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 134.1 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 228.9 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.7 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 137.5 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157.5 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.7 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.9 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 212.4 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.6 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 236.2 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217.1 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 145.1 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 1999,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 181 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 226 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.9 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 155.9 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.3 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.4 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 137.6 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 141.8 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146.9 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 183.9 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 245.2 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 150.3 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.3 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.3 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.5 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 226.3 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.2 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217.5 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 148.3 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 191 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 176.4 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 209.2 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 228.7 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.2 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 186.4 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 130.3 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 208.3 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 156.9 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 135.6 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165.2 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 152 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 141.2 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.4 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.5 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 224.2 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 227.4 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.4 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 140 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2000,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 176.3 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 212.4 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 209 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 153.9 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 163.8 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 209.1 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 152.7 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 130.5 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 137.7 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 139.5 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.2 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 247.6 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 141.1 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159.9 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.3 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.9 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 209.5 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 243.1 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 135.2 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.8 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 171.3 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202.2 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.9 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.8 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.2 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 123.5 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.3 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.2 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 134.1 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157.9 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 140.8 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 139.1 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203.9 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 199.3 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 220.4 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 213.8 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 209.2 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 135.6 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2001,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 173.2 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 224.1 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202.2 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.8 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.9 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 197.7 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 156.7 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 137.6 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 142.5 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146.1 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 180.9 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 244.2 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 152.9 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.7 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 176.4 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 208 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.1 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 222.1 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203.7 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 289.8 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 144.4 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 191.5 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 183.1 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 211.2 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 245.2 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.4 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 181.2 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 134.9 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 209.4 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.4 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 145.9 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.1 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.1 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 147.4 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207.7 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 193.9 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 190.4 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 214.9 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.2 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 139.8 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2002,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 181.9 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 221 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 207 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 163.4 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 182.3 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.8 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.2 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 137.1 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 134.7 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 136.9 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 181.6 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 248.1 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 148.6 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.9 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.8 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217.4 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 194.3 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 232.6 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 304 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 134.7 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198.9 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.7 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217.2 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 259 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.1 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 183.8 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 125.2 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 211.1 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.8 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146.5 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 174.9 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159.5 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146.9 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210.7 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 188.5 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.7 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.6 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.4 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 149.2 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2003,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 173.7 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 228.3 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210.5 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.7 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 172.5 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.3 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 130.5 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 144.3 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146.1 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 184.4 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 248.4 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 149 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.6 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 172.4 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 267.1 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 201 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 234.3 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 210.3 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 315.8 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 142.5 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 182.8 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 223.1 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 318.4 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 161.8 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 188.2 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 134 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216.6 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.8 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146.6 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.4 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 176.1 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 145.6 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 212.1 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 193.4 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.6 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 223.6 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 259.5 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159.5 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2004,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 177.2 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 233.2 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.8 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 172 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 174.1 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216.3 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 175.8 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 131.4 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.4 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 144.9 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 186.9 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 256 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.4 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.1 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 254.9 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 246.3 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.4 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 320.9 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 155 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200.2 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 186.9 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.7 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 312 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.5 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 200 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 145.9 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 232.2 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 177 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 160.7 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 192.3 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 177 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 148.2 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 229 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203.9 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 203.4 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239.1 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 255.1 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.2 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2005,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 204.4 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 237.4 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 214.9 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 182.9 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 179.3 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 216.5 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 177.1 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 136.7 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 152 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 142.1 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 181.2 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 251 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.3 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.2 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 174.7 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 263.1 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.7 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 245 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 235.1 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 313.6 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.9 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.6 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 193.8 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 232.5 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 308.1 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 166.5 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 220.3 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 130.6 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 248.6 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 183.5 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 174.2 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202.6 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.8 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.5 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239.2 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 219.1 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 217.4 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 252.7 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 250 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170.9 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2006,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198.7 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 230.5 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 208.3 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 160 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 158.6 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.3 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.7 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 122.7 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 131.5 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 132.9 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 171.6 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 236.4 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.1 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.3 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 236.8 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.1 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 226.5 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 218.2 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 301.7 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 142.9 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 185.1 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 182.9 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 220.1 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 266.6 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 150.8 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 205.1 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 125.4 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 228.5 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 156.1 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 147.6 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 178.3 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 155.3 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 137.1 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.3 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198.5 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 198.7 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 239.9 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 236.4 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159.1 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2007,
    "Rate of New Entrepreneurs": "",
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 182.3 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0056,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.9 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0044,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 201.7 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 144.7 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0028,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 151.4 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0026,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 189.4 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.4 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0015,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 117.5 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0014,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 123.1 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0025,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 120.9 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0033,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.5 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0036,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 223.9 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 139.8 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0034,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 153.7 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 157.9 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0019,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 214.9 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0018,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154.7 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.003,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 206.6 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0042,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 202.7 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0048,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 268.9 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0019,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 128.8 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 163.2 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.005,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.5 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0041,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 215.7 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0027,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.5 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0017,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 149.6 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0045,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 183.6 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0012,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 111.1 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.004,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 214 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 145.2 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0047,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 133 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0038,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159.6 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0017,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 137.3 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 133.3 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.004,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 195.3 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0043,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 188.5 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0027,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 182 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 224.2 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0041,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 204.6 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.0025,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 144.1 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2008,
    "Rate of New Entrepreneurs": 0.003,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 168.7 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0057,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 162.6 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0043,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 167.8 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 117.4 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0025,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 123.1 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0033,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 144.4 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0027,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 137.2 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0014,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 93.7 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0025,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 100.4 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0025,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 102.1 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0034,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 146.9 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0043,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 186.7 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0029,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 118.6 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0042,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 135.4 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0026,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 125.5 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0019,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 129 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0033,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 165.8 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0047,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 170 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0052,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 231.5 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 110.3 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 142.4 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0063,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 132.2 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0042,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 191.7 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 186.1 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0014,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 124.1 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0054,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 140.3 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0013,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 97.8 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0039,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 164.5 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.002,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 109.4 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0047,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 107.5 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0043,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 142.5 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.002,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 117 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0029,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 108.1 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0045,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.6 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0043,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 159.4 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 154 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0019,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 171.2 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0043,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 169.9 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 114.2 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2009,
    "Rate of New Entrepreneurs": 0.003,
    "Opportunity Share of New Entrepreneurs": "",
    "Startup Density": 141.7 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.006,
    "Opportunity Share of New Entrepreneurs": 0.788,
    "Startup Density": 151.7 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.004,
    "Opportunity Share of New Entrepreneurs": 0.871,
    "Startup Density": 165.8 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": 0.826,
    "Startup Density": 110.1 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0027,
    "Opportunity Share of New Entrepreneurs": 0.709,
    "Startup Density": 123.6 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.004,
    "Opportunity Share of New Entrepreneurs": 0.815,
    "Startup Density": 150.7 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.003,
    "Opportunity Share of New Entrepreneurs": 0.722,
    "Startup Density": 132.4 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0015,
    "Opportunity Share of New Entrepreneurs": 0.66,
    "Startup Density": 87 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0031,
    "Opportunity Share of New Entrepreneurs": 0.831,
    "Startup Density": 100.4 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0029,
    "Opportunity Share of New Entrepreneurs": 0.761,
    "Startup Density": 92.8 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0033,
    "Opportunity Share of New Entrepreneurs": 0.794,
    "Startup Density": 136.7 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0047,
    "Opportunity Share of New Entrepreneurs": 0.75,
    "Startup Density": 181.6 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.003,
    "Opportunity Share of New Entrepreneurs": 0.684,
    "Startup Density": 112.2 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0051,
    "Opportunity Share of New Entrepreneurs": 0.753,
    "Startup Density": 130.9 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": 0.804,
    "Startup Density": 117.7 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0018,
    "Opportunity Share of New Entrepreneurs": 0.938,
    "Startup Density": 157.8 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0028,
    "Opportunity Share of New Entrepreneurs": 0.67,
    "Startup Density": 119.3 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0043,
    "Opportunity Share of New Entrepreneurs": 0.748,
    "Startup Density": 156.7 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0052,
    "Opportunity Share of New Entrepreneurs": 0.683,
    "Startup Density": 157.9 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0054,
    "Opportunity Share of New Entrepreneurs": 0.77,
    "Startup Density": 234.1 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": 0.692,
    "Startup Density": 97.3 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.002,
    "Opportunity Share of New Entrepreneurs": 0.704,
    "Startup Density": 130 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0062,
    "Opportunity Share of New Entrepreneurs": 0.606,
    "Startup Density": 129.1 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0041,
    "Opportunity Share of New Entrepreneurs": 0.835,
    "Startup Density": 190.1 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0025,
    "Opportunity Share of New Entrepreneurs": 0.761,
    "Startup Density": 183.6 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0016,
    "Opportunity Share of New Entrepreneurs": 0.786,
    "Startup Density": 117.6 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0049,
    "Opportunity Share of New Entrepreneurs": 0.784,
    "Startup Density": 129.8 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0017,
    "Opportunity Share of New Entrepreneurs": 0.812,
    "Startup Density": 87.1 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0038,
    "Opportunity Share of New Entrepreneurs": 0.752,
    "Startup Density": 162.5 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": 0.687,
    "Startup Density": 113.6 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.004,
    "Opportunity Share of New Entrepreneurs": 0.81,
    "Startup Density": 96.7 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0041,
    "Opportunity Share of New Entrepreneurs": 0.789,
    "Startup Density": 116.7 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": 0.638,
    "Startup Density": 120.9 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0038,
    "Opportunity Share of New Entrepreneurs": 0.76,
    "Startup Density": 102.7 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0047,
    "Opportunity Share of New Entrepreneurs": 0.763,
    "Startup Density": 151.7 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.005,
    "Opportunity Share of New Entrepreneurs": 0.856,
    "Startup Density": 151 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": 0.818,
    "Startup Density": 145.5 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0019,
    "Opportunity Share of New Entrepreneurs": 0.795,
    "Startup Density": 159.9 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0038,
    "Opportunity Share of New Entrepreneurs": 0.873,
    "Startup Density": 167.4 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0017,
    "Opportunity Share of New Entrepreneurs": 0.8,
    "Startup Density": 98.3 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2010,
    "Rate of New Entrepreneurs": 0.0031,
    "Opportunity Share of New Entrepreneurs": 0.778,
    "Startup Density": 131.1 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0053,
    "Opportunity Share of New Entrepreneurs": 0.739,
    "Startup Density": 155 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0043,
    "Opportunity Share of New Entrepreneurs": 0.87,
    "Startup Density": 175.4 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": 0.829,
    "Startup Density": 112.3 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0029,
    "Opportunity Share of New Entrepreneurs": 0.708,
    "Startup Density": 127.5 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0039,
    "Opportunity Share of New Entrepreneurs": 0.726,
    "Startup Density": 145 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0025,
    "Opportunity Share of New Entrepreneurs": 0.745,
    "Startup Density": 140.9 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": 0.706,
    "Startup Density": 90 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0031,
    "Opportunity Share of New Entrepreneurs": 0.749,
    "Startup Density": 103.1 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0037,
    "Opportunity Share of New Entrepreneurs": 0.761,
    "Startup Density": 103.7 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0032,
    "Opportunity Share of New Entrepreneurs": 0.76,
    "Startup Density": 139.7 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0042,
    "Opportunity Share of New Entrepreneurs": 0.788,
    "Startup Density": 176 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0027,
    "Opportunity Share of New Entrepreneurs": 0.678,
    "Startup Density": 118.9 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0054,
    "Opportunity Share of New Entrepreneurs": 0.752,
    "Startup Density": 132.9 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0025,
    "Opportunity Share of New Entrepreneurs": 0.812,
    "Startup Density": 118.9 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0017,
    "Opportunity Share of New Entrepreneurs": 0.823,
    "Startup Density": 160.4 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0033,
    "Opportunity Share of New Entrepreneurs": 0.74,
    "Startup Density": 123.8 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0044,
    "Opportunity Share of New Entrepreneurs": 0.712,
    "Startup Density": 161.1 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0056,
    "Opportunity Share of New Entrepreneurs": 0.699,
    "Startup Density": 164.2 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0054,
    "Opportunity Share of New Entrepreneurs": 0.744,
    "Startup Density": 247.9 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": 0.689,
    "Startup Density": 99.5 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": 0.666,
    "Startup Density": 132.5 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0061,
    "Opportunity Share of New Entrepreneurs": 0.562,
    "Startup Density": 128.5 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.004,
    "Opportunity Share of New Entrepreneurs": 0.816,
    "Startup Density": 195.9 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0028,
    "Opportunity Share of New Entrepreneurs": 0.776,
    "Startup Density": 187.5 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0018,
    "Opportunity Share of New Entrepreneurs": 0.821,
    "Startup Density": 119.7 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0046,
    "Opportunity Share of New Entrepreneurs": 0.768,
    "Startup Density": 132.1 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0019,
    "Opportunity Share of New Entrepreneurs": 0.761,
    "Startup Density": 96.2 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.003,
    "Opportunity Share of New Entrepreneurs": 0.713,
    "Startup Density": 166.4 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": 0.707,
    "Startup Density": 112 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0037,
    "Opportunity Share of New Entrepreneurs": 0.805,
    "Startup Density": 99.1 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0042,
    "Opportunity Share of New Entrepreneurs": 0.741,
    "Startup Density": 121.1 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0028,
    "Opportunity Share of New Entrepreneurs": 0.639,
    "Startup Density": 121 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0045,
    "Opportunity Share of New Entrepreneurs": 0.764,
    "Startup Density": 108.5 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0041,
    "Opportunity Share of New Entrepreneurs": 0.77,
    "Startup Density": 163.2 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0047,
    "Opportunity Share of New Entrepreneurs": 0.851,
    "Startup Density": 158 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0036,
    "Opportunity Share of New Entrepreneurs": 0.832,
    "Startup Density": 161.6 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": 0.765,
    "Startup Density": 169.6 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0035,
    "Opportunity Share of New Entrepreneurs": 0.811,
    "Startup Density": 173.9 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0017,
    "Opportunity Share of New Entrepreneurs": 0.772,
    "Startup Density": 105.4 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2011,
    "Rate of New Entrepreneurs": 0.0029,
    "Opportunity Share of New Entrepreneurs": 0.757,
    "Startup Density": 133.5 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0046,
    "Opportunity Share of New Entrepreneurs": 0.702,
    "Startup Density": 154.5 },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0044,
    "Opportunity Share of New Entrepreneurs": 0.889,
    "Startup Density": 180.8 },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": 0.819,
    "Startup Density": 118.8 },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0027,
    "Opportunity Share of New Entrepreneurs": 0.691,
    "Startup Density": 136.1 },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0032,
    "Opportunity Share of New Entrepreneurs": 0.74,
    "Startup Density": 150.6 },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": 0.759,
    "Startup Density": 140.8 },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.651,
    "Startup Density": 93.9 },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": 0.756,
    "Startup Density": 105.9 },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0034,
    "Opportunity Share of New Entrepreneurs": 0.758,
    "Startup Density": 104 },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0029,
    "Opportunity Share of New Entrepreneurs": 0.755,
    "Startup Density": 142.5 },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0038,
    "Opportunity Share of New Entrepreneurs": 0.807,
    "Startup Density": 177.8 },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0019,
    "Opportunity Share of New Entrepreneurs": 0.717,
    "Startup Density": 123.4 },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0049,
    "Opportunity Share of New Entrepreneurs": 0.767,
    "Startup Density": 136.9 },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0026,
    "Opportunity Share of New Entrepreneurs": 0.837,
    "Startup Density": 122.1 },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0018,
    "Opportunity Share of New Entrepreneurs": 0.782,
    "Startup Density": 156.2 },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0033,
    "Opportunity Share of New Entrepreneurs": 0.778,
    "Startup Density": 137.3 },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0046,
    "Opportunity Share of New Entrepreneurs": 0.67,
    "Startup Density": 158.3 },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0058,
    "Opportunity Share of New Entrepreneurs": 0.688,
    "Startup Density": 170.4 },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0052,
    "Opportunity Share of New Entrepreneurs": 0.758,
    "Startup Density": 247.6 },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.002,
    "Opportunity Share of New Entrepreneurs": 0.721,
    "Startup Density": 100.9 },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": 0.706,
    "Startup Density": 132.1 },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0047,
    "Opportunity Share of New Entrepreneurs": 0.483,
    "Startup Density": 132.5 },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0037,
    "Opportunity Share of New Entrepreneurs": 0.815,
    "Startup Density": 197.3 },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0028,
    "Opportunity Share of New Entrepreneurs": 0.797,
    "Startup Density": 196.1 },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0019,
    "Opportunity Share of New Entrepreneurs": 0.786,
    "Startup Density": 124.1 },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.004,
    "Opportunity Share of New Entrepreneurs": 0.762,
    "Startup Density": 127.5 },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0019,
    "Opportunity Share of New Entrepreneurs": 0.757,
    "Startup Density": 98.3 },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0028,
    "Opportunity Share of New Entrepreneurs": 0.718,
    "Startup Density": 165.8 },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": 0.721,
    "Startup Density": 118.9 },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0037,
    "Opportunity Share of New Entrepreneurs": 0.822,
    "Startup Density": 100 },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0038,
    "Opportunity Share of New Entrepreneurs": 0.809,
    "Startup Density": 126.2 },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0026,
    "Opportunity Share of New Entrepreneurs": 0.608,
    "Startup Density": 126.6 },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0047,
    "Opportunity Share of New Entrepreneurs": 0.841,
    "Startup Density": 111.9 },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0035,
    "Opportunity Share of New Entrepreneurs": 0.766,
    "Startup Density": 154.7 },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0043,
    "Opportunity Share of New Entrepreneurs": 0.819,
    "Startup Density": 161.8 },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0042,
    "Opportunity Share of New Entrepreneurs": 0.846,
    "Startup Density": 168.3 },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0029,
    "Opportunity Share of New Entrepreneurs": 0.758,
    "Startup Density": 167.9 },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0033,
    "Opportunity Share of New Entrepreneurs": 0.741,
    "Startup Density": 174.8 },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0016,
    "Opportunity Share of New Entrepreneurs": 0.824,
    "Startup Density": 107.3 },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2012,
    "Rate of New Entrepreneurs": 0.0027,
    "Opportunity Share of New Entrepreneurs": 0.745,
    "Startup Density": 133.7 },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0036,
    "Opportunity Share of New Entrepreneurs": 0.635,
    "Startup Density": "" },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0054,
    "Opportunity Share of New Entrepreneurs": 0.826,
    "Startup Density": "" },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": 0.876,
    "Startup Density": "" },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": 0.719,
    "Startup Density": "" },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0026,
    "Opportunity Share of New Entrepreneurs": 0.7,
    "Startup Density": "" },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": 0.781,
    "Startup Density": "" },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": 0.728,
    "Startup Density": "" },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0017,
    "Opportunity Share of New Entrepreneurs": 0.784,
    "Startup Density": "" },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0033,
    "Opportunity Share of New Entrepreneurs": 0.712,
    "Startup Density": "" },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0031,
    "Opportunity Share of New Entrepreneurs": 0.781,
    "Startup Density": "" },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0036,
    "Opportunity Share of New Entrepreneurs": 0.786,
    "Startup Density": "" },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0019,
    "Opportunity Share of New Entrepreneurs": 0.696,
    "Startup Density": "" },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.004,
    "Opportunity Share of New Entrepreneurs": 0.763,
    "Startup Density": "" },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.767,
    "Startup Density": "" },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": 0.782,
    "Startup Density": "" },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.79,
    "Startup Density": "" },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0034,
    "Opportunity Share of New Entrepreneurs": 0.697,
    "Startup Density": "" },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0053,
    "Opportunity Share of New Entrepreneurs": 0.703,
    "Startup Density": "" },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0049,
    "Opportunity Share of New Entrepreneurs": 0.732,
    "Startup Density": "" },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0015,
    "Opportunity Share of New Entrepreneurs": 0.656,
    "Startup Density": "" },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0018,
    "Opportunity Share of New Entrepreneurs": 0.731,
    "Startup Density": "" },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0044,
    "Opportunity Share of New Entrepreneurs": 0.509,
    "Startup Density": "" },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0036,
    "Opportunity Share of New Entrepreneurs": 0.798,
    "Startup Density": "" },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": 0.771,
    "Startup Density": "" },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.002,
    "Opportunity Share of New Entrepreneurs": 0.773,
    "Startup Density": "" },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0036,
    "Opportunity Share of New Entrepreneurs": 0.763,
    "Startup Density": "" },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0016,
    "Opportunity Share of New Entrepreneurs": 0.632,
    "Startup Density": "" },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.747,
    "Startup Density": "" },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0017,
    "Opportunity Share of New Entrepreneurs": 0.724,
    "Startup Density": "" },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0035,
    "Opportunity Share of New Entrepreneurs": 0.833,
    "Startup Density": "" },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0034,
    "Opportunity Share of New Entrepreneurs": 0.734,
    "Startup Density": "" },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.002,
    "Opportunity Share of New Entrepreneurs": 0.713,
    "Startup Density": "" },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0039,
    "Opportunity Share of New Entrepreneurs": 0.865,
    "Startup Density": "" },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0032,
    "Opportunity Share of New Entrepreneurs": 0.811,
    "Startup Density": "" },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0044,
    "Opportunity Share of New Entrepreneurs": 0.802,
    "Startup Density": "" },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0049,
    "Opportunity Share of New Entrepreneurs": 0.93,
    "Startup Density": "" },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0029,
    "Opportunity Share of New Entrepreneurs": 0.741,
    "Startup Density": "" },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0033,
    "Opportunity Share of New Entrepreneurs": 0.693,
    "Startup Density": "" },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.869,
    "Startup Density": "" },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2013,
    "Rate of New Entrepreneurs": 0.0024,
    "Opportunity Share of New Entrepreneurs": 0.754,
    "Startup Density": "" },

  {
    "Code": 12060,
    "Name": "Atlanta-Sandy Springs-Marietta",
    "City": "Atlanta",
    "States": "Georgia",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0037,
    "Opportunity Share of New Entrepreneurs": 0.69,
    "Startup Density": "" },

  {
    "Code": 12420,
    "Name": "Austin-Round Rock-San Marcos",
    "City": "Austin",
    "States": "Texas",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0055,
    "Opportunity Share of New Entrepreneurs": 0.793,
    "Startup Density": "" },

  {
    "Code": 12580,
    "Name": "Baltimore-Towson",
    "City": "Baltimore",
    "States": "Maryland",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.894,
    "Startup Density": "" },

  {
    "Code": 14460,
    "Name": "Boston-Cambridge-Quincy",
    "City": "Boston",
    "States": "Massachusetts-New Hampshire",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0029,
    "Opportunity Share of New Entrepreneurs": 0.748,
    "Startup Density": "" },

  {
    "Code": 16740,
    "Name": "Charlotte-Gastonia-Rock Hill",
    "City": "Charlotte",
    "States": "North Carolina-South Carolina",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0029,
    "Opportunity Share of New Entrepreneurs": 0.68,
    "Startup Density": "" },

  {
    "Code": 16980,
    "Name": "Chicago-Joliet-Naperville",
    "City": "Chicago",
    "States": "Illinois-Indiana-Wisconsin",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.828,
    "Startup Density": "" },

  {
    "Code": 17140,
    "Name": "Cincinnati-Middletown",
    "City": "Cincinnati",
    "States": "Ohio-Kentucky-Indiana",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.788,
    "Startup Density": "" },

  {
    "Code": 17460,
    "Name": "Cleveland-Elyria-Mentor",
    "City": "Cleveland",
    "States": "Ohio",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0015,
    "Opportunity Share of New Entrepreneurs": 0.817,
    "Startup Density": "" },

  {
    "Code": 18140,
    "Name": "Columbus",
    "City": "Columbus",
    "States": "Ohio",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0035,
    "Opportunity Share of New Entrepreneurs": 0.8,
    "Startup Density": "" },

  {
    "Code": 19100,
    "Name": "Dallas-Fort Worth-Arlington",
    "City": "Dallas",
    "States": "Texas",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.003,
    "Opportunity Share of New Entrepreneurs": 0.78,
    "Startup Density": "" },

  {
    "Code": 19740,
    "Name": "Denver-Aurora-Broomfield",
    "City": "Denver",
    "States": "Colorado",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0037,
    "Opportunity Share of New Entrepreneurs": 0.857,
    "Startup Density": "" },

  {
    "Code": 19820,
    "Name": "Detroit-Warren-Livonia",
    "City": "Detroit",
    "States": "Michigan",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0022,
    "Opportunity Share of New Entrepreneurs": 0.666,
    "Startup Density": "" },

  {
    "Code": 26420,
    "Name": "Houston-Sugar Land-Baytown",
    "City": "Houston",
    "States": "Texas",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.004,
    "Opportunity Share of New Entrepreneurs": 0.754,
    "Startup Density": "" },

  {
    "Code": 26900,
    "Name": "Indianapolis-Carmel",
    "City": "Indianapolis",
    "States": "Indiana",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.797,
    "Startup Density": "" },

  {
    "Code": 27260,
    "Name": "Jacksonville",
    "City": "Jacksonville",
    "States": "Florida",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0021,
    "Opportunity Share of New Entrepreneurs": 0.782,
    "Startup Density": "" },

  {
    "Code": 28140,
    "Name": "Kansas City",
    "City": "KansasCity",
    "States": "Missouri-Kansas",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.763,
    "Startup Density": "" },

  {
    "Code": 29820,
    "Name": "Las Vegas-Paradise",
    "City": "LasVegas",
    "States": "Nevada",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0038,
    "Opportunity Share of New Entrepreneurs": 0.727,
    "Startup Density": "" },

  {
    "Code": 31100,
    "Name": "Los Angeles-Long Beach-Santa Ana",
    "City": "LosAngeles",
    "States": "California",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.005,
    "Opportunity Share of New Entrepreneurs": 0.723,
    "Startup Density": "" },

  {
    "Code": 33100,
    "Name": "Miami-Fort Lauderdale-Pompano Beach",
    "City": "Miami",
    "States": "Florida",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0052,
    "Opportunity Share of New Entrepreneurs": 0.739,
    "Startup Density": "" },

  {
    "Code": 33340,
    "Name": "Milwaukee-Waukesha-West Allis",
    "City": "Milwaukee",
    "States": "Wisconsin",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0013,
    "Opportunity Share of New Entrepreneurs": 0.745,
    "Startup Density": "" },

  {
    "Code": 33460,
    "Name": "Minneapolis-St. Paul-Bloomington",
    "City": "Minneapolis",
    "States": "Minnesota-Wisconsin",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0016,
    "Opportunity Share of New Entrepreneurs": 0.7,
    "Startup Density": "" },

  {
    "Code": 34980,
    "Name": "Nashville-Davidson-Murfreesboro-Franklin",
    "City": "Nashville",
    "States": "Tennessee",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0037,
    "Opportunity Share of New Entrepreneurs": 0.6,
    "Startup Density": "" },

  {
    "Code": 35620,
    "Name": "New York-Northern New Jersey-Long Island",
    "City": "NewYork",
    "States": "New York-New Jersey-Pennsylvania",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0034,
    "Opportunity Share of New Entrepreneurs": 0.81,
    "Startup Density": "" },

  {
    "Code": 36740,
    "Name": "Orlando-Kissimmee-Sanford",
    "City": "Orlando",
    "States": "Florida",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0016,
    "Opportunity Share of New Entrepreneurs": 0.726,
    "Startup Density": "" },

  {
    "Code": 37980,
    "Name": "Philadelphia-Camden-Wilmington",
    "City": "Philadelphia",
    "States": "Pennsylvania-New Jersey-Delaware-Maryland",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.745,
    "Startup Density": "" },

  {
    "Code": 38060,
    "Name": "Phoenix-Mesa-Glendale",
    "City": "Phoenix",
    "States": "Arizona",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0034,
    "Opportunity Share of New Entrepreneurs": 0.767,
    "Startup Density": "" },

  {
    "Code": 38300,
    "Name": "Pittsburgh",
    "City": "Pittsburgh",
    "States": "Pennsylvania",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0015,
    "Opportunity Share of New Entrepreneurs": 0.607,
    "Startup Density": "" },

  {
    "Code": 38900,
    "Name": "Portland-Vancouver-Hillsboro",
    "City": "Portland",
    "States": "Oregon-Washington",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0025,
    "Opportunity Share of New Entrepreneurs": 0.712,
    "Startup Density": "" },

  {
    "Code": 39300,
    "Name": "Providence-New Bedford-Fall River",
    "City": "Providence",
    "States": "Rhode Island-Massachusetts",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0017,
    "Opportunity Share of New Entrepreneurs": 0.793,
    "Startup Density": "" },

  {
    "Code": 40140,
    "Name": "Riverside-San Bernardino-Ontario",
    "City": "Riverside",
    "States": "California",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.003,
    "Opportunity Share of New Entrepreneurs": 0.787,
    "Startup Density": "" },

  {
    "Code": 40900,
    "Name": "Sacramento-Arden-Arcade-Roseville",
    "City": "Sacramento",
    "States": "California",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0028,
    "Opportunity Share of New Entrepreneurs": 0.764,
    "Startup Density": "" },

  {
    "Code": 41180,
    "Name": "San Antonio-New Braunfels",
    "City": "SanAntonio",
    "States": "Texas",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0016,
    "Opportunity Share of New Entrepreneurs": 0.665,
    "Startup Density": "" },

  {
    "Code": 41700,
    "Name": "San Diego-Carlsbad-San Marcos",
    "City": "SanDiego",
    "States": "California",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0034,
    "Opportunity Share of New Entrepreneurs": 0.865,
    "Startup Density": "" },

  {
    "Code": 41740,
    "Name": "San Francisco-Oakland-Fremont",
    "City": "SanFrancisco",
    "States": "California",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0034,
    "Opportunity Share of New Entrepreneurs": 0.809,
    "Startup Density": "" },

  {
    "Code": 41860,
    "Name": "San Jose-Sunnyvale-Santa Clara",
    "City": "SanJose",
    "States": "California",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0039,
    "Opportunity Share of New Entrepreneurs": 0.807,
    "Startup Density": "" },

  {
    "Code": 41940,
    "Name": "Seattle-Tacoma-Bellevue",
    "City": "Seattle",
    "States": "Washington",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0041,
    "Opportunity Share of New Entrepreneurs": 0.912,
    "Startup Density": "" },

  {
    "Code": 42660,
    "Name": "St. Louis",
    "City": "StLouis",
    "States": "Missouri-Illinois",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0028,
    "Opportunity Share of New Entrepreneurs": 0.768,
    "Startup Density": "" },

  {
    "Code": 45300,
    "Name": "Tampa-St. Petersburg-Clearwater",
    "City": "Tampa",
    "States": "Florida",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.003,
    "Opportunity Share of New Entrepreneurs": 0.688,
    "Startup Density": "" },

  {
    "Code": 47260,
    "Name": "Virginia Beach-Norfolk-Newport News",
    "City": "VirginiaBeach",
    "States": "Virginia-North Carolina",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0028,
    "Opportunity Share of New Entrepreneurs": 0.812,
    "Startup Density": "" },

  {
    "Code": 47900,
    "Name": "Washington-Arlington-Alexandria",
    "City": "Washington",
    "States": "District of Columbia-Virginia-Maryland-West Virginia",
    "Year": 2014,
    "Rate of New Entrepreneurs": 0.0023,
    "Opportunity Share of New Entrepreneurs": 0.775,
    "Startup Density": "" }];


}
    </script>
</body>
</html>

