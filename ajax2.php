<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax 2</title>
</head>
<body>
    <button id="button1">Get User</button>
    <button id="button2">Get Users</button>
    <br><br>
    <h1>User</h1>
    <div id="user"></div>
    <h1>Users</h1>
    <div id="users"></div>

    <script>
        document. getElementById('button1').addEventListener('click', loadUser);
        document. getElementById('button2').addEventListener('click', loadUsers);

        function loadUser(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'user.json', true);

            xhr.onload = function(){
                if(this.status == 200){
                    var user = JSON.parse(this.responseText);
                    console.log(user);
                    var output = '';
                    output += '<ul>' +
                    '<li>Name: ' +user[0].name+'</li>'+
                    '<li>Salary: ' +user[0].salary+'</li>'+
                    '<li>Married: ' +user[0].married+'</li>'+
                    '</ul>';
                    document.getElementById('user').innerHTML = output;

                }
       
            }
            xhr.send();
        }
        function loadUsers(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'users.json', true);

            xhr.onload = function(){
                if(this.status == 200){
                    var users = JSON.parse(this.responseText);
                    console.log(users);
                    
                    var output = '';
                    
                    for (var i in users){
                    output += '<ul>' +
                    '<li>Name: ' +users[i].name+'</li>'+
                    '<li>Salary: ' +users[i].salary+'</li>'+
                    '<li>Married: ' +users[i].married+'</li>'+
                    '</ul>';
                    }
                    document.getElementById('users').innerHTML = output;

                }
       
            }
            xhr.send();
        }
    </script>
</body>
</html>