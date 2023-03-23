# F3 Framework App and Boilerplate
## Fat-free framework or shortly called F3 framework is awesome

I have used [F3 framework](https://fatfreeframework.com/) over the years on freelancing projects and on my own projects and I have to tell you: it's a great framework. It's a lightweight, minimalistic framework. Does not come with thousands of files that you rarely or never use like most frameworks. F3 is suitable if you like the freedom to choose how to organize your app structure. It's good for rapid web development of small, medium and large projects. May not be suitable for enterprise projects but you can never know unless you give it a try.

In this repository I demonstrate how the F3 framework works via a demo app. Take your time to view and analyze the code in `public/index.php` and other files. You can use this boilerplate to develop an app powered by F3 on your own. For more info read the [F3 framework documentation](https://fatfreeframework.com/3.8/user-guide), it's all there. They provide good examples.

Pages `Home` and `About` have Lorem Ipsum text, page `Contact` has a contact form. No email gets sent, you can safely click the Send button. On page `Customers` you can see the data pulled from database and displayed on the page.

In a real world F3 app, index.php along with .css, .js, images, font files would be in the public folder of your web hosting (in this repository this is represented by the folder `public`), while the rest of the files would be outside the public folder. This is a security measure to prevent visitors from accessing these files directly.

![Homepage](https://i.imgur.com/5Qq0C88.jpg)
![About](https://i.imgur.com/LlVCvBJ.jpg)
![Contact](https://i.imgur.com/3BJjpxk.jpg)
![Customers](https://i.imgur.com/hNQpbqR.jpg)


### Installation and running
Run

`composer install`

to install the F3 framework files.

Create a database and import the `data/customers.sql` file in your database. This will create a table called `customers` and insert some dummy data. This data is from the repository [W3Schools Database](https://github.com/AndrejPHP/w3schools-database)

Rename `.env.example` to `.env` and enter your database credentials.

While in root directory of the project, open a terminal and run this command to start a PHP server

`php -S localhost:8000 -t public/`

Now you should be able to open the app in browser via `http://localhost:8000` and see the home page. 

In production mode set `DEBUG=0` in `app/config/config.ini` to prevent errors leaking to the public.
