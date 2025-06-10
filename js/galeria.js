var modal = document.getElementById("myModal01");
    var img = document.getElementById("imagem01");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
        }
    var span = document.getElementsByClassName("close01")[0];
    span.onclick = function() { 
    modal.style.display = "none";
    }

var modal = document.getElementById("myModal02");
    var img = document.getElementById("imagem02");
    var modalImg = document.getElementById("img02");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
        }
    var span = document.getElementsByClassName("close02")[0];
    span.onclick = function() { 
    modal.style.display = "none";
    }