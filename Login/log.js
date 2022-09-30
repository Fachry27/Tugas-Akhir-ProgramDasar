var objpeople = [
    {
        username: "user1",
        password: "password1"
    },
    {
        username: "user2",
        password: "password2"
    },
    {
        username: "user3",
        password: "password3"
    }
]

function getinfo(){
    var username = document.getElementById("username").value
    var password = document.getElementById("password").value

    for(i =0; i < objpeople.length; i++){
        if(username == objpeople[i].username && password == objpeople[i].
            password) {
                console.log(username + "Logged in!!!")
            }
    }
}