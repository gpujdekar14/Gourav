app.controller('manageTeamCtrl', function($http, $scope, toastr){

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
$scope.showSubmit = function() {     

    if (!$scope.selectedRole) {               
        $('#selectedRoleDiv').addClass('has-error');
        toastr.error('Please select role.');
        $('#selectedRole').focus();
    }else{
        $('#selectedRoleDiv').removeClass('has-error');
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
                if (!$scope.inputDept) {               
                    $('#userDeptDiv').addClass('has-error');
                    toastr.error('Mobile is required.');
                    $('#inputDept').focus();
                }else{
                    $('#userDeptDiv').removeClass('has-error');
                   
            }
               
        }
    }
}
}    
}
}
});