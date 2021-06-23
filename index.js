var config = {
    apiKey: "AIzaSyD1jMnG8BgHSqWTBORGw6209LWktsofIOI",
    authDomain: "loginsocialmedia-8f9b9.firebaseapp.com",
    projectId: "loginsocialmedia-8f9b9",
    storageBucket: "loginsocialmedia-8f9b9.appspot.com",
    messagingSenderId: "1074154782284",
    appId: "1:1074154782284:web:9ce5c2529cae2c73ac7ee9",
    measurementId: "G-8T3Y0NQ6N4"
};
firebase.initializeApp(config);
firebase.analytics();

var auth = firebase.auth();
document.getElementById('btnloging').addEventListener('click', function () {
    var provider = new firebase.auth.GoogleAuthProvider();
    auth.signInWithPopup(provider)
    .then(function (result) {
        var user = result.user;

        console.log(result.user.providerData[0].displayName);
        console.log(result.user.providerData[0].email);
        console.log(result.user.providerData[0].photoURL);

        $.post("controller/usuario.php?op=accesosocial",{usu_correo:result.user.providerData[0].email},function(data){
            if(data==0){
                $('#lblerror').hide();
                $('#lblmensaje').hide();
                $('#lblregistro').show();
            }else{
                window.open('http://localhost:90/PERSONAL_LoginRegisterSocialMedia/view/home/','_self');
            }
        });
    }).catch(function (error) {
        console.log(error);
    });
});

document.getElementById('btnloginf').addEventListener('click', function () {
    var provider = new firebase.auth.FacebookAuthProvider();
    auth.signInWithPopup(provider)
    .then(function (result) {
        var user = result.user;
        console.log(user);
        console.log(result.user.providerData[0].displayName);
        console.log(result.user.providerData[0].email);
        console.log(result.user.providerData[0].photoURL);
        $.post("controller/usuario.php?op=accesosocial",{usu_correo:result.user.providerData[0].email},function(data){
            if(data==0){
                $('#lblerror').hide();
                $('#lblmensaje').hide();
                $('#lblregistro').show();
            }else{
                window.open('http://localhost:90/PERSONAL_LoginRegisterSocialMedia/view/home/','_self');
            }
        });
    }).catch(function (error) {
        console.log(error);
    });
});

document.getElementById('btnloginh').addEventListener('click', function () {
    var provider = new firebase.auth.GithubAuthProvider();
    auth.signInWithPopup(provider)
    .then(function (result) {
        var user = result.user;
        console.log(user);
        console.log(result.user.providerData[0].displayName);
        console.log(result.user.providerData[0].email);
        console.log(result.user.providerData[0].photoURL);
        $.post("controller/usuario.php?op=accesosocial",{usu_correo:result.user.providerData[0].email},function(data){
            if(data==0){
                $('#lblerror').hide();
                $('#lblmensaje').hide();
                $('#lblregistro').show();
            }else{
                window.open('http://localhost:90/PERSONAL_LoginRegisterSocialMedia/view/home/','_self');
            }
        });
    }).catch(function (error) {
        console.log(error);
    });
});

function init(){

}

$(document).ready(function() {
    $('#lblmensaje').hide();
    $('#lblerror').hide();
    $('#lblregistro').hide();
});

$(document).on("click", "#btnlogin", function () {
    var usu_correo =  $('#txtcorreo').val();
    var usu_pass =  $('#txtpass').val();

    if (usu_correo=='' || usu_pass==''){
        $('#lblmensaje').show();
        $('#lblerror').hide();
        $('#lblregistro').hide();
    }else{
        $.post("controller/usuario.php?op=acceso",{usu_correo:usu_correo,usu_pass:usu_pass},function(data){
            if(data==0){
                $('#lblerror').show();
                $('#lblmensaje').hide();
            }else{
                window.open('http://localhost:90/PERSONAL_LoginRegisterSocialMedia/view/home/','_self');
            }
        });
    }
});

