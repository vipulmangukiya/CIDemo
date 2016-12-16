var app = angular.module('mainApp',['ngRoute']);
	
	app.config(function($routeProvider){
		$routeProvider
		.when('/dashboard',{
			templateUrl: 'try.php',
			controller:'mainCtrl'
		})
		.when('/rideoffer',{
			templateUrl: 'dashboard/rideoffer.php',
			controller:'mainCtrl'
		})
		.when('/messages',{
			templateUrl: 'dashboard/meassage.php',
			controller:'mainCtrl'
		})
		.when('/alert',{
			templateUrl: 'dashboard/alert.php',
			controller:'mainCtrl'
		})
		.when('/rating',{
			templateUrl: 'dashboard/rating.php',
			controller:'mainCtrl'
		})
		.when('/profile',{
			templateUrl: 'profile/profile.php',
			controller:'mainCtrl'
		})
		.when('/profile/personal',{
			templateUrl: 'profile/personal_info.php',
			controller:'mainCtrl'
		})
         .when('/profile/car',{
			templateUrl: 'profile/car.php',
			controller:'mainCtrl'
		})
         .when('/profile/avtar',{
			templateUrl: 'profile/avtar.php',
			controller:'mainCtrl'
		})
         .when('/profile/car/edit',{
			templateUrl: 'profile/car_edit.php',
			controller:'mainCtrl'
		})
         .when('/profile/car/add',{
			templateUrl: 'profile/add_car.php',
			controller:'mainCtrl'
		})
         .when('/profile/postal',{
			templateUrl: 'profile/postal_add.php',
			controller:'mainCtrl'
		})
         .when('/profile/perferences',{
			templateUrl: 'profile/perferences.php',
			controller:'mainCtrl'
		})
         .when('/profile/verification',{
			templateUrl: 'profile/verification.php',
			controller:'mainCtrl'
		})

	});

app.controller('mainCtrl',['$scope','$log',function($scope,$log){

}]);
