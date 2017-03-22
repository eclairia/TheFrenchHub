/**
 * Created by guill on 12/03/2017.
 */

// diaporama
tslider =document.getElementsByClassName('moveSlider');
var taille_image = tslider[0]["offsetHeight"];
var pas = 20;
var duree = 500;
duree_pas = duree / ((taille_image)/pas);
var contentSlider = document.getElementById('slider');

var Htop = false;
var i = 0;
document.getElementsByClassName('downSlide')[i].onclick = function()
{
    i++;
    start_pos = 0;
    distance_H = contentSlider.offsetHeight;
    console.log(distance_H);
    nb_pas = Math.abs((distance_H) / pas);
    duree_pas_transition = duree / ((distance_H) /nb_pas);

    if (Htop == false)
    {
        new_pos = contentSlider.style.top;
        change_pub = setInterval(function()
        {
            new_pos = new_pos - pas;
            document.getElementById('contentSlider').style.top = new_pos + 'px';

            if (new_pos <= start_pos -distance_H)
            {
                clearInterval(change_pub);
                Htop = true;
            }
        }, duree_pas_transition);
    }
    else
    {
        change_pub = setInterval(function()
        {
            new_pos = new_pos + pas;
            document.getElementById('contentSlider').style.top = new_pos + 'px';

            if (new_pos >= 0)
            {
                clearInterval(change_pub);
                Htop = false;
            }
        }, duree_pas_transition);
    }
};
