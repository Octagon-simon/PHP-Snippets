<style>
        * {
            margin: 0px;
            box-sizing:border-box;
            padding:0px;
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
    border-radius: 50%;
    width: auto;
    font-weight: 600;
    cursor:pointer;
    box-sizing:border-box;
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
    padding:10px;
    max-width:500px;
    box-shadow: 0px 0px 8px #919191;
    }
    label#captcha_form_label{
    display: block;
    font-family: cursive;
    font-size: 15px;
    }
    input#captcha_key{
    background-color: #e6e6e6;
    height: 2.5rem;
    border: 2px solid #9d9d9d;
    border-radius: 10px;
    box-sizing:border-box;
    caret-color: #e91e63;
    font-size: 15px;
    padding:5px;
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