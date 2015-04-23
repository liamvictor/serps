<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Yahoo Scrape</title>
	<link rel="stylesheet" href="/inc/reset-fonts-grids.css" type="text/css"> 
	<link rel="stylesheet" href="/inc/base.css" type="text/css"> 
	<link rel="stylesheet" href="/inc/style.css" type="text/css"> 
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
<style>
#bookmarkButton{
background: 7px 50% #78aa0d;
border-top: 6px solid #A1E411;
border-left: 6px solid #A1E411;
border-bottom: 6px solid #2AAB0D;
border-right: 6px solid #2AAB0D;
font-size: 1.2em;
line-height: 1.6em;
color: #ffffff;
display: block;
margin-left: auto;
margin-right: auto;
padding: 0.2em;
text-align: center;
width: 20em;
}
</style>
</head>
<body>
<div id="doc" class="yui-t7">
<!--
#doc - 750px centered (good for 800x600)
#doc2 - 950px centered (good for 1024x768)
#doc3 - 100% fluid (good for everybody)
#doc4 - 974px fluid (good for 1024x768)
.yui-t1 - Two columns, narrow on left, 160px
.yui-t2 - Two columns, narrow on left, 180px
.yui-t3 - Two columns, narrow on left, 300px
.yui-t4 - Two columns, narrow on right, 180px
.yui-t5 - Two columns, narrow on right, 240px
.yui-t6 - Two columns, narrow on right, 300px
.yui-t7 - One column
 -->
	<div id="hd">
		<h1>Yahoo Serps</h1>
		<ul>
			<li><a href="directories-check.php">Which Directories?</a>
			<li><a href="directories.php">Directories</a>
			<li><a href="serps-yahoo.php">Yahoo Serps Scrape</a>
		</ul>
	</div>
	<div id="bd">
		<div id="yui-main">
			<div class="yui-b">
				<div class="yui-g">
				<!-- YOUR DATA GOES HERE -->
				<p>This is a modified version of the SERPs Bookmarklet, which will report more Yahoo links. It's useful when seeing which <a href="directories.php">directories</a> a site is listed on.</p>


				<p align="center"><a id="bookmarkButton" href="javascript:(function(){str=&quot;<link href='http://www.onlinesales.co.uk/seo/bookmarklet/seo.css' rel='stylesheet' type='text/css'>\n&quot;;anchors=document.getElementsByTagName(&quot;a&quot;);str+=&quot;<table>&quot;;str+=&quot;<tr><th>#</th><th>HREF</th><th>Anchor</th></tr>\n&quot;;var k=0;var listing=&quot;&quot;;var links=&quot;&quot;;var anchorTexts=&quot;&quot;;for(i=0;i<anchors.length;i++){var anchorText = anchors[i].textContent;var anchorLink = anchors[i].href;if(anchorLink.match(/^((?!\.yahoo\.com\/$|wrs\.yahoo\.|yahoo\.com\/set|docs\.yahoo\.|search\.yahoo\.|info\.yahoo\.|help\.yahoo\.|answers\.yahoo\.|searchmarketing\.yahoo\.|linkdomain|cache|youtube\.com\/results|javascript:{}|api\.technorati\.com|botw\.org\/search|del\.icio\.us\/url\/check|digg\.com\/search|search\.twitter\.com\/search|search\.yahoo\.com\/search|siteanalytics\.compete\.com|tools\.seobook\.com\/general\/keyword\/suggestions|web\.archive\.org\/web\/|whois\.domaintools\.com|www\.alexa\.com\/data\/details\/main|www\.bloglines\.com\/search|www\.majesticseo\.com\/search\.php|www\.semrush\.com\/info\/|www\.semrush\.com\/search\.php|www\.stumbleupon\.com\/url|wikipedia.org\/wiki\/Special:Search).)*$/i)){listing+=anchorLink+&quot;\n&quot;;links+=&quot;<a href=\&quot;&quot;+anchorLink+&quot;\&quot;>&quot;+anchorText+&quot;</a>\n&quot;;anchorTexts+=anchorText+&quot;\n&quot;;k=k+1;if (anchorText === undefined) anchorText = anchors[i].innerText;str+=&quot;<tr>&quot;;str+=&quot;<td>&quot;+k+&quot;</td>&quot;;str+=&quot;<td><a href=&quot;+anchors[i].href+&quot;>&quot;+anchors[i].href+&quot;</a></td>&quot;;str+=&quot;<td>&quot;+anchorText+&quot;</td>&quot;;str+=&quot;</tr>\n&quot;;}}str+=&quot;</table><br/>&nbsp;<br/><h2>Plain Listing</h2><textarea cols=80 rows=10>&quot;;str+=listing;str+=&quot;</textarea><br/>&nbsp;<br/><h2>Anchors</h2><textarea cols=80 rows=10>&quot;;str+=anchorTexts;str+=&quot;</textarea><br/>&nbsp;<br/><h2>HTML Links</h2><textarea cols=80 rows=10>&quot;;str+=links;str+=&quot;</textarea><br/>&nbsp;<br/><p align=center><a href='http://www.onlinesales.co.uk/'>Bookmarklet by Liam Delahunty of Online Sales</a></p>&quot;;with(window.open()){document.write(str);document.close();}})()">Y</a><p>
				

				</div>
			</div>
		</div>
		<div class="yui-b">
		<!-- YOUR NAVIGATION GOES HERE -->
		</div>
	</div>
   <div id="ft"><p>God is Love</p></div>
</div>
</body>
</html>
