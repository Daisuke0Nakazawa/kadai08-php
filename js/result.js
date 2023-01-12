// alert('こんにちは');
let q1_user = document.getElementById("quiz1user");
let q1_answer = document.getElementById("quiz1answer");
let q1 = "";

if(q1_user==q1_answer){
    q1 = "〇"
}else{
    q1 = "×"
};

$("#quiz1").html(q1);