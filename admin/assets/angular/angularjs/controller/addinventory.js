    app.controller('assignedServicesCtrl', function($http, $scope, toastr){

        $scope.page = 1;
        $scope.itemsPerPage = 10;
        $scope.pageChanged = function() {
            var startPos = ($scope.page - 1) * 3;
        };
      // ************** init *************************
    
      $scope.init = function() {
        $scope.addUpdateService = true;
        $scope.showAddUpdate = false;
        $scope.showAddClose=false;
        $scope.loader = false;
        $scope.chkTax = false;
        $scope.mailToMe = false;
        $scope.mailToClient = false;
        $scope.servicePresent = '';
        $scope.serviceCheck = false;
        $scope.client_id = '';
        $scope.selectedClient = '';
        $scope.inputOrderDate = '';
        $scope.inputNote = '';
        $scope.inputDetails = '';
        $scope.inputTotalCost = (0).toFixed(2);
        $scope.servicesAssignedArray = [];
        $scope.serviceObjectId = '';
        $scope.editBit = 0;
        $scope.renewalBit = 0;
      
    }
 
    $scope.showAdd = function() {
      $scope.showAddUpdate = true;
  }
});