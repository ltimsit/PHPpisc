
var button = document.getElementById('new');
button.addEventListener('click', addPrompt);
window.addEventListener('unload', setCookie);
// window.addEventListener('load', getCookie);
var currId = 0;
getCookie();

function getCookie() {
    var cookiesTab = document.cookie;
    if (cookiesTab) {
        console.log('test');
        cookiesTab = cookiesTab.split(';');
        for (var i = cookiesTab.length - 1; i >= 0; i--) {
            var cookie = cookiesTab[i].trim();
            var eqPos = cookie.indexOf("=");
            var key = cookie.substr(0, eqPos);
            if (key.substr(0, 5) == "texte") {
                var value = cookie.substr(eqPos + 1, cookie.length - (eqPos + 1));
                if (typeof value != 'undefined') {
                    addList(value);
                }
            }
        }
    }
}

function addList(value) {
    var newElem = document.createElement('div');
    newElem.innerHTML = value;
    newElem.className = 'list';

    newElem.addEventListener('click', removeList);
    mainDiv = document.getElementById('ft_list');
    mainDiv.insertBefore(newElem, mainDiv.firstChild);
}

function addPrompt() {
    var chaine = prompt("texte");
    if (chaine) {
        addList(chaine)
    }
}

function setCookie() {
    deleteAllCookies();
    var div = document.getElementById('ft_list').children;
    for (var i = 0; i < div.length; i++) {
        var child = div[i];
        document.cookie = "texte" + currId + '=' + child.innerHTML;
        currId += 1;
    }
}

function removeList() {
    if (confirm("supprimer ?")) {
        this.remove();
    }
}
function deleteAllCookies() {
    var cookies = document.cookie.split(";");
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}