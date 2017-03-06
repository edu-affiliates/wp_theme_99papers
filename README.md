##Theme Preview:

![Theme-Preview](https://github.com/edu-affiliates/wp_theme_99papers/blob/master/screenshot.jpg "<Sitename> preview. Essay writing service WordPress theme.")



## How to use it?

1. Download this theme as .zip (File name should be _wp_theme_99papers-master.zip_) file or clone repository. Change file name to _wp_theme_99papers.zip_. Unpack .zip if necessary. 
2. Please make sure your theme folder name is **"wp_theme_99papers"**. Rename folder if its name is different.
3. Place unzipped theme in wp-content/themes/ or download zip archive via WordPress. Activate using WordPress admin panel.
4. Add .htaccess file, if necessary.
5. Open file wp-content/themes/wp_theme_99papers/webmaster/params.php and set partner parameters. **"rid"** parameter is required, others (**"sid"**, **"dsc"**) are optional
6. With default options, front page contain list of posts (10 posts per page)

## Example of setting partner parameters


```
$rid = 1228; //required
$sid = 'subid'; //optional
$dsc = 'discount25'; //optional
$myURL = 'https://my.99papers.com' // default, required;
```

### Where can I find values of parameters?

You may find all parameters in your personal account on our affiliate program. In order to start work, a personal account shall be needed. If you have any questions, not covered in this manual you may always ask our support team, they are always here to help you [support@edu-affiliates.com](mailto:support@edu-affiliates.com)


### Parameter explanation

- **rid** - is your main identifier in the partnership program. You may find it in your profile or in any affiliate link.
- **sid** - stands for Sub ID - optional parameter, it's up to you whether to use it or not. It helps you to track the sources of traffic, conversion rates, create groups of traffic, etc. You may use any numbers or letters for sid.
- **dsc** - is for the transfer of your personal discount coupon. All information on generation of discount coupons may be found in your personal account on the affiliate program or ask the support.

## Also...

You can use links like:

* /order.html?dsc=discount25&sid=subid
* /order.html?dsc=discount25
* /order.html?sid=subid
* /inquiry.html?dsc=discount25&sid=subid
* /inquiry.html?dsc=discount25
* /inquiry.html?sid=subid

where: 
- **discount25** - discount coupon, 
- **subid** - identifier for traffic way

but if you set **dsc** or **sid** at the _params.php_, they rewrite params from custom links at the redirect moment. 
So, if you want to use custom links (/order.html?dsc=discount25&sid=subid) don't set **dsc**/**sid** or both at _params.php_
