---
layout: post
css: assignments
categories: art336
title: "S08: Web Typography Hierarchy Page"
date: 2019-01-27
due-date: 2020-03-09
time: "6 hours"
points: 40
assets: https://garyrozanc.com/students/downloads/art336-typographic-hierarchy-page.zip
---

There are many think pieces out there making the claim that the web is primarily composed of 95% typography<sup><a href="#one" target="_blank" title="Resource Article #1" class="scroll">1</a>,<a href="#two" target="_blank" title="Resource Article #2" class="scroll">2</a></sup>. I&rsquo;m not going to argue the science and accuracy of these claims, I bring it up because even if you don&rsquo;t believe the stats, you can&rsquo;t argue that there is a lot of reading done on screen based devices and it&rsquo;s the graphic designer&rsquo;s job to make sure all the content is presented in the most legible way possible.

Fortunately, HTML and CSS gives designers nearly unlimited control over the typography on a webpage. Not only can you choose an array of webfonts for different needs, you can determine the scale of headlines in relation to the paragraph copy, how to display lists, quotes, and much more. Once the web browsers started providing support for CSS3&rsquo;s <code>@media</code> property visual designers gained even more control. Now, visual design can give instructions to web browsers to adjust the typographic scale based on specific pixel dimensions to create optimal reading lengths for headlines and paragraph copy. This means that you can now create instructions for the browser that tell it to display the typography at one scale for a smartphone, and another scale for a laptop or desktop computer.

Unfortunately, the ability to use HTML and CSS to control your typographic choices isn&rsquo;t as straight forward as using layout programs like InDesign or Sketch. Both HTML and CSS have their own little nuances that you will need to learn to be a successful visual designer. Most likely you will be handing this work off to a front-end developer once you are working in the industry. However, if you don&rsquo;t want them to make the typographic design decisions for you, it&rsquo;s necessary to learn what HTML and CSS you can control as a designer when it comes to typography— _basically 95% of the web_!

While web typography needs both HTML and CSS to be adjusted, for learning purposes I think it&rsquo;s best to split them into separate categories that are commonly referred to as: Structure and Presentation. 

## HTML
HTML is considered the “Structure” layer. Using HTML tags, you define specific contents of a web page so search engines and browsers know what to do with the information. For example, the <code>&lt;article&gt;</code> tag tells a search engine like Google that the content marked up is an article and a <code>&lt;h1&gt;</code> tag within an <code>&lt;article&gt;</code> tag tells the search engine the name of the article. With the advent of HTML5<sup><a href="#three" target="_blank" title="Resource Article #3">3</a>,<a href="#four" target="_blank" title="Resource Book #4">4</a></sup> there is a bevy of tags available to make certain that your web page&rsquo;s content is found in a relevant search!

Where HTML falls short is how it typographically styles the marked up content. If you were to leave the default styling of a longer headline marked up with a <code>&lt;h3&gt;</code> tag, it could easily be mistaken for a pull quote. However, before you learn how to use CSS to change the default “Presentation”, you need to know the common HTML tags that affect the visual hierarchy of typography as well as the tag&rsquo;s contextual function in search results. This and more will be covered in-depth in the following screencasts on HTML.

### Part 01 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/LSyjiLzALBc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=12Xd0-YESUObRusJoyeZbkTnqR_wOfHU_)

### Part 02 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/jYyUbkXxqiw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=19aPCOhdG1rmxFO06p-7RrTrPsa7C10MF)

### Part 03 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/iPtZkLXtXs0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=122RHJbxNYa6BAem_zRlgaq6giOX16PcB)

### Part 04 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/e6MviBwa9Ms" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1AC9a46iQ5SPHuuR_-s05DazyTNqemUSt)

### Part 05 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/x9nBbYCueNo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1q26mJFyb8LaQA4hQuDYOzC-B_Wg3YqR6)

### Part 06 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/L0fFurmhGwY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1eb7UVyT_BF1XOdA3fNVrQigU-sMUpwzU)

### Part 07 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/q_FI2wOXLAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1Ff3TqVKaUwLd_ah5E8AB07v3_MHSb4nf)

### Part 08 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/ALrak6RhW2Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1VC8jV9YGtiytF539E19yOuoFjkZwb6Ow)

## CSS
As discussed in the previous screencasts, the default styling of many HTML tags can lead to confusion for the user. Fortunately, visual designers have the ability to adjust the default styling with Cascading Style Sheets (CSS), also referred to as the “Presentation” layer. As a visual designer, you are technically not responsible for turning your mockups and prototypes into working code. There are a lot of nuances to modern front-end development that it would be hard for you to learn it all and master your visual design skills. However, there isn&rsquo;t that much to learn when it comes to typography and CSS so it&rsquo;s worth the effort to lean as much as you can!

