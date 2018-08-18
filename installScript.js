$("#result").load( "installer.php" );
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(200);
    });
function setup(){
        document.getElementById('doneBtn').style.display = 'none';
        document.getElementById('countDiv').style.visibility = 'hidden';
        var config = {
        apiKey: "AIzaSyDwlDt3qxz6V_S54bulb6gDQpp7sSXVan4",
        authDomain: "iprefs-61aff.firebaseapp.com",
        databaseURL: "https://iprefs-61aff.firebaseio.com",
        projectId: "iprefs-61aff",
        storageBucket: "iprefs-61aff.appspot.com",
        messagingSenderId: "761802127658"
         };
        firebase.initializeApp(config);
        var storage = firebase.storage();
        var storageRef = storage.ref();

        var database = firebase.database();
}
function installApp(){
                var refUrl = packageVar['value1']
                var seconds_left = 21;
                var interval = setInterval(function() {
                document.getElementById('countDiv').style.visibility = 'hidden';
                document.getElementById('countDiv').innerHTML = --seconds_left;
                if (seconds_left == 20)
                    {
                    document.getElementById('line1').innerHTML = 'Retriving ' + refUrl + ' Data...\n';
                    }
                if (seconds_left == 17)
                    {
                    document.getElementById('line2').innerHTML = 'Downloading Firebase Data...\n';
                    var nameRef = firebase.database().ref(refUrl + '/name/');
                    nameRef.on('value', getName);
                    function getName(data){
                    var name = data.val();
                    console.log(name);
                    }
                    var devRef = firebase.database().ref(refUrl + '/dev/');
                    devRef.on('value', getDev);
                    function getDev(data){
                    var dev = data.val();
                    console.log(dev);
                    }
                    var descriptionRef = firebase.database().ref(refUrl + '/description/');
                    descriptionRef.on('value', getDescription);
                    function getDescription(data){
                    var description = data.val();
                    console.log(description);
                    }
                    var urlRef = firebase.database().ref(refUrl + '/url/');
                    urlRef.on('value', getUrl);
                    function getUrl(data){
                    var urlTest = data.val();
                    console.log(urlTest);
                    }
                }
                    if (seconds_left == 13)
                    {
                    document.getElementById('line3').innerHTML = 'Compiling ' + refUrl + ' Files...\n';
                    }
                    if (seconds_left == 7)
                    {
                    document.getElementById('line4').innerHTML = 'Verifying Compiled Files...\n';
                    }
                    if (seconds_left == 3)
                    {
                    document.getElementById('line6').innerHTML = 'Cleaning Up...\n';
                    }
                    if (seconds_left == 4)
                    {
                    document.getElementById('line5').innerHTML = 'Receiving Custom Manifest...\n';
                    }
                    if (seconds_left <= 0)
                    {
                    document.getElementById('line7').innerHTML = refUrl + ' Compliation Complete!';
                    document.getElementById('doneBtn').style.display = 'inline';
                    document.getElementById('cnclBtn').style.display = 'none';
                    document.getElementById('headerTxt').outerHtml = 'Complete';
                    var ref = firebase.database().ref(refUrl + '/url/');
                    ref.on('value', installUrl);
                    function installUrl(data){
                    var source = data.val();
                    var result = URI.withinString(source, function(url){
                    console.log(url);
                    location.href = url;
                    });
        
    }
                    clearInterval(interval);
                    }
                }, 1000);
}