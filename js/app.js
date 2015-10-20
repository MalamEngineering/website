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
            .when('/what/:serviceName', {
                templateUrl: function(params) {
                    var serviceName = params.serviceName ? params.serviceName : 'what';
                    return 'views/' + serviceName + '.tmp.html'
                }
            })
            .when('/where', {
                templateUrl: 'views/where.tmp.html'
            })
            .otherwise({
                redirectTo: '/'
            });
    }]).
    controller('WhatController', ['$scope', function($scope) {
        var whatUrlPrefix = '#/what/';
        $scope.whatProducts = [
            {
                url: whatUrlPrefix + 'erp/',
                placeholder: 'Enterprise Resource Planning (ERP)',
                img: ''
            },
            {
                url: whatUrlPrefix + 'fleet/',
                placeholder: 'Fleet Management System (Intelligent Transportation System)',
                img: ''
            },
            {
                url: whatUrlPrefix + 'ntk/',
                placeholder: 'Networking Equipment',
                img: ''
            },
            {
                url: whatUrlPrefix + 'cable/',
                placeholder: 'Cable Pathways',
                img: ''
            },
            {
                url: whatUrlPrefix + 'power/',
                placeholder: 'Electrical Power Distribution Systems',
                img: ''
            },
            {
                url: whatUrlPrefix + 'dc/',
                placeholder: 'Data Center Facility',
                img: ''
            },
            {
                url: whatUrlPrefix + 'security/',
                placeholder: 'Safety and Security Solutions',
                img: ''
            },
            {
                url: whatUrlPrefix + 'unicom/',
                placeholder: 'Unified Communication Solutions',
                img: ''
            }
        ];

        $scope.whatServices = [
            {
                url: whatUrlPrefix + 'web/',
                placeholder: 'Web Application and Website Development',
                img: ''
            },
            {
                url: whatUrlPrefix + 'host/',
                placeholder: 'Web Hosting',
                img: ''
            },
            {
                url: whatUrlPrefix + 'consult/',
                placeholder: 'Consultancy & Project Management',
                img: ''
            }
        ];
    }]).
    controller('ContactController', ['$scope', function($scope) {

    }]);