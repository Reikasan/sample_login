window.addEventListener('load', function printName() {
    
    var printName = document.getElementById('printName');
    var userName = localStorage.getItem('userName');
    
    printName.innerHTML = userName;

});
