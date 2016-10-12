'use strict';

angular.module('ReviewApp')
    .controller('ApproveController', ApproveController);

function ApproveController($scope, $state, $uibModal) {

    $scope.approve = function() {
        $uibModal.open({
            templateUrl: './approve-modal/approve-modal.html',
            controller: 'ApproveModalController',
            backdrop: true
                // resolve: {
                //     fileInfo: fileInfo,
                //     actionSuccessCallback: function() {
                //         return function() {
                //             FileListAPI.refreshFiles($scope.itemId, $scope.recordType);
                //             GrowlService.success('File Deleted');
                //         }
                //     }
                // }
        });
    }

    $scope.delete = function() {
        $uibModal.open({
            templateUrl: './delete-modal/delete-modal.html',
            controller: 'DeleteModalController',
            backdrop: true
                // resolve: {
                //     fileInfo: fileInfo,
                //     actionSuccessCallback: function() {
                //         return function() {
                //             FileListAPI.refreshFiles($scope.itemId, $scope.recordType);
                //             GrowlService.success('File Deleted');
                //         }
                //     }
                // }
        });
    }
}
