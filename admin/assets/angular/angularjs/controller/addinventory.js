    app.controller('addInventoryCtrl', function($http, $scope, toastr){

        $scope.page = 1;
        $scope.itemsPerPage = 10;
        $scope.pageChanged = function() {
            var startPos = ($scope.page - 1) * 3;
        };
      // ************** init ************************
$scope.init = function() {
        $scope.showFile = true;
        $scope.addUpdateService = true;
        $scope.showAddUpdate = false;
        $scope.showUploadFile=false;
        $scope.showAddClose=false;
                   
    }
 
$scope.showAdd = function() {

        $scope.showAddUpdate = true;
        $scope.close = true;
  }
$scope.showSubmit=function()
  {
    
  }
$scope.uploadFile = function() {

        $scope.showUploadFile = true;
        $scope.showFile = true;
}
});