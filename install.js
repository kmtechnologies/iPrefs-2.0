	function electraInstall(){

	var ref = firebase.database().ref('electra');
	ref.on('value', electraUrl);

	function electraUrl(data){
		var source = data.val();
		var result = URI.withinString(source, function(url){
			location.href = url;
		});
		
	}
}