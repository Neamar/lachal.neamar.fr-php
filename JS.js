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
	}
}
