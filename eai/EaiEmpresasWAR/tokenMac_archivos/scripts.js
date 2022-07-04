function isDigit (c)
{
  return ((c >= "0") && (c <= "9"))
}

function isInteger (s)
	{
		var i
		for (i = 0; i < s.length; i++)
		{
			var c = s.charAt(i)
			if (!isDigit(c))
			return false
		}
		return true
	}
	

function finalizarSesion()
{
   window.close();
}
	