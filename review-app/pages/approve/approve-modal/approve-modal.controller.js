'use strict';

angular.module('ReviewApp')
    .controller('ApproveModalController', ApproveModalController);

function ApproveModalController($scope, $state, $uibModalInstance) {
    $scope.closeModal = function() {
        $uibModalInstance.close();
    }
}
