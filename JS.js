window.onload=function()
{
	if(document.getElementById('Main').getElementsByTagName('dt').length!=0)
		GenererLiens();
}

function GenererLiens()
{
	var Mots=document.getElementById('Main').getElementsByTagName('dt');
	for (var i=0;i<Mots.length;i++)
	{
		Mots[i].onclick=function(){
			document.location=this.getElementsByTagName('a')[0].href;
		}
		Mots[i].style.cursor="pointer";
// 			Mots[i].onmouseover=function()
// 			{
//
// 			if(this.getElementsByTagName('em')[0])
// 				this.innerHTML="<a href=" +this.getElementsByTagName('a')[0].href+">"+this.getElementsByTagName('a')[0].innerHTML+ "</a> : Cliquez pour accéder à plus d'informations...<em>"+this.getElementsByTagName('em')[0].innerHTML+"</em>";
// 			else
// 				this.innerHTML="<a href=" +this.getElementsByTagName('a')[0].href+">"+this.getElementsByTagName('a')[0].innerHTML+ "</a> : Cliquez pour accéder à plus d'informations...";
// 			}
// 			Mots[i].onmouseout=function()
// 			{
// 				this.innerHTML=this.SVGTexte;
// 			}
// 			Mots[i].SVGTexte=Mots[i].innerHTML;
	}
}