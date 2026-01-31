var Alert = new CustomeAlert();

function CustomeAlert(){
    this.render = function(){
        let popUpBox = document . getElementById('popUpBox');
        popUpBox.style.display = "block";
        document.getElementById('closeModal').innerHTML = '<a href="index.php"><button type="button" a href>¡si quiero!</button></a>';
    }

    this.ok = function(){
        document.getElementById('popUpBox').style.display = "none";
        document.getElementById('popUpOverlay').style.display = "none";
    }
}