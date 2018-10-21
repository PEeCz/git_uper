'use strict';

app.service('indexService' , function($http){

	this.loginServices = function(data){
		var formData = data;
		var promise = $http({
			method: 'POST',
			url: baseurl + 'api-facebook-login',
			data: formData
		});
		return promise;
	}
});