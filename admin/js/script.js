const txtElemet = ['Universitas Bung Karno         ', 'UBK                  ']

let count = 0;
let txtIndext = 0;
let currentTxt = '';
let words = '';

(function ngetik (){

    if(count == txtElemet.length){
        count = 0;
    }
    
    currentTxt = txtElemet[count];

    words = currentTxt.slice(0, ++txtIndext);
    document.querySelector('.efek-ngetik').textContent = words;

    if (words.length == currentTxt.length){
        count++;
        txtIndext = 0;
    }
    setTimeout(ngetik, 200);
})();
