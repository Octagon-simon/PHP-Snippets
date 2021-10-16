<style>
    *{
            margin: 0px;
            box-sizing:border-box;
            padding:0px;
    }
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    body{
    font-family: 'Roboto', sans-serif;
    }
    button#btn_captcha_submit{
    color: #fff;
    border-radius: 5px;
    padding: 10px;
    height: auto;
    border: 2px solid #e91e63;
    background-color: #e91e63;
    box-shadow: 0px 0px 8px #e91e63;
    display:block;
    cursor:pointer;
} 
    button#btn_captcha_refresh{
    color: #e91e63;
    padding: 10px;
    height: auto;
    border: 2px solid #e91e63;
    background-color: transparent;
    box-shadow: 0px 0px 8px #e91e63;
    border-radius: 5px;
    font-weight: 600;
    cursor:pointer;
    box-sizing:border-box;
    width: 20%;
}
    div#captcha_img_house{
        text-align:center;
        padding: 10px;
    }
    div#captcha_form_group{
    margin-bottom: 10px;
    padding: 5px;
    }
    div#captcha_house{
    padding: 10px;
    max-width: 500px;
    box-shadow: 0px 0px 8px #c9c9c9;
    position: absolute;
    left: 50%;
    top: 0%;
    transform: translate(-50%, 50%);
    }
    div#captcha_input_form_group{
    display:flex;
    }
    label#captcha_form_label{
    display: block;
    font-family: cursive;
    font-size: 15px;
    }
    input#captcha_key{
    background-color: #f2f2f2;
    height: 2.5rem;
    border: 2px solid #dbdbdb;
    border-radius: 10px;
    box-sizing:border-box;
    caret-color: #e91e63;
    font-size: 15px;
    padding:5px;
    width: 80%;
    margin-right: 10px;
    }
    input#captcha_key:focus{
    border: 2px solid #e91e63 !important;    
    }
    .notification {
    background-color: whitesmoke;
    border-radius: 4px;
    position: relative;
    padding: 1.25rem 2.5rem 1.25rem 1.5rem;
}
    .notification.is-danger {
    background-color: #f14668;
    color: #fff;
}
    .notification.is-success {
    background-color: #48c774;
    color: #fff;
}
    </style>