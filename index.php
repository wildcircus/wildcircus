<!Doctype html>
<html>
	<head>
		<title>Wild Circus</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="content-language" content="en" />
		<meta name="language" content="English"/>
		<meta name="keywords" content="wild, circus, cirque, animations, tour, 2016, world, fantastic, the elements, journey" /> 
		<meta name="description" content="A fantastic journey through time and space. Check the tour dates now!" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen"/>
		<link rel="icon" type="image/png" href="img/favicon.png" />
		
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body>
		<div id="border">
			<img src="img/wc.png" width="200px" alt="wild circus logo" title="Wild Circus" id="logo"/>
			<span id="menu_button">MENU</span>
			
			<div id="page1" class="pageActive page">
				<div id="intro" class="hide">
					<center>
						<span class="bigTitle">Welcome to the</span>
						<span class="bigTitle2">Wild Circus</span>
						<br/><br/><br/>
						<div id="intro_press">
							<span class="press_text">“Simply amazing!”</span><span class="press_name"> - The Wall Street Journal</span>
						</div>
						<br/><br/><br/><br/><br/>
						<a href="#" id="startLink" onclick="javascript:theShow();">The Show</a>
						
					
					</center>
				</div>
			</div>
			<div id="page2" class="pageHidden page">
				<div class="pageLeft" style="float:left;">
					<div class="pageContainer">
						<div class="pageCenter" style="padding-left:35%;padding-right:1%;">
							<h1 class="pageMainTitle">The Show</h1>
							<p class="pageText">The show "The Elements" described the four elements of life through four sumptuous paintings. A journey through time and space. Discover the highly creative and artistic spectacle of wild circus.</p>
							
							<center><span id="tableTitle">Performing Steps</span></center>
							<hr />
							<table id="tableShow">
								<tr>
									<td class="tdNumber">I.</td>
									<td class="tdPerformanceTitle">“Fire”</td>
									<td class="tdShowPicture"><span class="showPictureButton showPictureButtonActive fire"><img src="img/arrow.png" alt=">" title=""/></span></td>
								</tr>
								<tr>
									<td class="tdNumber">II.</td>
									<td class="tdPerformanceTitle">“Air”</td>
									<td class="tdShowPicture"><span class="showPictureButton air"><img src="img/arrow.png" alt=">" title="" /></span></td>
								</tr>
								<tr>
									<td class="tdNumber">III.</td>
									<td class="tdPerformanceTitle">“Water”</td>
									<td class="tdShowPicture"><span class="showPictureButton water"><img src="img/arrow.png" alt=">" title=""/></span></td>
								</tr>
								<tr>
									<td class="tdNumber">IV.</td>
									<td class="tdPerformanceTitle">“Earth”</td>
									<td class="tdShowPicture"><span class="showPictureButton earth"><img src="img/arrow.png" alt=">" title=""/></span></td>
								</tr>

							</table>
							<a href="#" class="pageButton" style="margin-top:30px;" onclick="javascript:dates();">See dates</a>
						</div>
					</div>
				</div>
				<div class="pageRight" style="float:right;">
					<div id="showSymbol"><img src="img/firesymbol.png" alt="symbol"/></div>
					<div id="showBackground"></div>
					<div id="artistListOpen">

						<center><span class="seetheartists">See the artists</span></center>
						<hr/>
						<div id="artistListContainer">
							<div class="artistListContainerItem" style="left:0px;">
								<div class="artist">
							<table><tr>
									<td><div class="artistPicture" style="background-size:cover;background-image:url('img/1.jpg');"></div></td>
									<td><span class="artistName">TUMELO Moloi<br/>FRANCE</span></td>
								</tr>
							</table>
						</div>
								<div class="artist">
							<table><tr>
									<td><div class="artistPicture" style="background-size:cover;background-image:url('img/1.jpg');"></div></td>
									<td><span class="artistName">MOLOI Tumelo<br/>SWITZERLAND</span></td>
								</tr>
							</table>
						</div>
								<div class="artist">
							<table><tr>
									<td><div class="artistPicture" style="background-size:cover;background-image:url('img/2.jpg');"></div></td>
									<td><span class="artistName">BAYART Odmaa<br/>MONGOLIA</span></td>
								</tr>
							</table>
						</div>
								<div class="artist">
							<table><tr>
									<td><div class="artistPicture" style="background-size:cover;background-image:url('img/3.jpg');"></div></td>
									<td><span class="artistName">CONVERY Vanessa<br/>CANADA</span></td>
								</tr>
							</table>
						</div>
								<div class="artist">
							<table><tr>
									<td><div class="artistPicture" style="background-size:cover;background-image:url('img/4.jpg');"></div></td>
									<td><span class="artistName">DOUCET Claudel<br/>CANADA</span></td>
								</tr>
							</table>
						</div>
								<div class="artist">
							<table><tr>
									<td><div class="artistPicture" style="background-size:cover;background-image:url('img/5.jpg');"></div></td>
									<td><span class="artistName">GIBSON Ross<br/>UNITED KINGDOM</span></td>
								</tr>
							</table>
						</div>
								<div class="artist">
							<table><tr>
									<td><div class="artistPicture" style="background-size:cover;background-image:url('img/6.jpg');"></div></td>
									<td><span class="artistName">JIAN Zengjiao<br/>CHINA</span></td>
								</tr>
							</table>
						</div>
								<div class="artist">
							<table><tr>
									<td><div class="artistPicture" style="background-size:cover;background-image:url('img/7.jpg');"></div></td>
									<td><span class="artistName">LACASSE Miro<br/>CANADA</span></td>
								</tr>
							</table>
						</div>
							</div>
							<div class="artistListContainerItem" style="left:150px;">
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/8.jpg');"></div></td>
											<td><span class="artistName">OLEK Penko<br/>UKRAINE</span></td>
										</tr>
									</table>
								</div>
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/9.jpg');"></div></td>
											<td><span class="artistName">SKINNER Lisa<br/>AUSTRALIA</span></td>
										</tr>
									</table>
								</div>
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/10.jpg');"></div></td>
											<td><span class="artistName">TELLANDER Zara<br/>SWEDEN</span></td>
										</tr>
									</table>
								</div>
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/11.jpg');"></div></td>
											<td><span class="artistName">ALEGRIA Sabu<br/>MEXICO</span></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="artistListContainerItem" style="left:300px;">
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/12.jpg');"></div></td>
											<td><span class="artistName">BOGART PJ<br/>UNITED STATES</span></td>
										</tr>
									</table>
								</div>
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/13.jpg');"></div></td>
											<td><span class="artistName">DE SANTI Marco<br/>BRAZIL</span></td>
										</tr>
									</table>
								</div>
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/14.jpg');"></div></td>
											<td><span class="artistName">HAJJAMI Hassan<br/>FRANCE</span></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="artistListContainerItem" style="left:450px;">
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/15.jpg');"></div></td>
											<td><span class="artistName">HAMEL Lionel<br/>CANADA</span></td>
										</tr>
									</table>
								</div>
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/16.jpg');"></div></td>
											<td><span class="artistName">HACHEY Michael<br/>UNITED STATES</span></td>
										</tr>
									</table>
								</div>
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/17.jpg');"></div></td>
											<td><span class="artistName">LOPATKINA Julia<br/>RUSSIA</span></td>
										</tr>
									</table>
								</div>
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/18.jpg');"></div></td>
											<td><span class="artistName">SANCHEZ Raphaël<br/>FRANCE</span></td>
										</tr>
									</table>
								</div>
								<div class="artist">
									<table><tr>
											<td><div class="artistPicture" style="background-size:cover;background-image:url('img/19.jpg');"></div></td>
											<td><span class="artistName">GONZALEZ Denise<br/>UNITED STATES</span></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div id="page3" class="pageHidden page">
				<div class="pageLeft" style="float:left;">
					<div class="pageContainer">
						<div class="pageCenter" style="padding-left:30%;padding-right:1%;">
							<h1 class="pageMainTitle">Address & Contact</h1>
							<p class="pageText">Our mission is to give you unforgettable memories of fantastic experiences. We want to hear your feedback – whether complaint or congratulation – so that we can continue to improve your experience.<br/>Please contact us, to let us know what you think.</p>
							<p class="pageAddress">
								Wild Circus<br/>
								Royal Albert Hall<br/>
								Kensington Gore SW7 2AP<br/>
								London, UK<br/>
							</p>
							<table>
								<tr>
									<td class="contactIconTd"><img src="img/tel.png" alt="phone" title="phone"/></td>
									<td class="contactInfoTd"><a href="tel:+442075898212">+ 44 20 7589 8212</a></td>
								</tr>
								<tr>
									<td class="contactIconTd"><img src="img/mail.png" alt="mail" title="mail"/></td>
									<td class="contactInfoTd"><a href="mailto:info@wildcircus.co.uk">info@wildcircus.co.uk</a></td>
								</tr>
								<tr>
									<td class="contactIconTd"><img src="img/map.png" alt="map" title="map" height="25px"/></td>
									<td class="contactInfoTd"><a href="http://maps.google.com/?q=Royal Albert Hall Kensington Gore London" target="_blank">Map</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="pageRight" style="float:right;">
					<div id="showBackground" style="background-image:url('img/london.jpg');opacity:0.80;"></div>
				</div>
			</div>
			</div>
			<div id="page4" class="pageHidden page">
				<div class="pageLeft" style="float:left;">
					<div class="pageContainer">
						<div class="pageCenter" style="padding-left:35%;padding-right:2%;">
							<h1 class="pageMainTitle">Dates</h1>
							<center><span id="tableTitle">The Tour of 2016.</span></center> 
							<table id="tableShow">
								<tr>
									<td class="tdNumber">05/03/2016</td>
									<td class="tdPerformanceTitle">Las Vegas</td>
								</tr>
								<tr>
									<td class="tdNumber">26/03/2016</td>
									<td class="tdPerformanceTitle">New York</td>
								</tr>
								<tr>
									<td class="tdNumber">16/04/2016</td>
									<td class="tdPerformanceTitle">Montreal</td>
								</tr>
								<tr>
									<td class="tdNumber">07/05/2016</td>
									<td class="tdPerformanceTitle">Paris</td>
								</tr>
								<tr>
									<td class="tdNumber">28/05/2016</td>
									<td class="tdPerformanceTitle">London</td>
								</tr>
								<tr>
									<td class="tdNumber">18/06/2016</td>
									<td class="tdPerformanceTitle">Barcelona</td>
								</tr>
								<tr>
									<td class="tdNumber">09/07/2016</td>
									<td class="tdPerformanceTitle">Roma</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="pageRight" style="float:right;">
					<div id="showBackground" style="background-image:url('img/datesbackground.jpg');opacity:0.80;"></div>
				</div>
			</div>
		</div>
		
		<div id="layer"></div>
		<div id="background">
			<img src="img/background0.jpg" alt="background" title="" style="opacity:1;"/>
		</div>
		<div id="menu_container">
			<center>
				<a class="menu_item" href="#" onclick="javascript:home();">Home</a>
				<a class="menu_item" href="#" onclick="javascript:theShow();">The Show</a>
				<a class="menu_item" href="#" onclick="javascript:dates();">See Dates</a>
				<a class="menu_item" href="#" onclick="javascript:contact();">Contact</a>
			</center>
		</div>

		<div id="bottomCopyright">© 2016 Wild Circus, All rights reserved</div>
 	</body>
</html>