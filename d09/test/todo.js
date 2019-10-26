
var bouton = document.getElementById("new");
bouton.addEventListener("click", ft_Add);
var index = 0;
console.log(document.cookie);
ft_Cookie();
function ft_Cookie()
{
    if (document.cookie)
    {
        var cookies = document.cookie.split(';');
        var tab = [];
        console.log('length='+cookies.length);
        console.log('11111'+cookies[0]);
        console.log('22222'+cookies[1]);

        for (var i = 0; i < cookies.length; i++)
        {
            console.log('11111bis'+cookies[0]);
            console.log('22222bis'+cookies[1]);
            console.log(i+" cookie[i]="+cookies[i]);
            var cooky = cookies[i].trim().split('=');
            tab.push(cooky[1]);
            console.log("val="+cooky[1]);
            var date = new Date();
            date.setTime(date.getTime() + (1000*12*60*60));
            end = "; expires=" + date.toUTCString();
            cookiess = index + "=" + cooky[i]+end;
            console.log('cookie='+cookies);
            index++;
        }
        index = 0;
        for (n = tab.length - 1; n >= 0; n--)
        {
            var node = document.createElement("div");
            node.setAttribute("class", "todo");
            node.setAttribute("id", index);
            index++;
            node.setAttribute("title", "click to delete the task");
            node.addEventListener("click", ft_Del);
            console.log('tab[n]='+tab[n]);
            node.innerHTML = tab[n];
            grosse_list = document.getElementById("ft_list");
            grosse_list.insertBefore(node, grosse_list.firstChild);
        }
    }
}
function ft_Add()
{
    var tache = prompt("Ajouter une tache");
    if (tache && tache.trim())
    {
        var todo = document.createElement("div");
        todo.setAttribute("class", "todo");
        todo.setAttribute("id", index);
        todo.setAttribute("title", "click to delete the task");
        todo.innerHTML = tache;
        var grosse_list = document.getElementById("ft_list");
        grosse_list.insertBefore(todo, grosse_list.firstChild);
        todo.addEventListener("click", ft_Del);

        var date = new Date();
        date.setTime(date.getTime() + (1000*12*60*60));
        end = "; expires=" + date.toUTCString();
        document.cookie = index+"="+todo.innerHTML+end;
        index++;
    console.log(document.cookie);
    }
}
function ft_Del() {
    if (confirm("Ceci à l'air urgent, êtes-vous sûr de vouloir le supprimer?"))
    {
        this.remove();
        for (c in document.cookie)
            if (c == this.id)
                document.cookie = this.id + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
        console.log(document.cookie);
    }
}
