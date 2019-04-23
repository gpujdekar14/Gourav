app.controller('manageUsersCtrl', function($http, $scope, toastr){

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
  $scope.showAddClose=true;
}
$scope.add = function() {     
    if (!$scope.inputUsername) {
        $('#userNameDiv').addClass('has-error');
        toastr.error('Username is required.');
        $('#inputUsername').focus();
    }else{
     $('#userNameDiv').removeClass('has-error');

     if (!$scope.inputPassword) {               
        $('#userPasswordDiv').addClass('has-error');
        toastr.error('Password is required.');
        $('#inputPassword').focus();
    }else{
        $('#userPasswordDiv').removeClass('has-error');
        if (!$scope.inputEmail) {               
            $('#userEmailDiv').addClass('has-error');
            toastr.error('Email is required.');
            $('#inputEmail').focus();
        }else{
            $('#userEmailDiv').removeClass('has-error');
            if (!$scope.inputMobile) {               
                $('#userMobileDiv').addClass('has-error');
                toastr.error('Mobile is required.');
                $('#inputMobile').focus();
            }else{
                $('#userMobileDiv').removeClass('has-error');
    }
}
}    
}
}
});