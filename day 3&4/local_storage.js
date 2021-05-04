console.log("Start");
var take_input=document.getElementById("take_input")
var take_input_key=document.getElementById("take_input_key")
var save_value=document.getElementById("save_value")
var localstorage_value=document.getElementById("localstorage_value")
var read_localstorage=document.getElementById("read_localstorage")
var delete_data=document.getElementById("delete_data")

save_value.onclick= function(){
    localStorage.setItem(take_input_key.value,take_input.value);
}
read_localstorage.onclick=function(){
    localstorage_value.textContent=localStorage.getItem(take_input_key.value,take_input.value);
}
delete_data.onclick=function(){
    localStorage.removeItem(take_input_key.value,take_input.value);
}




