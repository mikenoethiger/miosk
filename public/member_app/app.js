'use strict';

/* App Module */

var memberApp = angular.module('memberApp', [
    'ngRoute'
]);

memberApp.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        $routeProvider.
            when('/shop', {
                templateUrl: '/member_app/views/shop.html',
                controller: 'ShopController'
            }).
            when('/basket', {
                templateUrl: '/member_app/views/basket.html',
                controller: 'BasketController'
            }).
            when('/checkout', {
                templateUrl: '/member_app/views/checkout.html',
                controller: 'CheckoutController'
            }).
            when('/feedback', {
                templateUrl: '/member_app/views/feedback.html',
                controller: 'FeedbackController'
            }).
            when('/settings', {
                templateUrl: '/member_app/views/settings.html',
                controller: 'SettingsController'
            }).
            otherwise({
                redirectTo: '/shop'
            });
    }]);



