# GsubA - FusionShell Version25 - Linux or Windows Appliance Panel Site Server Portal Software - ForCleanDedicatedStart - Up and Running in 5mins or less on a new Windows Server or VM

MAJOR CHANGES FROM V4 SOFTWARE
From V4 to V25O....
New Bootstrap Formatted Template Pages.
New Out of the Box Working SSO & UserProfile Pages from localuser.json. If you choose to ignore Joomla you have that option now.
Updated Installer Instructions.
Improved Menu Navigation Top and Bottom.
Notice of EOL of Version4 Software - Calendar Year 26.
Updated Installation Instructions.
Login/Logout PHP Pages.
Contact Forms for Each Major Division Page using Linux/Sendmail.

PLATFORM REQUIREMENTS<BR>
This platform requires a working webserver with PHP enabled. We support NGINX, Apache, or IIS, with the latter two recommended. (NGINX is very robust but requires
expert Linux/Windows Administration help). [If you need help - To get help with these tasks we recommend installing Ubuntu linux, and simply search for Apache & PHP install Ubuntu and you will find hundreds of instruction sets which are workable. Ubuntu 16.04+ is very stable and available on G.Cloud, Amazon Cloud, and Microsoft Azure Cloud]
Alternatively we suggest buying a shared cPanel Server which averages about 25.00 a month and then its very easy to install our application and others.

REPOSITORY OVERVIEW

Greenville Associates Fusion Shell V4/V25.O+ - Linux or Windows Appliance Server with Apache Web Services & Mysql 5.7 Community & PHP 5.6
(For Clean Installs - For Existing Platforms and web servers we recommend Version 2)

This shell provides a Open Platform Targeted Windowing System(On Windows/Linux/Unix) to provide javascript, HML5, PHP, Custom Microsoft(.ASPX), and Adobe Cold Fusion binaries to work in an integrated web framework. The Shell also hides the complexity of the software solution from the search bar, making it much friendlier to computer security architects. The shell works with IIS, Apache, and NGINX web servers without modification and links to any database platform supported by your web server. The First release
is targeted for Mysql or Postgres Users using PHP or cPanel(Installatron or Softalicuous Users) but can be used as a standalone web page environment without them.

WHAT IS FUSIONSEHLL?<BR>
  
In General the Gsuba-fusion shell provides a Commerical Desktop Experience to web applications with support for 1080p with a minor modification. The GSuba Shell also installs PHP Driven Web solutions from Joomla, Drupal, and Worpdress out of the box allowing non-developers the ability to complete their marketing tasks on a very sophisticated platform.

We can rebuild corporate Lanscapes at Levels as low as three deep using Image Maps, combined with a Joomla datastore. The default install includes a Header and Footer File which can be customized to meet your business needs. (header.html), and (footer.html).

In the first release we are offering a fixed web platform of 1200px x Unlimited, but the system fixes the bottom bar to a corporate logo offering a much more sophisticated marketing delivery. In this release Version4, the index.html page decides on the appropriate resolution, and redirects the page to index2, or the appropriate sized window (1200,1400,1600, or Unlimited Pixel Depth). The reason is old monitors, and tablets have weird resolutions which look horrible on big landscapes without interrogation. In a corporate environment the Corporation usually makes sure some baseline is set like 1400x1080 resolution for all monitors, but this isnt true for home users who have in some cases 20 year old PCs.<BR>

INSTALL GIT OR INSTALLATRON ON YOUR SERVER<BR>
Microsoft bought github.com and its a very robust and reliable package installation utility. To install git from Linux type "apt-get install git" on Ubuntu/Debian systems or "yum install git" on Redhat/Centos7 variants. For Windows Platforms you need to install Github desktop. Just Google search for it, and it installs as an .EXE. There is also an<BR> experimental windows version of git.exe for windows machines, but it takes expert installation help. We like to simply copy git.exe to C:\windows\system32 as we think it should be there anyway.Git For Windows is also on Github and can be found by a simple search. It downloads as a zip, uncompress it and copy it into c:\windows\system32 all the DLL's are unique and wont overwrite any windows baseline code.If you install git for windows then the git clone commands as listed above are just the same with Windows except the file structure requires the drive letters or Microsoft URI formats \\HOST\directory <BR>
  
GETTING STARTED AND INSTALLATION ON A COMMERCIAL WEB ACCOUNT
  
Once you get your account installed on any cPanel or CTS Panel Plus server, you can use GIT to clone a copy of the repository to your machine.
 Example
  
 Your webroot is on the /var/www/htmldocs directory. Apache is configured to point acme.com to this directory.<BR>
  You need to type<BR>
  "git clone https://github.com/greenvilleassociates/GsubA-FusionExtranet4 /var/www/htmldocs/fusionshell"<BR> 
  and this will build the base platform. Then you need to install some code in the root to redirect to the base for example:<BR>
  "git clone https://github.com/greenvilleassociates/FusionShellBase /var/www/htmldocs/basecode" <BR>
  then copy the basecode down a level by typing <BR>
  cd /var/www/htmldocs/basecode (change to directory).... then cp *.* .. (this copies everything in the base down one level) <BR>
  
  On windows machines its from a DOS/Powershell account
  "git.exe clone https:https://github.com/greenvilleassociates/GsubA-FusionExtranet4 c:\inetpub\wwwroot\fusionshell" 
  or From Github Desktop go to the Main Menu and Clone from the Internet and it will prompt you for the destination path.... Fusionshell SHOULD BE ONE LEVEL DEEP
  on your website!!!!! It will work either way but we think you should leave yourself some flexibility for future mods.
  
INSTRUCTIONS FOR ADDING WORDPRESS LINKS

We recommend installing Wordpress in a "w" directory below the root for the Shell. Create a Mysql database and password and install wordpress from wordpress.org

INSTRUCTIONS FOR ADDING JOOMLA LINKS

We recommend installing Joomla in a "h" directory below the root for the Shell. Create a Mysql database and password and install joomla from joomla.org.

INSTRUCTIONS FOR ADDING FUSIONSHELL TO CPANEL

On Cpanel put the Shell in the root hosting account, and use Softalicious, or Installatron to install applications for the shell. Then just change the links in the header.html file to the location of your code. And Wala you are done.

EXAMPLES CAN BE FOUND ON CAPITOLTECHNOLOGY.US, AND GREENVILLEASSOCIATES.US

If you do this will allow you to maintain consistency with future releases. We have a very complicated example we are building under capitoltechnology.us which uses the same technology fully blown out if you want to see a live example.

It took a few years to make it look nice... so it looks simple but to get cross-browser support looking good is quite difficult in fact.

RELEASE2 is coming... and it will dynamically adjust the framesize we have set to 1300px's in the Index.html. Changing that feed to 1040px, or 1200px is easy to do. PLease note almost all new phones, and new PC's will support 1400x1200 resolutions or higher. Older PC's typically dont do too well with HTML in general so we have decided to make a clean break.

RELEASE3 will include an integreate Web Mobility client for Android, and for IoS which should be Q1, 2020.

Sincerely,
John S. Stritzinger
Greenville Associates Solutions
Media, Pennsylvania 19063
