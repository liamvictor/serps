// simple google results

javascript:( function(){
	str="<link href='http://www.onlinesales.co.uk/seo/bookmarklet/seo.css' rel='stylesheet' type='text/css'>\n";
	anchors=document.getElementsByTagName("a");
	str+="<table>";
	str+="<tr><th>#</th><th>HREF</th><th>Anchor</th></tr>\n";
	var k=0;
	var listing="";
	var links="";
	for(i=0;i<anchors.length;i++){
		var anchorText = anchors[i].textContent;
		var anchorLink = anchors[i].href;
		if(anchorLink.match(/^((?!google|cache|youtube\.com\/results|javascript:{}|javascript:void\(0\)|api\.technorati\.com|botw\.org\/search|del\.icio\.us\/url\/check|digg\.com\/search|search\.twitter\.com\/search|search\.yahoo\.com\/search|siteanalytics\.compete\.com|tools\.seobook\.com\/general\/keyword\/suggestions|web\.archive\.org\/web\/|whois\.domaintools\.com|www\.alexa\.com\/data\/details\/main|www\.bloglines\.com\/search|www\.majesticseo\.com\/search\.php|www\.semrush\.com\/info\/|www\.semrush\.com\/search\.php|www\.stumbleupon\.com\/url|wikipedia.org\/wiki\/Special:Search).)*$/i)){
			listing+=anchorLink+"\n";
			links+="<a href=\""+anchorLink+"\">"+anchorText+"</a>\n"; k=k+1; if (anchorText === undefined) anchorText = anchors[i].innerText; str+="<tr>"; str+="<td>"+k+"</td>"; str+="<td><a href="+anchors[i].href+">"+anchors[i].href+"</a></td>"; str+="<td>"+anchorText+"</td>"; str+="</tr>\n";
		}
	}
	str+="</table><br/> <br/><h2>Plain Listing</h2><textarea cols=80 rows=10>";
	str+=listing;
	str+="</textarea><br/> <br/><h2>HTML Links</h2><textarea cols=80 rows=10>";
	str+=links; str+="</textarea><br/> <br/><p align=center><a href='http://www.onlinesales.co.uk/'>Bookmarklet by Liam Delahunty of Online Sales</a></p>";
	with(window.open()){
		document.write(str);
		document.close();
	}
})()
