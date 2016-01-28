memberApp.factory('Product', ['$resource',
    function ($resource) {
        return $resource('/api/product/:productId', {}, {});
    }]);

memberApp.factory('Order', ['$resource',
    function ($resource) {
        return $resource('/api/order/:orderId', {}, {});
    }]);

memberApp.service('Notify', function () {

    this.make = function(icon, message, delay, type) {
        $.notify({
            icon: icon,
            message: message
        }, {
            offset: {
                x: 10,
                y: 50
            },
            delay: delay,
            type: type,
            showProgressbar: true,
            animate: {
                enter: 'animated fadeInRight',
                exit: 'animated fadeOutRight'
            }
        });
    };

    this.info = function(message) {
        this.make('fa fa-check-circle', message, 4000, 'info');
    };

    this.infoShort = function(message) {
        this.make('fa fa-check-circle', message, 500, 'info');
    };

    this.error = function(message) {
        this.make('fa fa-times', message, 4000, 'danger');
    };

    this.errorLong = function(message) {
        this.make('fa fa-times', message, 10000, 'danger');
    };
});

memberApp.service('ngCartHelper', ['ngCart', function (ngCart) {
    this.getCartItemsData = function() {
        var items = [];

        angular.forEach(ngCart.getItems(), function (item, key) {
            items.push({
                productId: item.getId(),
                quantity: item.getQuantity()
            })
        });
        return items;
    };

    this.addProduct = function(product) {
        cardItem = ngCart.getItemById(product.id);
        if (cardItem) {
            cardItem.setQuantity(cardItem.getQuantity()+1);
        }
        else {
            price = product.sale_price ? product.sale_price : product.price;
            console.log(product);
            ngCart.addItem(product.id, product.name, price, 1);
        }
    };

    // Returns the total cost including discounts
    this.getTotalCost = function() {
        return ngCart.totalCost() >= 20 ? ngCart.totalCost() * 0.9 : ngCart.totalCost();
    };
}]);