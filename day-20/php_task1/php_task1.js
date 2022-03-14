let input_nodes = document.querySelectorAll("input[type='number']");

for (const iterator of input_nodes) {
    iterator.setAttribute("required","");
}

// function validate() {
//     let weight = parseFloat(document.querySelector("#weight").value);
//     let feet = parseFloat(document.querySelector("#feet").value);
//     let inch = parseFloat(document.querySelector("#inch").value);
//     let inch_height = (feet*12)+inch;
//     let meter_height = inch_height*0.0254;
//     let bmi = weight/(meter_height*meter_height);
    
// }
