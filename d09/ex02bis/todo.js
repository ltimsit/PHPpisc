$('#new').click(addNew);
$('#ft_list').on('click', '.elem', remove)
// window.addEventListener('unload', setCookie);
$(window).on('unload', setCookie);
// $('#test').click(setCookie);
var currId = 0;
getCookie();
function addNew() {
    var chaine = prompt("to do:");
    if (chaine) {
        // document.cookie = "texte" + currId + '=' + chaine;
        // currId += 1;
        addList(chaine);
    }
}
function addList(chaine) {
    $('#ft_list').prepend("<div class='elem'>" + chaine + "</div>");
}
function remove() {
    if (confirm("supprimer ?")) {
        $(this).remove();
    }
}

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
function setCookie() {
    deleteAllCookies();
   var div = $('#ft_list').children();
    console.log(div[0].innerHTML);
    for (var i = 0; i < div.length; i++) {
        var child = div[i];
        document.cookie = "texte" + currId + '=' + child.innerHTML;
        currId += 1;
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