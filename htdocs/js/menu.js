{\rtf1\ansi\ansicpg1252\deff0\deflang1040{\fonttbl{\f0\fmodern\fprq1\fcharset0 Courier New;}{\f1\fswiss\fcharset0 Arial;}}
{\*\generator Msftedit 5.41.15.1515;}\viewkind4\uc1\pard\f0\fs20 var Voce=new Array("Home","Storia","Servizi","Sedi","Contatti","Links","News")\par
CoordX1=new Array(20,20,20,20,20,20,20)\par
CoordY1=new Array(7,37,67,97,127,157,187)\par
CoordX2=new Array(95,95,95,95,95,95,95)\par
CoordY2=new Array(17,47,77,107,137,167,197)\par
Coll=new Array("home.html","storia.html","servizi.html","sedi.html","contatti.html","links.html","news.html")\par
AltT=new Array("Pagina iniziale","Chi siamo","I servizi","Le nostre sedi","Contatti","Collegamenti Utili","Notizie,Novita&grave")\par
\par
function GeneraMenuMap(pagina) \{\par
\tab var x\par
\tab var linea\par
\tab for (x=0;x<Voce.lenght;x++) \{\par
\tab\tab linea=""\par
\tab\tab linea=linea & "<area shape='rect' coords='" & CoordX1[x] & "," & CoordY1[x] & "," & CoordX2[x] & "," & CoordY2[x]\par
\tab\tab linea=linea & "' href='" & Coll[x] & "' target='_self' alt='" & AltT[x] & "' onFocus='this.blur()'>"\par
\tab\tab if (pagina != Voce[x]) \{\par
\tab\tab\tab document.write(linea)\par
\tab\tab\}\par
\tab\par
\tab\}\par
\tab\par
\par
\par
\par
\par
\par
\}\f1\par
}
 