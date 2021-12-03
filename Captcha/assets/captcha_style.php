<style>
*{
    margin: 0px;
    box-sizing:border-box;
    padding:0px;
    }
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

  body{
    font-family: 'Roboto', sans-serif;
    background-color: #202020;
    color: #fff;
  }
  .captcha-container{
    display:flex;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 300px;
    /* border: 1px solid #fff; */
    border-radius: 5px;
    padding: 10px;
    height: 300px;
    box-shadow: 0px 0px 1px 0px #fff;
  }
  .captcha{
  align-self: center;
  }
  #captcha_img_house{
    text-align:center;
    margin-bottom:10px;
  }
  div.captcha_form_group{
    margin-bottom:10px;
  }
  div.captcha_input_group{
    display:flex;
  }
  label{
    display: block;
    text-align:left;
    margin-bottom: 10px;
    font-size: 15px;
  }
  input{
    background-color: #202020;
    border: 2px solid #393939;
    border-radius: 1px;
    box-sizing: border-box;
    caret-color: #e91e63;
    font-size: 15px;
    padding: 5px;
    width: 80%;
    margin-right: 10px;
    color: #fff;
  }
  #captcha_inp:focus{
    border: 2px solid #e91e63 !important;    
  }
  button {
    width: auto;
    padding: 10px;
    background-color: #e91e63;
    border: 2px solid #e91e63;
    border-radius: 5px;
    color: #fff;
    font-size: 15px;
    cursor:pointer;
  }
  button:hover{
    transition:0.5s;
    box-shadow: 0px 0px 4px #e91e63;
    background-color: transparent;
    color: #fff;
  }
    .notification {
    padding: 10px;
    margin-bottom: 20px;
}
    .notification.is-danger {
    background-color: #f14668;
    color: #fff;
}
    .notification.is-success {
    background-color: #48c774;
    color: #fff;
}    </style>