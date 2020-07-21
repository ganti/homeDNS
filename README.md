# homeDNS
Simple php script which can get triggered by router 
 
## Background
I want to access my router from everywhere, but i dont want to use DynDNS or any other service.
DynDNS services transmit a changing IP address to a static domain name to enable remote access. 

## Install
- Create a Subdomain on webhosting
- upload files into folder
- adjust .htaccess file, you may create a .htpasswd file, then only updating the IP is only possible authenticated.
- Login to your router and search for DynDNS
  - choose user defined DynDNS Provider
  - Update URL:  https://yourdomain.xxx/upd.php
  - Username and password according to .htpasswd
- Done, your router regulary updates the IP to the ip.txt file on your server

