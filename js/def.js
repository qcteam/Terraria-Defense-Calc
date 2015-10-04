/* JS File By TmzOS - QC! Team */ 

function run()
{
	calc(document.getElementById('inputDefense').value, document.getElementById('inputDamage').value);
}

function calc(def, dmg)
{
	if(!dmg.isNaN && !def.isNaN)
	{
		var defs = def;
		var dmgs = dmg;
		
		if(dmg < 0 || dmg > 999)
		{
			dmgs = 1;
			document.getElementById('inputDamage').value = 1;
		}
		
		if(def < 0 || def > 999)
		{
			defs = 1;
			document.getElementById('inputDefense').value = 1;
		}

		var v = Math.ceil(defs*0.5);
		var v2 = Math.ceil(defs*0.75);
		var d = Math.ceil(dmgs-v);
		var d2 = Math.ceil(dmgs-v2);
		
		document.getElementById("resultN").innerHTML = v;
		document.getElementById("resultE").innerHTML = v2;
		document.getElementById("resultND").innerHTML = d;
		document.getElementById("resultED").innerHTML = d2;
		
	}
}