In the following screencasts you will learn to use CSS selectors to target basic HTML elements. You will also use CSS properties and values to change the default typography on a web page. Finally, you will begin to use classes to target specific HTML elements.

![CSS Diagram](../img/art336-smartphone-reach-area.png)

### Part 09 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/yx_n5LBr3Yg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1YQdG3tvMG1BWcr-3YGnnwIZXh1rfK24s)

### Part 10 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/L2uwM7wvboA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1Wp43CKB8QGkS_ocsjiHgYXqjCuxP0VTf)

### Part 11 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/hr46912BjoI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1Xr14hJiXTh2Q0Adfmq1LKsQzGknWXe-v)

### Part 12 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/rYT3UfPq4zI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1_74DRzH-8rrKH3dWZ4z8AbRzUbtBbrKN)

### Part 13 of 19
<div class="video-wrapper">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/ClRrx3hfN5I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1ld-exDCSTclPKXcIXvKkE-brJ9y3naJI)

### Part 14 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/8QsG6yIFjpg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1VGwFFdkkzj8QgA1TJFcmqOHR9j678bOr)

### Part 15 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/mvPrUhcViVk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1xt3Rz4oRiJLGup67BXGbKy1zhFrL_TH4)

### Part 16 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/cEx1gA4vAhc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1gYj9rleL42HleDW3bd-4fjxI0l3L64Ox)

### Part 17 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/Otoof_9Yo0E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1qQPnPZWY4_yslLVkpi5FpEe5fNFskPcr)

### Part 18 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/Vw2y_agD6SA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1G-hsEYtIu8nfAVC86waasK-GNUNEfL1b)

### Part 19 of 19
<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/pjF5T8g6iFE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1Zj9s4y05YjMVN-JcYunIvqBMQTbewRfw)

## Grading

### Learning Objectives Applied
- Understanding
  - Demonstrate HTML5 and its contextual, semantic purpose, and classify the markup content.
  - Demonstrate CSS&rsquo;s use for content presentation by illustrating its effects on typography, imagery, and layout.

### Assessment Rubric
- Rubric coming soon…
- If you received **27&ndash;40 points** you successfully marked up the text with the proper HTML tags, and successfully changed the typographic hierarchy of the page with CSS.
- If you received between **1&ndash;26 points** you did not properly mark up the majority of the text with the proper HTML tags and did not make all the necessary changes to the typographic hierarchy of the page with CSS.
- If you received between **0 points** you did not complete the assignment.

## Resources
- <a href="https://meowni.ca/font-style-matcher/" target="_blank" title="Font style matcher">Font style matcher</a>
- <a href="https://css-tricks.com/css-basics-fallback-font-stacks-robust-web-typography/" target="_blank" title="CSS Basics: Fallback Font Stacks for More Robust Web Typography | CSS-Tricks">CSS Basics: Fallback Font Stacks for More Robust Web Typography | CSS-Tricks</a>
- <a href="https://css-tricks.com/snippets/css/system-font-stack/" target="_blank" title="System Font Stack | CSS-Tricks">System Font Stack | CSS-Tricks</a>
- <a href="https://www.cssfontstack.com/" target="_blank" title="CSS Font Stack: Web Safe and Web Font Family with HTML and CSS code.">CSS Font Stack: Web Safe and Web Font Family with HTML and CSS code.</a>
- <a href="https://abookapart.com/products/css3-for-web-designers" title="A Book Apart, CSS3 for Web Designers" target="_blank">CSS3 for Web Designers</a> by Dan Cederholm
- <a href="https://garyrozanc.com/students/downloads/art336-typographic-hierarchy-page.zip" target="_blank" title="Template">Template Files</a>
- <a href="https://www.webpagetest.org/" target="_blank" title="WebPagetest - Website Performance and Optimization Test">WebPagetest - Website Performance and Optimization Test</a>

## Footnotes
1. <a href="https://ia.net/topics/the-web-is-all-about-typography-period/" target="_blank" title="Web Design is 95% Typography" id="one">Web Design is 95% Typography</a>
2. <a href="https://www.smashingmagazine.com/2012/07/one-more-time-typography-is-the-foundation-of-web-design/" target="_blank" title="One More Time: Typography Is The Foundation Of Web Design" id="two">One More Time: Typography Is The Foundation Of Web Design</a>
3. <a href="http://html5doctor.com/" target="_blank" title="HTML5 Doctor Website" id="three">HTML5 Doctor</a>
4. <a href="https://abookapart.com/products/html5-for-web-designers" target="_blank" title="HTML5 for Web Designers" id="four">HTML5 for Web Designers</a> by Rachel Andrew & Jeremy Keith