# Be Like Bill [![Build Status](https://travis-ci.org/gautamkrishnar/Be-Like-Bill.svg?branch=master)](https://travis-ci.org/gautamkrishnar/Be-Like-Bill) [![Code Triagers Badge](http://www.codetriage.com/gautamkrishnar/be-like-bill/badges/users.svg)](http://www.codetriage.com/gautamkrishnar/be-like-bill) [![Licence](https://img.shields.io/:license-gpl3-blue.svg?style=flat)](https://github.com/gautamkrishnar/Be-Like-Bill/blob/master/LICENSE) 
Be like Bill is an online platform that allows you to create your own "Be like Bill" Memes. Its really simple and easy to use. It also has an API to create and use Be like Bill memes on your website.

![Be like bill](http://i.imgur.com/1cXQOFT.jpg)

Just go to: http://belikebill.azurewebsites.net/ and create random meme with your name. If you want to use your own text, use the API.

#### Features
* Create be like Bill memes with your name
* Memes changes with user's sex
* Easy to use API for using your own customized version of Be like Bill meme on your website
* Generate Bill memes and save them to your website. The generated memes will be deleted automaticially after a specified time

### Be Like Bill API Guide
Be like bill API allows you to use your own customized version of Be like Bill memes on your website. For using Be like Bill API, you just need to call the API script by providing suitable arguments via POST. 

The API script is located at:  http://belikebill.azurewebsites.net/billgen-API.php

If you need to include a random meme to your website just use:

```html
<img src="http://belikebill.azurewebsites.net/billgen-API.php?default=1" />
```

If you need to include a random meme with your name to your website just use:


```html
<img src="http://belikebill.azurewebsites.net/billgen-API.php?default=1&name=yourname" /> 
```

If you need to use your own Be like Bill meme with your oen customized text just use the following:

```html
<img src="http://belikebill.azurewebsites.net/billgen-API.php?text=This is Bill%0D%0ABe Like Bill" />

```

You must use `%0D%0A` for newine.


##### List of options
* **default** - Set this to 1 if you need to use the predefined memes
* **name**    - Set this to your name if you need to use your name on a predefined meme. Works only if default is set to 1 
* **text**    - Use your own text in the meme.

### Bugs
If you are experiencing any bugs feel free to open  a new issue [here](https://github.com/gautamkrishnar/Be-Like-Bill/issues/new) 

### Contributing
Feel free to make any changes. We need some more memes to make Be like Bill a lot more awesome. Edit the **memelist.php** to add more memes. Submit a new pull request with your changes.

###### TODO
- [ ] Ability to use more characters other than Bill, like Della
- [ ] Add more memes

### Contributors
* [Bhawani Garg](https://github.com/BhawaniGarg) : Bug:[#2](https://github.com/gautamkrishnar/Be-Like-Bill/issues/2) PR:[#3](https://github.com/gautamkrishnar/Be-Like-Bill/pull/3)
* [Ankit Jain](https://github.com/ankitjain28may) : PR:[#5](https://github.com/gautamkrishnar/Be-Like-Bill/pull/5)

### Projects
These are some of the awesome projects that use Be-Like-Bill API:
* [Be Like Willi](http://samkrieg.ch/willi/) by Sam Krieg
* [Be Like Bill Twitter Bot](https://github.com/CamTosh/Be-like-bill-bot) by [Tosh Camille](https://github.com/CamTosh)

### Download
Download the latest source code:

 <a href="https://github.com/gautamkrishnar/Be-Like-Bill/releases/latest">
 <img src="http://scubarkada.com/tpl/design1/download-button-blue-300x133.png" height="50px" width="inherit" /></a>

### Spread the word
If you liked this project, please dont forget to star this repo and spread the word.
