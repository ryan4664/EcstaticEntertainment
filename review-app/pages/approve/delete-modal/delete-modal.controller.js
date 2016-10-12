'use strict';

angular.module('ReviewApp')
    .controller('DeleteModalController', DeleteModalController);

function DeleteModalController($scope, $state, $uibModalInstance) {
    $scope.closeModal = function() {
        $uibModalInstance.close();
    }
}
