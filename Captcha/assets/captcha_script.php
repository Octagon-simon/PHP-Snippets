<script>
function createNotif(id = "test-notif", type = "is-info is-light", text = "test", icon = "fas fa-info-circle", close = true) {
    var notifyDiv = document.createElement("div");
    notifyDiv.setAttribute("id", id)
    notifyDiv.setAttribute("class", "notification"+" "+type);
    if (close == true){
        var notifyCloseBtn = document.createElement("button");
        notifyCloseBtn.setAttribute("class", "delete");
        notifyCloseBtn.setAttribute("type", "button");
        notifyCloseBtn.setAttribute("onclick", "closeNotif('"+id+"')")
        notifyDiv.appendChild(notifyCloseBtn);
        notifyDiv.innerHTML += "<p><i class='"+icon+"'></i>&nbsp; "+text+"</p>";
    }
    else {
        notifyDiv.innerHTML = "<p><i class='"+icon+"'></i>&nbsp; "+text+"</p>";
    }
    document.querySelector(".notification-wrapper").innerHTML ="";
    document.querySelector(".notification-wrapper").appendChild(notifyDiv);
}
document.addEventListener('DOMContentLoaded', (event) => {
    
var captchaImg = document.querySelector('#captcha_img');
var captchaImgHouse = document.querySelector('#captcha_img_house');

var captchaRefreshBtn = document.querySelector('#btn_captcha_refresh');

captchaRefreshBtn.addEventListener('click', function(){
    captchaImg.src = "core/captcha_image.php";
});

});
</script>