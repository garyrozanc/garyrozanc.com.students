---
layout: post
css: assignments
categories: art336
title: "S02: Web Hosting"
date: 2019-01-27
due-date: 2020-02-11
time: "30 minutes"
---

In the _01 Domain Names_ exercise you pointed your domain name to the course web hosting server located at 45.55.166.182. However, a web server can host multiple websites. Simply pointing your domain name to a web server&rsquo;s IP address won&rsquo;t tell the web browser where your specific files are located. Web servers are very similar to apartment buildings in how their addresses are organized. For example a street address will point to a single apartment building much like an IP address will point to a single web server. Within an apartment building there are individual apartments each with their own unique address, and web servers are setup exactly the same way.

Currently, you are missing the apartment number for the content you will be creating. Until you setup your apartment on the web server, it&rsquo;s not in the server&rsquo;s directory. So, if you waited the appropriate amount of time after updating your DNS settings, between 4 and 24 hours, and you type in your domain name into a web browser you will be directed to the web server&rsquo;s default web page, not your website! In this exercise you will setup your web hosting account so anyone can find your future website by typing in the domain name you registered.

## What is Web Hosting?
In a gross oversimplification of web hosting, it&rsquo;s simply a computer with a 24/7 connection to the internet that stores files that you upload to it. Since the computer is always connected to the internet when someone types a domain name into their web browser they are immediately redirected to the web server storing your files and then begin to download the content for you to view on your computer.

Obviously there is a lot more involved with web hosting. There are security issues that need to be monitored and accounted for. When you log into your managed hosting account you will have a control panel that will let you manage a lot of different features. If you plan on using an open source Content Management System, commonly referred to as a CMS, such as WordPress or Magento you need to have hosting that supports databases as well. There are a lot of companies out there where you can purchase web hosting from such as BlueHost, DreamHost, and Media Temple ranging from $4.00 to $20.00 a month. Many of the web hosting companies also offer email hosting so you can have an email address that matches your domain name.

When you sign up for a service like Squarespace or Shopify, it&rsquo;s very similar to purchasing web hosting, with one big difference: the CMS is already installed. Simply put, these website builders are web hosting services running their own proprietary software to help you create and manage a website. There is nothing wrong with using these services, but for the sake of this course and learning about the web as a medium you are going to learn to use web hosting to manage your custom built web pages.

## Configuring Your Sentora Web Hosting Account
In the past I&rsquo;ve asked students to sign up for web hosting accounts so they can complete the exercises in this course, but that has been problematic. First, it can get expensive. Usually to get that $4.00 a month rate you need sign up for two or even three years, otherwise you are going to pay $12.00 to $20.00 for a month to month basis. However, the biggest reason I now avoid using commercial web hosting is lack of access. When you have trouble with something in this course, simply emailing me you have a problem just doesn&rsquo;t work. I need access to the code to see where you made your mistake. To have access to your files I would need your username and password, and quite frankly I don&rsquo;t want that and I would assume that you would not want to share that.

To replicate commercial web hosting services for the learning experience and to have  access to your files in a non intrusive way I have set up a web hosting service using an open source web hosting panel called Sentora. Sentora gives me the ability to supply you web hosting that mimics what is commercially available. It also lets me view the files you upload to the server without you having to share your passwords with me. Best of all, it&rsquo;s free for you to use for the duration of the course, and thereafter until the web server runs out of room and I have to remove older users.

## Updating Basic User Information
At the start of each semester I create a web hosting account for each student enrolled in the course. The welcome email containing the necessary login information will be sent to your campus email account. If you don&rsquo;t see the welcome email look in your spam folder, it may have ended up there. If you misplace the original email, you can search for it by the subject line “Your Art 336 Web Hosting Account Details”.

Before you go further, be certain to follow the screencast and update your basic information, specifically your email address. I strongly suggest that you update your email address to one that you check regularly and will have access to post graduation. Since I don&rsquo;t remove accounts until the server starts to run out of room, you may have access to your web hosting account for personal use well after graduation. In the event that I need to remove you from the server, I would like to be able to tell you before I do it so you can make other arrangements. I can&rsquo;t do that if you don&rsquo;t give me a reliable email address!

Finally, you can also change your default password. The password sent to you in your welcome email is randomly generated and I don&rsquo;t have access to it. Even though I don&rsquo;t have access to it, it&rsquo;s pretty hard to remember unless you are using a password manager like 1Password or LastPass, so you may want to change it to something you will easily remember.

<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/NIYPprPdGLw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=153Fei8Ckz_DJ2LhGI8I2hWbJ8x_hcn9t)

## Creating a Domain
Going back to the apartment analogy, that&rsquo;s what you will be doing in this step. Since your domain name is pointing to the IP address of the course web server, you need to tell the web server where your files will be located.

For the sake of this course, you won&rsquo;t be putting your finished exercises in this directory. This directory is reserved for you to create and host your own personal website. As you complete this course you will learn all the necessary skills to create your own portfolio website, so take advantage of that.

**Tip:** when following along with the screencast, you need to use your own domain name, not mine!

<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/jWuI6GLFdS0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1izH2tkEsctQTd87MqpHtvD8Nap1GHCvD)

## Creating a Subdomain
A domain name is something like http://yourname.com, or a real world example would be http://oldnavy.com. However, for organization purposes it&rsquo;s better use a subdomain to direct users to your web pages. Using http://oldnavy.com as our real world example again, you&rsquo;ll notice that when you enter that domain name into a web browser you get redirected to http://oldnavy.gap.com. Since Gap is the parent company of Old Navy, the content managers though it best for marketing purposes to use “oldnavy” as a subdomain of gap.com.

In the following screencast you are going to be creating your subdomain named “art336” to upload your course exercises to. When you are done, you will have a subdomain that looks something like http://art336.yourname.com where you will upload your exercises to.

<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/Cwlh58ZurWg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1__6bFPVommbRiO6jLX2Kl6c5_DwcrO-a)

## Creating a FTP Account
Now that you have setup your web hosting account so you have directories to store your files on the web server you need a way to transfer the files from your computer to the course web server. Fortunately there is an easy way to do this using the File Transfer Protocol, or better known as FTP. To use FTP to transfer your files, you will need to create a FTP user in your Sentora Web Hosting account which is covered in the following screencast.

**Tip:** this time, use the same “ftp” username that I use in the screencast. After you create the user, you will notice that your actual ftp username that you will be using to transfer files will look similar to “yourname_ftp”. As for the password, use whatever you will remember, and no, I don&rsquo;t have access to your ftp password either.

<div class="video-wrapper">
	<iframe width="1280" height="720" src="https://www.youtube.com/embed/BjiUCTBYP04" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
[Download the Video File](https://drive.google.com/open?id=1G5MX6RDZNnSuTUfX7k1PIPJew4CCM9Ck)