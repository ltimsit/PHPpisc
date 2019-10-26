var ft_list;
var cookie = [];
document.cookie = "banane" + ";expires=Thu, 01 Jan 1970 00:00:00 GMT";
console.log(document.cookie);
window.onload = function () {
    document.querySelector("#new").addEventListener("click", newTodo);
    console.log(document.cookie);
    ft_list = document.querySelector("#ft_list");
    var tmp = document.cookie;
    console.log(typeof tmp);
    if (tmp) {
        cookie = JSON.parse(tmp);
        // cookie.forEach(function (e) {
        //     addTodo(e);
        // });
    }
};
window.onunload = function () {
    var todo = ft_list.children;
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
    console.log(document.cookie);
    document.cookie = JSON.stringify(newCookie);
};
function newTodo(){
    var todo = prompt("Que dois-tu faire ?", '');
    if (todo !== '') {
        addTodo(todo)
    }
}
function addTodo(todo){
    var div = document.createElement("div");
    div.innerHTML = todo;
    div.addEventListener("click", deleteTodo);
    ft_list.insertBefore(div, ft_list.firstChild);
}
function deleteTodo(){
    if (confirm("Veux-tu vraiment supprimer cette tâche ?")){
        this.parentElement.removeChild(this);
    }
}