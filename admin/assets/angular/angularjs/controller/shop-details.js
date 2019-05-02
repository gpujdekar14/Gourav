app.controller('shopDetailsCtrl', function($http, $scope, toastr){

    $scope.page = 1;
    $scope.itemsPerPage = 10;
    $scope.pageChanged = function() {
        var startPos = ($scope.page - 1) * 3;
    };
  // ************** init *************************

  $scope.init = function() {
    $scope.addUpdateShop = true;
    $scope.showAddUpdate = false;
    $scope.showAddClose=false;
    $scope.loader = false;
   
}
$scope.showAdd = function() {    
  $scope.showAddUpdate = true;
  $scope.addUpdateShop = true;
  $scope.showAddClose=true;
}     
$scope.showSubmit=function()
{
  if (!$scope.inputCompanyName) {
    $('#companyNameDiv').addClass('has-error');
    toastr.error('Company Name is required.');
    $('#inputCompanyName').focus();
}else{
 $('#companyNameDiv').removeClass('has-error');

 if (!$scope.inputEmail) {               
    $('#companyEmailDiv').addClass('has-error');
    toastr.error('Email is required.');
    $('#inputEmail').focus();
}else{
    $('#companyEmailDiv').removeClass('has-error');
    if (!$scope.inputPhone) {               
        $('#companyPhoneDiv').addClass('has-error');
        toastr.error('Phone is required.');
        $('#inputPhone').focus();
    }else{
        $('#companyPhoneDiv').removeClass('has-error');
        if (!$scope.inputGSTINNo) {               
            $('#companyGSTINDiv').addClass('has-error');
            toastr.error('GSTIN No is required.');
            $('#inputGSTINNo').focus();
        }else{
            $('#selectCountryDiv').removeClass('has-error');
            if (!$scope.selectedCountry) {               
              $('#selectCountryDiv').addClass('has-error');
              toastr.error('Please select country.');
              $('#selectedCountry').focus();
          }else{
              $('#selectCountryDiv').removeClass('has-error');
              if (!$scope.selectedState) {               
                $('#selectStateDiv').addClass('has-error');
                toastr.error('Please select State.');
                $('#selectedState').focus();
            }else{
                $('#selectStateDiv').removeClass('has-error');
                
                  if (!$scope.inputStreet) {               
                    $('#streetDiv').addClass('has-error');
                    toastr.error('Please Choose Logo.');
                    $('#inputStreet').focus();
                }else{
                    $('#streetDiv').removeClass('has-error');
        }
      
    }
  }
}
}
}    
}
}



});