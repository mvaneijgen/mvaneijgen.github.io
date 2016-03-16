---
layout: post
title:  "Getting started with automator"
author: Mitchel van Eijgen
date:   2015-03-29 16:41:48
categories: Gerneral
filter: Image
image: automator.jpg
embed:
color: ddd
---

I have been a Mac users for more that five years, but only recently I started thinking around with Automator. There where some recurring task that I did often and took me some time to setup, the one that took the most time was setting up project folders for new projects. There where a few basic files/folders we create with every project like “Submitted”, “Preview” and a folder called “old”. We have also created a template file with every social media avatar/banner size. It happend more often than I like to admit that I dragged over the assets files and forgot to copy them, so later when we wanted to create a new folder the files where gone and we had to reconstruct them from other files. An other tedious task as getting the clients initials and the date of the start of the project in the file name. This process took only a minute of so, but there was to much room for error and was just not fun.

<!--more-->

We already played around a lot with [IFTTT](http://ifttt.com) and saw the potential of automating your workflow for a lot of clients of ours. So this got us thinking with the build in application Automator that comes with every Mac. This is an amazing GUI app that lets you create fairly powerful application with just a few drag and drops. The only thing is you need a stepping stone to help you get started to see the great potential. It really helps to just browses true every action that is build into the library and try some things out that seem interesting, so that is what what we did. In a few minutes we had a simple workflow that copied our asset files/folders and copied them to a place we wanted. This workflow we build out more and more complets and we created into a ’service’ (a service is a action you can connect to the right click menu of your Mac). Now if we want to create a new project folder we navigate to the client folder > right click the client folder go to services > click “New project folder” and the service will prompt a project name and create a folder with all our assets named [project name]_MMYY_[client initials].

Now when we get a task that we do often we try to keep Automator in the back of our heads to see if we can make things easier on our self. The ‘Create project folder’ task was our stepping stone to get familiar with Automator and it has been a great eye opener. Just recently we got a project of redesigning a clients website and we had to manualy download all the sources images from the webpage, which was a tidius task. Right clicking all the images saving them at the desired location and there where a lot more pages to go when it hit me on page five. What if I get the open webpage from safari and let Automator look for all the linked images and than store them in a folder named the same as the title of the page.

Just humor me next time you get a tidius task and are wondering if you could automate, open Automator and try to create something. It will open up a whole new world to you.
