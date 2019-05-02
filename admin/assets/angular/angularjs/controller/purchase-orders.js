app.controller('purchaseOrderCtrl', function($http, $scope, toastr){

    $scope.page = 1;
    $scope.itemsPerPage = 10;
    $scope.pageChanged = function() {
        var startPos = ($scope.page - 1) * 3;
    };
  // ************** init *************************

  $scope.init = function() {
    $scope.showFile = true;
    $scope.showFilter=true;
    //$scope.showFilters=true;
    $scope.addUpdateUsers = true;
    $scope.showAddUpdate = false;
    $scope.showUploadFile=false;  
    $scope.filters=false;
    $scope.showAddButton=true;
    $scope.showImportButton=true;
}
$scope.showAdd = function() {    
  $scope.showAddUpdate = true;
  $scope.close=true;
  $scope.showProductList=true;
  $scope.addItem=false;
  $scope.showUploadFile = false;
  $scope.showFile = false;
  $scope.filters=false;
}
$scope.showAddItem = function() {
  $scope.addItem=true;
}
$scope.uploadFile = function() {
  $scope.showUploadFile = true;
  $scope.showFile = true;
  $scope.showAddUpdate = false;
}
$scope.showFilters = function() {
  $scope.filters=true;
  $scope.showFilter=true;
  $scope.showAddUpdate = false;
  $scope.showUploadFile=false;  
 


 }

});