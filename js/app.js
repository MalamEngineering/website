/**
 * Created by mfissehaye on 10/13/15.
 */
app = angular.module('malam', ['ngRoute', 'angular-spinkit'])
    .config(['$routeProvider', function($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'views/home.tmp.html'
            })
            .when('/who', {
                templateUrl: 'views/who.tmp.html'
            })
            .when('/what', {
                templateUrl: 'views/what.tmp.html',
                controller: 'WhatController'
            })
            .when('/where', {
                templateUrl: 'views/where.tmp.html'
            })
            .otherwise({
                redirectTo: '/'
            });
    }]);
