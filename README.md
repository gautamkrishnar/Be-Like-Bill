# Be Like Bill
Be like Bill is an online platform that allows you to create your own "Be like Bill" Memes. Its really simple and easy to use. It also has an API to create and use Be like Bill memes on your website.

![Be like bill](http://i.imgur.com/1cXQOFT.jpg)

Just go to: http://belikebill.azurewebsites.net/ and create random meme with your name. If you want to use your own text, use the API.

#### Features
* Create be like bill memes with your name
* Memes changes with user's sex
* Easy to use API for using your own customized version of Be like Bill meme on your website

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
* **text **   - Use your own text in the meme.

### Bugs
If you are experiencing any bugs feel free to open  a new issue [here](https://github.com/gautamkrishnar/Be-Like-Bill/issues/new) 

### Contributing
Feel free to make any changes. We need some more memes to make Be like Bill a lot more awesome. Edit the **billgen-API.php** and **billgen.php** to add more memes. Submit a new pull request with your changes.

###### TODO
- [ ] Ability to use more characters other than Bill, like Della
- [ ] Add more memes

### Contributors
Your name will be listed here....

### Spread the word
If you liked this project, please dont forget to star this repo and spread the word.
