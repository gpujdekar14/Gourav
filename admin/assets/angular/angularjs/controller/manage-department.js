app.controller('manageDepartmentCtrl', function($http, $scope, toastr){

    $scope.page = 1;
    $scope.itemsPerPage = 10;
    $scope.pageChanged = function() {
        var startPos = ($scope.page - 1) * 3;
    };
  // ************** init *************************

  $scope.init = function() {
    $scope.addUpdateUsers = true;
    $scope.showAddUpdate = false;
    $scope.showAddClose=false;
  
  
  
}

$scope.showAdd = function() {    
  $scope.showAddUpdate = true;
  $scope.showAddClose=true;
}



});