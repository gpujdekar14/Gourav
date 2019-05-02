app.controller('manageDepartmentCtrl', function($http, $scope, toastr){

    $scope.page = 1;
    $scope.itemsPerPage = 10;
    $scope.pageChanged = function() {
        var startPos = ($scope.page - 1) * 3;
    };
  // ************** init *************************
  $scope.init = function() {
    $scope.addUpdateDepartment = true;
    $scope.showFile = true;
    $scope.showAddUpdate = false;
    $scope.showUploadFile = false;
    $scope.showAddClose=false;
    //$scope.showAddButton=false;
    //$scopte.showImportButton=false;
  }
$scope.showAdd = function() {    
  $scope.showAddUpdate = true;
  $scope.addUpdateDepartment = true;
  $scope.showAddClose=true;
  $scope.showUploadFile = false;
  $scope.showFile = true;
}
$scope.importFile = function() {
 $scope.showUploadFile = true;
 $scope.showFile = true;
 $scope.showAddUpdate = false;
 $scope.addUpdateDepartment = false;

}
$scope.showSubmit=function()
{
  if (!$scope.inputCategoryname) {
    $('#departmentDiv').addClass('has-error');
    toastr.error('Company Name is required.');
    $('#inputCategoryname').focus();
}else{
 $('#departmentDiv').removeClass('has-error');

 if (!$scope.inputUnit) {               
    $('#UnitDiv').addClass('has-error');
    toastr.error('Email is required.');
    $('#inputUnit').focus();
}else{
    $('#UnitDiv').removeClass('has-error');
   


}    
}
}
});