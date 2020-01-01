<!doctype html>
<html class="no-js" lang="en">

	<?php include('includes/head.php'); ?>
	
	<body>
		
		<!-- Dev Helper Tools: Delete before production -->
			<div class="viewport"><span id="w"></span><span id="h"></span></div>
			<ul class="tempnav">
				<li><a href="index.php">index.php</a></li>
				<li><a href="assignment-page.php">assignment-page.php</a></li>
			</ul>
		<!-- End Dev Helper Tools -->
	
		<a id="btn-top" class="top" title="Go to the top of the page."><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path d="M0 50c0 27.6 22.4 50 50 50 27.6 0 50-22.4 50-50S77.6 0 50 0C22.4 0 0 22.4 0 50zM51.1 19.8L87 58.1c0.6 0.6 0.6 1.8 0 2.4L76.1 72.2c-0.6 0.6-1.6 0.6-2.3 0L50 46.7 26.1 72.2c-0.6 0.6-1.6 0.6-2.3 0L12.9 60.5c-0.3-0.4-0.4-0.7-0.4-1.2s0.2-0.8 0.4-1.2l35.9-38.3C49.5 19.2 50.5 19.2 51.1 19.8z"/></svg></a>
		
		<button onclick="darkmodeToggle()" class="darkmode-btn">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" baseProfile="tiny" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path d="M100 50c0 27.6-22.4 50-50 50S0 77.6 0 50 22.4 0 50 0 100 22.4 100 50zM92.9 50C92.9 26.3 73.7 7.1 50 7.1v85.7C73.7 92.9 92.9 73.7 92.9 50z"/></svg>
		</button>
		
		<!--<article>-->
			
			<header class="assignment meta">
				<h1>S04: HTML & CSS Boilerplate</h1>
				
				<ul>
					<li><a href="https://www.dropbox.com/request/4MdpgiLP18ZqKgTZZILD"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" baseProfile="tiny" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path d="M100 50c0 27.7-22.3 50-50 50S0 77.7 0 50 22.3 0 50 0 100 22.3 100 50zM87.5 55.4L72.2 43.3l15.3-12.3L65.4 16.7 50 29.5 34.6 16.7 12.5 31l15.3 12.3L12.5 55.4l22.1 14.5L50 57.1l15.4 12.8L87.5 55.4zM72.2 43.3L50 57.1 27.8 43.3 50 29.5 72.2 43.3zM72.1 69l-6.8 4.3L50 60.6l-15.2 12.6 -6.9-4.2v4.2L50 86.3l22.1-13.2V69z"/></svg></a>Due: Mon, Feb 04, 2019</li>
					
					<li><svg xmlns="http://www.w3.org/2000/svg" version="1.1" baseProfile="tiny" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path d="M100 50c0 27.6-22.4 50-50 50S0 77.6 0 50 22.4 0 50 0 100 22.4 100 50zM89.3 50c0-21.6-17.7-39.3-39.3-39.3S10.7 28.4 10.7 50 28.4 89.3 50 89.3 89.3 71.6 89.3 50zM53.6 41.9V17.9c0-2-1.6-3.6-3.6-3.6s-3.6 1.6-3.6 3.6v24c-2.1 0.9-3.7 2.6-4.6 4.6H21.4c-2 0-3.6 1.6-3.6 3.6s1.6 3.6 3.6 3.6h20.4c1.4 3.1 4.5 5.4 8.2 5.4 4.9 0 8.9-4 8.9-8.9C58.9 46.3 56.7 43.2 53.6 41.9z"/></svg>Time: 30 minutes</li>
					
					<li><a href="https://www.dropbox.com/s/pfxrswhi80z1eu6/art336-boilerplate.zip?dl=0"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" baseProfile="tiny" x="0" y="0" viewBox="0 0 100 100" xml:space="preserve"><path d="M50 0C22.4 0 0 22.4 0 50c0 27.6 22.4 50 50 50 27.6 0 50-22.4 50-50C100 22.4 77.6 0 50 0zM23.7 38c0.2-0.5 0.7-1 1.2-1H39V21.2c0-0.7 0.3-2.2 1-2.2h20.1c0.7 0 1 1.5 1 2.2V37h14.1c0.5 0 1 0.5 1.2 1 0.1 0.5 0.1 1.2-0.3 1.5L50.9 64.6c-0.3 0.2-0.6 0.4-0.9 0.4s-0.6-0.1-0.9-0.3L24 39.5C23.7 39.2 23.6 38.5 23.7 38zM76 78.8c0 0.7-0.2 1.2-0.9 1.2H24.9C24.2 80 24 79.6 24 78.8v-7.5c0-0.7 0.2-1.3 0.9-1.3h50.2c0.7 0 0.9 0.6 0.9 1.3V78.8z"/></svg></a>Assets</li>
					
					<li>Points: 5</li>
				</ul>
			</header>
			
			<p>Now that you have your domain name pointing to the class web server, and you have setup your domain and subdomain so they appear in the server’s directory, it’s time to create your own web pages. However, before you start creating your own web pages, it’s important to understand what exactly the web browser is looking for when you type in a domain name, also known as a Uniform Resource Locator, or URL.</p>
			
			<p>Unless you supply other instructions, when you enter a URL into a web browser it starts looking for the <em>index</em> file. For example, if you enter <em>washingtonpost.com</em> into your web browser it will automatically look for the index file since you didn’t give it more precise information. Basically, when you type <em>washingtonpost.com</em>, the web browser is actually looking for <em>index.html</em>. Depending on the web server, an index file could end in .html, .htm, .php, .asp, or could have some other proprietary setup not germane to this course.</p>
			
			<p>Of course, nothing is ever simple. For example, some URL’s give the exact location of a web page, and therefore don’t need to search the web server for an index file. As an example, the following URL from the Washington Post  https://www.washingtonpost.com/local/md-politics/republican-outside-groups-take-a-rare-interest-in-deep-blue-maryland/2018/01/12/c5574e00-cefa-11e7-9d3a-bcbe2af58c3a_story.html gives the exact location of the web page on the web server forgoing the need for an index file. While it may seem a bit wordy it’s important to note that for Search Engine Optimization or SEO reasons, the descriptive name will yield better search results.</p>
			
			<p>Now, back to the <em>c5574e00-cefa-11e7-9d3a-bcbe2af58c3a_story.html</em> file that replaces the need for the web browser to search for an index.html file. The rest of the URL describes the location of the <em>c5574e00-cefa-11e7-9d3a-bcbe2af58c3a_story.html</em> file in the web server’s directory or folder structure. This means the <em>c5574e00-cefa-11e7-9d3a-bcbe2af58c3a_story.html</em> file is located in the <em>“12”</em> directory or folder inside the <em>“01”</em> folder, inside the <em>“2018”</em> folder which is inside the “republican-outside-groups-take-a-rare-interest-in-deep-blue-maryland” which is inside the <em>“md-politics”</em> folder, inside of the <em>“local”</em> folder located on the washingtonpost.com web server. Basically, the <em>“/”</em> indicates that a file or folder is within another folder.</p>
			
			<p>So what is the purpose of telling you all this? After all you are <em>Visual Designers</em>, not Web Developers! Simply put, you need to understand the medium you are designing for—the web—and you will be creating .html files as part of the course. Some files will be named index.html and others will have different names. When you come across those with different names, you’ll understand why.</p>
			
			<h2 id="what-is-a-boilerplate">What is a Boilerplate?</h2>
			
			<p>As part of this course you will be creating your own HTML pages and changing the default presentation, or look, of those pages with CSS. However, you don’t need to start each project empty handed. Many developers start their projects out with a Boilerplate, a set of folders and files that are common to each project. Since you are going to create a series of web pages throughout the duration of this course, you will first create your own HTML and CSS boilerplate based off the popular <a href="https://html5boilerplate.com/">HTML5 Boilerplate</a></p>
			
			<p><em>“So why not just use the HTML5 Boilerplate for the base of all of the course exercises?”</em></p>
			
			<p>I’m glad you asked! After completing this course and you go on to design and develop website either for yourself or for clients, you should use HTML5 Boilerplate as a starting point. However, the goal of this course is to help you understand the web as medium, and that includes learning HTML and CSS. If you don’t get the experience creating your own HTML and CSS files, you don’t fully understand the medium you are designing for. Plus, there is a lot of extra, but useful components in the HTML5 Boilerplate that we just don’t need for this course.</p>
			
			<p>Before you go on to the next section, make sure to download the starter boilerplate files I’ve prepared for you. The boilerplate I’ve supplied is in no way complete! You will need to complete the following screencasts to build your own boilerplate that will be the base for each exercise in the course.</p>
			
			<h2 id="the-boilerplate-contents">The Boilerplate Contents</h2>
			
			<p><img src="img/boilerplate-contents.jpg" /></p>
			
			<p>After you download and unzip the boilerplate you will see the same contents as in the above image. If you are using a Windows computer you may also see one or more files named <em>.DS_Store</em> which isn’t picture here. The .DS_Store file is proprietary to the macOS operating system. Windows users can delete the file, it won’t affect anything. MacOS users who can see the file through programs like Brackets or CyberDuck can delete the file too, but it will just be recreated again, so basically leave it alone.</p>
			
			<h3 id="folders">Folders</h3>
			
			<p>Within the boilerplate folder are the <em>assets, css, img, js</em> and <em>webfonts</em> folders. Each has their own unique purpose that I will expound on below and further cover in the screencast.</p>
			
			<h4 id="assets">Assets</h4>
			
			<p>The idea of the assets folder is more or less of my own creation. I find that when I’m working on a website that it’s better to store original files such Illustrator, Photoshop, and Sketch. I’ll even put the original raw photographic images in the assets folder as well. Whether you are working solo, with a developer, or as a team, it’s good to keep the original source files in the same place as your html, css, and javascript files. The reason you need to keep your original assets with the web development files has to do with the ever changing nature of the web. In print design once a design has been printed, it can’t be changed. That final print piece can only be discarded or reprinted at substantial cost so most people just live with the results.  However, you will discover as you gain experience in web design that clients always want changes…because things can be changed! Because of this, an image may need to be re-cropped or resized, a logo may need to be updated, etc., so it’s important to have the originals on hand to work from.</p>
			
			<p><strong>Tip:</strong> Do not upload the assets folder to the web server! Some of the files that you will be supplied throughout the course will easily exceed the space limit on the web hosting account I supplied you. If you upload the assets folder, you run the risk of causing a server error that will keep me from seeing your work.</p>
			
			<h4 id="css">CSS</h4>
			
			<p>The css folder is where you will place all your files that end in the <em>.css</em> file extension. The css folder is more or less industry standard. For example, web browsers will look for a folder named css and look within it for a file called <em>main.css</em> if a proper link to the css file is missing from the HTML file. This is why it’s important to use the standard set by the web design community that has since been adopted by modern web browsers.</p>
			
			<h5 id="maincss">main.css</h5>
			
			<p>The main.css file will be responsible for the presentation of your website, or in other words, how it looks. The web browser reads the main.css, and all .css files, from top to bottom. That normally wouldn’t be noteworthy, except a web browser can only remember one property declaration. Using a dictionary as an analogy, a css file can hold an unlimited number of different definitions and a web browser will remember them all. However, the web browser can’t remember conflicting definitions. If there are two definitions of the same word in the dictionary, the web browsers would only remember the last one it read.</p>
			
			<p>Switching the analogy back over to css, you the web browser won’t remember conflicting definitions and will remember the one it read last. So, if you declare on line 1 of main.css that the webpage will have an green background, and then declare on line 20 of that same file that the background color of the webpage is pink, the web browser will display a pink background, and forget the earlier definition. Being able to overwrite a previous css declaration is what makes responsive web design possible. Please note, a lot more on CSS will be covered as the course goes along, so this isn’t the final definitive discuss on the subject!</p>
			
			<h5 id="normalizecss">normalize.css</h5>
			
			<p>In the css folder you will find the normalize.css file. Normalize does a good job of styling HTML elements with know issues so they remain visually consistent as possible across all browsers and operating systems. This is something you most likely never actually notice unless you look at a web page on different browsers, operating systems, and devices. However, since you have no idea who the end user of a web page will be, it’s important to plan ahead. You can find out more information about <a href="https://necolas.github.io/normalize.css/">Normalize at its website</a>.</p>
			
			<h4 id="img">IMG</h4>
			
			<p>The <em>img</em> folder is also spelled out as <em>images</em> by some front-end developers. The purpose of the img folder is to store all of the optimized images that are part of the visual design of your web page. While I’ve seen both, the majority seem to use the <em>img</em> naming convention and it’s what’s used by the creators of the HTML5 Boilerplate, so we will use it too. Images file formats that you will store in this folder are .gif, .jpg or .jpeg, .png, and .svg.</p>
			
			<h4 id="js">JS</h4>
			
			<p>The <em>js</em> folder is another industry standard folder used to organize files. Specifically, javascript files. Within the folder you will find a file called <em>plugin.js</em> which came from the HTML5 Boilerplate and a <em>vendor</em> folder that contains files from outside developers. The <em>vendor</em> folder operates in much the same way as the <em>assets</em> folder: it’s a place to keep the originals. Even though I have included the <em>js</em> folder as part of the boilerplate, in this course, you won’t be using much javascript. In an oversimplification of javascript, it’s a programming language. While it can be used to manipulate the visual design of a website, it’s true purpose is to add functionality that doesn’t currently exist within HTML and CSS. Since we aren’t trying to add functionality, rather learn the web medium, 99.9% of what you need to know can be done with HTML and CSS.</p>
			
			<h4 id="webfonts">Webfonts</h4>
			
			<p>The <em>webfonts</em> folder is where you would place any <em>webfonts</em> you are self hosting. This folder is purely for organization purposes that would make sense if you were a front-end developer using Github for organizing version controlled projects. Even though you won’t get into learning front-end development best practices as it’s not necessary in this instance to understand the medium of the web, you certainly should follow best practices when they are pointed out to you.</p>
			
			<h3 id="files">Files</h3>
			
			<p>In addition to the folders, you will see a bunch of what may seem to be random files that are included as part of the boilerplate and are important to you as a Visual Designer wether designing for yourself or for a client.</p>
			
			<h4 id="browserconfigxml">browserconfig.xml</h4>
			
			<p>The browserconfig.xml file is important to you as a visual designer because it gives Microsoft browsers information on what icon to show under what circumstances. If you are a Windows user, you’ll understand the importance of creating an icon that takes advantage of the tiled mosaic Microsoft using in their operating systems. You can read more about how Windows utilizes these icons at https://msdn.microsoft.com/library/dn455106.aspx</p>
			
			<h4 id="indexhtml">index.html</h4>
			
			<p>As I’ve already mentioned, web servers by default look for the index.html file unless a URL is given containing a direct path to a file, or a full-stack developer changed the default web server settings. Since I’m supplying the web server, only the first two scenarios will apply to us, so you will be creating your own index.html file by following the screencast. The good news is, you only need to do this once. That’s why it’s called a Boilerplate. You will use this index.html file as a starting point in all your projects throughout the remainder of this course, even if you rename it to something other than index.html.</p>
			
			<p>You will need to <a href="https://www.dropbox.com/s/pfxrswhi80z1eu6/art336-boilerplate.zip?dl=0" target="_blank" title="ART 336 Boilerplate Files">download this file</a> <em>before</em> starting the screencast!</p>
			
			<div class="video-wrapper">
			<iframe width="1280" height="720" src="https://www.youtube.com/embed/QNEsDbBeUf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
			</div>
			
			<h4 id="site-icons">Site Icons</h4>
			
			<p>Within the boilerplate folder, you will notice a series of image files. These icons, as visual designers, are your responsibility. Thought and care needs to go into the design of each one, because each has their own unique use case. If you are not careful, anyone of these icons could be difficult for users to read if they are not designed correctly.</p>
			
			<h5 id="faviconico">favicon.ico</h5>
			
			<p>All of you have subconsciously seen a favicon.ico. It’s the tiny icon you will see on the tab of most web browsers.</p>
			
			<p><img src="img/icon-favicon.jpg" /></p>
			
			<p>In the example above, you will see both the favicon.ico and logo I created for the Design Edu Today podcast. Notice I didn’t simply use the logo for the favicon. Favicons are very small, and therefore don’t hold detail well. When the Design Edu Today logo is reduced to 32×32 pixels and smaller, it is completely illegible. Therefore I created a “D” shaped icon with the letter “EDU” within the shape.</p>
			
			<p>If you look at the favicons in the other tabs in the example above, you will notice many organizations take a similar approach to the design of smaller icons.</p>
			
			<h5 id="iconpng">icon.png</h5>
			
			<p>The icon.png file is used by Apple’s iOS to create icons for the home screen. Since Apple rounds the corner of the icon, you have to be careful with your design choices. Placing content too close to the edge will make the icon look awkward near the corners. You also need to take color into consideration. Since users can pick any type of background image, color, or texture they want, you want to design an icon that will stand out under most conditions.</p>
			
			<p><img src="img/icon-apple.jpg" /></p>
			
			<h5 id="tilepng-and-tile-widepng">tile.png and tile-wide.png</h5>
			
			<p>These two icons are specific to the Windows operating system, and offer the most opportunities for experimentation in visual design. As you can see in the screenshot below, Windows will display the icon either as a rectangle or square. You don’t have any control over which one as Windows makes the decision based on the number of icons on any given device and the available space. I think the design of the square is tricky in that it can be displayed at both large and small sizes. This means that you if you optimize your design for the larger size, it could lose its legibility at the small size, and vice versa.</p>
			
			<p><img src="img/icon-windows.jpg" /></p>
			
			<h5 id="humanstxt-and-robotstxt">humans.txt and robots.txt</h5>
			
			<p>These two files don’t have much to do with the visual design of a website, but are important to visual designers nonetheless.</p>
			
			<p>It’s best to think of the <a href="http://humanstxt.org/Standard.html" target="_blank" title="Extra humans.txt information">humans.txt</a> like a colophon page in a book. This is where you give credit to the people who helped make the website. This information is also available to the public and readable by search engines. So it’s up to you to decide how much information you want to be readily available to the public.</p>
			
			<p>From the context of a portfolio website, the <a href="http://www.robotstxt.org/robotstxt.html" target="_blank" title="Extra robots.txt information">robots.txt</a> file let’s things like search engines know if they should display the contents of the website in search results. Now, if you want your work private, don’t put it on the web because this file doesn’t hide content. The most it does is suggest whether to display the contents. It’s up to search engines like Google to decide if they want to honor the request. For the sake of this course, I’ve setup the robots.txt file to not index your sites contents in search engines. It’s up to you to decide if you want to promote the searchability of your work.</p>
			
			<h2 id="grading">Grading</h2>
			
			<p>This assignment will be worth 5 points. Create a duplicate folder and files and name the folder exactly as follows (all lowercase with hyphens and no blank spaces) <strong>html-css-boilerplate-firstname-lastname</strong>, and upload the files via the DropBox link. You can compress/zip the folder if that is easier for you.</p>
			
			<ul>
				<li>If you received between <strong>4–5 points</strong> you successfully downloaded the Boilerplate starting files and updated the index.html.</li>
				<li>If you received between <strong>1–3 points</strong> you did not properly or updated the index.html.</li>
				<li>If you received <strong>0 points</strong> you did not complete the assignment.</li>
			</ul>
		
		<!--</article>-->
		
		<?php include('includes/footer.php'); ?>
		
	</body>

</html>
