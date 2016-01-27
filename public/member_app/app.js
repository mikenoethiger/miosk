'use strict';

/* App Module */

var memberApp = angular.module('memberApp', [
    'ngRoute',
    'ngResource',
    'ngCart'
]);

memberApp.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        $routeProvider.
            when('/shop', {
                templateUrl: '/member_app/partials/shop.html',
                controller: 'ShopController'
            }).
            when('/shop/:filter', {
                templateUrl: '/member_app/partials/shop.html',
                controller: 'ShopController'
            }).
            when('/cart', {
                templateUrl: '/member_app/partials/cart.html',
                controller: 'CartController'
            }).
            when('/checkout', {
                templateUrl: '/member_app/partials/checkout.html',
                controller: 'CheckoutController'
            }).
            when('/checkout-success', {
                templateUrl: '/member_app/partials/checkout-success.html'
            }).
            when('/feedback', {
                templateUrl: '/member_app/partials/feedback.html',
                controller: 'FeedbackController'
            }).
            when('/settings', {
                templateUrl: '/member_app/partials/settings.html',
                controller: 'SettingsController'
            }).
            otherwise({
                redirectTo: '/shop'
            });
    }]);



