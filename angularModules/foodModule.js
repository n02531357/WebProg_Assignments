var loadUserData;
var foodTable = angular.module('foodTableApp',["xeditable"])
	.run(function(editableOptions, editableThemes) {
		editableThemes.bs3.inputClass = 'input-sm';
  		editableOptions.theme = 'bs3';
	})
	.controller('foodTableController', function($scope, $http, $filter) {
		$scope.dailyGoal = 2400;
		$scope.curDate = new Date();
		$scope.setDate = function(){ 
			$scope.curDate = $( "#datepicker" ).datepicker( "getDate" );
			$scope.loadData($filter('date')($scope.curDate, "yyyy-MM-dd"), $scope.id);
		};			
			
		loadUserData = function(id){
    			$scope.loadData($filter('date')($scope.curDate, "yyyy-MM-dd"), id);
    			$scope.id= id;
  		};
		$scope.loadData = function(date, user){		
			$http({
    			method: 'POST',
    			url: 'model/database/getFood_DB.php',
    			data: 'date='+ date + '&uid=' + user,
    			headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    		})
			.success(function(data){
				$scope.foods=data;
				$scope.tCal = function(){ return sum(data, 'calperserv'); };
				$scope.tFat = function(){ return sum(data, 'fat'); };
				$scope.tCarb = function(){ return sum(data, 'carbs'); };
				$scope.tProt = function(){ return sum(data, 'protein'); };						
			});
		};  							
		//initialize table		
		
		$scope.addFood = function(){
			$http({
				   	method: 'POST',
				    url: 'model/database/addFood_DB.php',
				    data: $( "#addFood" ).serialize() + '&uid=' + $scope.id,
				    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			})
			.then(function(response){
				$scope.loadData($filter('date')($scope.curDate, "yyyy-MM-dd"), $scope.id);
			});
		};
		
		$scope.removeFood = function(row){
			$scope.curRow = row;
			$http({
				   	method: 'POST',
				    url: 'model/database/removeFood_DB.php',
				    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				    transformRequest: function(obj) {
				        var str = [];
				        for(var p in obj)
				        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
				        return str.join("&");
				    },					    
				    data: $scope.curRow					  
			})
			.then(function(response){
				$scope.loadData($filter('date')($scope.curDate, "yyyy-MM-dd"), $scope.id); //update table view
			});
		};
		
		$scope.updateFood = function(row){
			$scope.curRow = row;
			$http({
				   	method: 'POST',
				    url: 'model/database/updateFood_DB.php',
				    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				    transformRequest: function(obj) {
				        var str = [];
				        for(var p in obj)
				        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
				        return str.join("&");
				    },					    
				    data: $scope.curRow					  
			})
			.then(function(response){
				//$scope.loadData(); local view only need to be changed for equality
			});
		};						
});
$(function() {
	$('#dateInput').datepicker({
		dateFormat: "yy-mm-dd"
	});
    $('#datepicker').datepicker( {
        selectWeek: true,
        inline: true,
        startDate: '01/01/2013',
        firstDay: 1
    });
});
	
function sum(data, field){
	var total = 0;
	$.each(data, function(i, el){
		total += +el[field]*el['servings'];
	});
	return total;
};  
// This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
  	loadUserData(response.authResponse.userID);
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1522445554689981',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.1' // use version 2.1
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Welcome, ' + response.name + '!';
       
    });  
  }
