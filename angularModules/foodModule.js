var foodTable = angular.module('foodTableApp',[])
	.controller('foodTableController', function($scope, $http) {		
			$scope.loadData = function(){
				$http.get('model/database/getFood_DB.php').success(function(data){
					$scope.foods=data;
					$scope.tCal = function(){ return sum(data, 'calperserv'); };
					$scope.tFat = function(){ return sum(data, 'fat'); };
					$scope.tCarb = function(){ return sum(data, 'carbs'); };
					$scope.tProt = function(){ return sum(data, 'protein'); };		
				});
			};
			//initialize table		
			$scope.loadData();
			
			$scope.addFood = function(){
				$http({
					   	method: 'POST',
					    url: 'model/database/addFood_DB.php',
					    data: $( "#addFood" ).serialize(),
					    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
				})
				.then(function(response){
					$scope.loadData();
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
					$scope.loadData(); //update table view
				});
			};			
	});

function sum(data, field){
	var total = 0;
	$.each(data, function(i, el){
		total += +el[field]*el['servings'];
	});
	return total;
};