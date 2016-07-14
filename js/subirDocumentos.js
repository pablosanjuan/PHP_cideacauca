function validarForm()
{
	var doc=document.getElementById("doc").value;
	var extensiondoc=doc.substring(doc.lastIndexOf(".")+1);
	var errores="\n Solo se premiten archivos con extensión: \n -Documentos: .pdf .doc .docx .xls .xlsx .ppt .pptx \n -Imágenes: .jgp .png";
	var bool=true;
	if((extensiondoc!="pdf")&&(extensiondoc!="doc")&&(extensiondoc!="docx")&&(extensiondoc!="jpg")&&(extensiondoc!="ppt")&&(extensiondoc!="pptx")&&(extensiondoc!="xls")&&(extensiondoc!="xlsx")&&(extensiondoc!="png"))
	{
		errores=errores+"\n\n La extension del archivo es inválido. \n";
		bool=false;
	}
	if(!bool)
	{
		alert(errores);
	}
	return bool;
}