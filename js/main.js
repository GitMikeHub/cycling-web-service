/* 
 * @author Michael Coleman
 * @date 2016/03/02
 * 
 */
"use strict";

angular.module("strrevApp",[]).controller("StrrevCtrl", ["$scope", "$http", function StrrevCtrl($scope, $http){
    $scope.submissions = [];
    $scope.curSubmission = "";
    $scope.sendInfo = function(){
        $http.get("api/v1/strrev/" + encodeURIComponent($scope.curSubmission)).then(function(result){
            $scope.submissions.push(result.data);
        });
    };
    $scope.clearInfo = function(){
        $scope.curSubmission = "";
        $scope.submissions = [];
    };
}]).directive("submissions", [function () {
        return {
            restrict: "E",
            template: "<table><thead><tr><th>Original String</th><th>Reversed String</th></tr></thead><tbody><tr data-ng-repeat='s in submissions'><td>{{s.original}}</td><td>{{s.reversed}}</td></tr></tbody></table>"
        };
    }]).directive("mytitle", [function () {
        return {
            restrict: "E",
            scope: {
                msg: "="
            },
            template: "<h2>{{msg}}</h2>"
        };
    }]);
