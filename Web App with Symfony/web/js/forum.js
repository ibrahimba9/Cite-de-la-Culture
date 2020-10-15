var modal = document.getElementById('myModal');
var span = document.getElementsByClassName("close")[0];
var cancel = document.getElementById("linkAnnuler");

function showModal(ids){
    var hrefsig = $("#myBtn").attr("data-href");
    $("#linkSignaler").attr("href", "/webculture/web/app_dev.php/Forum/signaler/"+ids);
    modal.style.display = "block";
}

function showModalComment(idm){
    var hrefsig = $("#linkSignComm").attr("data-href");
    $("#linkSignaler").attr("href", "/webculture/web/app_dev.php/Forum/signalerCommentaire/"+idm);
    $('#hTitre').text("Signaler ce Commentaire?");
    $('#hContent').text("Etes-vous sûr de bien vouloir signaler ce Commentaire?");
    modal.style.display = "block";
}

function showModalDelete(idm){
    var hrefsig = $("#linkDelete").attr("data-href");
    $("#linkSignaler").attr("href", "/webculture/web/app_dev.php/Forum/supprimer/"+idm);
    $('#hTitre').text("Supprimer ce Commentaire?");
    $('#hContent').text("Etes-vous sûr de bien vouloir Supprimer ce Commentaire?");
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

cancel.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}