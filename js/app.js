var app = angular.module('app', ['ngRoute']);

app.config([ '$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
  $locationProvider.html5Mode(true);
  $routeProvider
  .when("/", {
    templateUrl: "/pages/login.html"
  })
  .when("/login", {
    templateUrl: "/pages/login.html"
  })
  .when("/signup", {
    templateUrl: "/pages/signup.html"
  })
  .when("/tdl", {
    templateUrl: "/pages/tdl.html"
  })
}]) 