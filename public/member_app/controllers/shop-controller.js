
memberApp.controller('ShopController', ['$rootScope', '$scope', '$routeParams', 'ngCart', 'Product', function($rootScope, $scope, $routeParams, ngCart, Product) {
    $scope.products = Product.query();

    $scope.categoryFilter = $routeParams.filter; // empty string means no filtering

    $scope.getSaleInPercentage = function(product) {
        return 100-100/product.price*product.sale_price;
    };

    $scope.setCategoryFilter = function(filter) {
        $scope.categoryFilter = filter;
    };

    $scope.ngCart = ngCart;

    $scope.addProductToBasket = function(product) {
        cardItem = ngCart.getItemById(product.id);
        if (cardItem) {
            cardItem.setQuantity(cardItem.getQuantity()+1);
        }
        else {
            price = product.sale_price ? product.sale_price : product.price;
            ngCart.addItem(product.id, product.name, price, 1);
        }
        $.notify({
            icon: 'fa fa-check-circle',
            message: 'Produkt hinzugefügt. <a href="/member#/cart">Warenkorb</a>'
        }, {
            offset: {
                x: 10,
                y: 50
            },
            delay: 500
        });
    }

    $scope.notify = function() {

    }
}]);