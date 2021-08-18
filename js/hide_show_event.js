function ShowHideDiv(chkPassport) {
    var dvPassport = document.getElementById("dvPassport");
    dvPassport.style.display = chkPassport.checked ? "block" : "none";
}