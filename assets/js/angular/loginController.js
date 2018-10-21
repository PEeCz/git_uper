
	app.controller('loginController', ['$scope','$location','indexService', function($scope, $location, indexService)
	{
		$scope.loginFacebook = function()
		{
			FB.login(function(response)
			{
				if(response.authResponse)
				{
					FB.api('/me?fields=id,name', function(response)
						{
							indexService.loginServices(response).success(function(data){
								var getData = angular.extend(data);
								if(getData.status === 'success'){

									window.location.assign(baseurl + getData.location);

									$("#myModal").modal('hide');
								}else{
									console.log('Login Failed');
								}
							});
						});
				}else{
					$("#msg_error").show();
					$("#login").hide();
					setTimeout(function(){
						$("#myModal").modal('hide');
					});
				}
			});
		}
	}]);