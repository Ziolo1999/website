function sendEmail(){
    Email.send({
        Host : "smtp.dpoczta.pl:25",
        Username : "www@tne.com.pl",
        Password : "Tadzio12#",
        To : "karol.ziolo10@gmail.com",
        From : document.getElementById("email").value,
        Subject : document.getElementById("name").value,
        Body : "And this is the body"
    }).then(
    message => alert(message)
    );
}