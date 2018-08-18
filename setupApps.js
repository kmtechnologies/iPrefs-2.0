 var config = {
    apiKey: "AIzaSyDwlDt3qxz6V_S54bulb6gDQpp7sSXVan4",
    authDomain: "iprefs-61aff.firebaseapp.com",
    databaseURL: "https://iprefs-61aff.firebaseio.com",
    projectId: "iprefs-61aff",
    storageBucket: "iprefs-61aff.appspot.com",
    messagingSenderId: "761802127658"
  };
  firebase.initializeApp(config);
  var database = firebase.database();
function setupApps(){
	database.ref('electra').set({
		name: "Electra",
		url: "itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXf2rmTmqmmZZdmY8PqnL2ghw,,%2Ftitle%2FElectra%252011.3.1%2520MultiPath%2528proper%2529",
		dev: "Coolstar",
		description: "Jailbreak iOS 11.3.1 and 11.4 b1-b3"
	});
	database.ref('moviebox').set({
		name: "Moviebox",
		url: "itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXn3cqZi5m0rJScorc,%2Ftitle%2FMovieBox",
		dev: "Unknown Developer",
		description: "Watch all your favorite movies free! No jailbreak!"
	});
	database.ref('kik').set({
		name: "Kik++",
		url: "itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8uXYcHj2cScm6q1oNumYL_qzw,,%2Ftitle%2FKik%252B%252B",
		dev: "Kik Interactive",
		description: "Kik Messenger, commonly called Kik, is a freeware instant messaging mobile app from the Canadian company Kik Interactive, available free of charge on iOS and Android operating systems."
	});
	console.log("app setup");
}