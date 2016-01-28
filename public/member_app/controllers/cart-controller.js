
memberApp.controller('CartController', ['$scope', 'ngCart', function($scope, ngCart) {
    $scope.ngCart = ngCart;

    $scope.quantities = [];
    angular.forEach(ngCart.getItems(), function(cartItem, key) {
        $scope.quantities[cartItem.getId()] = cartItem.getQuantity();
    });

    $scope.refreshCart = function() {
        console.log($scope.quantities);

        angular.forEach($scope.quantities, function(quantity, key) {
            console.log(ngCart.getItems());
            item = ngCart.getItemById(key);
            console.log(key);
            console.log(item);
            item.setQuantity(quantity);
        });
    };

    $scope.removeCartItem = function(cartItem) {
        for (var i = 0; i < ngCart.getItems().length; i++) {
            if (ngCart.getItems()[i].getId() == cartItem.getId()) {
                ngCart.removeItem(i);
            }
        }
    };
}]);