function validarForm()
{
	var doc=document.getElementById("doc").value;
	var extensiondoc=doc.substring(doc.lastIndexOf(".")+1);
	var errores="Errores detectados en el formulario: \n";
	var bool=true;
	if((extensiondoc!="pdf")&&(extensiondoc!="doc")&&(extensiondoc!="docx")&&(extensiondoc!="jpg"))
	{
		errores=errores+"La extension del archivo es inválido. \n";
		bool=false;
	}
	if(!bool)
	{
		alert(errores);
	}
	return bool;
}