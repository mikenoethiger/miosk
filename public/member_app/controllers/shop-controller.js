
memberApp.controller('ShopController', ['$rootScope', '$scope', '$routeParams', 'ngCart', 'ngCartHelper', 'Product', 'Notify', function($rootScope, $scope, $routeParams, ngCart, ngCartHelper, Product, Notify) {
    $scope.products = Product.query();
    $scope.ngCart = ngCart;
    $scope.categoryFilter = $routeParams.filter; // empty string means no filtering

    $scope.getSaleInPercentage = function(product) {
        return 100-100/product.price*product.sale_price;
    };

    $scope.addProductToBasket = function(product) {
        if (product.quantity > 0) {
            ngCartHelper.addProduct(product);
            Notify.infoShort('Produkt hinzugefügt. <a href="/member#/cart">Warenkorb</a>');
        }
    };
}]);