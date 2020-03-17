/*document.getElementById("calcular").onclick = function(){
	
		var valorA = document.getElementById("valorA").value;
		var valorB = document.getElementById("valorB").value;

		alert(parseInt(valorA) + parseInt(valorB));} */

/*Calcular a soma de dois numeros com codigo mais completo em JavaScript*/

document.querySelector("#calcular").addEventListener("click",function(){

	let valorA = document.querySelector("#valorA").value;
	let valorB = document.querySelector("#valorB").value;

	if(valorA.length > 0 && valorB.length > 0){
	} else{
		alert("Digite os valores para o cálculo.");
		}
		alert(parseInt(valorA)+ parseInt(valorB));
});
