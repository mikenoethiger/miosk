memberApp.controller('CheckoutController', ['$scope', 'Order', 'ngCart', 'ngCartHelper', 'Notify', function ($scope, Order, ngCart, ngCartHelper, Notify) {
    $scope.ngCart = ngCart;
    $scope.ngCartHelper = ngCartHelper;

    $scope.destination = "";
    $scope.checkoutSuccess = false;
    $scope.errors = [];
    $scope.processingCheckout = false;
    $scope.salePrice = ngCart.totalCost() == ngCartHelper.getTotalCost() ? false : ngCartHelper.getTotalCost();

    $scope.checkout = function () {
        if (ngCartHelper.getTotalCost() >= 10) {
            var order = new Order();
            order.destination = $scope.destination;

            order.items = ngCartHelper.getCartItemsData();

            $scope.processingCheckout = true;
            order.$save(
                // success
                function (value, responseHeaders) {
                    ngCart.empty(true);
                    location = "/member#/checkout-success";
                },
                // error (validation error for example)
                function (httpResponse) {
                    $scope.processingCheckout = false;
                    angular.forEach(httpResponse.data, function (error, key) {
                        Notify.errorLong(error);
                    });
                })
        } else {
            Notify.errorLong('Mindestbestellbetrag ist CHF 10.-');
        }
    };
}]);