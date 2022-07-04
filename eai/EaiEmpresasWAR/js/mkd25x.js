var AHN_MKD25X_CAB_VER = '2,5,0,46';
var AHN_MKD25X_XPI_VER = '2,5,0,16';

var AHN_MKD25X_AUTHSERVER = 'aspglobal.ahnlab.com';
var AHN_MKD25X_CAB_CODEBASE = 'http://aspglobal.ahnlab.com/asp/cab/mkd25x.cab';
var AHN_MKD25X_XPI_CODEBASE = 'http://aspglobal.ahnlab.com/asp/cab/npmkd25.xpi';
var AHN_MKD25X_SSL_CAB_CODEBASE = 'https://aspglobal.ahnlab.com/asp/cab/mkd25x.cab';
var AHN_MKD25X_SSL_XPI_CODEBASE = 'https://aspglobal.ahnlab.com/asp/cab/npmkd25.xpi';

var AHN_MKD25X_AUTHPREFIX = '';
var AHN_NPMKD25_DESCRIPTION = 'npmkd25';
var AHN_NPMKD25_MIMEHEADER = 'application/ahnlab/';
var AHN_NPMKD25_MIMETYPE = AHN_NPMKD25_MIMEHEADER + AHN_NPMKD25_DESCRIPTION + "_" + AHN_MKD25X_XPI_VER;

var USER_MKD25X_CAB_VER = '';
var USER_MKD25X_AUTHSERVER = '';
var USER_MKD25X_CAB_CODEBASE = '';
var USER_MKD25X_XPI_CODEBASE = '';
var USER_MKD25X_SSL_CODEBASE = '';
var USER_MKD25X_AUTHPREFIX = '';


var g_firefox_installed = false;
var g_firefox_install_running = false;
//--------------------------------------------------

function onunload_handler()
{
}			

function onunload_check()
{
	if( window.onunload == undefined )
	{
		window.onunload = onunload_handler;
	}

}
if(navigator.appName == "Netscape")
{
	onunload_check();
}

//-----------------------------------------------------		

function navigator60()
{
	var UA = navigator.appName;
	var ver = navigator.appVersion; 
	ver = parseInt(ver.split(";")[1].split(" ")[2]) 
	if(ver >= 6) return true;
	else return false;
}

function _launchMKD( bInsert, bSSL, type ) {

	var MKD25X_CODEBASE;
	if( bSSL )
	{
		if( USER_MKD25X_SSL_CODEBASE == "" )
		{
			MKD25X_CODEBASE = AHN_MKD25X_SSL_CAB_CODEBASE;
		}
		else
		{
			MKD25X_CODEBASE = USER_MKD25X_SSL_CODEBASE;
		}
	}
	else
	{
		if( USER_MKD25X_CAB_CODEBASE == "" )
		{
			MKD25X_CODEBASE = AHN_MKD25X_CAB_CODEBASE;
		}
		else
		{
			MKD25X_CODEBASE = USER_MKD25X_CAB_CODEBASE;
		}
	}
	
	
	var MKD25X_CAB_VER;
	if( USER_MKD25X_CAB_VER == "" )
	{
		MKD25X_CAB_VER = AHN_MKD25X_CAB_VER;
	}
	else
	{
		MKD25X_CAB_VER = USER_MKD25X_CAB_VER;
	}
	
	
	var MKD25X_AUTHSERVER;
	if( USER_MKD25X_AUTHSERVER == "" )
	{
		MKD25X_AUTHSERVER = AHN_MKD25X_AUTHSERVER;
	}
	else
	{
		MKD25X_AUTHSERVER = USER_MKD25X_AUTHSERVER;
	}
	
	var MKD25X_AUTHPREFIX;
	if( USER_MKD25X_AUTHPREFIX == "")
	{
		MKD25X_AUTHPREFIX = AHN_MKD25X_AUTHPREFIX;
	}
	else
	{
		MKD25X_AUTHPREFIX = USER_MKD25X_AUTHPREFIX;
	}

	if (navigator.appName == "Netscape")
	{
		var html = "<object type='" + AHN_NPMKD25_MIMETYPE + "' id='MKD25X' height='0' width='0'>";
		html += "<PARAM NAME='AuthServer' VALUE='" + MKD25X_AUTHSERVER + "'>";
		html += "<PARAM NAME='Type' VALUE='" + type + "'>";
		html += "<PARAM NAME='AuthPrefix' VALUE='" + MKD25X_AUTHPREFIX + "'>";
		html += "</object>";
	
		if( bInsert == true ) {
			document.body.innerHTML += html;
		} else {
			document.write(html);
		}
	}
	else
	{
		if (bInsert == true) {
			
			if(navigator60() == true){
				var oNewItem = document.createElement("<object ID='MKD25X' name='MKD25X' CLASSID='clsid:A61B3F7D-5B8C-4504-B744-6CE552C3735A' codebase='" + MKD25X_CODEBASE + "#version=" + MKD25X_CAB_VER + "' height='0' width='0'></object>");
				var param1 = document.createElement("<PARAM NAME='AuthServer' VALUE='" + MKD25X_AUTHSERVER + "'>");
				var param2 = document.createElement("<PARAM NAME='Type' VALUE='" + type + "'>");
				var param3 = document.createElement("<PARAM NAME='AuthPrefix' VALUE='" + MKD25X_AUTHPREFIX + "'>");
				oNewItem.appendChild(param1);
				oNewItem.appendChild(param2);
				oNewItem.appendChild(param3);
				document.body.insertAdjacentElement("beforeEnd",oNewItem);
			}
			else {
				document.body.insertAdjacentHTML("beforeEnd",
					"<object ID='MKD25X' name='MKD25X' CLASSID='clsid:A61B3F7D-5B8C-4504-B744-6CE552C3735A' codebase='" + MKD25X_CODEBASE + "#version=" + MKD25X_CAB_VER + "' height='0' width='0'>"
					+ "<PARAM NAME='AuthServer' VALUE='" + MKD25X_AUTHSERVER + "'>"
					+ "<PARAM NAME='Type' VALUE='" + type + "'>"
					+ "<PARAM NAME='AuthPrefix' VALUE='" + MKD25X_AUTHPREFIX + "'>"
					+ "</object>");			
			}
			
		}
		else {
			document.write("<object ID='MKD25X' name='MKD25X' CLASSID='clsid:A61B3F7D-5B8C-4504-B744-6CE552C3735A' codebase='" + MKD25X_CODEBASE + "#version=" + MKD25X_CAB_VER + "' height='0' width='0'>");
			document.write("<PARAM NAME='AuthServer' VALUE='" + MKD25X_AUTHSERVER + "'>");
			document.write("<PARAM NAME='Type' VALUE='" + type + "'>");
			document.write("<PARAM NAME='AuthPrefix' VALUE='" + MKD25X_AUTHPREFIX + "'>"); 
			document.write("</object>");
		}
	}
}



