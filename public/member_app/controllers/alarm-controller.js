memberApp.controller('AlarmController', ['$scope', '$http', function ($scope, $http) {
    $scope.alarmTriggered = false;
    $scope.sending = false;

    $scope.triggerAlarm = function() {
        $scope.sending = true;
        $http({
            method: 'POST',
            url: '/api/alarm'
        }).then(function successCallback(response) {
            $scope.sending = false;
            $scope.alarmTriggered = true;
        }, function errorCallback(response) {
        });
    };
    $scope.close = function() {
        $scope.alarmTriggered = false;
    };
}]);