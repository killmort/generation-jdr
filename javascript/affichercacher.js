function afficher_cacher(id,texte)
{
    if(document.getElementById(id).style.display=="none")
    {
        document.getElementById(id).style.display="block";
        document.getElementById('bouton_'+id).innerHTML='Cacher '+texte;
    }
    else
    {
        document.getElementById(id).style.display="none";
        document.getElementById('bouton_'+id).innerHTML='Afficher '+texte;
    }
    return true;
}


