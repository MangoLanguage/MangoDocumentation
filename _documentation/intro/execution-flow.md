# Execution flow

Mango has a background worker which supervise child processes and allow you to start and stop serving project, 
also it supports developer mode which uses different strategy of packing the app and allows to develop your app on fly.

Once `start` was called, parent process starts to pack the application and prepare everything for serving. 
It does check syntax and other issues in the app's code and doing some optimizations.

Application subscribes to OS port on your loopback network interface (127.0.0.1) which restricts its availability from the web.
In this case you have to configure nginx and use it for static files and as a proxy server for Mango application.

Once user opened the web page, nginx detects if its a static file or forwards query to Mango application. 
The app redirects user query to Main.mg::run() and passes user request. Other logic is under developer responsibility.
