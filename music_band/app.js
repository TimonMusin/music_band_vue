
// const app = Vue.createApp({
//     data() {
//         return {
//             asd: 'asssd'
//         }
//     }
//   })
function LoadHome(){
window.location.href = 'index.php';

}
function LeadMainPage(){
window.location.href = 'autoriz.php';

}
function CreateCoockie(name, value){
    document.cookie = `${name}=${value}`; 
    console.log('Поидее нажал на кнопку')
    slide_event();
}
function slide_event(){
    document.querySelector('.popup_of_disabled_click').classList.add("popup_of_success_click");
    setTimeout(function(){
        document.querySelector('.popup_of_disabled_click').classList.remove("popup_of_success_click");
      }, 1000);
}

function minus_command(value){
    var _parent_position = value.parentNode;
    var _current_position = _parent_position.childNodes[3];

    var count_int = parseInt(_current_position.innerHTML);
    if (count_int > 1){
        _current_position.innerHTML = count_int- 1;
        console.log(_current_position.innerHTML);
    }
    else{
        var get_img = value.parentNode.parentNode.childNodes[3].childNodes[1].childNodes[1];
        var get_value_of_img = get_img.getAttribute('src');
        var name_of_img = get_value_of_img.split('images/goods_images/');
        var result = name_of_img[1].split('.png');
        console.log(typeof(result[0]));
        deleteCookie(result[0]);
        value.parentNode.parentNode.parentNode.innerHTML = "";
        //_parent_position.parentNode.style.visibility = "hidden";

    }
    
}
function plus_command(value){
    var _parent_position = value.parentNode;
    var _current_position = _parent_position.childNodes[3];
    var count_int = parseInt(_current_position.innerHTML);
    _current_position.innerHTML = count_int + 1;
  
   
}
var deleteCookie = function(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};