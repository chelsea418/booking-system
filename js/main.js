$(() => {
    console.log("Welcome Developer!");
    setInterval(() => {
        if(localStorage.getItem('user@logged') !== null){
            $("#loginHeaderBtn").hide();
            $("#logoutHeaderBtn").show();     
        }
        else{
            $("#loginHeaderBtn").show();
            $("#logoutHeaderBtn").hide(); 
        }
    }, 500);

    $("#loginDiv").show();
    $("#signupDiv").hide();

    //prepare signup & login div
    $("#signupBtn").click(() => {
        $("#loginDiv").hide();
        $("#signupDiv").fadeIn();  

        $("#signup-name").val("");
        $("#signup-email").val("");
        $("#signup-pass").val("");   
        $("#signup-pass-conf").val("");
    });

    $("#loginBtn").click(() => {
        $("#loginDiv").fadeIn();
        $("#signupDiv").hide(); 
        
        $("#login-email").val("");
        $("#login-password").val("");
    });


    //Get all places
    $.ajax({
        type: "post",
        url: "../includes/place.php",
        data: {
            getPlaces: true,
        },
        dataType: "html",
        success: function (response) {
            $("#placeRes").prepend(response);
        }
    });

    //Get places with selected category
    $("#categorySelector").on('change', function(e){
        $("#placeRes").empty();
        if(this.value == "all"){
            $.ajax({
                type: "post",
                url: "../includes/place.php",
                data: {
                    getPlaces: true,
                },
                dataType: "html",
                success: function (response) {
                    $("#placeRes").prepend(response);
                }
            });
        }
        else{
            $.ajax({
                type: "post",
                url: "../includes/place.php",
                data: {
                    getPlaceCategory: true,
                    category: this.value
                },
                dataType: "html",
                success: function (response) {
                    $("#placeRes").prepend(response);
                }
            });
        }
    });
}); 


//Function for signing up
function signup(){
    let items = {
        name: $("#signup-name").val(),
        email: $("#signup-email").val(),
        pass: $("#signup-pass").val(),
    }

    
    if(
        $("#signup-name").val() != "" &&
        $("#signup-email").val() != "" &&
        $("#signup-pass").val() != "" &&
        $("#signup-pass-conf").val() != ""
    )
    {
        if($("#signup-pass-conf").val() != $("#signup-pass").val()) swal("Oops!", "Password did not match", "error").then(() => {$("#loginModal").modal();})
        else{
            $.ajax({
                type: "post",
                url: "../functions/class/handler.php",
                data: {
                    createUser: true,
                    ...items
                },
                dataType: "html",
                success: function (response) {
                    if(response.indexOf('email@foUnd') != -1){
                        swal("Oops!", "Email already in used", "error");

                        
                        $("#signup-name").val("");
                        $("#signup-email").val("");
                        $("#signup-pass").val("");
                        $("#signup-pass-conf").val("");
                    }
                    else{
                        console.log(response);
                        swal("Yehey!", "User successfuly created", "success");
                        localStorage.setItem('user@logged', $("#signup-email").val());

                        
                        $("#signup-name").val("");
                        $("#signup-email").val("");
                        $("#signup-pass").val("");
                        $("#signup-pass-conf").val("");
                    }    
                }
            });
        }
    }
    else swal("Oops!", "Check inputs correctly", "error").then(() => {
        $("#loginModal").modal();
    });
    
    
}

//Function for logging in
function login(){
    if($("#login-email").val() != "" && $("#login-password").val() != ""){
        $.ajax({
            type: "post",
            url: "../functions/class/handler.php",
            data: {
                loginUser: true,
                email: $("#login-email").val(),
                password: $("#login-password").val()
            },
            dataType: "html",
            success: function (response) {
                if(response.indexOf("Invalid") == 0){
                    swal("Opps!", `${response}`, "error").then(() => {
                        $("#loginModal").modal();
                    });
                }
                else{
                    localStorage.setItem('user@logged', $("#login-email").val());
                    swal("Yehey!", `${response}`, "success").then(() => {
                        $("#loginHeaderBtn").hide();

                        $("#login-email").val("");
                        $("#login-password").val("");
                    });
                }
            }
        });
    }
    else{
        swal("Opps!", `Check inputs correctly`, "error").then(() => {
            $("#loginModal").modal();
        });
    }


}

//Function that will logout the user
function logout(){
    var email = localStorage.getItem('user@logged');

    if(email !== null)  localStorage.removeItem('user@logged');
}

//Function for booking
function bookNow(id){

    
    if(localStorage.getItem('user@logged') !== null){
        var checkBox = document.getElementById(`check-${id}`);
        if (checkBox.checked == true){
            $.ajax({
                type: "post",
                url: "../functions/class/handler.php",
                data: {
                    submitBook: true,
                    person: $(`#person-${id}`).val(),
                    date: $(`#date-${id}`).val(),
                    email: 1,
                    placeID: id
                },
                dataType: "html",
                success: function (response) {
                    if(response.indexOf("Date") == 0){
                        
                        swal("Opps!", `${response}`, "error");
                    }
                    else{
                        localStorage.setItem('user@logged', $("#login-email").val());
                        swal("Yehey!", `${response}`, "success").then(() => {
                            $("#loginHeaderBtn").hide();
    
                            $("#login-email").val("");
                            $("#login-password").val("");
                        }).then(() => location.reload())
                    }
                }
            });
        }
        else {
            swal("Opps!", `You must agree on the terms of service `, "error");
        }
    }
    else{
        $("#loginModal").modal();
    }
}

//Function that will set all views for the booking
function prepareView(name, place, desc){
    console.log(name);
}