function mkd25x_set_codebase( codebase )
{
	USER_MKD25X_CAB_CODEBASE = codebase;
}

function mkd25x_set_xpi_codebase( codebase )
{
	USER_MKD25X_XPI_CODEBASE = codebase;
}

function mkd25x_set_cabver( ver )
{
	USER_MKD25X_CAB_VER = ver;
}

function mkd25x_ff_installed()
{
	var szMimeType = AHN_NPMKD25_MIMETYPE ;
	
	if (navigator.mimeTypes && navigator.mimeTypes.length)
	{
		var plugin = navigator.mimeTypes[szMimeType];
		if (plugin && plugin.enabledPlugin)
		{
			return true;
		}
	}
	return false;

}

function mkd25x_ie_installed()
{
	ver = (USER_MKD25X_CAB_VER == '' ? AHN_MKD25X_CAB_VER : USER_MKD25X_CAB_VER).split(",")[3];
	end = AHN_MKD25X_CAB_VER.split(",")[3];
	
	for( ; ; ver++ )
	{
		var xObj;
	
		try
		{
			xObj = new ActiveXObject( "mkd25x.mkd25xCtrl." + ver );
		
			if( xObj )
			{
				return true;
			}
		}
		catch( ex )
		{
		}
				
		if( ver == end )			
		{
			break;
		}
				
	}
	
	return false;
}


function mkd25x_ff_registered()
{
	if (navigator.plugins && navigator.plugins.length)
	{
		for ( var i = 0 ; i < navigator.plugins.length ; i++)
		{
			if ( navigator.plugins[i].description == AHN_NPMKD25_DESCRIPTION )
			{
				return true;
			}
		}
	}	
 	return false;
}

function mkd25x_ie_registered()
{
	var xObj;
	
	try
	{
		xObj = new ActiveXObject( "mkd25x.mkd25xCtrl" );
	
		if( xObj )
		{
			return true;
		}
	}
	catch( ex )
	{
	}
			
	return false;
}

function mkd25x_registered()
{
	if( navigator.appName == "Netscape" )
	{
		return mkd25x_ff_registered();
	}
	else {
		return mkd25x_ie_registered();
	}	
}

function mkd25x_ff_install_callback(rul, status)
{
	if( status == 0 ) {
		g_firefox_installed = true;
	} else {
		g_firefox_installed = false;
	}
	g_firefox_install_running = false;
}

function mkd25x_ff_install()
{
	if( g_firefox_install_running == true )
	{
	}
	else
	{
		
		var codebase;
		if(USER_MKD25X_XPI_CODEBASE == "")
		{
			codebase = AHN_MKD25X_XPI_CODEBASE;
		}
		else
		{
			codebase = USER_MKD25X_XPI_CODEBASE;
		}
			
		var xpi = {'AhnLab Online Security Services':codebase};
		InstallTrigger.install(xpi, mkd25x_ff_install_callback);
		g_firefox_install_running = true;
	}
}

function mkd25x_install()
{
	if( navigator.appName == "Netscape" )
	{
		return mkd25x_ff_install();
	}
	else {
	}
}

