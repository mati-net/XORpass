<p align="center">
<img src="https://i.imgur.com/iqe1grK.png" width="600" height="200" >
</p>

[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwyl/esta/issues)

XORpass is an encoder to bypass WAF filters using XOR calculations.

### Installation & Usage
```
git clone https://github.com/devploit/XORpass
cd XORpass

$ php encode.php STRING
$ php decode.php "XORed STRING"
```

### Example of bypass:
Using clear PHP function:
<img src="https://i.imgur.com/qMhGrCA.png" width="800" height="200">

Using XOR bypass of that function:
```bash
$ php encode.php system # return A
$ php encode.php ls # return B

payload == A(B)
```
<img src="https://i.imgur.com/iLF2rg7.png" width="800" height="200">

### Contact
Telegram: @devploit

Twitter: https://www.twitter.com/devploit
