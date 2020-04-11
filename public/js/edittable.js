//$(function () {
//
//    $('.edit').dblclick(function () {
//        var conteudoOriginal = $(this).text();
//
//        $(this).addClass("celulaEmEdicao");
//        $(this).html("<input type='text' value='" + conteudoOriginal + "' />");
//        $(this).children().first().focus();
//
//        $(this).children().first().keypress(function (e) {
//            if (e.which == 13) {
//                var novoConteudo = $(this).val();
//                $(this).parent().text(novoConteudo);
//                $(this).parent().removeClass("celulaEmEdicao");
//            }
//        });
//
//        $(this).children().first().blur(function () {
//            $(this).parent().text(conteudoOriginal);
//            $(this).parent().removeClass("celulaEmEdicao");
//        });
//    });
//});

function tornarTabelaEditavel(tabela)
{
    // Obtém todas as tds da tabela fornecida.
    var tdlist = tabela.getElementsByTagName("td");

    for (var i = 0; tdlist[i]; i++) {
        // Adiciona o evento double click em cada td da tabela.
        tdlist[i].ondblclick = function () {
            // Se for texto, muda para input.
            if (this.firstChild.nodeType == 3) {
                // Cria um campo de texto editável e insere o valor da td nesse campo.
                var campo = document.createElement("input");
                campo.value = this.firstChild.nodeValue;

                // Substitui o texto da td pelo campo.
                this.replaceChild(campo, this.firstChild);

                campo.select();

                // Faz o processo inverso ao perder o foco.
                campo.onblur = function () {
                    this.parentNode.replaceChild(document.createTextNode(this.value), this);
                }
            }
        }
    }
}

window.onload = function () {
    tornarTabelaEditavel(document.getElementById('idtabela'));
}

function clonar(id, remove) {
    id = document.getElementById(id);
    jQuery(id).clone(true).insertAfter(id);
    jQuery(remove).remove();
    jQuery(id).removeAttr("id");
}

//function duplicarInstalacoesFisicas() {

$(".tr_clone_add").live('click', function () {
    var $tr = $(this).closest('.tr_clone');
    var newClass = 'newClass';
    var $clone = $tr.clone().addClass(newClass);
    $clone.find(':text').val('');
    $tr.after($clone);
});
//}

$(".tr_clone_remove").live('click', function () { //Once remove button is clicked
    $(".newClass:last").remove(); //Remove field html
    x--; //Decrement field counter
});

function calcular(resultado, value1) {
    var n1 = parseInt(document.getElementById('quantidade').value, 10);
  var n2 = parseInt(document.getElementById('pu').value, 10);
  
var dividers = $(this).prevAll("input[id=quantidade]").val();
  
//  var answer = $(".quantidade").prevAll("quantidade:first").val();

//
//
//console.log(n1);
//console.log(n2);
console.log(dividers);
console.log(value1);
    document.getElementById(resultado).value = value1 * n1;
}


