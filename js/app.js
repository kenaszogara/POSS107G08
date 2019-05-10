var app = angular.module('app', ['ngRoute']);

app.config([ '$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
  $locationProvider.html5Mode(true);
  $routeProvider
  .when("/", {
    templateUrl: "POSS107G08/pages/login.html"
  })
}]) 