function mkd25x_installed()
{
	if( navigator.appName == "Netscape" )
	{
		return mkd25x_ff_installed();
	}
	else {
		return mkd25x_ie_installed();
	}	
}





function mkd25x_loaded()
{
	if( navigator.appName == "Netscape" )
	{
		if( mkd25x_ff_installed() == true )
		{
			return true;
		}
		else
		{
			if( g_firefox_install_running == true )
			{
				return false;
			}
			else
			{
				if( g_firefox_installed == true )
				{
					mkd25x_insert_object();
					return true;
				}

				mkd25x_ff_install();
			}
		}
	}
	
	if( mkd25x_installed() == false )
	{
		return false;
	}
	
	/*
	var READYSTATE_UNINITIALIZED = 0;
	var READYSTATE_LOADING = 1;
    	var READYSTATE_LOADED = 2;
    	var READYSTATE_INTERACTIVE = 3;
    	*/
    	var READYSTATE_COMPLETE = 4;
    
    	try
    	{
	    if( document.getElementById("MKD25X").readyState == READYSTATE_COMPLETE )
		{
			return true;
		}
	}
    	catch( ex )
    	{
    	}
    
	return false;
}

function mkd25x_write_object() 
{
	var bInsert = false;
	var bSSL = false;
	var type= "0";
	
	_launchMKD( bInsert, bSSL, type );
}

function mkd25x_insert_object() 
{
	var bInsert = true;
	var bSSL = false;
	var type= "0";
		
	_launchMKD( bInsert, bSSL, type );
}

function mkd25x_ssl_write_object() 
{
	var bInsert = false;
	var bSSL = true;
	var type= "0";
		
	_launchMKD( bInsert, bSSL, type );
}

function mkd25x_ssl_insert_object() 
{
	var bInsert = true;
	var bSSL = true;
	var type= "0";
	
	_launchMKD( bInsert, bSSL, type );
}

function mkd25x_set_authprefix( authprefix )
{
	document.getElementById("MKD25X").AuthPrefix = authprefix;
	
}

function mkd25x_start( product )
{
	if( navigator.appName == "Netscape" )
	{
		document.getElementById("MKD25X").Start( product );
	}
	else
	{
		if( document.readyState == "complete" )
		{
			document.getElementById("MKD25X").Start( product );
		}
		else
		{
			window.setTimeout( "mkd25x_start('" + product + "')", 100 );
		}
	}
}

function mkd25x_start_now( product )
{
	document.getElementById("MKD25X").Start( product );
}

function mkd25x_start_async( product )
{
	if( navigator.appName == "Netscape" )
	{
		document.getElementById("MKD25X").Start( product );
	}
	else
	{
		if( document.readyState == "complete" )
		{
			document.getElementById("MKD25X").StartAsync( product );
		}
		else
		{
			window.setTimeout( "mkd25x_start_async('" + product + "')", 100 );
		}
	}
}

function mkd25x_start_async_now( product )
{
	document.getElementById("MKD25X").StartAsync( product );
}

function mkd25x_start_direct( product )
{
	document.getElementById("MKD25X").StartDirect( product );
}

function mkd25x_set_protect(formName, inputName, level)
{
	document.getElementById("MKD25X").SetProtectLevel(formName, inputName, level);
}

function mkd25x_set_protect_level(level)
{
	document.getElementById("MKD25X").SetInitProtectLevel(level);
}

function mkd25x_set_authserver( authserver )
{
	document.getElementById("MKD25X").AuthServer = authserver;
	
}

function mkd25x_copy_to_form( form_object )
{
	ownerDocument = form_object.ownerDocument;
	
	ownerDocument.getElementById("MKD25X").SkipVerify( 1 );
	
	collObjects = form_object.getElementsByTagName( "input" );
	
	for( i=0; i<collObjects.length; i++ )
	{
		if( collObjects[i].type == "password" || collObjects[i].type == "text" )
		{
			value = ownerDocument.getElementById("MKD25X").GetText2( collObjects[i] );
			if( value != "" )
			{
				collObjects[i].value = value;
			}
		}
	}
	
	ownerDocument.getElementById("MKD25X").SkipVerify( 0 );
}

function mkd25x_get_text2( input_object )
{
	return document.getElementById("MKD25X").GetText2( input_object );
}

function mkd25x_get_text( formName, inputName )
{
	return document.getElementById("MKD25X").GetText( formName, inputName );
}

function mkd25x_check_text2( opcode, input_object, param )
{
	return document.getElementById("MKD25X").CheckText2( opcode, input_object, param );
}

function mkd25x_check_text( opcode, form_name, input_name, param )
{
	return document.getElementById("MKD25X").CheckText( opcode, form_name, input_name, param );
}

function mkdplus_registered()
{
	if( navigator.appName == "Netscape" )
	{
		return false;
	}
	else 
	{
		var xObj;
	
		try
		{
			xObj = new ActiveXObject( "mkdplus.mkdplusCtrl" );
		
			if( xObj )
			{
				return true;
			}
		}
		catch( ex )
		{
		}
				
		return false;
	}	
}
