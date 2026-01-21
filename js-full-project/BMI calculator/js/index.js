let bmi;
let gender_points;
let Age;
let height;
let weight;
let active_points;


document.getElementById('b1').onclick = function male(){
  gender_points = 5;
}
document.getElementById('b2').onclick = function female(){
  gender_points = -161;
}
export let bmi2 = null;  

document.getElementById('b8').onclick = function lightlyA(){
  active_points = 1.375;
}
document.getElementById('b9').onclick = function moderateA(){
  active_points = 1.55;
}
document.getElementById('b10').onclick = function activeA(){
  active_points = 1.725;
}
document.getElementById('b11').onclick = function veryA(){
  active_points = 1.9;
}

document.getElementById('btnmain').onclick = function() {
 Age = Number(document.getElementById('age').value);
 let foot = Number(document.getElementById('ftinp').value);
 let inch = Number(document.getElementById('incinp').value);
 let cm = Number(document.getElementById('cm').value);
 let cm_conversion = (foot * 30.48) + (inch * 2.54);

 if (cm > 0) {
    height = cm;         
} if(cm_conversion > 0) {
    
    height = cm_conversion; 
}

let inpvalue = document.getElementById('weight_value').value;
let weight2 = document.getElementById('weight').innerHTML;

if(weight2 == 'lbs'){
 weight = (inpvalue * 0.453592);
}
else{
 weight = Number(inpvalue);
}

let bmi_formula = 10 * weight + 6.25 * height - 5 * Age + gender_points;

bmi = bmi_formula * active_points;


localStorage.setItem("bmi_value", bmi);
location.href = "html/page_2.html";

  

}










