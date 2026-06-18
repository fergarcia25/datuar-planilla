//const jsonData = require('http://datuar.test/public/json/data.txt'); 
//var prods = jsonData;

async function cargarProds(){

    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'http://datuar.test/public/json/data.txt', true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            prods = JSON.parse(this.responseText);
            console.log(prods);
            return prods;
        };
    }
};

// Scoring charts 
async function updateGauge(score) {
    const needle = document.getElementById('needle');
    const scoreDisplay = document.getElementById('score');
    const angle = (score / 1000) * 270 - 130;
    needle.style.transform = `rotate(${angle}deg) translateX(-10%)`;
    scoreDisplay.textContent = score;
  }
  
function getFile(elm){
    new Response(elm.files[0]).json().then(json => {
        console.log(json)
      }, err => {
        // not json
      })
}

  // Ejemplo de uso: actualizar el gauge con un puntaje de 982
  //updateGauge(982);

  







  