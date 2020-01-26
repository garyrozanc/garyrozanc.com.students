---
layout: post
css: assignments
categories: art336
title: "S01: Domain Names"
date: 2019-01-27 09:00:00
due-date: 2020-01-27
time: "30 minutes" 
---

To help understand the web as a design medium, you will first need to get content on the web so it&rsquo;s viewable on different devices and browsers. To get started, you will need two interrelated services: a place to store—host—your content online and a physical address so others can easily find the location of the hosted content you will be creating. In this exercise I will be discussing the physical address of the hosted files, the hosting of files will be covered in the _02_ Web Hosting exercise.

In an oversimplification of the process, every website that you visit has its files stored on a web server that has a connection to the internet. Each web server has a unique address referred to as an Internet Protocol Address, or better know as an IP address. IP addresses are a series of numbers that look similar to this example 31.13.91.36. If you were to type 31.13.91.36 into a web browser you would be served the files located on that web server. However, who is going to remember a random series of numbers like 31.13.91.36? 

To make things easier for users, you can register a domain name that is much easier to remember, such as facebook.com, and setup that domain name to redirect a web browser to a web server&rsquo;s IP address to start delivering the content of a website. If you haven&rsquo;t tried this already, typing 31.13.91.36 into your web browser will server up the files for facebook.com. You are going to perform this same task that will be demonstrated in the following screencasts with a domain name that you register at namecheap.com.

## Finding a Domain Name Registrar
Before you can point a domain name to the IP address of the web server hosting your files, you need to register a domain name through a domain registrar. There are probably hundreds of domain registrars and with a few exceptions, they all pretty much work and cost the same...after the first year. Before I explain the _“after the first year”_ comment, it&rsquo;s important to note that when you register a domain name, you are _leasing it_, not buying it. You can lease the domain name for a year, two years, five years, etc. at a time. However, at the end of the initial lease period you have to renew your domain name lease. It&rsquo;s at this point the price of the renewal of a domain name is pretty standard across most domain registrars. Depending on the domain extension e.g., .com, .info, .me, the renewal price will range from $5.00 to $40.00 a year.

It&rsquo;s during that first year that it&rsquo;s nearly impossible to compare apples to apples. For example, registering garyrozanc.live at name.com will cost $5.00 the first year, and $19.99 each subsequent year. Registering garyrozanc.live at namecheap.com will cost $3.88 the first year, and $19.88 each year thereafter, so in this instance namecheap.com is a slightly better value. To make things easier for instructing this course I&rsquo;m going to ask that you register your domain name at namecheap.com. There may be cheaper domain registrars out there, however if you aren&rsquo;t careful, you could end up registering a domain name that costs $0.48 the first year and auto renews at $25.88 when going it alone, but if you **follow the instructions** I&rsquo;m supplying, you will avoid that mistake.

## Making a Domain Name Private
No matter who the Domain Name Registrar is, the information of the person who is leasing the domain name is publicly available. For example, going to <a href="https://www.whois.com/whois/</a>" target="_blank" title="Whois Lookup">https://www.whois.com/whois/</a> and running a Whois Lookup for facebook.com will reveal the name, address, and phone number of the person who leased the domain name.

![Whois Lookup Screenshot](../img/art336-whois-lookup.jpg)

For a fee, a domain name registrar will give you the option to make your information private. This will hide your personal information from people, such as telemarketers, who will be looking for this information. It&rsquo;s entirely up to you to decide if you want to make your information public or private, but at the time of this writing namecheap.com offers one year of free domain name privacy.

**Tip:** by default most domain name registrars autofill the pubic facing information with your billing address. After registering your domain name you can go back into namecheap.com and update the Whois information with another address. I use my school mailing address and phone number to avoid having my personal information public. However, I also have a couple of domain names where my personal contact information is public and I don&rsquo;t get excessive marketing email or phone class, so your mileage may vary.

## Picking a Domain Name
Once upon a time, picking the right domain name and domain extension was really important, especially for the marketing strategy of big brand names like Coca-Cola or Apple, but that has changed. This is especially true for personal or portfolio websites. With hundreds of domain name extensions out there now, you can pick something as safe as yourname.com, or get creative and spell something out like <a href="http://tina.is/" target="_blank" title="Tina Essmaker">tina.is</a>, or <a href="http://brad.ly/" target="_blank" title="Brad Smith">brad.ly</a>. _Yes, those are actual domain names, give them a try if you don&rsquo;t believe me._

Since the sky&rsquo;s the limit when it comes to picking a domain name, I only have one piece of advice, **keep it professional**. The exercises you will be doing in the course will demonstrate to future employers that you have a basic understanding of the web as a design medium and you will want to broadcast that fact. However, emailing a hiring manager a link to your portfolio website with a domain name like http://garyisadesign.ninja (yes, .ninja is a real domain extension) instead of something simple like gary.is could be very off putting. 

I suggest you keep it simple, try and register something like yourname.com, or any variation of that. For the sake of this course however, you can pick whatever you want, I promise I won&rsquo;t judge you!

## Registering a Domain Name
In the past, I&rsquo;ve left it up to students to figure out how to do the registration portion after all it&rsquo;s not a complicated task to register a domain name. However, there are a couple of things that you should be looking out for such as auto renew, privacy settings, and extra services that most registrars have on as a default to generate extra income. Because of this, I&rsquo;ve created a screencast walking you through the registration process. It should go without saying, substitute your own domain name of choice and billing information, not mine!

<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/LD8eGrQFe3U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

## Pointing the Domain Name to an IP Address
As I alluded to in the second sentence of this exercise, a domain name is part of interrelated process that allows people to see your files via the internet. Since the domain name is only one service in an interrelated process, unfortunately what you are about to do won&rsquo;t yield any visible results until you complete the next exercise: _02 Web Hosting_. 

However, even though you won&rsquo;t see the results until the next exercise, it&rsquo;s important to take care and make sure you follow the screencast exactly. In the screencast, you will be creating three Domain Name Server or DNS records, two A records, and one CNAME record, that will direct web browsers to the locations of your files on the course web server. You will be using the IP address of the class web server 45.55.166.182 to create the link between your domain name and the future location of your files. 

<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/8F50PRB3vgc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>