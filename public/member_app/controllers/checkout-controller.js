memberApp.controller('CheckoutController', ['$scope', 'Order', 'ngCart', 'ngCartHelper', 'Notify', function ($scope, Order, ngCart, ngCartHelper, Notify) {
    $scope.ngCart = ngCart;

    $scope.delivery = "";
    $scope.checkoutSuccess = false;
    $scope.errors = [];
    $scope.processingCheckout = false;

    $scope.checkout = function () {
        var order = new Order();
        order.delivery = $scope.delivery;

        order.items = ngCartHelper.getCartItemsData();

        $scope.processingCheckout = true;
        order.$save(
            function (value, responseHeaders) {
                ngCart.empty(true);
                location = "/member#/checkout-success";
            },
            function (httpResponse) {
                $scope.processingCheckout = false;
                angular.forEach(httpResponse.data, function (error, key) {
                    Notify.errorLong(error);
                });
            });
    };
}]);