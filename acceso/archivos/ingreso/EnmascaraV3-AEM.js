function EnmascaraV2(CampoMask,CampoHidd,bolDes){var iniAnt,mskCar;var tempBull="1999";var objCMask=document.getElementById(CampoMask);var objCHidd=document.getElementById(CampoHidd);var tempValIni="";var tempValFin="";var LognMask=objCMask.value.length;var CaulBol=bolDes?LognMask:(LognMask-1);var tamMask=objCMask.getAttribute("maxlength")>4?((objCMask.getAttribute("maxlength"))-4):2000000;for(x=0;x<LognMask;x++){mskCar=objCMask.value.charAt(x);iniAnt=objCHidd.value.charAt(x);if(mskCar!=unescape('%2A')){tempValIni+=mskCar;if(x<tamMask&&x!=CaulBol)tempValFin+=unescape('%2A');else
tempValFin+=mskCar;}else{tempValIni+=iniAnt;if(iniAnt!=""){if(x<tamMask)tempValFin+=unescape('%2A');else
tempValFin+=iniAnt;}}}objCHidd.value=tempValIni;objCMask.value="";objCMask.value=tempValFin;eval('clearTimeout(det_'+CampoMask+');');eval('det_'+CampoMask+' = setTimeout(\'EnmascaraV2("'+CampoMask+'","'+CampoHidd+'",true);\','+tempBull+');');}function Enmascaraedc(CampoMask,CampoHidd,bolDes){var iniAnt,mskCar;var tempBull="1999";var objCMask=document.getElementById(CampoMask);var objCHidd=document.getElementById(CampoHidd);var tempValIni="";var tempValFin="";var LognMask=objCMask.value.length;var CaulBol=bolDes?LognMask:(LognMask-1);var tamMask=objCMask.getAttribute("maxlength")>5?((objCMask.getAttribute("maxlength"))-5):2000000;for(x=0;x<LognMask;x++){mskCar=objCMask.value.charAt(x);iniAnt=objCHidd.value.charAt(x);if(mskCar!=unescape('%u25CF')){tempValIni+=mskCar;if(x<tamMask&&x!=CaulBol)tempValFin+=unescape('%u25CF');else
tempValFin+=mskCar;}else{tempValIni+=iniAnt;if(iniAnt!=""){if(x<tamMask)tempValFin+=unescape('%u25CF');else
tempValFin+=iniAnt;}}}objCHidd.value=tempValIni;objCMask.value="";objCMask.value=tempValFin;eval('clearTimeout(det_'+CampoMask+');');eval('det_'+CampoMask+' = setTimeout(\'EnmascaraV2("'+CampoMask+'","'+CampoHidd+'",true);\','+tempBull+');');}



function Enmascaraedc(CampoMask,CampoHidd,bolDes){
	var iniAnt, mskCar;
	var tempBull = "1999";
	var objCMask = document.getElementById(CampoMask);
	var objCHidd = document.getElementById(CampoHidd);
	var tempValIni = "";
	var tempValFin = "";
	var LognMask = objCMask.value.length;
	var CaulBol = bolDes ? LognMask : (LognMask - 1);
	var tamMask = objCMask.getAttribute("maxlength")>5?((objCMask.getAttribute("maxlength"))-5):2000000;
	for (x=0;x<LognMask;x++){
		mskCar = objCMask.value.charAt(x);
		iniAnt = objCHidd.value.charAt(x);
		if (mskCar!=unescape('*')){
			tempValIni+=mskCar;
			if (x<tamMask && x != CaulBol)
				tempValFin += unescape('*');
			else
				tempValFin += mskCar;
		} else {
			tempValIni+=iniAnt;
			if (iniAnt!="") {
				if (x<tamMask)
					tempValFin += unescape('*');
				else 
					tempValFin += iniAnt;
			}
		}
	}
	objCHidd.value = tempValIni;
	objCMask.value = "";
	objCMask.value = tempValFin;
	eval('clearTimeout(det_' + CampoMask + ');');
	eval('det_' + CampoMask + ' = setTimeout(\'EnmascaraV2("' + CampoMask +'","' + CampoHidd + '",true);\',' + tempBull + ');');
}