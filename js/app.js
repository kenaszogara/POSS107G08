var app = angular.module('app', ['NgRoute']);

app.config([ '$routeProvider', function ($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl: "pages/login.html"
  })
}]) 