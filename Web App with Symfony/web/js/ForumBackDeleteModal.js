var modal = document.getElementById('myModal');
var span = document.getElementsByClassName("close")[0];
var cancel = document.getElementById("linkAnnuler");

function showModal(idm){
    var hrefsig = $("#linkDelete").attr("data-href");
    $("#linkConfirm").attr("href", "/webculture/web/app_dev.php/Forum/Back/confirmerSuppression/"+idm);
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

function showBanModal(idp, ids){
    var hrefban = $("#linkBan").attr("data-href");
    $("#linkConfirm").attr("href", "/webculture/web/app_dev.php/Forum/Back/ConfirmBannir/"+ids+"/"+idp);
    modal.style.display = "block";
}

function showCancelBanModal(ids,idp){
    var hrefban = $("#linkCancelBan").attr("data-href");
    $("#linkConfirm").attr("href", "/webculture/web/app_dev.php/Forum/Back/AnnulerBannir/"+ids+"/"+idp);
    $('#hTitre').text("Annuler Ban?");
    $('#hContent').text("Etes-vous sûr de vouloir Annuler le ban de cet utilisateur?");
    modal.style.display = "block";
}

function showDeleteSignalSubjectModal(ids) {
    var hrefs = $("#linkDelSigSub").attr("data-href");
    $("#linkConfirm").attr("href", "/webculture/web/app_dev.php/Forum/Back/supprimerSignalSujet//"+ids);
    $('#hTitre').text("Supprimer ce Signal");
    $('#hContent').text("Etes-vous sûr de vouloir supprimer le signal de ce sujet?");
    modal.style.display = "block";
}

function showDeleteSignalMessageModal(ids) {
    var hrefs = $("#linkDelSigMess").attr("data-href");
    $("#linkConfirm").attr("href", "/webculture/web/app_dev.php/Forum/Back/supprimerSignalMessage/"+ids);
    $('#hTitre').text("Supprimer ce Signal");
    $('#hContent').text("Etes-vous sûr de vouloir supprimer le signal de ce sujet?");
    modal.style.display = "block";
}

function showDeleteMessageSignaleModal(ids) {
    var hrefs = $("#linkDelMsg").attr("data-href");
    $("#linkConfirm").attr("href", "/webculture/web/app_dev.php/Forum/Back/supprimerMessageSignale/"+ids);
    $('#hTitre').text("Supprimer ce Signal");
    $('#hContent').text("Etes-vous sûr de vouloir supprimer le message?");
    modal.style.display = "block";
}

function showDeleteSubjectSignaleModal(ids) {
    var hrefs = $("#linkDelSuj").attr("data-href");
    $("#linkConfirm").attr("href", "/webculture/web/app_dev.php/Forum/Back/supprimerSujetSignale/"+ids);
    $('#hTitre').text("Supprimer ce Signal");
    $('#hContent').text("Etes-vous sûr de vouloir supprimer le sujet?");
    modal.style.display = "block";
}