<?php
//http://www.w3schools.com/angular/angular_http.asp
//data sample:

{
"records": [
  {
    "Name" : "Alfreds Futterkiste",
    "City" : "Berlin",
    "Country" : "Germany"
  },
  {
    "Name" : "Berglunds snabbköp",
    "City" : "Luleå",
    "Country" : "Sweden"
  },
  {
    "Name" : "Centro comercial Moctezuma",
    "City" : "México D.F.",
    "Country" : "Mexico"
  },
  {
    "Name" : "Ernst Handel",
    "City" : "Graz",
    "Country" : "Austria"
  },
  {
    "Name" : "FISSA Fabrica Inter. Salchichas S.A.",
    "City" : "Madrid",
    "Country" : "Spain"
  },
  {
    "Name" : "Galería del gastrónomo",
    "City" : "Barcelona",
    "Country" : "Spain"
  },
  {
    "Name" : "Island Trading",
    "City" : "Cowes",
    "Country" : "UK"
  },
  {
    "Name" : "Königlich Essen",
    "City" : "Brandenburg",
    "Country" : "Germany"
  },
  {
    "Name" : "Laughing Bacchus Wine Cellars",
    "City" : "Vancouver",
    "Country" : "Canada"
  },
  {
    "Name" : "Magazzini Alimentari Riuniti",
    "City" : "Bergamo",
    "Country" : "Italy"
  },
  {
    "Name" : "North/South",
    "City" : "London",
    "Country" : "UK"
  },
  {
    "Name" : "Paris spécialités",
    "City" : "Paris",
    "Country" : "France"
  },
  {
    "Name" : "Rattlesnake Canyon Grocery",
    "City" : "Albuquerque",
    "Country" : "USA"
  },
  {
    "Name" : "Simons bistro",
    "City" : "København",
    "Country" : "Denmark"
  },
  {
    "Name" : "The Big Cheese",
    "City" : "Portland",
    "Country" : "USA"
  },
  {
    "Name" : "Vaffeljernet",
    "City" : "Århus",
    "Country" : "Denmark"
  },
  {
    "Name" : "Wolski Zajazd",
    "City" : "Warszawa",
    "Country" : "Poland"
  }
]
}
?>



<!DOCTYPE html>
<html>
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="customersCtrl"> 

<ul>
  <li ng-repeat="x in names">
    {{ x.Name + ', ' + x.Country }}
  </li>
</ul>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("http://www.w3schools.com/angular/customers.php")
  .success(function (response) {$scope.names = response.records;});
});
</script>

</body>
</html>
