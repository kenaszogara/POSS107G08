var app = angular.module('app', ['ngRoute']);

app.config([ '$routeProvider', function ($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl: "pages/login.html"
  })
  .when("/login", {
    templateUrl: "pages/login.html"
  })
}]) 