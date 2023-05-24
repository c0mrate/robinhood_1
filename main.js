feather.replace();

const input = document.querySelector('input')

input,addEventListener('input' , () => {

    const rxSpace = /\s+/g;
    const rxDashes = /-+/g;
    const rxDashSstart = /^-/;

    input.value = input.value
    .replace(rxSpace, ' ')
    .replace(rxDashes, '-')
    .replace(rxDashSstart, '');
});


function sendMessage() {
    const contents = document.getElementById('contents').value;
    const request = new XMLHttpRequest();
    request.open("POST", "send_message.php");
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    const params = "contents=" + encodeURIComponent(contents);
    request.send(params);
    console.log("Message Sent");
}


 $("#post_Button").click(function() {
     alert("Only the website owner can read your massage.");
 });
