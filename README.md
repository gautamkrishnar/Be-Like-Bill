# Be Like Bill [![Build Status](https://travis-ci.org/gautamkrishnar/Be-Like-Bill.svg?branch=master)](https://travis-ci.org/gautamkrishnar/Be-Like-Bill) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/0f903bf8e0814d98a38bd0223b786ea1)](https://www.codacy.com/app/rgautamkrishna/Be-Like-Bill?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=gautamkrishnar/Be-Like-Bill&amp;utm_campaign=Badge_Grade) [![Licence](https://img.shields.io/:license-gpl3-blue.svg?style=flat)](https://github.com/gautamkrishnar/Be-Like-Bill/blob/master/LICENSE)  ![Azure pipeline](https://gautamkrishnar.visualstudio.com/Be%20Like%20Bill/_apis/build/status/Be%20Like%20Bill%20-%20Release)
Be like Bill is an online platform that allows you to create your own "Be like Bill" Memes. Its really simple and easy to use. It also has an API to create and use Be like Bill memes on your website.

![Be like bill](http://i.imgur.com/1cXQOFT.jpg)

Just go to: https://www.belikebill.ga/ and create random meme with your name. If you want to use your own text, use the API.

#### Features
* Create be like Bill memes with your name
* Memes changes with user's sex
* Easy to use API for using your own customized version of Be like Bill meme on your website
* Generate Bill memes and save them to your website. The generated memes will be deleted automaticially after a specified time

### Be Like Bill API Guide
Be like bill API allows you to use your own customized version of Be like Bill memes on your website. For using Be like Bill API, you just need to call the API script by providing suitable arguments via POST. 

The API script is located at:  https://belikebill.ga/billgen-API.php

If you need to include a random meme to your website just use:

```html
<img src="https://belikebill.ga/billgen-API.php?default=1" />
```

If you need to include a random meme with your name to your website just use:


```html
<img src="https://belikebill.ga/billgen-API.php?default=1&name=yourname&sex=f" /> 
```

If you need to use your own Be like Bill meme with your own customized text just use the following:

```html
<img src="https://belikebill.ga/billgen-API.php?text=This is Bill%0D%0ABe Like Bill" />

```

You must use `%0D%0A` for newline.


##### List of options
* **default** - Set this to 1 if you need to use the predefined memes
* **name**    - Set this to your name if you need to use your name on a predefined meme. Works only if default is set to 1 
* **text**    - Use your own text in the meme.
* **sex**     - To set the gender of the character. Values are 'f' or 'm'. The default is 'm'

### Bugs
If you are experiencing any bugs feel free to open  a new issue [here](https://github.com/gautamkrishnar/Be-Like-Bill/issues/new) 

### Contributing
Feel free to make any changes. We need some more memes to make Be like Bill a lot more awesome. Edit the **memelist.php** to add more memes. Submit a new pull request with your changes.

###### TODO
- [x] Ability to use more characters other than Bill, like Della
- [ ] Add more memes

### Contributors
Special thanks to these awesome superheroes:

| Name | Bug/PR |
|--------|--------|
| [Bhawani Garg](https://github.com/BhawaniGarg) | Bug:[#2](https://github.com/gautamkrishnar/Be-Like-Bill/issues/2) PR:[#3](https://github.com/gautamkrishnar/Be-Like-Bill/pull/3) |
| [Ankit Jain](https://github.com/ankitjain28may) | PR:[#5](https://github.com/gautamkrishnar/Be-Like-Bill/pull/5) |
| [Rigin Oommen](https://github.com/riginoommen) | Bug:[#6](https://github.com/gautamkrishnar/Be-Like-Bill/issues/6) |
| [Kiong](https://github.com/tlkiong) | PR:[#7](https://github.com/gautamkrishnar/Be-Like-Bill/pull/7) |
| [Mikael Stenman](https://github.com/m1ksu) | PR:[#10](https://github.com/gautamkrishnar/Be-Like-Bill/pull/10) [#11](https://github.com/gautamkrishnar/Be-Like-Bill/pull/11) |
| [alien](https://github.com/sadboyzvone) | PR:[#12](https://github.com/gautamkrishnar/Be-Like-Bill/pull/12) |
| [Jophab](https://github.com/jophab) | PR:[#13](https://github.com/gautamkrishnar/Be-Like-Bill/pull/13) [#14](https://github.com/gautamkrishnar/Be-Like-Bill/pull/14) |
| [Esdert Folkers](https://github.com/Edsardio) | PR:[#18](https://github.com/gautamkrishnar/Be-Like-Bill/pull/18) |

### Projects
These are some of the awesome projects that use Be-Like-Bill API:
* [Be Like Willi](http://samkrieg.ch/willi/) by Sam Krieg
* [Be Like Bill Twitter Bot](https://github.com/CamTosh/Be-like-bill-bot) by [Tosh Camille](https://github.com/CamTosh)
* [Add your Project Here](mailto:r.gautamkrishna@gmail.com)

### Mentions
* Special thanks to programmableweb for including Be-Like-Bill meme on their [blog post](http://www.programmableweb.com/news/daily-api-roundup-google-consumer-surveys-be-bill-vendasta-mediamath-reckon-one/brief/2016/04/27). Be-like-bill API is now listed on [programmableweb API database](http://www.programmableweb.com/api/be-bill).
* [3456.com.ar](https://3456.com.ar//Be_Like_Bill_%28se_como_Bill%29.html)

### Download
Download the latest source code:

 <a href="https://github.com/gautamkrishnar/Be-Like-Bill/releases/latest">
 <img src="https://media.giphy.com/media/dpnBD3KRM9WsU/200.gif" height="50px" width="inherit" /></a>

### Spread the word
If you like this project, please don't forget to star this repo and spread the word.
