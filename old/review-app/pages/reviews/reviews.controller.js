'use strict';

angular.module('ReviewApp')
    .controller('ReviewsController', ReviewsController);

function ReviewsController($scope, ReviewService) {
    $scope.approvedReviewList = {};

    ReviewService.getApprovedReviews().then(function(data) {
        $scope.approvedReviewList = data;
    })
}
