$(document).ready(function () {
    insertAjax();
    $('#new').click(addNew);
    $('#ft_list').on('click', '.elem', remove)
    // $(window).on('load', insertAjax);
    var usedID = [];
    function getUnusedId() {
        var currID = 0;
        var sequence = [];
        for (i in usedID) {
            sequence.push(parseInt(usedID[i]['id']));
        }
        sequence = sequence.sort(function compareNombres(a, b) {
            return a - b;
        });
        for (i in sequence) {
            if (sequence[i] == currID)
                currID += 1;
            else
                return currID;
        }
        return currID.toString();
    }
    function addNew() {
        
        var chaine = prompt("to do:");
        $(this).animate({
            width: '+=50',
            height: '+=30',
            fontSize: '+=10'
        }, 500);
        $(this).animate({
            width: '-=50',
            height: '-=30',
            fontSize: '-=10'
        }, 500);
        if (chaine) {
            var id = getUnusedId();
            $.ajax({
                url: 'insert.php',
                type: 'GET',
                data: { idx: id, value: chaine },
                error: function (resultat, status, error) {
                    alert("Error AJAX insert");
                }
            })
            usedID.push({
                id: id,
                value: chaine
            });
            // console.log(usedID);
            addList(id, chaine);
        }
    }
    function addList(id, chaine) {
        $('#ft_list').prepend("<div class='elem' id='" + id + "'>" + chaine + "</div>");
        $('.elem').animate({
            top: "+=50"
        }, 250);
        $('#'+id).animate({
            left: '40%'
        }, 1000 );
        $('#'+id).animate({
            left: '50%'
        }, 500);
        

    }
    function remove() {
        if (confirm("supprimer ?")) {
            var id = $(this).attr('id');
            $.ajax({
                url: 'delete.php',
                type: 'POST',
                data: { id: id },
                error: function () {
                    alert("Error AJAX delete");
                }
            })
            $(this).nextAll().animate({
                top: "-=50"
            }, 500);
            $(this).remove();
        }
    }
    function insertAjax() {
        $.ajax({
            url: 'select.php',
            dataType: 'JSON',
            success: function (code, status) {
                // console.log(code);
                usedID = code;
                for (i in code) {
                    // console.log('val=' + code[i]);
                    addList(code[i].id, code[i].value)
                }
            },
            error: function (resultat, statut, error) {
                console.log('Erreur AJAX');
                alert('Erreur AJAX');
            }
        })
    }
});