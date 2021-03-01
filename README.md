<p align="center">
    <img src="https://img.shields.io/badge/Laravel-%5E7.0-ff69b4"/>
    <img src="https://img.shields.io/badge/Sass-%5E1.32.6-ff69b4"/>
    <img src="https://img.shields.io/badge/Vue.js-%5E2.6.12-orange"/>
    <img src="https://img.shields.io/badge/Axios-%5E0.21.1-orange" />
</p>

<h1 align="center">
    AnnalisaCecchini | Portfolio Full Stack - CRUD Laravel
</h1>

<p align="center">
  My personal Full Stack Portfolio, developed in Laravel 7 PHP Framework. 
</p>

<p align="center">
  <img src="https://imagizer.imageshack.com/img924/9709/TdQQRB.png" />
</p>

### :fire: Features
--------

Here are the needs I considered, before starting the development process:
1. I needed a **professional Portfolio** website, that conveyed my seriousness and competence
2. **Contact form** was mandatory, so that users could get in touch with me through the site
3. **Admin Area** was a requirement too, to have a protected area in which to access and manage all messages received

### :pushpin: Design Process
--------

* I started by trying out different **color palettes**, paying attention to color blending and relative contrasts on the screen  
* In **AdobeXD**, I designed prototypes (both mobile and desktop)  
* I focused on **UX / UI Design**, setting up **clear CTAs** (Call To Action), uniforming colors for action, and color for no-action to drive the user to the 'correct' choice  
* Finally, I started **developing code**  

<p align="center">
  <img src="https://imagizer.imageshack.com/img922/9760/EoFSwX.png" alt="adobe-xd" width="400" />
</p>

### :pencil2: CSS (SASS) and BEM Methodology
--------

All CSS is coded in SASS / Scss, classes are organized by following **BEM Methodology** (Block, Element and Modifier), which benefits are to keep code well organized focusing on **modularity**, **reusability** and **structure**.

### :mailbox_with_mail: Contact Form built in Laravel Eloquent CRUD
--------

The contact form was built in **Laravel Eloquent**, to allow, at the same time, the **maximum usability for the user**, and the complete management of all forms received in the MySql database by the Admin. In **terms of UX**, errors in compiling form are displayed closed to every single input. I used labels instead of placeholders for ease of reading.

<p align="center">
  <img src="https://imagizer.imageshack.com/img924/3114/7ubN6Y.png" alt="contact-form" width="400" />
</p>


### :closed_lock_with_key: Admin Area
--------

As website administrator, it is possible to access the **protected area**, to view and manage messages received in the MySql DB via the Contact Form. Admin area is protected by **Middleware Auth** with double check on specified Admin user logged.

<p align="center">
  <img src="https://imagizer.imageshack.com/img923/5505/e5iA63.png" alt="contact-form" width="400" />
</p>

### :mag: AXIOS API call to MySql DB
--------

Admin area is served by **Axios API call to MySql DB**. A **Vue.Js 'v-for'** loops throught the table to reach the contents, and display them on the private desktop.


### :triangular_ruler: Reponsive
----------

The layout is totally responsive, it fits all screens of different devices automatically to display content, in a way that **user feels comfortable**.

### :iphone: Mobile-first
----------

The layout is Mobile-Fist Designed, I started the website production **from the mobile end**, which has more restrictions. Then, expanding its features.

###  :heavy_exclamation_mark: :speech_balloon: Get in Touch  :heavy_exclamation_mark:
----------

:arrow_forward: Visit my website [annalisacecchini.com](https://annalisacecchini.com)  
:arrow_forward: Download [my Resume](https://annalisacecchini.com/downloads)  
:arrow_forward: Send me an e-mail at [annalisacecchini.dev@gmail.com](mailTo:annalisacecchini.dev@gmail.com)  

&copy; Annalisa Cecchini - 2021